<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header>
  <?php
  //Include post (project) title
  if (is_singular()) {
    echo '<h1 class="entry-title">';
  }
  else {
    echo '<h2 class="entry-title">';
  } ?>
  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
    <?php the_title(); ?>
  </a>
  <?php
  if (is_singular()) {
    echo '</h1>';
  }
  else {
    echo '</h2>';
  }
  ?>
  <?php
  //Include edit post link
  edit_post_link();
  ?>
</header>
<?php
//Include entry-content.php
get_template_part('entry', 'content');
?>
