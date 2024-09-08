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
use Difference\Fun\Module\File;
use Difference\Fun\Module\Core;
use Difference\Fun\Exception\ObjectException;

function function_parse_select(Parse $parse, Data $data, $url='', $select='', $scope='scope:object'){
    return Core::object_select($parse, $data, $url, $select, true, $scope);
}
