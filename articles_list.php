<?php require_once( 'couch/cms.php' ); ?>
<cms:if k_is_page >
<!doctype html>
<html>
    <head>
        <title>Articles - placeholder</title>

        
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <link rel="stylesheet" type="text/css" href="css/tile.css">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!--settings for viewing website on a phone-->
    </head>
    <body>
        <div class="pagewide p-1 fixed-top">
            <div class="container"><h1>PLACEHOLDER</h1></div>
        </div>
      
        <nav role="navigation" style="top:60px;" class="navbar navbar-expand-sm fixed-top justify-content-center custom-nav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="articles.php">Articles</a></li>
                <li class="nav-item"><a class="nav-link" href="podcasts.php">Podcasts</a></li>
                <li class="nav-item"><a class="nav-link" href="photos.php">Photos</a></li>
                <li class="nav-item"><a class="nav-link" href="videos.php">Videos</a></li>
            </ul>
        </nav>
      
        <div class="container-fluid invis-breaker"></div>

        <div class="container-fluid">
            articles
        </div>
    </body>
</html>
<?php COUCH::invoke(); ?>