<?php
/**
 * @author          Remco van der Velde
 * @since           04-01-2019
 * @copyright       (c) Remco van der Velde
 * @license         MIT
 * @version         1.0
 * @changeLog
 *  -    all
 */
namespace Difference\Fun\Cli\Ln\Controller;

use Difference\Fun\App;
use Difference\Fun\Exception\ObjectException;
use Difference\Fun\Module\Controller;
use Difference\Fun\Module\Event;

use Exception;

use Difference\Fun\Exception\LocateException;
use Difference\Fun\Exception\UrlEmptyException;
use Difference\Fun\Exception\UrlNotExistException;

class Ln extends Controller {
    const DIR = __DIR__;
    const NAME = 'Ln';
    const INFO = '{{binary()}} ln                             | ln creates a symlink if it does not exist';

    /**
     * @throws ObjectException
     */
    public static function run(App $object){
        $name = false;
        $url = false;
        try {
            $name = Ln::name(__FUNCTION__    , Ln::NAME);
            $url = Ln::locate($object, $name);
            $response = Ln::response($object, $url);
            Event::trigger($object, 'cli.' . strtolower(Ln::NAME) . '.' . __FUNCTION__, [
                'name' => $name,
                'url' => $url,
            ]);
            return $response;
        } catch(Exception | LocateException | UrlEmptyException | UrlNotExistException $exception){
            Event::trigger($object, 'cli.' . strtolower(Ln::NAME) . '.' . __FUNCTION__, [
                'name' => $name,
                'url' => $url,
                'exception' => $exception
            ]);
            return $exception;
        }
    }
}