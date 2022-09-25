<?php require_once( 'couch/cms.php' ); ?>
<cms:template title="Listen • Main Page" />
<!DOCTYPE html>
<html>
    <head>
        <title>Listen • Pend Online</title>

        
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <link rel="stylesheet" type="text/css" href="css/home.css">
        <link rel="stylesheet" type="text/css" href="css/tile.css">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!--settings for viewing website on a phone-->
    </head>
    
    <body>
        <div class="pagewide p-1 fixed-top">
            <div class="container"><h1 style="font-family: courier">PEND</h1></div>
        </div>
      
        <nav role="navigation" style="top:60px;" class="navbar navbar-expand-sm fixed-top justify-content-center custom-nav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="read_homepage.php">Read</a></li>
                <li class="nav-item"><a class="nav-link active" href="listen_homepage.php">Listen</a></li>
                <li class="nav-item"><a class="nav-link" href="watch_homepage.php">Watch</a></li>
            </ul>
        </nav>
      
        <div class="container-fluid invis-breaker"></div>
    </body>
</html>
<?php COUCH::invoke(); ?>