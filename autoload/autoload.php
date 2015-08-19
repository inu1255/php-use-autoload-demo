<?php
function myLoader($classname){
    $class_file = str_replace("\\",DIRECTORY_SEPARATOR,__DIR__."\\class\\" . $classname . '.php');
    echo $class_file;
    if (file_exists($class_file)){  
        require_once($class_file);  
    }
}
echo "aaa";
spl_autoload_register("myLoader");