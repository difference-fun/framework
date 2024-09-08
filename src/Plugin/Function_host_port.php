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
use stdClass;
use Difference\Fun\Module\Parse;
use Difference\Fun\Module\Data;
use Difference\Fun\Module\Host;


function function_host_port(Parse $parse, Data $data, $host=''){
    return Host::port($host);
}
