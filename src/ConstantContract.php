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

interface ConstantContract
{
    /**
     * @author Mike <zhengzhe94@gmail.com>
     *
     * @return array
     */
    public static function mapping();

    /**
     * @author Mike <zhengzhe94@gmail.com>
     *
     * @param $code
     *
     * @return string
     */
    public static function name($code);

    /**
     * @author Mike <zhengzhe94@gmail.com>
     *
     * @param $code
     *
     * @return bool
     */
    public static function isExist($code);
}
