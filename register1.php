<?php

// if (isset($_POST['username'])) {
//     $server = "localhost";
//     $username = "root";
//     $password = "";

//     $con = mysqli_connect($server, $username, $password);

//     if (!$con) {
//         die("connection to this database failed due to" .
//             mysqli_connect_error());
//     }

//     $username = $_POST['username'];
//     $email = $_POST['email'];
//     $m_no = $_POST['m_no'];
//     $password = $_POST['pass'];
//     $repass = $_POST['re_pass'];

//     if ($password == $repass) {
//         $sql = "INSERT INTO `test db`.`user_detailes` (`username`, `email`, `m_no`,
//             `password`) VALUES ('$username', '$email',
//             '$m_no', '$password')";
//         mysqli_query($con, $sql);
//     } else {
//         echo "<p>Password not matching</p>";
//     }


//     $con->close();
// }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Your home account</title>
    <link rel="stylesheet" href="reg.css">
</head>

<body>
    <div class="container">
        <h1>Welcome to Meal management system</h1><br>
        <p>Enter your informations</p>

        <form action="register1.php" class="form" method="post" autocomplete="off" id="form">
            <input type="text" name="username" id="username" placeholder="Enter Your Home Username" required autocomplete="off">
            <input type="email" name="email" id="email" placeholder="Enter Your Email" required autocomplete="off">
            <input type="number" name="m_no" id="m_no" placeholder="Enter member number" required autocomplete="off">
            <input type="password" name="pass" id="pass" placeholder="Enter a password" required autocomplete="off" onkeyup='btnn()'>
            <input type="password" name="re_pass" id="re_pass" placeholder="Re-enter Your Password" onkeyup='btnn()' required autocomplete="off">
            <span id="error"></span>
            <button type="submit" value="Next" id="btn"  >Done</button>
            <!-- <button class="btn" id="btn" onclick="btn()">Next</button> -->
        </form>
            
        

    </div>
</body>
<!--Preventing resubmission on reload or back-->
<!-- <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script> -->


</html>

<script>
    function btnn(){
        event.preventDefault()
        console.log("hi")
        var pass = document.getElementById("pass").value;
        var re_pass = document.getElementById("re_pass").value;
        if(pass != re_pass){
            document.getElementById("error").hidden = false;
            document.getElementById("error").innerHTML = "Password doesn't matching!";
            document.getElementById("error").style.color = "Red";
        }else{
            document.getElementById("error").hidden = true;
        }
    }
  
</script>