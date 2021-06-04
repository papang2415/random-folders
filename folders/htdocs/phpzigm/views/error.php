<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="admin.css">
    <title>Login Page</title>
</head>                                         
 
<body>
    <!-- SIGN UP ADMINSYSTEM CONNECTED -->
    <form action="adminsystem.php" method="post">
        <div class="login-box">
            <h1>Login</h1>
 
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Admin Name"
                         name="adminname" value="">
            </div>
 
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password"
                         name="password" value="">
            </div>
 
        <input class="button" type="submit" 
                     name="login" value="Sign In" >
           <center>          
           <span class="error text-danger" style="color:red; background-color:yellow" >Username or Password is Incorrect!</span>
            <center>

        </div>
    </form>
</body>
 
</html>