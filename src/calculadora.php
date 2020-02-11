<?php 

/**
 * Doc comment short description: ejercicio de despliegue
 * 
 * PHP version 7.4
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category  Calculadora
 * @package   Calculadora
 * @author    Mikellf <mikellf2000@hotmail.com>
 * @copyright 2020 Arista Web Studio
 * @license   http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link      http://pear.php.net/package/PackageName
 */


/**
 * Short description for class
 *
 * @category  Calculadora
 * @package   Calculadora
 * @author    Mikellf <mikellf2000@hotmail.com>
 * @copyright 2020 Arista Web Studio
 * @license   http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link      http://pear.php.net/package/PackageName
 */

class Calculadora
{
    /**
     * Doc comment for function sumar.
     * 
     * @param $num1 sumando
     * @param $num2 sumando
     * 
     * @return $resultado
     */
    function sumar($num1, $num2) 
    {
        $resultado = $num1+$num2;
        return $resultado;
    }

    /**
     * Doc comment for function restar.
     * 
     * @param $num1 sustraendo
     * @param $num2 sustraendo
     * 
     * @return $resultado
     */
    function restar($num1, $num2) 
    {
        $resultado = $num1-$num2;
        return $resultado;
    }


}


?>
