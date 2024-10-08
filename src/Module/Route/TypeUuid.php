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

class TypeUuid {

    public static function validate(App $object, $string=''): bool
    {
        //format: %s%s-%s-%s-%s-%s%s%s
        if(strlen($string) !== 36){
            return false;
        }
        $explode = explode('-', $string);
        if (count($explode) !== 5) {
            return false;
        }
        if (strlen($explode[0]) !== 8) {
            return false;
        }
        if (strlen($explode[1]) !== 4) {
            return false;
        }
        if (strlen($explode[2]) !== 4) {
            return false;
        }
        if (strlen($explode[3]) !== 4) {
            return false;
        }
        if (strlen($explode[4]) !== 12) {
            return false;
        }
        return true;
    }

}