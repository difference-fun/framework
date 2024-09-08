<?php
/**
 * @author          Remco van der Velde
 * @since           2020-09-15
 * @copyright       Remco van der Velde
 * @license         MIT
 * @version         1.0
 * @changeLog
 *     -            all
 */
use Difference\Fun\Module\Parse;
use Difference\Fun\Module\Data;

function function_string_position_first_occurrence_case_insensitive(Parse $parse, Data $data, $haystack='', $needle='', $offset=0){
    $result = stripos($haystack, $needle, $offset);
    return $result;
}
