<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sprague High School</title>

    <!--Bootstrap 4.3.1-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--Fontawesome-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

    <!--W3 CSS-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!--Get CSS From Styles-->
    <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' ); ?>/style.css">

    <?php wp_head();?> <!--Make everything a header-->
</head>
<body>

  <!--Navigation for top of page (mostly used on mobile devices) or (close navbar on desktop)-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <button class="btn btn-primary" id="menu-toggle">Toggle Menu
      <span class="navbar-toggler-icon"></span>
    </button>   
  </nav>
</body>
</html>