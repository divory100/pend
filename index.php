<?php require_once( 'couch/cms.php' ); ?>
<cms:template title="Homepage" />
<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript">
        if (screen.width <= 699) {
            document.location = "m/index.html";
        }
        </script>
        
        <title>
            <cms:editable name="page_title" type="text">
                Pend
            </cms:editable>
        </title>

        
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
            <div class="container"><img src="assets/logo.jpg" height=60px></div>
        </div>
      
        <nav role="navigation" style="top:60px;" class="navbar navbar-expand-sm fixed-top justify-content-center custom-nav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link h-active" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="read.php">Read</a></li>
                <li class="nav-item"><a class="nav-link" href="listen.php">Listen</a></li>
                <li class="nav-item"><a class="nav-link" href="watch.php">Watch</a></li>
            </ul>
        </nav>
      
        <div class="container-fluid invis-breaker"></div>

        <div class="container-fluid" id="read">
            <div class="sidebar">
                
            </div>

            <div class="feature" style="flex:6">
                <div class="column c-large">
                    <div class="tile-group">
                        <a class="card tile" href="https://duckduckgo.com">
                            <img class="card-img-top" src="assets/large.png">
                            <div class="card-img-overlay bg-overlay">
                                <h4 class="card-title">Test long news article</h4>
                                <span class="badge bg-danger">News & Factual</span>
                                <span class="badge bg-secondary">Science</span>
                                <p class="card-text">13/9/22 &#8226; by <i>Some One</i></p>
                            </div>
                        </a>
                    </div>
                    <div class="tile-group">
                        <a class="card tile" href="https://duckduckgo.com">
                            <img class="card-img-top" src="assets/grey.png">
                            <div class="card-img-overlay bg-overlay">
                                <h4 class="card-title">Test opinion piece</h4>
                                <span class="badge bg-primary">Opinion</span>
                                <span class="badge bg-secondary">Controversial</span>
                                <p class="card-text">13/9/22 &#8226; by <i>Some One</i></p>
                            </div>
                        </a>
                        <a class="card tile hmid-3" href="https://duckduckgo.com">
                            <img class="card-img-top" src="assets/medium2.jpg">
                            <div class="card-img-overlay bg-overlay">
                                <h4 class="card-title">Test creative writing</h4>
                                <span class="badge bg-success">Creative</span>
                                <p class="card-text">13/9/22 &#8226; by <i>Some One</i></p>
                            </div>
                        </a>
                        <a class="card tile" href="https://duckduckgo.com">
                            <img class="card-img-top" src="assets/medium.jpg">
                            <div class="card-img-overlay bg-overlay">
                                <h4 class="card-title">Test opinion piece</h4>
                                <span class="badge bg-primary">Opinion</span>
                                <p class="card-text">13/9/22 &#8226; by <i>Some One</i></p>
                            </div>
                        </a>
                    </div>
                    <div class="tile-group">
                        <a class="card tile hmid-2-l" href="https://duckduckgo.com">
                            <img class="card-img-top" src="assets/large.png">
                            <div class="card-img-overlay bg-overlay">
                                <h4 class="card-title">Test creative writing piece</h4>
                                <span class="badge bg-success">Creative</span>
                                <span class="badge bg-secondary">test category</span>
                                <p class="card-text">13/9/22 &#8226; by <i>Some One</i></p>
                            </div>
                        </a>
                        <a class="card tile" href="https://duckduckgo.com">
                            <img class="card-img-top" src="assets/medium3.jpg">
                            <div class="card-img-overlay bg-overlay">
                                <h4 class="card-title">a long story</h4>
                                <span class="badge bg-success">Creative</span>
                                <p class="card-text">13/9/22 &#8226; by <i>Some One</i></p>
                            </div>
                        </a>
                    </div>
                </div>
    
                <div class="column c-small">
                    <div class="tile-group">
                        <a class="card tile" style="height:408px;" href="https://duckduckgo.com">
                            <img class="card-img-top" src="assets/medium.jpg" style="height:408px;">
                            <div class="card-img-overlay bg-overlay">
                                <h4 class="card-title">What happens if Pinocchio says 'My nose will grow'?</h4>
                                <span class="badge bg-primary">Opinion</span>
                                <p class="card-text">13/9/22 &#8226; by <i>Some One</i></p>
                            </div>
                        </a>
                    </div>
                    <div class="tile-group">
                        <a class="card tile" href="https://duckduckgo.com">
                            <img class="card-img-top" src="assets/medium.jpg">
                            <div class="card-img-overlay bg-overlay">
                                <h4 class="card-title">What came first - the chicken or the egg?</h4>
                                <span class="badge bg-primary">Opinion</span>
                                <span class="badge bg-secondary">Science</span>
                                <p class="card-text">13/9/22 &#8226; by <i>Some One</i></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="sidebar s-title">
                <a style="color:#0D6EFD !important;" href="read.php">READ &#10095;</a>
            </div>
        </div>

        <div class="container-fluid" id="listen">
            <div class="sidebar">
                
            </div>

            <div class="feature" style="flex:6">
                <div class="column">
                    <div class="tile-group">
                        <a class="card tile" href="https://duckduckgo.com">
                            <img class="card-img-top" src="assets/large.png">
                            <div class="card-img-overlay bg-overlay">
                                <h4 class="card-title">test podcast</h4>
                                <span class="badge bg-primary">Opinion</span>
                                <span class="badge bg-secondary">test category</span>
                                <p class="card-text">Episode 3</p>
                            </div>
                        </a>
                    </div>
                    <div class="tile-group">
                        <a class="card tile" href="https://duckduckgo.com">
                            <img class="card-img-top" src="assets/medium3.jpg">
                            <div class="card-img-overlay bg-overlay">
                                <h4 class="card-title">test podcast 2</h4>
                                <span class="badge bg-primary">Opinion</span>
                                <p class="card-text">Episode 5</p>
                            </div>
                        </a>
                    </div>
                </div>
    
                <div class="column">
                    <div class="tile-group">
                        <a class="card tile" href="https://duckduckgo.com">
                            <img class="card-img-top" src="assets/medium.jpg">
                            <div class="card-img-overlay bg-overlay">
                                <h4 class="card-title">test podcast 3</h4>
                                <span class="badge bg-primary">Opinion</span>
                                <span class="badge bg-secondary">another category</span>
                                <p class="card-text">Episode 1</p>
                            </div>
                        </a>
                    </div>
                    <div class="tile-group">
                        <a class="card tile" href="https://duckduckgo.com">
                            <img class="card-img-top" src="assets/medium2.jpg">
                            <div class="card-img-overlay bg-overlay">
                                <h4 class="card-title">test podcast 4</h4>
                                <span class="badge bg-danger">News & Factual</span>
                                <span class="badge bg-secondary">Science</span>
                                <p class="card-text">Episode 43</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="sidebar s-title">
                <a style="color:#0DCAF0 !important;" href="listen.php">LISTEN &#10095;</a>
            </div>
        </div>

        <div class="container-fluid" id="watch">
            <div class="sidebar">
                
            </div>

            <div class="feature" style="flex:6;">
                <div class="column">
                        <div class="tile-group">
                            <a class="card tile" href="https://duckduckgo.com">
                                <img class="card-img-top" src="assets/medium2.jpg">
                                <div class="card-img-overlay bg-overlay">
                                    <h4 class="card-title">album</h4>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="column">
                        <div class="tile-group">
                            <a class="card tile" href="https://duckduckgo.com">
                                <img class="card-img-top" src="assets/medium.jpg">
                                <div class="card-img-overlay bg-overlay">
                                    <h4 class="card-title">album 2</h4>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="column">
                        <div class="tile-group">
                            <a class="card tile" href="https://duckduckgo.com">
                                <img class="card-img-top" src="assets/large.png">
                                <div class="card-img-overlay bg-overlay">
                                    <h4 class="card-title">another album</h4>
                                </div>
                            </a>
                        </div>
                    </div>
            </div>

            <div class="sidebar s-title">
                <a style="color:blueviolet !important;" href="watch.php">WATCH &#10095;</a>
            </div>
        </div>

    </body>
</html>
<?php COUCH::invoke(); ?>