<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site->title() | $page->title() ?></title>
    <?php echo css('assets/css/index.css'); ?>
    <?php echo css('@auto') ?>
  </head>
  <body>
    <header class="header">
      <a class="logo" href="<?php echo $site->url() ?>"><?php echo $site->title() ?></a>
      <?php snippet('menu') ?>
    </header>
