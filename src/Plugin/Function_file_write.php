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

function function_file_write(Parse $parse, Data $data, $url='', $content=''){
    try {
        return File::write($url, $content);
    } catch (Exception $e){
        return false;
    }
}
