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

use Difference\Fun\Module\Core;
use Difference\Fun\Module\Parse;
use Difference\Fun\Module\Data;

use Difference\Fun\Exception\UrlEmptyException;

function function_redirect(Parse $parse, Data $data, $url=null): ?string{
    try {
        Core::redirect($url);
    } catch(Exception | UrlEmptyException $exception){
        return $exception->getMessage();
    }
    return null;
}
