<h1 align="center">Constant</h1>

<p align="center">常量抽象类 ConstantAbstract 实现了 ConstantContract 契约，提供对常量便捷定义与访问等的操作</p>

[![Build Status](https://travis-ci.org/gzoran/constant.svg?branch=master)](https://travis-ci.org/gzoran/constant)
![StyleCI build status](https://github.styleci.io/repos/160311390/shield)

## 安装

```shell
composer require "gzoran/constant:~1.0"
```

## 使用

现在我们建立一个 “游戏状态” 常量类 GameStatus。

```php
class GameStatus extends ConstantAbstract
{
    /**
     * 定义常量 禁用
     *
     * @var int
     */
    const DISABLE = 0;

    /**
     * 定义常量 激活
     */
    const ACTIVE = 1;

    /**
     * 这里必须实现常量契约的 mapping 方法，用以配置 “常量” 与 “名称” 的对应关系
     *
     * @author Mike
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

```

使用常量

```php

// 如果游戏状态为激活，则返回 true
if ($status == GameStatus::ACTIVE) {
    return true;
}

```

获取常量名称

```php

$status = 1;

// 获取状态为 1 的名称
$description = GameStatus::name($status);

```

检查常量是否配置

```php
$status = 1;

// 如果状态 1 已配置，则返回 true

if (GameStatus::isExist($status)) {
    return true;
}

```

## License

MIT