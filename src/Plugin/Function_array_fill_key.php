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
use Difference\Fun\Module\Parse;
use Difference\Fun\Module\Data;

function function_array_fill(Parse $parse, Data $data, $start_index=0, $entries=1, $value=''){
    $result = array_fill($start_index, $entries, $value);
    return $result;
}
