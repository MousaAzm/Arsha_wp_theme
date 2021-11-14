
<?php
get_header();
?>

<section class="page-section">
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="text-home m-4">
      <h2 class="text-center mt-3 mb-3"><?php the_title();?></h2> 
        <?php if (have_posts()) :
          while (have_posts()) :
            the_post(); ?>
            <?php if(has_post_thumbnail()):?>
            <img src="<?php the_post_thumbnail_url();?>" class="img-fluid">
            <?php endif; ?>
            <p class="mt-3"><?php the_content();?> </p>           
        <?php endwhile;
        endif; ?>
      </div>
    </div>
  </div>
</div>
</section>

<?php
get_footer();
?>