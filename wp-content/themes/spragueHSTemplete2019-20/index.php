<?php get_header();?><!--Get the header part of the page-->

<!--Actual blog-->
<div class="row">
    <div class="col-sm-8 blog-main">
        <?php get_template_part( 'content', get_post_format()); ?>
    </div>
    <?php get_sidebar ();?>
</div>

<?php get_footer(); ?>