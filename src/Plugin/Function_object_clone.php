<?php
/**
 * @author          Remco van der Velde
 * @since           2020-09-18
 * @copyright       Remco van der Velde
 * @license         MIT
 * @version         1.0
 * @changeLog
 *     -            all
 */
use Difference\Fun\Module\Core;
use Difference\Fun\Module\Parse;
use Difference\Fun\Module\Data;

function function_object_clone(Parse $parse, Data $data, $object=''){
    $object= Core::deep_clone($object);
    return $object;
}
