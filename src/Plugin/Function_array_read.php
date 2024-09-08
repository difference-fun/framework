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
use Difference\Fun\Module\File;
use Difference\Fun\Module\Core;

function function_array_read(Parse $parse, Data $data, $url=''){
    if(File::exist($url)){
        $read = File::read($url);
        $read = Core::object($read, Core::OBJECT_ARRAY);
        return $read;
    } else {
        throw new Exception('Error: url:' . $url . ' not found');
    }
}
