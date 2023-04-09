<?php
get_header();

echo "<h1>From Index Page</h1>";
while (have_posts()){
    the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></h2></a>
    <p><?php echo the_content(); ?></p>
    <hr />
<?php
}
get_footer();
?>




