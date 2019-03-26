<?php
/**
 * Created by Mike <zhengzhe94@gmail.com>.
 * Date: 2019/3/26
 * Time: 14:22
 */

namespace Gzoran\Constant\Tests;

use Gzoran\Constant\DemoConstant;
use Gzoran\Constant\Exceptions\InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class DemoConstantTest extends TestCase
{
    /**
     * @author Mike <zhengzhe94@gmail.com>
     */
    public function testMapping()
    {
        $this->assertSame([
            0 => '已禁用',
            1 => '已激活'
        ], DemoConstant::mapping());
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     */
    public function testIsExist()
    {
        $this->assertSame(true, DemoConstant::isExist(1));
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     * @throws InvalidArgumentException
     */
    public function testNameWithInvalidCode()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid code: 2');

        DemoConstant::name(2);

        $this->fail('Failed to assert name throw exception with invalid argument.');
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     * @throws InvalidArgumentException
     */
    public function testName()
    {
        $this->assertSame('已激活', DemoConstant::name(1));
    }
}