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
namespace Difference\Fun\Cli\Zip\Controller;

use Difference\Fun\App;
use Difference\Fun\Exception\ObjectException;
use Difference\Fun\Module\Controller;

use Exception;

use Difference\Fun\Exception\LocateException;
use Difference\Fun\Exception\UrlEmptyException;
use Difference\Fun\Exception\UrlNotExistException;
use Difference\Fun\Module\Event;

class Zip extends Controller {
    const DIR = __DIR__;
    const NAME = 'Zip';
    const INFO = [
        '{{binary()}} zip archive <source> <dest...> | Create a zip archive in <destination> from <source>',
        '{{binary()}} zip extract <source> <dest...> | Extract a zip archive in <destination> from <source>',
    ];
    const COMMAND = [
        'archive',
        'extract'
    ];

    /**
     * @throws ObjectException
     */
    public static function run(App $object){
        $command = false;
        $name = false;
        $url = false;
        try {
            $command = App::parameter($object, 'zip', 1);
            if($object->config('logger.default.name')){
                $object->logger($object->config('logger.default.name'))->info('Command: . ' . $command);
            }
            if(
                in_array(
                    $command,
                    Zip::COMMAND,
                    true
                )
            ) {
                $name = Zip::name($command, Zip::NAME);
                $url = Zip::locate($object, $name);
                $response = Zip::response($object, $url);
                Event::trigger($object, 'cli.' . strtolower(Zip::NAME) . '.' . $command, [
                    'name' => $name,
                    'url' => $url,
                ]);
                return $response;
            }
            throw new Exception('Command undefined.' . PHP_EOL);
        } catch(Exception | LocateException | UrlEmptyException | UrlNotExistException $exception){
            Event::trigger($object, 'cli.' . strtolower(Zip::NAME) . '.' . __FUNCTION__, [
                'name' => $name,
                'url' => $url,
                'command' => $command,
                'exception' => $exception
            ]);
            return $exception;
        }
    }
}