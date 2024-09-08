<?php

use Difference\Fun\Module\Parse;
use Difference\Fun\Module\Data;
use Difference\Fun\Module\Sort;

function function_data_sort(Parse $parse, Data $data, $list, $sort=[], $options=[]){
    return Sort::list($list)->with($sort, $options);
}
