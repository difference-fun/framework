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

/**
 * @throws Exception
 */
function function_file_permission(Parse $parse, Data $data, $list=[]){
    $object = $parse->object();
    File::permission($object, $list);
}
