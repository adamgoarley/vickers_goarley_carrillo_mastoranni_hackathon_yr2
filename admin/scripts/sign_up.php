<?php 


// this is the sign up function, will handle checking existance and then adding them to the database

function signUp($firstName, $lastName, $password, $email, $country, $date){
    $pdo = Database::getInstance()->getConnection();

    // configuring the timezone to later add to the db
    date_default_timezone_set('America/Toronto');
    $date = date('Y-m-d H:i:s');

    // check if the user exists already
    $check_signUp_query = 'SELECT COUNT(*) FROM tbl_user WHERE user_email = :email'; 
    $user_set = $pdo->prepare($check_signUp_query);
    $user_set->execute(
        array(
            ':email'=>$email
        )
    );

    $row = $user_set->fetch(PDO::FETCH_ASSOC);

    // need to figure out how to sign them up at this point 
    // need to use PHPMailer 
    
    
    return $message = 'Signed up!';
}