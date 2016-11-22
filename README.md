# laravel-pjax-package
a pjax package for laravel5, include pjax and nprogress


一个基于 laravel 5 的 pjax 扩展包 , 本项目基于 NProgress [传送门](https://github.com/rstacruz/nprogress) 和 Pjax.

使用介绍:[Laravel-China传送门](https://laravel-china.org/topics/3280)|[个人博客](http://119.29.5.221/article/Laravel-Pjax-kuo-zhan-bao-shi-yong-jie-shao)

###  安装使用详细教程 Installation

使用 Composer 引入: 

```bash
composer require phpvital/pjaxer
```

打开  `app/Http/Kernel.php` 文件, 在  `$middleware` 数组里面添加中间件:  

```php
\Vital\Pjaxer\Middlewares\PjaxMiddleware::class,
```

add `\Vital\Pjaxer\Middlewares\PjaxMiddleware::class,` to `$middleware` in `app/Http/Kernel.php`


打开 `config/app.php` 文件,  在  `providers` 数组里面注册服务:

```php
Vital\Pjaxer\Providers\PjaxServiceProvider::class,
```

add `Vital\Pjaxer\Providers\PjaxServiceProvider::class,` to `providers` in  `config/app.php`


在下面的 `aliases` 数组里面注册门面 Facade :

```
'Pjax' => \Vital\Pjaxer\Facades\PjaxFacade::class,
```

add `'Pjax' => \Vital\Pjaxer\Facades\PjaxFacade::class,` to `aliases`


执行命令 `php artisan vendor:publish` 之后会在 `config` 目录下生成一个 `pjax.php` 文件, 这个文件用来进行pjax配置;


### 使用方法 Usage

##### 加载 pjax 所需要的资源 Load resources

在你的页面插入这条代码, 引入对应的 CSS 和 js 文件: 

```
@include('pjax::head')
```
添加代码: `{!! Pjax::pjax() !!}` 之后就可以来到页面查看效果啦 :D

add `@include('pjax::head')` and `{!! Pjax::pjax() !!}` to your page.

### 个性化配置 Custom

来到 `config/pjax.php` 文件, 里面有对应的设置, 目前支持 progress bar 的背景颜色修改以及 snipper 背景颜色的修改.

configure `config/pjax.php` to custom background of progress bar or snipper

### 最后

欢迎star , 欢迎 Issue , 欢迎任何学习交流~~

# License

Laravel-pjax-package is licensed under The MIT License (MIT).
