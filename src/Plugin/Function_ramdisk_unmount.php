<?php
/**
 * @author          Remco van der Velde
 * @since           2020-09-13
 * @copyright       Remco van der Velde
 * @license         MIT
 * @version         1.0
 * @changeLog
 *     -            all
 */
use Difference\Fun\Module\Parse;
use Difference\Fun\Module\Data;
use Difference\Fun\Module\Dir;
use Difference\Fun\Module\Core;

/**
 * @throws Exception
 */
function function_ramdisk_unmount(Parse $parse, Data $data, $url=''){
    $object = $parse->object();
    $object->config('ramdisk.is.disabled', true);
    $id = posix_geteuid();
    if (!empty($id)){
        throw new Exception('RamDisk can only be unmounted by root...');
    }
    $url = $object->config('ramdisk.url');
    if($url){
        $command = 'umount ' . $url;
        Core::execute($object, $command);
        Dir::remove($url);
        //property unset of name && url of ramdisk
        $command = Core::binary($object) .
            ' difference_fun/node unset -class=System.Config.Ramdisk -uuid=' .
            $object->config('ramdisk.uuid') .
            ' -name -url'
        ;
        echo $command . PHP_EOL;
        Core::execute($object, $command);
    }
    echo 'RamDisk successfully unmounted...' . PHP_EOL;
}
