<?php 
//Including files 
include_once '../load.php';

// allowing users to login and sign up
if(isset($_POST['signUp'])){
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);
    $country = trim($_POST['country']);

// this to check if the user has filled out the full sign up form
if(!empty($firstName) && !empty($lastName) && !empty($password) && !empty($email) && !empty($country)){
    //Log the user in
    $message = signUp($firstName, $lastName, $password, $email, $country);
}else{
    $message = 'Please fill out the required fields below!';
}
}

// this will start the verification of the email and password
if(isset($_POST['login'])){
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if(!empty($email) && !empty($password)){
        //Log user in
        $message_login = login($email, $password);
    }else{
        $message_login = 'Please fill out the required field';
    }
}
?>


<!-- This is the sign up page content -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>
</head>
<body id="formsPage">

    <!-- this is the sign up form -->
    <div class="signup">
        <h2>Sign Up</h2>
        <?php echo !empty($message)? $message: ''; ?>
        <form action="scripts/sign_up.php" method="post">

            <input type="text" name="firstName" id="firstName" value="" placeholder='First Name'>

            <input type="text" name="lastName" id="lastName" value="" placeholder='Last Name'>

            <input type="password" name="password" id="userPassword" value="" placeholder='Password'>

            <input type="email" name="email" id="userEmail" value="" placeholder='Email'>

            <input type="text" name="country" id="userCountry" value="" placeholder='Country'>

            <button name="submit">SIGN UP NOW</button>
        </form>
    </div>
    


    <!-- this is the login form -->
    <div class="login">
        <h2>Login</h2>
        <form action="scripts/login.php" method="post">
        <?php echo !empty($message)? $message: ''; ?>

            <input type="text" name="email" id="email" value="" placeholder='Email'>

            <input type="password" name="password" id="password" value="" placeholder='Password'>

            <button name="login">LOGIN</button>
        </form>
    </div>
    
</body>
</html>