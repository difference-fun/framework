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

/**
 * @throws \Difference\Fun\Exception\ObjectException
 * @throws \Difference\Fun\Exception\FileWriteException
 */
function function_object_select(Parse $parse, Data $data, $url, $select=null, $compile=false, $scope='scope:object'){
    return Core::object_select($parse, $data, $url, $select, $compile, $scope);
}
