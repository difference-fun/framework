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
use Difference\Fun\Module\Core;

/**
 * @throws Exception
 */
function function_binary(Parse $parse, Data $data, $fallback=null){
   $object = $parse->object();
   return Core::binary($object) ?? $fallback;
}
