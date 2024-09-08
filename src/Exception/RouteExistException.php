<?php
/**
 * @author          Remco van der Velde
 * @since           10-02-2021
 * @copyright       (c) Remco van der Velde
 * @license         MIT
 * @version         1.0
 * @changeLog
 *  -    all
 */
namespace Difference\Fun\Exception;

use Difference\Fun\App;
use Difference\Fun\Module\File;
use Difference\Fun\Module\Parse;

use Throwable;

use Exception;

class RouteExistException extends Exception {

    const MESSAGE = 'Route resource already exists...';

}
