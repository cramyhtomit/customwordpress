<?php
get_header();
echo "<h1>From Single Page</h1>";
while (have_posts()){
    the_post(); ?>

    <h2><?php echo the_title(); ?></h2>
    <p><?php echo the_content(); ?></p>
<?php
}
get_footer();
?>
