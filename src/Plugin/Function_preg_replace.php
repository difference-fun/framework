<?php
/**
 * @author          Remco van der Velde
 * @since           2020-09-24
 * @copyright       Remco van der Velde
 * @license         MIT
 * @version         1.0
 * @changeLog
 *     -            all
 */
use Difference\Fun\Module\Parse;
use Difference\Fun\Module\Data;

function function_preg_replace(Parse $parse, Data $data, $pattern=null, $replacement=null, $subject=null, $limit=-1, $count=null){
    if($count !== null){
        if(substr($count, 0, 1) == '$'){
            $count = substr($count, 1);
        }
        $counter = 0;
        $result = preg_replace($pattern, $replacement, $subject, $limit, $counter);
        $data->data($count, $counter);
    }
    elseif($limit != -1){
        $result = preg_replace($pattern, $replacement, $subject, $limit);
    } else {
        $result = preg_replace($pattern, $replacement, $subject);
    }
    return $result;
}
