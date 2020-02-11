<?php

// this function will check if the user is valid
function login($email, $password){
    $pdo = Database::getInstance()->getConnection();
    // setting the time zone
    date_default_timezone_set('America/Toronto');
    //Check for the users existance
    $check_exist_query = 'SELECT COUNT(*) FROM tbl_user WHERE user_email= :email';
    $user_set = $pdo->prepare($check_exist_query);
    $user_set->execute(
        array(
            ':email' => $email,
        )
    );

    // if the user is valid the login will run
    if($user_set->fetchColumn()>0){
        //user exists
        $get_user_query = 'SELECT * FROM tbl_user WHERE user_email= :email';
        $get_user_query .= ' AND user_pass = :password';
        $user_check = $pdo->prepare($get_user_query);
        $user_check->execute(
            array(
                ':email'=>$email,
                ':password'=>$password
            )
        );

        while($found_user = $user_check->fetch(PDO::FETCH_ASSOC)){
                $id = $found_user['user_id'];
                $date = date('Y-m-d H:i:s');
                // logged in!
                $message = 'Success! You have been logged in - You were last loggen in on: ' . $found_user['user_date'];
                // this is updating the user ip in the database, used for security purpposes
                $update_query = 'UPDATE tbl_user SET last_updated = :date WHERE user_id = :id';
                $update_set = $pdo->prepare($update_query);
                $update_set->execute(
                    array(
                        ':id'=>$id,
                        ':date'=>$date
                    )
                );
               
        }
        

        // when user is finally logged in they will be redirected to the dashboard
        if(isset($id)){
            redirect_to('../index.php');
        }
        }else{
            // user does not exist
            $message = 'User does not exist';
        }

    // Log user in

    return $message;
}