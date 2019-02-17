<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TITLE</title>

    <!--Bootstrap 4.3.1-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--Get CSS From Styles-->
    <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' ); ?>/style.css">

    <?php wp_head();?> <!--Get any other header information-->

</head>
<body>
    
    <!--Navigation-->
    <div class="blog-masthead">
        <div class="container">
            <nav class="blog-nav">
                <a href="#" class="blog-nav-item">Home</a>
                <a href="#" class="blog-nav-item">Student</a>
                <a href="#" class="blog-nav-item">Parents</a>
                <a href="#" class="blog-nav-item">Information</a>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="blog-header">
            <h1 class="blog-title">Sprague High School</h1>
            <p class="lead blog-description">The official website for the Olympians!</p>
        </div>
    </div>
</body>
</html>