<html>
    <head>  
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/css.css"> 
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <title>Home</title>
    </head>
    <body>
        <!--My Navbar-->
        <ul class="nav nav-tabs navbar-fixed-top" id="navbar">
            <li role="presentation" class="active"><a href='index.php'>Home</a></li>
            <li role="presentation"><a href='register.php'>Sign Up</a></li>
            <li role="presentation"><a href='post.php'>Post</a></li>
            <li role="presentation"><a href='login.php'>Login</a></li>
            <li role="presentation"><a href='logout-user.php'>Logout</a></li>
        </ul>
        
        <!--linked my folder-->
        
        <!--My Jumbotron-->
        
        <div class="jumbotron">
            <h1 id="insidejumbo">Welcome To My Blog</h1>
            <p id="insidejumbo">This is my blog using a new language, "php"..  Enjoy!</p>
            <p><a class="btn btn-primary btn-lg" href="register-form.php" role="button" id="button">Sign Up</a></p>
            
            <!--made a jumbotron for my blog-->
            
        </div>
    </body>
 <?php
require_once(__DIR__ . "/controller/login-verify.php");
require_once(__DIR__ . "/view/header.php");
if(authenticateUser()){
    require_once(__DIR__ . "/view/navigation.php");
}
require_once(__DIR__ . "/controller/create-db.php");    
require_once(__DIR__ . "/view/footer.php");
require_once(__DIR__ . "/controller/read-posts.php");
?>
    
    <!--linked my pages with require once-->

    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script></script>