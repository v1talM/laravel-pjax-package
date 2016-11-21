# laravel-pjax-package
a pjax package for laravel5, include pjax and nprogress
-----

一个基于 laravel 5 的 pjax 扩展包 , 本项目基于 NProgress [传送门](https://github.com/rstacruz/nprogress) 和 Pjax.

# 安装使用详细教程 Installation

打开 `app/Kernel.php` 文件, 在 `$middleware` 数组里面添加中间件 `\Vital\Pjaxer\Middlewares\PjaxMiddleware::class`

add `\Vital\Pjaxer\Middlewares\PjaxMiddleware::class` to  `*$middleware` in `app/Http/Kernel.php`

打开 `config/app.php` 文件, 在 `providers` 数组里面注册服务 `Vital\Pjaxer\Providers\PjaxServiceProvider::class,`

add `Vital\Pjaxer\Providers\PjaxServiceProvider::class` to `providers` in `config/app.php`

在下面的 `aliases` 数组里面注册门面Facade `'Pjax' => \Vital\Pjaxer\Facades\PjaxFacade::class,`

add `'Pjax' => \Vital\Pjaxer\Facades\PjaxFacade::class,` to `aliases`

执行命令 `php artisan vendor:publish` 之后会在 `config` 目录下生成一个 `pjax.php` 文件, 这个文件用来进行pjax配置

run `php artisasn vendor:publish`, it will create some directories and files, and there is a `pjax.php` file in `config` directory, it's used to configure pjax.

# 使用方法 Usage

## 加载pjax所需要的资源 Load resources and run

在你的页面插入这条代码: `@include('pjax::head')` 引入对应的css和js文件

add `@include('pjax::head')` into your page to load resources.

添加代码: `{!! Pjax::pjax() !!}` 之后就可以来到页面查看效果啦 >_< 

add `{!! Pjax::pjax() !!}` into your page , it will pjax and show progress animation. :D


# 配置 Custom

来到 `config/pjax.php` 文件, 里面有对应的设置. 目前支持progress bar 的背景颜色修改以及 snipper 背景颜色的修改.

you can custom background of progress-bar and snipper in `config/pjax.php`.


# 最后 Last

欢迎star , 欢迎 Issue , 欢迎任何学习交流~~
