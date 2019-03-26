<?php
/**
 * Created by Mike.
 * User: Mike
 * Date: 2018/8/21
 * Time: 11:10
 */

namespace Gzoran\Constant;


use Gzoran\Constant\Exceptions\InvalidArgumentException;

/**
 * Class ConstantAbstract
 * @package Gzoran\Constant
 */
abstract class ConstantAbstract implements ConstantContract
{
    /**
     * @author Mike <zhengzhe94@gmail.com>
     * @param $code
     * @return string
     * @throws InvalidArgumentException
     */
    public static function name($code)
    {
        if (! static::isExist($code)) {
            throw new InvalidArgumentException('Invalid code: ' . $code);
        }

        return static::mapping()[$code];
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     * @param $code
     * @return bool
     */
    public static function isExist($code)
    {
        return array_key_exists($code, static::mapping());
    }
}
