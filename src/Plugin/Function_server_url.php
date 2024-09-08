<?php

use Difference\Fun\Module\Parse;
use Difference\Fun\Module\Data;
use Difference\Fun\Config;

/**
 * @throws Exception
 */
function function_server_url(Parse $parse, Data $data, $name=''){
    $object = $parse->object();
    $name = str_replace('.', '-', $name);
    $url = $object->config('server.url.' . $name . '.' . $object->config('framework.environment'));
    if(
        $url &&
        substr($url, 0, -1) !== '/'
    ){
        $url .= '/';
    }
    return $url;
}
