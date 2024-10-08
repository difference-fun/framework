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

function modifier_trim_right(Parse $parse, Data $data, $value, $chars=''){
    if(empty($chars)){
        return rtrim($value);
    }
    return rtrim($value, $chars);
}
