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

function modifier_json_decode(Parse $parse, Data $data, $value, $associative=false, $depth=512, $flags=0){
    if(is_string($flags)){
        $flags = constant($flags);
    }
    return json_decode($value, $associative, $depth, $flags);
}
