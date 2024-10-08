<?php
/**
 * @author          Remco van der Velde
 * @since           03-08-2022
 * @copyright       (c) Remco van der Velde
 * @license         MIT
 * @version         1.0
 * @changeLog
 *  -    all
 */

namespace Difference\Fun\Module\Route;

use Difference\Fun\App;

class TypeFloat {

    public static function validate(App $object, $string=''): bool
    {
        if(empty($string)){
            return false;
        }
        if(is_numeric($string)){
            $value = $string + 0;
            if(is_float($value)){
                return true;
            }
        }
        return false;
    }

    public static function cast(App $object, $string=''){
        return $string + 0;
    }
}