<?php

use Difference\Fun\Module\Parse;
use Difference\Fun\Module\Data;
use Difference\Fun\Module\Filter;

function function_data_filter(Parse $parse, Data $data, $list, $where=[]){
    return Filter::list($list)->where($where);
}
