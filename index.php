<?php require_once( 'couch/cms.php' ); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>placeholder</title>

        
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
            <div class="container"><h1>PLACEHOLDER</h1></div>
        </div>
      
        <nav role="navigation" style="top:60px;" class="navbar navbar-expand-sm fixed-top justify-content-center custom-nav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link active" href="index.html">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="articles.html">Articles</a></li>
                <li class="nav-item"><a class="nav-link" href="podcasts.html">Podcasts</a></li>
                <li class="nav-item"><a class="nav-link" href="photos.html">Photos</a></li>
                <li class="nav-item"><a class="nav-link" href="videos.html">Videos</a></li>
            </ul>
        </nav>
      
        <div class="container-fluid invis-breaker"></div>

        <div class="container-fluid" id="articles">
            <div class="sidebar">
                
            </div>

            <div class="feature" style="height:500px;flex:6">
                <div class="column c-large">
                    <div class="tile-group">
                        <div class="tile">tile</div>
                    </div>
                    <div class="tile-group">
                        <div class="tile">tile</div>
                        <div class="tile hmid-3">tile</div>
                        <div class="tile">tile</div>
                    </div>
                </div>
    
                <div class="column c-small">
                    <div class="tile-group">
                        <div class="tile">tile</div>
                    </div>
                    <div class="tile-group tg-vert">
                        <div class="tile">tile</div>
                        <div class="tile vmid-3">tile</div>
                        <div class="tile">tile</div>
                    </div>
                </div>
            </div>

            <div class="sidebar s-title" style="color:#0D6EFD">
                ARTICLES
            </div>
        </div>

        <div class="container-fluid" id="podcasts">
            <div class="sidebar">
                
            </div>

            <div class="feature" style="height:500px;flex:6">
                <div class="column">
                    <div class="tile-group">
                        <div class="tile">tile</div>
                    </div>
                    <div class="tile-group">
                        <div class="tile hmid-2-l">tile</div>
                        <div class="tile">tile</div>
                    </div>
                </div>
    
                <div class="column">
                    <div class="tile-group">
                        <div class="tile">tile</div>
                    </div>
                    <div class="tile-group">
                        <div class="tile hmid-2-l">tile</div>
                        <div class="tile">tile</div>
                    </div>
                </div>
            </div>

            <div class="sidebar s-title" style="color:#0DCAF0;">
                PODCASTS
            </div>
        </div>

        <div class="container-fluid" id="photos">
            <div class="sidebar">
                
            </div>

            <div class="feature" style="height:250px;flex:6">
                <div class="column">
                    <div class="tile-group">
                        <div class="tile">tile</div>
                    </div>
                </div>

                <div class="column c-small">
                    <div class="tile-group tg-vert">
                        <div class="tile vmid-2-t">tile</div>
                        <div class="tile">tile</div>
                    </div>
                </div>

                <div class="column c-small">
                    <div class="tile-group tg-vert">
                        <div class="tile vmid-2-t">tile</div>
                        <div class="tile">tile</div>
                    </div>
                </div>
            </div>

            <div class="sidebar s-title" style="color:#FFC107;">
                PHOTOS
            </div>
        </div>

        <div class="container-fluid" id="videos">
            <div class="sidebar">
                
            </div>

            <div class="feature" style="height:250px;flex:6">
                <div class="column">
                    <div class="tile-group">
                        <div class="tile">tile</div>
                        <div class="tile hmid-4-l">tile</div>
                        <div class="tile hmid-4-r">tile</div>
                        <div class="tile">tile</div>
                    </div>
                </div>
            </div>

            <div class="sidebar s-title" style="color:blueviolet;">
                VIDEOS
            </div>
        </div>


    </body>
</html>
<?php COUCH::invoke(); ?>