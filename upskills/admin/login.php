<?php
session_start();
include_once'../includes/db_connection.php';
?>
<?php
// 1- action will fire when the user click on login button 
// 2- take username and password from the form 
// 3- perform query 
// 4- if the user exist go to index.php
// 5- if user not exist print message 
if (isset($_POST['submit'])) {
    $username = $_POST['email'];
    $password = $_POST['password'];

    $query = "select * from admin where user_name='$username' AND password= '$password' ";
    $result = mysqli_query($link, $query);
    $adminSet = mysqli_fetch_assoc($result);
    if ($adminSet['admin_id']) {//if iam register on db e3ne eza al array rj3tle data bkon ele data bl DB
        $_SESSION['admin_id'] = $adminSet['admin_id']; //when i'm login this statement make in the same allaw pages to me as a admin
        header("location:admin.php");
    } else {
        $message = "User Not Found";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lumino - Login</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/datepicker3.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">Log in</div>
                    <div class="panel-heading" style="color: red;">
                        <?php if (isset($message)) {
                            echo $message;
                        } ?>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="login.php">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="text" autofocus="" required="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>

                                <input type="submit" name="submit" value="login" class="btn btn-success btn-group-lg"></fieldset>
                        </form>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->	


        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
