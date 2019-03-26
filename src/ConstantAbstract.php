<?php

/*
 * This file is part of the gzoran/constant.
 *
 * (c) gzoran <zhengzhe94@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Gzoran\Constant;

use Gzoran\Constant\Exceptions\InvalidArgumentException;

/**
 * Class ConstantAbstract.
 */
abstract class ConstantAbstract implements ConstantContract
{
    /**
     * @author Mike <zhengzhe94@gmail.com>
     *
     * @param $code
     *
     * @return string
     *
     * @throws InvalidArgumentException
     */
    public static function name($code)
    {
        if (!static::isExist($code)) {
            throw new InvalidArgumentException('Invalid code: '.$code);
        }

        return static::mapping()[$code];
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     *
     * @param $code
     *
     * @return bool
     */
    public static function isExist($code)
    {
        return array_key_exists($code, static::mapping());
    }
}
