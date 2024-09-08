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

function function_data_read(Parse $parse, Data $data, $url=''){
    if(File::exist($url)){
        $mtime = File::mtime($url);
        $object = $parse->object();
        $require_disabled = $object->config('require.disabled');
        if($require_disabled){
            //nothing
        } else {
            $require_url = $object->config('require.url');
            $require_mtime = $object->config('require.mtime');
            if(empty($require_url)){
                $require_url = [];
                $require_mtime = [];
            }
            if(
                !in_array(
                    $url,
                    $require_url,
                    true
                )
            ){
                $require_url[] = $url;
                $require_mtime[] = $mtime;
                $object->config('require.url', $require_url);
                $object->config('require.mtime', $require_mtime);
            }
        }
        $read = File::read($url);
        $read = Core::object($read);
        $data->data(Core::object_merge($data->data(), $read));
        return $read;
    } else {
        throw new Exception('Error: url:' . $url . ' not found');
    }
}
