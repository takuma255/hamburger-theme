<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">
  <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri().'/favicon.png'); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="home l-body">
  <?php wp_body_open(); ?>
  <header class="l-header p-header">
    <button class="c-headline js-menubtn">Menu</button>
    <div class="c-wrapper">
      <h1 class="c-headline">
        <a class="c-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <?php bloginfo( 'name' ); ?>
        </a>
      </h1>
      <?php get_search_form(); ?>
    </div>
  </header>