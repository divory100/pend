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
    <body>
        <img src="<cms:show article_image />" style="width:100%; height:300px;">

        <cms:show article_content />
    </body>
</html>
<cms:else />
    <h1>Welcome to the list view</h1>
</cms:if>
<?php COUCH::invoke(); ?>