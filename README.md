# php-use-autoload-demo
学习php中use关键字和autoload.php

## test
```
php test.php
```

## 结论
1.
spl_autoload_register函数的作用：
告诉php怎么处理use xxx\xxx;
``` php
// 将 use tools\A; 交给myloader函数处理
spl_autoload_register("myloader")
function myloader($class){
	// $class 即 tools\A
	// myloader的作用：根据 tools\A 去 require_once 对应的php文件
}
```
2.
通过use引入的php文件的要求
``` php 
use tools\A;
// 对应的php文件
namespace tools;// tools与use 中的tools对应
class A{//类与use 中的A对应
	
}
```
3.
根目录查找
``` php
//没有 use B;的写法
//不用写 use B; php 在遇到 new B();时会通过myloader("B")载入php文件

//此时对应php文件不写namespace
class B{
	
}
```
4.
spl_autoload_register 可以多次注册函数
php会按注册顺序查找并载入类
之前载入过的类不会再调用myloader函数