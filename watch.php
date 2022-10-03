<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Watch • Content' clonable="1">

</cms:template>

<!--Check if the page is displaying a specific video or album, or the list of photos/videos-->
<cms:if k_is_page>
<!DOCTYPE html>
<html>
    <head>
        <title>Media • Pend</title>
            
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <link rel="stylesheet" type="text/css" href="css/read.css">

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
                <li class="nav-item"><a class="nav-link" href="read.php">Read</a></li>
                <li class="nav-item"><a class="nav-link" href="listen.php">Listen</a></li>
                <li class="nav-item"><a class="nav-link active" href="watch.php">Watch</a></li>
            </ul>
        </nav>
      
        <div class="container-fluid invis-breaker"></div>

        <main class="container">
            
        </main>
    </body>
</html>
<cms:else />
    <cms:embed 'watch_homepage.html' />
</cms:if>
<?php COUCH::invoke(); ?>