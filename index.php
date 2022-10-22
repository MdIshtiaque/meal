<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meal Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>Welcome to Meal Management System</h1>
    <p>Post your daily bazar list and enjoy a proper meal management system</p>
    </div>
    <div class="container1">
        <form action="index.php" method="post" class="form">
            <input type="text" name="name" id="name" placeholder="Enter your name ">
            <textarea name="b_list" id="b_list" cols="30" rows="10" placeholder="Enter Bazar Lists with Amount(Example : chicken = 250)"></textarea>
            
            <input type="submit" name="btn1"
            class="btn1" value="Submit" />
           
            
            

            
        <?php
        
            if(array_key_exists('btn1', $_POST)) {
                //Collect post variables
                $name = $_POST['name'];
                $b_list = $_POST['b_list'];
                if(isset($_POST['b_list'])){

                    if($_POST['b_list'] == ""){
                        echo "<h4>You need to fill the forms</h4>";
                    }else{
                        echo "<p>Your name: $name</p><br>";
                        echo "<p>Bazar Description: $b_list</p><br>";
                        //Calculating total amount
                        preg_match_all('!\d+\.*\d*!', $b_list, $matches);
                        echo "<h4>The Total amount is : </h4>";
                        $total = 0;
                        foreach($matches[0] as $price){
                            $total += $price;
                        }
                        echo $total;
                        
                        

                        
                            
                            
                            //Set connection variables
                            $server = "localhost";
                            $username = "root";
                            $password = "";
                            
        
                            //Create a database connection
                            $con = mysqli_connect($server, $username, $password);
                            
                            //Check for connection success
                            if(!$con)
                            {
                                die("connection to this database failed due to".
                                mysqli_conncet_error());
                            }else{
                                
                            }
                            
                            //Execute Query
                            $sql = "INSERT INTO `meal`.`blist` (`name`, `b_list`, `total`, `date`) VALUES ('$name', '$b_list',
                            '$total',current_timestamp());";
                            mysqli_query($con,$sql);
                            echo "<p>Successfully Posted. Thank you.</p>";
                            //Close the database connection
                            $con->close();
        
                    
                        
                        

                    }
                    
                }
            }

            
              
            
        ?>
            
        
                


            
            
        </form>
    </div>
</body>
</html>