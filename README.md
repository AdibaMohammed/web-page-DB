# web-page-DB
Task2: 1-Create a web page [GET] take a sensitive value (type Integer) 2- Create a database 3- Create a web page that stores the sensor value in the database table
code page1:

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="output2.php" method="get">
      <h1>Enter the value of sensors</h1> <input type="number" name="value"><br>
      <input type="submit" value="submit" name="submit"><br>
  </form>
  </body>
</html>

code page2:
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
