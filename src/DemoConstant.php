<?php
/**
 * Created by Mike.
 * User: Mike
 * Date: 2018/8/21
 * Time: 11:13
 */

namespace Gzoran\Constant;


class DemoConstant extends ConstantAbstract
{
    /**
     * 已禁用
     *
     * @var int
     */
    const DISABLE = 0;

    /**
     * 已激活
     */
    const ACTIVE = 1;

    /**
     * @author Mike <zhengzhe94@gmail.com>
     * @return array
     */
    public static function mapping()
    {
        return [
            self::DISABLE => '已禁用',
            self::ACTIVE  => '已激活'
        ];
    }
}
