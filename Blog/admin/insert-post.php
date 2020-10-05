<?php
include_once '../config.php';

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
            <a class="btn btn-primary" href="insert-post.php">Back</a>

            <form action="insert-post.php" method="post">
                <div class = "form-group">
                    <label for="inputTitle">Title</label>
                    <input class="form-control" type="text" name="title" id="inputTitle">
                </div>
                
                <textarea class="form-control" name="content" id="inputContent" rows="5"></textarea>
                <br>
                <input class="btn-primary" type="submit" value="Save">
            </form>





        </div>

        <div class="col-md-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam malesuada lorem sit amet mauris venenatis,
            ut scelerisque sapien venenatis. Duis efficitur odio id gravida posuere. Sed tincidunt dui eget erat commodo
            semper. Praesent finibus sodales posuere. Praesent lobortis ex vel leo tristique porttitor. Praesent ac
            maximus velit, at venenatis elit. Vestibulum urna risus, dapibus eget luctus a, mattis in mauris. Duis eu
            nunc consectetur, convallis diam eget, iaculis massa. Pellentesque placerat nibh id aliquam iaculis. Nam
            dapibus turpis at elit vestibulum, sit amet semper ante consequat. Vestibulum porttitor pellentesque leo,
            quis semper libero accumsan a.
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