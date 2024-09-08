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
namespace Difference\Fun\Cli\Init\Controller;

use Difference\Fun\App;

use Difference\Fun\Module\Controller;
use Difference\Fun\Module\Event;

use Exception;

use Difference\Fun\Exception\ObjectException;

class   Init extends Controller {
    const DIR = __DIR__;
    const NAME = 'Init';
    const INFO = '{{binary()}} init                           | Init events with flags / options';

    /**
     * @throws ObjectException
     * @throws Exception
     */
    public static function run(App $object): void
    {
        Event::trigger($object, 'cli.init.run', [
            'flags' => App::flags($object),
            'options' => App::options($object)
        ]);
    }
}