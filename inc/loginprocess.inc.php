<?php
/**
 * Created by Ryan J | ryanjayako@gmail.com
 * Date:
 * Version : v1.1
 */
session_start();

include("Database.class.php");


if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $_SESSION['error'] = NULL;

    if ($username && $password) {

        //new database object
        $database = new Database();

        $query = "SELECT * FROM user where user = '$username' AND pass = '$password'";

        $rowResult = $database->numRows($database->doQuery($query));

        $result = $database->doQuery($query);

        //checking for user existence before proceeding with login.
        if ($rowResult == 1) {

            while ($rowdata = mysql_fetch_array($result)) {

                $dbusername = $rowdata['user'];
                $dbpassword = $rowdata['pass'];

            }

            if ($dbusername == $username && $dbpassword == $password) {

                echo "You're in! Welcome " . $username;
            }
            else {

                echo "Something went wrong." . $rowResult . $dbusername;
            }

        }
        else
           
        header("Location: ../index.php?page=login");

    }
    else
        echo "Something went wrong";

}//end submit if

?>
