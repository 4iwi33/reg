<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<?php
require('connect.php');

if (isset($_POST['username']) && isset($_POST['pass'])) {
    $username = $_POST['username']; // получаем значение которое будем вводть в username
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $query = "INSERT INTO users (username, email, pass) VALUES  ('$username', '$email', '$pass')";
    $result = mysqli_query($connection, $query); // для подключения к бд исп $connection, и исп сам запрос $query

    // проверка регистрации
    if ($result) {
        $success = "Регистраця прошла успешно";
    } else {
        $false = "Ошибка регистрации проверьте введённые данные";
    }
}
?>

<body>
    <div class="container">
        <form action="" class="form-signin" method="POST">
            <h2>Rgistration</h2>

            <?php if (isset($success)) { ?><div class="alert alert-success" role="alert"> <?php echo $success; ?> </div><?php } ?>
            <?php if (isset($false)) { ?><div class="alert alert-danger" role="alert"> <?php echo $false; ?> </div><?php } ?>

            <input type="text" name="username" class="form-control" placeholder="Username" required>
            <input type="email" name="email" class="form-control" placeholder="Email" required>
            <input type="password" name="pass" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">register</button>
        </form>
    </div>
</body>

</html>