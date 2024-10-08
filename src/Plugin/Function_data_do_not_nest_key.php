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

function function_data_do_not_nest_key(Parse $parse, Data $data, $do_not_nest_key=true){
    $data->do_not_nest_key($do_not_nest_key);
}
