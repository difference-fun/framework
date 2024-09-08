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
use Difference\Fun\Module\Core;
use Difference\Fun\Module\File;


/**
 * @throws \Difference\Fun\Exception\ObjectException
 * @throws \Difference\Fun\Exception\FileWriteException
 */
function function_data_write(Parse $parse, Data $data, $url='', $write=false, $output='json'){
    $write = Core::object($write, $output);
    $bytes = File::write($url, $write);    
    return null;
}
