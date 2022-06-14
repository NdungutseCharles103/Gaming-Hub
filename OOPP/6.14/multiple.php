<?php
    interface A
    {
        public function foo();
    }
    interface B extends A
    {
        public function bar();
    }

    class App implements B
    {
        public function foo()
        {
            echo "foo";
        }
        public function bar()
        {
            echo "bar";
        }
    }

    $app = new App();
    $app->foo();
    $app->bar();
    
?>