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

/**
 * @throws \Difference\Fun\Exception\ObjectException
 */
function modifier_array(Parse $parse, Data $data, $value){
    return Core::object($value, Core::OBJECT_ARRAY);
}
