<?php require_once( 'couch/cms.php' ); ?>
<cms:template title="Add a new article" clonable="1">
    <cms:editable name="article_content" type="richtext" />
</cms:template>
<cms:if k_is_page >
<!doctype html>
<html>
    <body>
        <div style="background-color:grey;">
            <h1><cms:show k_page_title /></h1>
            <h3><cms:date k_page_date format="jS M, y"/></h3>
            <cms:show article_content />
        </div>
    </body>
</html>
<cms:else />
    <cms:embed 'articles_list.php' />
</cms:if>
<?php COUCH::invoke(); ?>