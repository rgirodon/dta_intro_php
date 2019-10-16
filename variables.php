<!DOCTYPE html>
<html>
    <body>
        
        <?php
        /*
        $myNumber = 5;
        
        $myStr = 'Vive la DTA !';

        echo '<h1>'.$myStr.'</h1>';

        echo('<p>'.($myNumber + $myNumber).'</p>');
        */

        /*
        $myStr = 'globalValue';

        echo '<p>Variable globale : '.$myStr.'</p>';

        function myFunction() {

            $myLocalStr = 'localValue';

            echo '<p>Accès depuis une fonction à une variable locale : '.$myLocalStr.'</p>';
        }

        myFunction();
        */
        
        /*
        $myStr = 'globalValue';

        echo '<p>Variable globale : '.$myStr.'</p>';

        function myFunction() {

            echo '<p>Accès depuis une fonction à une variable globale : '.$myStr.'</p>';
        }

        myFunction();
        */

        /*
        $myStr = 'globalValue';

        echo '<p>Variable globale : '.$myStr.'</p>';

        function myFunction() {

            global $myStr;

            echo '<p>Accès depuis une fonction à une variable globale : '.$myStr.'</p>';
        }

        myFunction();
        */

        /*
        function myFunction() {

            $cpt = 0;

            echo '<p>Accès depuis une fonction à une variable local : '.$cpt.'</p>';

            $cpt++;
        }

        myFunction();

        myFunction();

        myFunction();
        */

        /*
        function myFunction() {

            static $cpt = 0;

            echo '<p>Accès depuis une fonction à une variable static : '.$cpt.'</p>';

            $cpt++;
        }

        myFunction();

        myFunction();

        myFunction();
        */

        /*
        echo 'SERVER_NAME : '.$_SERVER['SERVER_NAME'];
        echo '<br>';
        echo 'HTTP_USER_AGENT : '.$_SERVER['HTTP_USER_AGENT'];
        echo '<br>';
        echo 'PHP_SELF : '.$_SERVER['PHP_SELF'];
        echo '<br>';
        echo 'REQUEST_METHOD : '.$_SERVER['REQUEST_METHOD'];
        */

        /*
        echo 'Param id : '.$_GET['id'];
        echo '<br>';
        echo 'Param mode : '.$_GET['mode'];
        echo '<br>';
        */

        ?>

        
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                
                $name = $_POST['name'];

                echo 'Bienvenue à la DTA '.$name.' !';
            }
            else if ($_SERVER["REQUEST_METHOD"] == "GET") {
        ?>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

                    Name: <input type="text" name="name">
                
                    <input type="submit">
                
                </form>
        <?php
            }
        ?>

    </body>
</html>