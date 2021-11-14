<?php
get_header();
$title = get_field('title');
$description = get_field('description');
$imageArray = get_field('image');
$image = $imageArray['sizes']['large'];
?>

<section class="wp-hero" id="hero" style="background-image: url('<?php echo $image; ?>');">
  <div class="layer d-flex align-items-center">
    <div class="container">
      <div class="d-flex p-4">
        <div class="row pt-4">
          <div class="col-lg-6 col-12 d-flex flex-column justify-content-center align-items-center">
            <h1 class="text-light"><?php echo $title; ?></h1>
            <p class="text-light pt-3 pb-3"><?php echo $description; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
get_footer();
