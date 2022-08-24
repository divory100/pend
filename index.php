<?php require_once( 'couch/cms.php' ); ?>
<cms:template title="Homepage" />
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
                <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="articles.php">Articles</a></li>
                <li class="nav-item"><a class="nav-link" href="podcasts.php">Podcasts</a></li>
                <li class="nav-item"><a class="nav-link" href="photos.php">Photos</a></li>
                <li class="nav-item"><a class="nav-link" href="videos.php">Videos</a></li>
            </ul>
        </nav>
      
        <div class="container-fluid invis-breaker"></div>

        <div class="container-fluid" id="articles">
            <div class="sidebar">
                
            </div>

            <div class="feature" style="flex:6">
                <div class="column c-large">
                    <div class="tile-group">
                        <a class="card tile" href="https://duckduckgo.com">
                            <img class="card-img-top" src="assets/large.png">
                            <div class="card-img-overlay bg-overlay">
                                <h4 class="card-title">Scientists prove that every 60 seconds, 1 minute passes</h4>
                                <span class="badge bg-danger">News & Factual</span>
                                <span class="badge bg-secondary">Science</span>
                                <p class="card-text">24/08/22 &#8226; by <i>Kool Kid</i></p>
                            </div>
                        </a>
                    </div>
                    <div class="tile-group">
                        <a class="card tile" href="https://duckduckgo.com">
                            <img class="card-img-top" src="assets/medium.jpg">
                            <div class="card-img-overlay bg-overlay">
                                <h4 class="card-title">Is water wet?</h4>
                                <span class="badge bg-primary">Opinion</span>
                                <span class="badge bg-secondary">Controversial</span>
                                <p class="card-text">24/08/22 &#8226; by <i>Kool Kid</i></p>
                            </div>
                        </a>
                        <a class="card tile hmid-3" href="https://duckduckgo.com">
                            <img class="card-img-top" src="assets/medium2.jpg">
                            <div class="card-img-overlay bg-overlay">
                                <h4 class="card-title">It: Chapter 2</h4>
                                <span class="badge bg-success">Creative</span>
                                <p class="card-text">24/08/22 &#8226; by <i>Kool Kid</i></p>
                            </div>
                        </a>
                        <a class="card tile" href="https://duckduckgo.com">
                            <img class="card-img-top" src="assets/medium.jpg">
                            <div class="card-img-overlay bg-overlay">
                                <h4 class="card-title">How long is a piece of string?</h4>
                                <span class="badge bg-primary">Opinion</span>
                                <p class="card-text">24/08/22 &#8226; by <i>Kool Kid</i></p>
                            </div>
                        </a>
                    </div>
                    <div class="tile-group">
                        <a class="card tile hmid-2-l" href="https://duckduckgo.com">
                            <img class="card-img-top" src="assets/large.png">
                            <div class="card-img-overlay bg-overlay">
                                <h4 class="card-title">War and Peace</h4>
                                <span class="badge bg-success">Creative</span>
                                <span class="badge bg-secondary">Boring</span>
                                <p class="card-text">24/08/22 &#8226; by <i>Kool Kid</i></p>
                            </div>
                        </a>
                        <a class="card tile" href="https://duckduckgo.com">
                            <img class="card-img-top" src="assets/medium3.jpg">
                            <div class="card-img-overlay bg-overlay">
                                <h4 class="card-title">Crime and Punishment</h4>
                                <span class="badge bg-success">Creative</span>
                                <p class="card-text">24/08/22 &#8226; by <i>Kool Kid</i></p>
                            </div>
                        </a>
                    </div>
                </div>
    
                <div class="column c-small">
                    <div class="tile-group">
                        <a class="card tile" href="https://duckduckgo.com">
                            <img class="card-img-top" src="assets/medium.jpg">
                            <div class="card-img-overlay bg-overlay">
                                <h4 class="card-title">What happens if Pinocchio says 'My nose will grow'?</h4>
                                <span class="badge bg-primary">Opinion</span>
                                <p class="card-text">24/08/22 &#8226; by <i>Kool Kid</i></p>
                            </div>
                        </a>
                    </div>
                    <div class="tile-group tg-vert">
                        <a class="card tile" href="https://duckduckgo.com">
                            <span class="badge bg-danger">News & Factual</span>
                            <div class="card-footer">Small news story</div>
                        </a>
                        <a class="card tile vmid-3" href="https://duckduckgo.com">
                            <span class="badge bg-primary">Opinion</span>
                            <div class="card-footer">Small opinion piece</div>
                        </a>
                        <a class="card tile" href="https://duckduckgo.com">
                            <span class="badge bg-danger">News & Factual</span>
                            <div class="card-footer">Small news story</div>
                        </a>
                    </div>
                    <div class="tile-group">
                        <a class="card tile" href="https://duckduckgo.com">
                            <img class="card-img-top" src="assets/an225.webp">
                            <div class="card-img-overlay bg-overlay">
                                <h4 class="card-title">What came first - the chicken or the egg?</h4>
                                <span class="badge bg-primary">Opinion</span>
                                <span class="badge bg-secondary">Science</span>
                                <p class="card-text">24/08/22 &#8226; by <i>Kool Kid</i></p>
                            </div>
                        </a>
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

            <div class="feature" style="flex:6">
                <div class="column">
                    <div class="tile-group">
                        <a class="card tile" href="https://duckduckgo.com">
                            <img class="card-img-top" src="assets/large.png">
                            <div class="card-img-overlay bg-overlay">
                                <h4 class="card-title">kool podcast</h4>
                                <span class="badge bg-primary">Opinion</span>
                                <span class="badge bg-secondary">we live in a society</span>
                                <p class="card-text">Episode 3</p>
                            </div>
                        </a>
                    </div>
                    <div class="tile-group">
                        <a class="card tile" href="https://duckduckgo.com">
                            <img class="card-img-top" src="assets/medium3.jpg">
                            <div class="card-img-overlay bg-overlay">
                                <h4 class="card-title">kooler podcast</h4>
                                <span class="badge bg-primary">Opinion</span>
                                <p class="card-text">Episode 5</p>
                            </div>
                        </a>
                    </div>
                </div>
    
                <div class="column">
                    <div class="tile-group">
                        <a class="card tile" href="https://duckduckgo.com">
                            <img class="card-img-top" src="assets/an225.webp">
                            <div class="card-img-overlay bg-overlay">
                                <h4 class="card-title">koolest podcast</h4>
                                <span class="badge bg-primary">Opinion</span>
                                <span class="badge bg-secondary">Aviation</span>
                                <p class="card-text">Episode 1</p>
                            </div>
                        </a>
                    </div>
                    <div class="tile-group">
                        <a class="card tile" href="https://duckduckgo.com">
                            <img class="card-img-top" src="assets/medium2.jpg">
                            <div class="card-img-overlay bg-overlay">
                                <h4 class="card-title">bad podcast</h4>
                                <span class="badge bg-danger">News & Factual</span>
                                <span class="badge bg-secondary">Science</span>
                                <p class="card-text">Episode 43</p>
                            </div>
                        </a>
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