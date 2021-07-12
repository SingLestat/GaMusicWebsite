<?php
    session_start();

    // Declaring vars
    $username = "";
    $firstName = "";
    $lastName = "";
    $email = "";
    $password_1 = "";
    $password_2 = "";
    $artist_result = array();
    $errors = array();

    $user_id = 0;
    $music_category = "";

    // PHP Data Objects(PDO) Sample Code:
    try {
        $conn = new PDO("sqlsrv:server = tcp:website-db-server.database.windows.net,1433; Database = Website-DB", "localadmin", "P@ssword!");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
        print("Error connecting to SQL Server.");
        die(print_r($e));
    }

    // SQL Server Extension Sample Code:
    $connectionInfo = array("UID" => "localadmin", "pwd" => "P@ssword!", "Database" => "Website-DB", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
    $serverName = "tcp:website-db-server.database.windows.net,1433";
    $conn = sqlsrv_connect($serverName, $connectionInfo);



    // =====> if the register button is clicked on the register.php
    if(isset($_POST['register'])){
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $email = $_POST['email'];
        $password_1 = $_POST['password_1'];
        $password_2 = $_POST['password_2'];

        // ======> Checking if the form on the register.php was filled properly
        if(empty($firstName)){
            array_push($errors, "First Name is required for Registration"); // if username var is empty add error to errors array declare above
        }
        if(empty($lastName)){
            array_push($errors, "Last Name is required for Registration"); // if username var is empty add error to errors array declare above
        }
        if(empty($email)){
            array_push($errors, "Email is required for Registration"); 
        }
        if(empty($password_1)){
            array_push($errors, "Password is required for Registration"); 
        }
        if($password_1 != $password_2){
            array_push($errors, "Passwords do not match");
        }

    
        if(count($errors) == 0 ){
            $userQuery = "SELECT ( SELECT COUNT([USER_ID]) FROM [User]) AS USERID_COUNT";
            $runQuery =  sqlsrv_query( $conn, $userQuery);
            if( $runQuery === false ) {
                array_push($errors, "Issue with user ID");
            }
            else{

                $row = sqlsrv_fetch_array( $runQuery, SQLSRV_FETCH_ASSOC);
                $user_id = $row['USERID_COUNT'] + 1;
            }
            
            $sql = "INSERT INTO [dbo].[User]
                    VALUES('$user_id', '$firstName', '$lastName', 'None', '$email', '$password_1', 'None', '1992-03-05', '000-000-0000', 'None', '1547 Applegreen street', 'Doraville', 'GA', '30324');";
            
            $stmt = sqlsrv_query( $conn, $sql);

                if( $stmt === false ) {
                    array_push($errors, $user_id);
                    array_push($errors, "An Issue occured whiles adding your acccunt, please try again later");
                }
                else{
                    $_SESSION['fname'] = $firstName;
                    $_SESSION['lname'] = $firstName;
                    $_SESSION['email'] = $email;
                    $_SESSION['success'] = "This is your profile page. And thank you for joining the Georgia Music Directory";
                    header('location: userProfilePage.php'); // redirection happen here
                }
        } //End of Count($error) == 0
    }

    // ===> When login  is clicked
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password_1'];


        // ======> Checking if the form on the login.php was filled properly
        if(empty($email)){
            array_push($errors, "Email is required to Login"); // if username var is empty add error to errors array declare above
        }
        if(empty($password)){
            array_push($errors, "Password is required to Login"); 
        }

        // ====> if there are no errors from the above validation for the form, then user information is validated and allowed to login.
        // ====> this is done by checking the Error Array, if = 0 then we can save, else we can not save user information
        if(count($errors) == 0 ){
            // This is used to encrypt the password, but commenting this out for now.
            // $password = md5($password_1); -- remember to enable when needed
            
            // Check / validate user before allowing user login. 

            // $sql = "SELECT * 
            // FROM [dbo].[User]
            // WHERE [dbo].[User].EMAIL = '$email'
            // AND [dbo].[User].[PASSWORD] = '$password'";

            $sql = "SELECT * FROM [User] WHERE [EMAIL] = '$email' AND [PASSWORD] = '$password'";

            $stmt = sqlsrv_query( $conn, $sql);
            if( $stmt === false ) {
                array_push($errors, "Wrong username/password combination. Please try again");
            }
            else{
                while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                    echo $row['EMAIL'].", ".$row['PASSWORD']."<br />";
            
                    // if statement to check Login
                    if ($row['EMAIL'] == $email){
                        if($row['PASSWORD'] == $password){
                            // echo "Login Successfully";
                            // echo "<br>";
                            // echo "Welcome ".$row['EMAIL'];

                            $_SESSION['fname'] = $row['FIRST_NAME'];
                            $_SESSION['lname'] = $row['LAST_NAME'];
                            $_SESSION['email'] = $email;
                            $_SESSION['success'] = "This is your profile page. And Welcome back";
                            header('location: userProfilePage.php'); // redirection happen here
                        }
                        else{
                            array_push($errors, "Wrong username/password combination. Please try again");
                        }
                    }
                    else{
                        echo "Issue with Username"; 
                    }
                }
                sqlsrv_free_stmt( $stmt);
            }
        }
    }

    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: index.php');
    }
?>