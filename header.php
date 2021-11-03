<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php bloginfo('name'); ?>
  </title>
  <meta name=" description" content="<?php bloginfo( 'description' ); ?>">
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&family=Roboto:wght@700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="/style.css">
  <?php wp_head(); ?>
</head>

<body class="home l-body">
  <header class="l-header p-header">
    <button class="c-headline js-menubtn">Menu</button>
    <div class="c-wrapper">
      <h1 class="c-headline">
        <a class="c-link" href="<?php echo esc_url(home_url('/')); ?>">
          <?php bloginfo('name'); ?>
        </a>
      </h1>
      <?php get_search_form(); ?>
    </div>
  </header>