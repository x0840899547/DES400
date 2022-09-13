<?php 
session_start();
        if(isset($_POST['Submit'])){
                //connection
                include("connection.php");

                $username = $_POST['username'];
                $password = $_POST['password'];
                //query 
                echo "$username";
                echo "$password";
                  $sql="SELECT * FROM user_information Where username= '$username' and password= '$password'";

                $result = mysqli_query($con,$sql);

                if(mysqli_num_rows($result)==1){

                    $row = mysqli_fetch_array($result);
                    $_SESSION['username']=$row['username'];
                        Header("Location: Generate_Token.html");
                    }

                }
            else{
                echo "<script>";
                echo "window.history.back()";
                echo "</script>";

                }


?>