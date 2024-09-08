<?php

use Difference\Fun\Module\Parse;
use Difference\Fun\Module\Data;
use Difference\Fun\Module\Limit;

function function_data_limit(Parse $parse, Data $data, $list, $limit=[]){
    return Limit::list($list)->with($limit);
}
