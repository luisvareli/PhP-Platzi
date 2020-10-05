<?php
require_once 'config.php';
$result = false;
if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    //Nunca utilizar md5 sino otro
    $password = md5($_POST['password']);
    //Validacion
    $sql = "INSERT INTO users(name, email, password) VALUES (:name, :email, :password)";
    $query = $pdo->prepare($sql);

    $result = $query->execute([
        'name' => $name,
        'email' => $email,
        'password' => $password
    ]);
}

?>


<html>
<head>

    <title>Databases with Platzi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body><div class="container">
    <h1>Add User</h1>
    <a href="index.php">Home</a>
    <?php
        if($result){
            echo '<div class="alert alert-sucess">Success!!!</div>';
        }
    ?>
    <div class="alert alert-success">Success!!</div>
    <form action="add.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value ="Save">
    </form>
</div>
</body>
</html>