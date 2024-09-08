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
use stdClass;
use Difference\Fun\Module\Parse;
use Difference\Fun\Module\Data;
use Difference\Fun\Module\Handler;


function function_header(Parse $parse, Data $data, $string='', $http_response_code=null, $replace=true){
	Handler::header($string, $http_response_code, $replace);
}
