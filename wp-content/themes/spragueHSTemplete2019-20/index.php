<?php get_header();?><!--Get the header part of the page-->

<!--Actual page-->
<div class="d-flex" id="wrapper"><!--Wrapper used for nav/main-->
<?php get_sidebar ();?><!--Sidebar (Extended)-->
    <div class="blog-main">
        <?php get_template_part( 'content', get_post_format()); ?><!--(Main Content)-->
    </div>
    <?php get_footer(); ?><!--Footer-->
</div>