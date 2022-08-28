<?php
session_start();

$msg = "";

if (isset($_session['loggin_user'])) {
    header("location:my_posts.php");
}

if (isset($_POST['user'])) {

    $conn = mysqli_connect("localhost", "root", "", "diplo");

    $date = date("Y-m-d H:i:s");
    $sql = "INSERT INTO `students`(`name`, `email`, `password`) VALUES ('" . $_POST['user'] . "','" . $_POST['email'] . "','" . $_POST['pswd'] . "')";
    $res = mysqli_query($conn, $sql);

    if ($res) {
        $msg = "<p style='color:green; text-align:center'> User Has been registred.  </p>";
    } else {

        $msg = "<p style='color:red; text-align:center'> User Has not been registred. </p>";
    }
}

if (isset($_POST['password'])) {

    $conn = mysqli_connect("localhost", "root", "", "diplo");
    $sql = "SELECT * FROM `students` WHERE  email='" . $_POST['email'] . "' and password='" . $_POST['password'] . "'";
    $res = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res) == 2) {

        $row = mysqli_fetch_array($res);

        $_session['loggin_user'] = $row['name'];
        // die("User found");
        header("location:my_posts.php");
    } else {

        $msg = "<p style='color:red; text-align:center'><strong>Invalid Email or Password</strong></p>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./style2.css">


</head>

<body>

    <div class="login-box">

        <?php echo $msg; ?>


        <div class="col-md-10 login-left">

            <form method="post" action="login.php">

                <label for="chk" aria-hidden="true" style="color:white;">Sign up</label>



                <div class="form-group">
                    <input type=" text" name="user" placeholder="username" required="">


                    <div class="form-group">
                        <input type="text" name="email" placeholder="enter email" required="">
                        <div class="form-group">
                            <input type="text" name="pswd" placeholder="enter password" required="">

                            <button type="submit" class="btn btn-primary" style="color:white;">LOGIN</button>

            </form>


        </div>


        <div class="col-md-6 login-right">

            <form method="post" action="login.php">

                <label for="chk" aria-hidden="true" style="color:white;">login </label>
                <div class="form-group">
                    <input type="email" name="email" placeholder="enter email" required="">
                    <div class="form-group">
                        <input type="password" name="password" placeholder="enter password" required="">

                        <button type="submit" name="login" value="login" class="btn btn-primary">LOGIN </button>
            </form>

        </div>
    </div>


</body>

</html>