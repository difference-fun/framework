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

use Exception;

class ObjectException extends Exception {


    public function __toString()
    {
        $string = parent::__toString();
        $string .= PHP_EOL;
        $string .= $this->getMessage();

        $string .= PHP_EOL;
        return $string;
    }

}
