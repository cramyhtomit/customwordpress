<?php get_header();

while(have_posts()) {
    the_post(); ?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/bus.jpg')?>)">
  </div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title"><?php the_title(); ?></h1>
    <div class="page-banner__intro">
      <!-- TODO: DONT FORGET TO REPLACE ME LATER -->
      <p>DONT FORGET TO REPLACE ME LATER</p>
    </div>
  </div>
</div>

<div class="container container--narrow page-section">

  <?php 
  $parent_ID = wp_get_post_parent_id( get_the_ID());
  if ($parent_ID) { ?>
  <div class="metabox metabox--position-up metabox--with-home-link">
    <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($parent_ID); ?>"><i class="fa fa-home"
          aria-hidden="true"></i>
        <?php echo get_the_title($parent_ID); ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
  </div>
  <?php  }
  ?>


  <?php 
  // THIS WILL CHECK IF THE CURRENT PAGE HAS A CHILD.
  $hasChild = get_pages(array(
    'child_of' => get_the_ID()
  ));

  // PARENT_ID WILL RETURN 0 IF CURRENT PAGE IS A PARENT PAGE. 
  // PARENT_ID WILL RETURN A NUMBER IF CURRENT PAGE IS CHILD PAGE. 
  if($parent_ID or $hasChild) {?>
  <div class="page-links">
    <h2 class="page-links__title"><a
        href="<?php echo get_permalink( $parent_ID ); ?>"><?php echo get_the_title($parent_ID); ?></a>
    </h2>
    <ul class="min-list">
      <?php 

        $id = get_the_ID();
        if ($parent_ID) {
          $id = $parent_ID;
        }
        
        // THIS IS THE SAME GET_PAGES() BUT THIS HANDLES THE PAGES, LINKS AND RETURN <LI></LI>
        wp_list_pages(array(
          'title_li' => NULL,
          'child_of' => $id,
          'sort_column' => 'menu_order'
        )); 

      ?>
    </ul>
  </div>
  <?php } ?>

  <div class="generic-content">
    <?php echo the_content(); ?>
  </div>



  <?php } get_footer(); ?>