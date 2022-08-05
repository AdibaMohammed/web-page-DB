<html>
    <body>
            <h1>the result</h1>
                <?php
                    $SERVER ="localhost";
                    $username="root";
                    $password="";
                    $dbname="sensorValues";

                    $conn=mysqli_connect($SERVER,$username,$password,$dbname);
                   if(empty($_GET['value']))
                   {
                    echo " not submit";
                   }
                   else
                   {
                    $value=$_GET['value'];
                    echo "the value is:" . $_GET['value'];
                    echo "<br> successfully submit";
                   }

                   $query= "insert into sensorValues values($value)" ;
                   $run=mysqli_query($conn,$query)
                ?>
            </form>

    </body>
</html>
