<?php get_header();  ?>

<div class="large-hero">
    <video class="large-hero__video" playsinline autoplay="" loop="" muted="" poster="<?php echo get_theme_file_uri('/assets/img/cons.jpg'); ?>">
        <source src="<?php echo get_theme_file_uri('/assets/videos/ws.mp4'); ?>" type="video/mp4">
    </video>
    <div class="large-hero__text-content">
        <div class="wrapper">
            <h1 class="large-hero__title">A + D is Dedicated</h1>
            <p class="large-hero__description">Work with our highly skilled team to
                develop your next project.</p>
            <p><a href="#" class="btn btn--empty btn--effect btn--large">About Us</a></p>
        </div>
    </div>
</div>

<?php
  get_footer();
?>

