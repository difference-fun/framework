<?php
/**
 * @author          Remco van der Velde
 * @since           2019-10-27
 * @version         1.0
 * @license         MIT
 * @changeLog
 *     -    all
 */

use Difference\Fun\App;
use Difference\Fun\Config;

use Difference\Fun\Exception\LocateException;
use Difference\Fun\Exception\ObjectException;

$dir = __DIR__;
$dir_vendor =
    dirname($dir, 1) .
    DIRECTORY_SEPARATOR .
    'vendor' .
    DIRECTORY_SEPARATOR;

$autoload = $dir_vendor . 'autoload.php';
$autoload = require $autoload;

try {
    $config = new Config(
        [
            'dir.vendor' => $dir_vendor,
            'time.start' => microtime(true),
        ]
    );
    $app = new App($autoload, $config);
    $result = App::run($app);
    if(is_scalar($result)){
        echo $result;
    }
    elseif(is_array($result)){
        echo implode(PHP_EOL, $result);
    }
} catch (Exception | LocateException | ObjectException $e) {
    echo $e;
}
