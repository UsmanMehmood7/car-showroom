<?php
session_start();

if (isset($_session['loggin_user'])) {
    header("location:my_posts.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="main">
        <div id="main-content">
            <h1 style="padding: 10px 30px;">My Posts</h1>
            <nav>
                <a href="index.php">Home</a>
                <a href="" <?php echo $_SESSION['loggin_user']; ?> </a>
                    <a href="logout.php">Log out</a>
            </nav>
        </div>

    </div>
</body>

</html>