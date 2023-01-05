<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Listen • Content' clonable="1" dynamic_folders="1">

    <cms:editable label="Author*" name="listen_author" type="text" />
    <cms:editable label="Content Type*" desc="Type of content, for example Podcast or Poetry" name="listen_content_type" type="text" />
    <cms:editable label="Audio File*" desc="The audio content" name="listen_content" type="file"/>

    <cms:editable label="Description" desc="optional: A paragraph displayed on the podcast/audio's page" name="listen_desc" type="richtext" toolbar="full"/>

    <cms:editable label="Main Image" desc="optional: The large image that appears at the top of the page" name="top_image"
        width='100%'
        height=' 400'
        type='image'
    />

    <cms:editable label="Thumbnail Image" name="cover_image" desc="optional but preferred: The thumbnail image for the page, displayed on the homepage and list views" type='image' />

</cms:template>

<!--Check if the page is displaying a specific page, or the list of pages-->
<cms:if k_is_page>
<!DOCTYPE html>
<html>
    <head>
        <title>Listen • Pend</title>
            
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <link rel="stylesheet" type="text/css" href="css/read.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!--settings for viewing website on a phone-->

        <style>
            .bg-primary {
                background-color: #0dcaf0 !important;
            }
        </style>
    </head>
    <body>
        <div class="pagewide p-1 fixed-top">
            <div class="container"><img src="assets/logo.jpg" height=60px></div>
        </div>
      
        <nav role="navigation" style="top:60px;" class="navbar navbar-expand-sm fixed-top justify-content-center custom-nav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="read.php">Read</a></li>
                <li class="nav-item"><a class="nav-link l-active" href="listen.php">Listen</a></li>
                <li class="nav-item"><a class="nav-link" href="watch.php">Watch</a></li>
            </ul>
        </nav>
      
        <div class="container-fluid invis-breaker"></div>

        <main class="container" style="padding-top:5px;padding-bottom:5px;" id="read-main">
            <div class="title" style="border-color: #0dcaf0 !important;">
                
                <!--get category-->
                <cms:if k_page_foldertitle>
                    <cms:set post_category=k_page_foldertitle />
                <cms:else />
                    <cms:set post_category="Uncategorised" />
                </cms:if>

                <h1><a href="<cms:show k_page_link />"><cms:show k_page_title /></a></h1>
                <h6>
                    <cms:date k_page_date format='jS M Y'/> • By <cms:show listen_author /> &#8226; <cms:show k_comments_count /> comments<br>
                    <span class="badge bg-primary"><cms:show listen_content_type /></span>
                    <span class="badge bg-secondary"><cms:show post_category /></span>
                </h6>
            </div>

            <cms:if top_image>
                <img id="top-image" src="<cms:show top_image />" width=100% height=400px>
            </cms:if>

            <div class="audio-player">
                <audio style="width:100%;" controls>
                    <source src="<cms:show listen_content />">
                    Your browser does not support HTML5 audio.
                </audio>
            </div>

            <div class="text-body">
                <cms:show listen_desc />
            </div>
        </main>
    </body>
</html>
<cms:else />
    <cms:embed 'listen_homepage.html' />
</cms:if>
<?php COUCH::invoke(); ?>