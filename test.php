<?php
interface father
{
    public function call(MyClass $Mon);
}

class son implements father
{
    public function call(MyClass $Mon)
    {
        echo '妈妈';
    }
}

// 如下面的类
class MyClass {
    public $var = 'Hello World';
}

$mon = new MyClass;
$son = new son;
// gettype($mon);
$son->call($mon);


