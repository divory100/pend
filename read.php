<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Read • Content' clonable="1" dynamic_folders="1" commentable="1">

    <cms:editable label="Author*" name="read_author" type="text" />
    <cms:editable label="Content Type*" desc="Type of content, for example Fiction or Opinion" name="read_content_type" type="text" />
    <cms:editable label="Text Body*" desc="The content of the article; images can also be pasted in here" name="read_content" type="richtext" toolbar="full"/>

    <cms:editable label="Main Image" desc="optional: The large image that appears at the top of the article" name="top_image"
        width='100%'
        height=' 400'
        type='image'
    />

    <cms:editable label="Thumbnail Image" name="cover_image" desc="optional but preferred: The thumbnail image for the article, displayed on the homepage and list views" type='image' />

</cms:template>

<!--Check if the page is displaying a specific page, or the list of pages-->
<cms:if k_is_page>
<!DOCTYPE html>
<html>
    <head>
        <title>Read • Pend</title>
            
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <link rel="stylesheet" type="text/css" href="css/template.css">
        <link rel="stylesheet" type="text/css" href="css/comments.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!--settings for viewing website on a phone-->
    </head>
    <body>
        <div id="logo-banner" class="pagewide p-1 fixed-top">
            <div class="container"><img src="assets/logo.jpg" height=60px></div>
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

        <main class="container" style="padding-top:5px;padding-bottom:5px;" id="read-main">
            <div class="title">
                
                <!--get category-->
                <cms:if k_page_foldertitle>
                    <cms:set post_category=k_page_foldertitle />
                <cms:else />
                    <cms:set post_category="Uncategorised" />
                </cms:if>

                <h1><a href="<cms:show k_page_link />"><cms:show k_page_title /></a></h1>
                <h6>
                    <cms:date k_page_date format='jS M Y'/> • By <cms:show read_author /> &#8226; <cms:show k_comments_count /> comments<br>
                    <span class="badge bg-primary"><cms:show read_content_type /></span>
                    <span class="badge bg-secondary"><cms:show post_category /></span>
                </h6>
            </div>

            <cms:if top_image>
                <img id="top-image" src="<cms:show top_image />" width=100% height=400px>
            </cms:if>

            <div class="text-body">
                <cms:show read_content />
            </div>

            <cms:embed "comments_form.html" />
            
            <div class="comments-section">
                <h2>Comments</h2><br>
                <cms:if k_comments_count>
                    <cms:comments page_id=k_page_id order='asc'>
                        <li class="comment">
                            <div class="clearfix">
                                <small style="color:#0d6efd;font-size:15px;"><cms:show k_comment_author /> • <cms:date k_comment_date format='jS M Y' /></small>
                            </div>
                            <div>
                                <p style="font-size:20px;"><cms:show k_comment /></p>
                            </div>
                        </li>
                    </cms:comments>
                <cms:else />
                    <p>No comments yet. Be the first to add one!</p>
                </cms:if>
            </div>

        </main>

        <div class="mobile-breaker container-fluid invis-breaker"></div>

        <!--mobile navbar (bottom, symbols)-->
        <footer class="pend-navbar-m fixed-bottom mt-auto footer ">
            <div class="container">
                <span style="display:float">   
                    <a href="<cms:link masterpage='index.php' />"><img src="assets/home.png" width=40px height=40px></a>
                    <a href="<cms:link masterpage='read.php' />"><img src="assets/read.png" width=40px height=40px></a>
                    <a href="<cms:link masterpage='listen.php' />"><img src="assets/microphone.png" width=40px height=40px></a>
                    <a href="<cms:link masterpage='watch.php' />"><img src="assets/watch.png" width=40px height=40px></a>
                </span>
            </div>
        </footer>
    </body>
</html>
<cms:else />
    <cms:embed 'read_homepage.html' />
</cms:if>
<?php COUCH::invoke(); ?>