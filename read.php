<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Read • Content' clonable="1">
    <cms:editable name="article_content" type="richtext" />

    <cms:editable name="article_image"
        width='100%'
        height=' 300'
        type='image'
    />
</cms:template>

<!--Check if the page is displaying a specific article, or the list of articles-->
<cms:if k_is_page>
<!DOCTYPE html>
<html>
    <head>
        <title>Article • Pend</title>
            
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
                <li class="nav-item"><a class="nav-link active" href="read.php">Read</a></li>
                <li class="nav-item"><a class="nav-link" href="listen.php">Listen</a></li>
                <li class="nav-item"><a class="nav-link" href="watch.php">Watch</a></li>
            </ul>
        </nav>
      
        <div class="container-fluid invis-breaker"></div>

        <main class="container">
            <div class="title-banner card" style="margin:0 !important;"> 
                <img class="card-img-top" src="<cms:show article_image />">
                <div class="card-img-overlay bg-overlay">
                    <br>
                    <h1>Title</h1>
                    <h4><i>Some One<i></h4>
                </div>
            </div>
            
            <cms:show article_content />
        </main>
    </body>
</html>
<cms:else />
    <cms:embed 'read_homepage.php' />
</cms:if>
<?php COUCH::invoke(); ?>