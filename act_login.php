<?php
include "koneksi.php";
if(isset($_POST['submit']))
{               
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $level		= $_GET['level'];  
    $query = mysqli_query($connect, "SELECT * FROM user WHERE username='$username' AND password='$password'");
    if(mysqli_num_rows($query) == 0)
    {
        $error = "Username or Password is invalid";
    }
    else
    {
        $row = mysqli_fetch_assoc($query);
        $_SESSION['username']=$row['username'];
        $_SESSION['level'] = $row['level'];
        
        if($row['level'] == "mahasiswa")
        {
            
            header("Location: mahasiswa_berita.php");
        }
        else if($row['level'] =="komunitas")
        {
    
            header("Location: komunitas_berita.php");
        }
        else
        {
            $error = "Failed Login";
        }
    }
}           
?>