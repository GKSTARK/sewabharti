<?php
    session_start(); // Start the session
    include('config/dbconnect.php');
    if (isset($_POST['submit'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $sql = "SELECT * FROM user WHERE email = '$username' AND password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC); // Fetch user details
            $_SESSION['user_id'] = $row['user_id']; // Assuming 'user_id' is the column name in your database
            $_SESSION['username'] = $username; // Set session variables
            // Redirect to index.php
            header("Location: index.php");
            exit(); // Ensure script execution ends after redirection
        }  
        else {  
            echo  '<script>
                        alert("Login failed. Invalid username or password!!")
                        window.location.href = "login.php"; // Redirect back to login page
                    </script>';
        }     
    }
?>
