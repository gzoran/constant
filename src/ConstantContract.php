<?php
/**
 * Created by Mike.
 * User: Mike
 * Date: 2018/8/3
 * Time: 11:43
 */

namespace Gzoran\Constant;

interface ConstantContract {

    /**
     * @author Mike <zhengzhe94@gmail.com>
     * @return array
     */
    public static function mapping();

    /**
     * @author Mike <zhengzhe94@gmail.com>
     * @param $code
     * @return string
     */
    public static function name($code);

    /**
     * @author Mike <zhengzhe94@gmail.com>
     * @param $code
     * @return bool
     */
    public static function isExist($code);
}
