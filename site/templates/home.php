<?php snippet('header') ?>

<main class="main">
  <h1><?php echo $page->title() ?></h1>
  <p>
    <?php echo $page->text() ?>
    <!-- Because this projects variable is defined in the propjects controller, you
    can't access it directly from here. You can get it via the page() function, however
    -->
    <?php snippet('projects', [
      'projects' => collection('projects')->shuffle()->limit(5) // ->filterBy('featured', true)
    ]) ?>
  </p>
</main>

<?php snippet('footer') ?>
