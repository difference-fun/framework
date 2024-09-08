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

use Difference\Fun\Module\Core;
use Difference\Fun\Module\Parse;
use Difference\Fun\Module\Data;

function modifier_uppercase_first_sentence(Parse $parse, Data $data, $value, $delimiter='.'){
    return Core::ucfirst_sentence($value, $delimiter);
}
