
<?php 
    function hello(string $name): string
        {
            if($name === "") {
                $name = "Nobody";
            }

            return "Hello $name";
            // ternaire -> return $name === "" ? "Nobody" : $name;
        }
        
    echo hello("World");
    echo PHP_EOL;
    echo hello("");