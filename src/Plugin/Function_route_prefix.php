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

use Difference\Fun\Config;
use Difference\Fun\Module\Parse;
use Difference\Fun\Module\Data;

function function_route_prefix(Parse $parse, Data $data, $prefix=null){
    $object = $parse->object();
    if($prefix !== null){
        $object->config(Config::DATA_ROUTE_PREFIX, $prefix);
    }
    return $object->config(Config::DATA_ROUTE_PREFIX);
}
