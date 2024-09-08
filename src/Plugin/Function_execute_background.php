<?php
/**
 * @author          Remco van der Velde
 * @since           2020-09-14
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
 * @throws \Difference\Fun\Exception\ObjectException
 */
function function_execute_background(Parse $parse, Data $data, $command=''){
    $command = (string) $command;
    $command = escapeshellcmd($command);
    if(substr($command, 0, -1) !== '&'){
        $command .= ' &';
    }
//    Core::execute($parse->object(), $command, $output, $notification, Core::SHELL_PROCESS);
    exec($command);
}
