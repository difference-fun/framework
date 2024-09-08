<?php

use Difference\Fun\App;
use Difference\Fun\Module\Parse;
use Difference\Fun\Module\Data;
use Difference\Fun\Module\Route;

function function_route_export(Parse $parse, Data $data){
    $object = $parse->object();
    $route = $object->data(App::ROUTE);
    $list = $route->data();
    $result = [];
    foreach($list as $nr => $record){
        $result[$nr] = Route::controller($record);
    }
    return $result;
}
