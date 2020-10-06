<?php
include_once '../config.php';
$query = $pdo->prepare('SELECT * FROM blog_posts ORDER BY id DESC ');
$query->execute();

$blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);

?>


<html>
<head>
    <title>Databases with Platzi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container">


    <div class="row">
        <div class="col-md-12">
            <h1>Blog Title</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <h2>Posts</h2>

            <a class="btn btn-primary" href="insert-post.php">New Post</a>
            <table class="table">
                <tr>
                    <th>Title</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php
                foreach ($blogPosts as $blogPost) {
                    echo '<tr>';
                    echo '<td>' . $blogPost['title'] . '</td>';
                    echo '<td>Edit</td>';
                    echo '<td>Delete</td>';
                    echo '</tr>';
                }
                ?>
            </table>
        </div>
        <div class="col-md-4">
            <p>Sidebar</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <footer>
                This is a footer<br>
                <a href="admin/index.php">Admin Panel</a>
            </footer>
        </div>
    </div>
</div>


</div>
</div>


</body>
</html>