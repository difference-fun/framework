    <?php
/**
 * @author          Remco van der Velde
 * @since           2020-09-19
 * @copyright       Remco van der Velde
 * @license         MIT
 * @version         1.0
 * @changeLog
 *     -            all
 */
use Difference\Fun\Module\Parse;
use Difference\Fun\Module\Data;

function function_array_shift(Parse $parse, Data $data, $selector=''){
    if(substr($selector, 0, 1) == '$'){
        $selector = substr($selector, 1);
    }
    $array = $data->data($selector);
    $result = array_shift($array);
    $data->data($selector, $array);
    return $result;
}
