<?php require_once( 'couch/cms.php' ); ?>
<cms:template title="Homepage" />
<!DOCTYPE html>
<html>
    <head>
        <!-- MOBILE RELOCATION SCRIPT (OBSOLETE)
        <script type="text/javascript">
        if (screen.width <= 699) {
            document.location = "m.php";
        }
        </script>-->
        
        <title>
            <cms:editable name="page_title" type="text">
                Pend
            </cms:editable>
        </title>

        
        <link rel="stylesheet" type="text/css" href="<cms:show k_site_link />css/main.css">
        <link rel="stylesheet" type="text/css" href="<cms:show k_site_link />css/navbar.css">
        <link rel="stylesheet" type="text/css" href="<cms:show k_site_link />css/home.css">
        <link rel="stylesheet" type="text/css" href="<cms:show k_site_link />css/tile.css">

        <script src="<cms:show k_site_link />js/utils.js"></script>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!--settings for viewing website on a phone-->
    </head>
    <body>
        <div id="logo-banner" class="pagewide p-1 fixed-top">
            <div class="container"><img src="<cms:show k_site_link />assets/logo.jpg" height=60px></div>
        </div>
        
        <!--Default navbar (top)-->
        <nav id="pend-navbar-dtop" role="navigation" style="top:60px;" class="pend-navbar navbar navbar-expand-sm fixed-top justify-content-center custom-nav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link h-active" href="<cms:link masterpage='index.php' />">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<cms:link masterpage='read.php' />">Read</a></li>
                <li class="nav-item"><a class="nav-link" href="<cms:link masterpage='listen.php' />">Listen</a></li>
                <li class="nav-item"><a class="nav-link" href="<cms:link masterpage='watch.php' />">Watch</a></li>
            </ul>
        </nav>
      
        <div id="desktop-breaker" class="container-fluid invis-breaker"></div>
        
        <div class="mobile-breaker">
            <br>
            <br>
            <br>
        </div>

        <div class="container-fluid" id="read">
            <div class="sidebar">
                
            </div>

            <div class="feature" style="flex:6">
                <div class="column c-large">
                    <div class="tile-group">
                        <cms:pages masterpage='read.php' orderby='publish_date' order='desc' limit='1'>
                            <a class="card tile" href="<cms:show k_page_link />">
                                <img class="card-img-top" src="<cms:show cover_image />">
                                <div class="card-img-overlay bg-overlay">
                                    <h4 class="card-title"><cms:show k_page_title /></h4>
                                    <span class="badge bg-primary"><cms:show read_content_type /></span>
                                    <span class="badge bg-secondary"><cms:show k_page_foldertitle /></span>
                                    <p class="card-text">
                                        <cms:date k_page_date format='jS M Y'/> &#8226; by <i><cms:show read_author /></i><br>
                                        <cms:excerpt count="100" truncate_chars="1" trail="..."><cms:show read_content /></cms:excerpt>
                                    </p>
                                </div>
                            </a>
                        </cms:pages>
                    </div>
                    <div class="tile-group">

                        <cms:pages masterpage='read.php' orderby='publish_date' order='desc' limit='1' offset='2'>
                            <a class="card tile" href="<cms:show k_page_link />">
                                <img class="card-img-top" src="<cms:show cover_image />">
                                <div class="card-img-overlay bg-overlay">
                                    <h4 class="card-title"><cms:show k_page_title /></h4>
                                    <span class="badge bg-primary"><cms:show read_content_type /></span>
                                    <span class="badge bg-secondary"><cms:show k_page_foldertitle /></span>
                                    <p class="card-text">
                                        <cms:date k_page_date format='jS M Y'/> &#8226; by <i><cms:show read_author /></i><br>
                                    </p>
                                </div>
                            </a>
                        </cms:pages>

                        <cms:pages masterpage='read.php' orderby='publish_date' order='desc' limit='1' offset='3'>
                            <a class="card tile hmid-3" href="<cms:show k_page_link />">
                                <img class="card-img-top" src="<cms:show cover_image />">
                                <div class="card-img-overlay bg-overlay">
                                    <h4 class="card-title"><cms:show k_page_title /></h4>
                                    <span class="badge bg-primary"><cms:show read_content_type /></span>
                                    <span class="badge bg-secondary"><cms:show k_page_foldertitle /></span>
                                    <p class="card-text">
                                        <cms:date k_page_date format='jS M Y'/> &#8226; by <i><cms:show read_author /></i><br>
                                    </p>
                                </div>
                            </a>
                        </cms:pages>

                        <cms:pages masterpage='read.php' orderby='publish_date' order='desc' limit='1' offset='4'>
                            <a class="card tile" href="<cms:show k_page_link />">
                                <img class="card-img-top" src="<cms:show cover_image />">
                                <div class="card-img-overlay bg-overlay">
                                    <h4 class="card-title"><cms:show k_page_title /></h4>
                                    <span class="badge bg-primary"><cms:show read_content_type /></span>
                                    <span class="badge bg-secondary"><cms:show k_page_foldertitle /></span>
                                    <p class="card-text">
                                        <cms:date k_page_date format='jS M Y'/> &#8226; by <i><cms:show read_author /></i><br>
                                    </p>
                                </div>
                            </a>
                        </cms:pages>
                    </div>
                    <div class="tile-group">
                        <cms:pages masterpage='read.php' orderby='publish_date' order='desc' limit='1' offset='5'>
                            <a class="card tile hmid-2-l" href="<cms:show k_page_link />">
                                <img class="card-img-top" src="<cms:show cover_image />">
                                <div class="card-img-overlay bg-overlay">
                                    <h4 class="card-title"><cms:show k_page_title /></h4>
                                    <span class="badge bg-primary"><cms:show read_content_type /></span>
                                    <span class="badge bg-secondary"><cms:show k_page_foldertitle /></span>
                                    <p class="card-text">
                                        <cms:date k_page_date format='jS M Y'/> &#8226; by <i><cms:show read_author /></i><br>
                                    </p>
                                </div>
                            </a>
                        </cms:pages>

                        <cms:pages masterpage='read.php' orderby='publish_date' order='desc' limit='1' offset='6'>
                            <a class="card tile" href="<cms:show k_page_link />">
                                <img class="card-img-top" src="<cms:show cover_image />">
                                <div class="card-img-overlay bg-overlay">
                                    <h4 class="card-title"><cms:show k_page_title /></h4>
                                    <span class="badge bg-primary"><cms:show read_content_type /></span>
                                    <span class="badge bg-secondary"><cms:show k_page_foldertitle /></span>
                                    <p class="card-text">
                                        <cms:date k_page_date format='jS M Y'/> &#8226; by <i><cms:show read_author /></i><br>
                                    </p>
                                </div>
                            </a>
                        </cms:pages>
                    </div>
                </div>
    
                <div class="column c-small">
                    <div class="tile-group">
                        <cms:pages masterpage='read.php' orderby='publish_date' order='desc' limit='1' offset='1'>
                            <a class="card tile" style="height:408px;" href="<cms:show k_page_link />">
                                <img class="card-img-top" src="<cms:show cover_image />" style="height:408px;">
                                <div class="card-img-overlay bg-overlay">
                                    <h4 class="card-title"><cms:show k_page_title /></h4>
                                    <span class="badge bg-primary"><cms:show read_content_type /></span>
                                    <span class="badge bg-secondary"><cms:show k_page_foldertitle /></span>
                                    <p class="card-text">
                                        <cms:date k_page_date format='jS M Y'/> &#8226; by <i><cms:show read_author /></i><br>
                                        <cms:excerpt count="100" truncate_chars="1" trail="..."><cms:show read_content /></cms:excerpt>
                                    </p>
                                </div>
                            </a>
                        </cms:pages>
                    </div>
                    <div class="tile-group">
                        <cms:pages masterpage='read.php' orderby='publish_date' order='desc' limit='1' offset='7'>
                            <a class="card tile" href="<cms:show k_page_link />">
                                <img class="card-img-top" src="<cms:show cover_image />">
                                <div class="card-img-overlay bg-overlay">
                                    <h4 class="card-title"><cms:show k_page_title /></h4>
                                    <span class="badge bg-primary"><cms:show read_content_type /></span>
                                    <span class="badge bg-secondary"><cms:show k_page_foldertitle /></span>
                                    <p class="card-text">
                                        <cms:date k_page_date format='jS M Y'/> &#8226; by <i><cms:show read_author /></i><br>
                                    </p>
                                </div>
                            </a>
                        </cms:pages>
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
                        <cms:pages masterpage='listen.php' orderby='publish_date' order='desc' limit='1'>
                            <a class="card tile" href="<cms:show k_page_link />">
                                <img class="card-img-top" src="<cms:show cover_image />">
                                <div class="card-img-overlay bg-overlay">
                                    <h4 class="card-title"><cms:show k_page_title /></h4>
                                    <span class="badge bg-primary"><cms:show listen_content_type /></span>
                                    <span class="badge bg-secondary"><cms:show k_page_foldertitle /></span>
                                    <p class="card-text">
                                        <cms:date k_page_date format='jS M Y'/> &#8226; by <i><cms:show listen_author /></i><br>
                                    </p>
                                </div>
                            </a>
                        </cms:pages>
                    </div>
                    <div class="tile-group">
                        <cms:pages masterpage='listen.php' orderby='publish_date' order='desc' limit='1' offset='1'>
                            <a class="card tile" href="<cms:show k_page_link />">
                                <img class="card-img-top" src="<cms:show cover_image />">
                                <div class="card-img-overlay bg-overlay">
                                    <h4 class="card-title"><cms:show k_page_title /></h4>
                                    <span class="badge bg-primary"><cms:show listen_content_type /></span>
                                    <span class="badge bg-secondary"><cms:show k_page_foldertitle /></span>
                                    <p class="card-text">
                                        <cms:date k_page_date format='jS M Y'/> &#8226; by <i><cms:show listen_author /></i><br>
                                    </p>
                                </div>
                            </a>
                        </cms:pages>
                    </div>
                </div>
    
                <div class="column">
                    <div class="tile-group">
                        <cms:pages masterpage='listen.php' orderby='publish_date' order='desc' limit='1' offset='2'>
                            <a class="card tile" href="<cms:show k_page_link />">
                                <img class="card-img-top" src="<cms:show cover_image />">
                                <div class="card-img-overlay bg-overlay">
                                    <h4 class="card-title"><cms:show k_page_title /></h4>
                                    <span class="badge bg-primary"><cms:show listen_content_type /></span>
                                    <span class="badge bg-secondary"><cms:show k_page_foldertitle /></span>
                                    <p class="card-text">
                                        <cms:date k_page_date format='jS M Y'/> &#8226; by <i><cms:show listen_author /></i><br>
                                    </p>
                                </div>
                            </a>
                        </cms:pages>
                    </div>
                    <div class="tile-group">
                        <cms:pages masterpage='listen.php' orderby='publish_date' order='desc' limit='1' offset='3'>
                            <a class="card tile" href="<cms:show k_page_link />">
                                <img class="card-img-top" src="<cms:show cover_image />">
                                <div class="card-img-overlay bg-overlay">
                                    <h4 class="card-title"><cms:show k_page_title /></h4>
                                    <span class="badge bg-primary"><cms:show listen_content_type /></span>
                                    <span class="badge bg-secondary"><cms:show k_page_foldertitle /></span>
                                    <p class="card-text">
                                        <cms:date k_page_date format='jS M Y'/> &#8226; by <i><cms:show listen_author /></i><br>
                                    </p>
                                </div>
                            </a>
                        </cms:pages>
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
                            <cms:pages masterpage='watch.php' orderby='publish_date' order='desc' limit='1'>
                                <a class="card tile" href="<cms:show k_page_link />">
                                    <img class="card-img-top" src="<cms:show cover_image />">
                                    <div class="card-img-overlay bg-overlay">
                                        <h4 class="card-title"><cms:show k_page_title /></h4>
                                        <span class="badge bg-primary"><cms:show watch_content_type /></span>
                                        <span class="badge bg-secondary"><cms:show k_page_foldertitle /></span>
                                        <p class="card-text">
                                            <cms:date k_page_date format='jS M Y'/> &#8226; by <i><cms:show watch_author /></i><br>
                                        </p>
                                    </div>
                                </a>
                            </cms:pages>
                        </div>
                    </div>

                    <div class="column">
                        <div class="tile-group">
                            <cms:pages masterpage='watch.php' orderby='publish_date' order='desc' limit='1' offset='1'>
                                <a class="card tile" href="<cms:show k_page_link />">
                                    <img class="card-img-top" src="<cms:show cover_image />">
                                    <div class="card-img-overlay bg-overlay">
                                        <h4 class="card-title"><cms:show k_page_title /></h4>
                                        <span class="badge bg-primary"><cms:show watch_content_type /></span>
                                        <span class="badge bg-secondary"><cms:show k_page_foldertitle /></span>
                                        <p class="card-text">
                                            <cms:date k_page_date format='jS M Y'/> &#8226; by <i><cms:show watch_author /></i><br>
                                        </p>
                                    </div>
                                </a>
                            </cms:pages>
                        </div>
                    </div>

                    <div class="column">
                        <div class="tile-group">
                            <cms:pages masterpage='watch.php' orderby='publish_date' order='desc' limit='1' offset='1'>
                                <a class="card tile" href="<cms:show k_page_link />">
                                    <img class="card-img-top" src="<cms:show cover_image />">
                                    <div class="card-img-overlay bg-overlay">
                                        <h4 class="card-title"><cms:show k_page_title /></h4>
                                        <span class="badge bg-primary"><cms:show watch_content_type /></span>
                                        <span class="badge bg-secondary"><cms:show k_page_foldertitle /></span>
                                        <p class="card-text">
                                            <cms:date k_page_date format='jS M Y'/> &#8226; by <i><cms:show watch_author /></i><br>
                                        </p>
                                    </div>
                                </a>
                            </cms:pages>
                        </div>
                    </div>
            </div>

            <div class="sidebar s-title">
                <a style="color:blueviolet !important;" href="watch.php">WATCH &#10095;</a>
            </div>
        </div>


        <!--Mobile versions of homepage tiles-->
        <div id="read-m">
            <a class="section-link-m" href="<cms:link masterpage='read.php' />">
                <div>
                    <h4 class="card-title">Read</h4>
                </div>
            </a>

            <cms:pages masterpage="read.php" folder=k_folder_name orderby='publish_date' order='desc' limit="4">
                <!--get category-->
                <cms:if k_page_foldertitle>
                    <cms:set post_category=k_page_foldertitle />
                <cms:else />
                    <cms:set post_category="Uncategorised" />
                </cms:if>

                <a class="card tile" style="display:block;height:190px;width:98% !important;margin:2px !important;border-radius:4px !important;" href="<cms:show k_page_link />">
                    <img class="card-img-top" src="<cms:show cover_image />" style="height:190px;border-left:solid #0d6efd 5px;">
                    <div class="card-img-overlay bg-overlay">
                        <h4 class="card-title"><cms:show k_page_title /></h4>
                        <span class="badge bg-primary"><cms:show read_content_type /></span>
                        <span class="badge bg-secondary"><cms:show post_category /></span>
                        <p class="card-text">
                            <cms:date k_page_date format='jS M Y'/> &#8226; by <i><cms:show read_author /></i><br>
                            <cms:excerpt count="65" truncate_chars="1" trail="..."><cms:show read_content /></cms:excerpt>
                        </p>
                    </div>
                </a>

            </cms:pages>
        </div>

        <div id="listen-m">

            <a class="section-link-m" style="background-color:#0dcaf0;margin-top:5px !important;" href="<cms:link masterpage='listen.php' />">
                <div>
                    <h4 class="card-title">Listen</h4>
                </div>
            </a>

            <cms:pages masterpage="listen.php" folder=k_folder_name orderby='publish_date' order='desc' limit="4">
                <!--get category-->
                <cms:if k_page_foldertitle>
                    <cms:set post_category=k_page_foldertitle />
                <cms:else />
                    <cms:set post_category="Uncategorised" />
                </cms:if>

                <a class="card tile" style="display:block;height:190px;width:98% !important;margin:2px !important;border-radius:4px !important;" href="<cms:show k_page_link />">
                    <img class="card-img-top" src="<cms:show cover_image />" style="height:190px;border-left:solid #0dcaf0 5px;">
                    <div class="card-img-overlay bg-overlay">
                        <h4 class="card-title"><cms:show k_page_title /></h4>
                        <span class="badge bg-primary"><cms:show listen_content_type /></span>
                        <span class="badge bg-secondary"><cms:show post_category /></span>
                        <p class="card-text">
                            <cms:date k_page_date format='jS M Y'/> &#8226; by <i><cms:show listen_author /></i><br>
                            <cms:excerpt count="65" truncate_chars="1" trail="..."><cms:show listen_desc /></cms:excerpt>
                        </p>
                    </div>
                </a>

            </cms:pages>
        </div>

        <div id="watch-m">

            <a class="section-link-m" style="background-color:blueviolet;margin-top:5px !important;" href="<cms:link masterpage='watch.php' />">
                <div>
                    <h4 class="card-title">Watch</h4>
                </div>
            </a>

            <cms:pages masterpage="watch.php" folder=k_folder_name orderby='publish_date' order='desc' limit="4">
                <!--get category-->
                <cms:if k_page_foldertitle>
                    <cms:set post_category=k_page_foldertitle />
                <cms:else />
                    <cms:set post_category="Uncategorised" />
                </cms:if>

                <a class="card tile" style="display:block;height:190px;width:98% !important;margin:2px !important;border-radius:4px !important;" href="<cms:show k_page_link />">
                    <img class="card-img-top" src="<cms:show cover_image />" style="height:190px;border-left:solid blueviolet 5px;">
                    <div class="card-img-overlay bg-overlay">
                        <h4 class="card-title"><cms:show k_page_title /></h4>
                        <span class="badge bg-primary"><cms:show watch_content_type /></span>
                        <span class="badge bg-secondary"><cms:show post_category /></span>
                        <p class="card-text">
                            <cms:date k_page_date format='jS M Y'/> &#8226; by <i><cms:show watch_author /></i><br>
                            <cms:excerpt count="65" truncate_chars="1" trail="..."><cms:show watch_desc /></cms:excerpt>
                        </p>
                    </div>
                </a>

            </cms:pages>
        </div>

        <div class="mobile-breaker container-fluid invis-breaker"></div>

        <!--mobile navbar (bottom, symbols)-->
        <footer class="pend-navbar-m fixed-bottom mt-auto footer ">
            <div class="container">
                <span style="display:float">   
                    <a href="<cms:link masterpage='index.php' />"><img src="<cms:show k_site_link />assets/home.png" width=40px height=40px></a>
                    <a href="<cms:link masterpage='read.php' />"><img src="<cms:show k_site_link />assets/read.png" width=40px height=40px></a>
                    <a href="<cms:link masterpage='listen.php' />"><img src="<cms:show k_site_link />assets/microphone.png" width=40px height=40px></a>
                    <a href="<cms:link masterpage='watch.php' />"><img src="<cms:show k_site_link />assets/watch.png" width=40px height=40px></a>
                </span>
            </div>
        </footer>

    </body>
</html>
<?php COUCH::invoke(); ?>