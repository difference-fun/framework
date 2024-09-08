<?php
/**
 * @author          Remco van der Velde
 * @since           2023-02-03
 * @copyright       Remco van der Velde
 * @license         MIT
 * @version         1.0
 * @changeLog
 *     -            all
 */
use Difference\Fun\Module\Parse;
use Difference\Fun\Module\Data;

function function_options(Parse $parse, Data $data){
    $object = $parse->object();
    return $object->options($object);
}
