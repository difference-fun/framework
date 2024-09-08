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

function modifier_default(Parse $parse, Data $data, $value, $default=null){
    if(empty($value)){
        return $default;
    }
    return $value;
}
