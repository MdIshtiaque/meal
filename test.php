<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $server = "localhost";
        $username = "root";
        $password = "";

        //$database = 'meal';
        

        //Create a database connection
        $con = mysqli_connect($server, $username, $password);
        
        //Check for connection success
        if(!$con)
        {
            die("connection to this database failed due to".
            mysqli_conncet_error());
        }else{
            //echo "success";
        }
        $sql = ("SELECT date FROM meal.blist `date`");
        $result = $con->query($sql);
        $d = date('Y-m-d');
        while($rows = $result->fetch_assoc()){
            if($rows['date'] != $d){
            echo $rows['date'];
            }
        }

        //echo $result;
        $con->close();
    ?>
</body>
</html>