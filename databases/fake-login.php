<?php

$user = null;
$query = null;

if (!empty($_POST)){
    require_once 'config.php';
    $query = "SELECT * FROM users WHERE email = :email AND password = :password";
    $prepared = $pdo->prepare($query);
    $prepared->execute([
        'email' => $_POST ['email'],
        'password' => md5(_POST['[password]'])
    ]);

    $queryResult = $pdo->query($query);

    $user = $prepared->fetch(PDO::FETCH_ASSOC);
}


?>

<html>
<head>
    <title>Databases with Platzi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body><div class="container">
    <h1>Fake Login</h1>
    <a href="index.php">Home</a>
    <form action="fake-login.php" method="post">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value ="Login">
    </form>
    <h2>Query</h2>
    <div>
        <?php
        print_r($query);
        ?>
    </div>

    <h2>User Data</h2>
    <div>
        <?php
        print_r($user);
        ?>
    </div>
</div>
</body>
</html>