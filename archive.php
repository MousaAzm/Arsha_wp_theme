<?php
get_header();
?>

<section class="page-section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php if (have_posts()) :
          while (have_posts()) :
            the_post(); ?>
            <div class="card m-3 shadow">
              <?php if (has_post_thumbnail()) : ?>
                <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="Card image cap">
              <?php endif; ?>
              <div class="card-body">
                <h2 class="card-title text-center mt-3 mb-3"><?php the_title(); ?></h2>
                <p class="card-text"><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-info">Read More</a>
              </div>
            </div>
        <?php endwhile;
        endif; ?>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
?>