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

class DemoConstant extends ConstantAbstract
{
    /**
     * 已禁用.
     *
     * @var int
     */
    const DISABLE = 0;

    /**
     * 已激活.
     */
    const ACTIVE = 1;

    /**
     * @author Mike <zhengzhe94@gmail.com>
     *
     * @return array
     */
    public static function mapping()
    {
        return [
            self::DISABLE => '已禁用',
            self::ACTIVE => '已激活',
        ];
    }
}
