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
            <?php
            foreach ($blogPosts as $blogPost) {
                echo '<div class="blog-post">';
                echo '<h2>' . $blogPost['title'] . '</h2>';
                echo '<p>Oct 5, 2020 by <a href="">Luis</a></p>';
                echo '<div class="blog-post-image">';
                echo '<img src="../public/images/banner.jpg" alt="">';
                echo '</div>';
                echo '<div class="blog-post-content">';
                echo $blogPost['content'];
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>

        <div class="col-md-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consectetur ante nec dapibus
                vehicula. Nam faucibus mauris mi, eget luctus nibh dictum ac. Quisque dapibus nisl sit amet consequat
                vehicula. Quisque luctus quam mi, non tempor velit laoreet et. Curabitur eleifend vel ipsum a faucibus.
                Donec blandit eget ex at lacinia. Duis porta interdum lacus at consectetur. Donec ut faucibus libero,
                sed euismod justo. Mauris mattis auctor ex eget dapibus. Vestibulum vitae ex arcu. Cras vel purus
                tellus. Mauris placerat congue quam, vitae gravida leo posuere non. Sed et tortor mollis massa bibendum
                suscipit ut vitae ipsum. Nullam at ante ultricies nibh finibus ullamcorper sit amet ac lorem. Aliquam
                laoreet velit sem, eu iaculis nulla placerat quis. Donec semper vitae lorem eget blandit. </p>
        </div>
    </div>
    <div class="row">
        <footer>
            This is a footer<br>
            <a href="admin/index.php">Admin Panel</a>
        </footer>
        <div class="col-md-12">

        </div>
    </div>
</div>


</body>
</html>