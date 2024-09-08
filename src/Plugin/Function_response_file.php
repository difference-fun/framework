<?php

use Difference\Fun\Module\Parse;
use Difference\Fun\Module\Data;


function function_response_file(Parse $parse, Data $data){
    $object = $parse->object();
    $object->config('response.output', 'file');
}
