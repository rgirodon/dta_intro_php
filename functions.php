<!DOCTYPE html>
<html>
    <body>
        
        <?php
        /*
        function writeMsg() {
            echo "<h1>Hello world !</h1>";
        }

        writeMsg();
        */

        /*
        function writeCustomizedMsg($name) {
            echo "<h1>Hello $name !</h1>";
        }
        
        writeCustomizedMsg("Rémy");

        writeCustomizedMsg("DTA");
        */

        function sum($x, $y) {
            
            $z = $x + $y;

            return $z;
        }
        
        echo "5 + 10 = ".sum(5, 10)."<br>";
        echo "7 + 13 = ".sum(7, 13)."<br>";
        echo "2 + 4 = ".sum(2, 4);
        ?>

    </body>
</html>