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

use Difference\Fun\App;
use Difference\Fun\Module\Parse;
use Difference\Fun\Module\Data;

function function_autoload_prefix_add(Parse $parse, Data $data, $prefix='',$directory='', $extension=''){
    $object = $parse->object();
    $autoload = $object->data(App::AUTOLOAD_R3M);
    $autoload->addPrefix($prefix, $directory, $extension);
}
