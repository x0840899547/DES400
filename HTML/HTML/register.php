<?php 
session_start();

        if(isset($_POST['Submit'])){
                //connection
        include("connection.php");
                $First_Name =  $_POST['fname'];
                $Last_Name = $_POST['lname'];
                $Email =$_POST['email'];
                $User_Name =$_POST['uname'];
                $Password =$_POST['password'];
                //query 

        $sql = "INSERT INTO user_information (firstname,lastname,email,username,password) VALUES ('$First_Name','$Last_Name','$Email','$User_Name''$Password')";

                $result = mysqli_query($con,$sql);

                if ($result){

                $row = mysqli_fetch_array($result);
                        Header("Location: login.html");
                }

        }
?>