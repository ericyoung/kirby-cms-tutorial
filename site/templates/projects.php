<?php snippet('header') ?>

<?php
// logic cut from here and pasted into the projects.php controller
?>

<main class="main">
  <h1><?php echo $page->title() ?></h1>

  <nav class="filter">
    <a href="<?php echo $page->url() ?>">All</a>
    <?php foreach($filters as $filter): ?>
    <a href="<?php echo $page->url() ?>?filter=<?php echo $filter ?>"><?php echo $filter ?></a>
    <?php endforeach ?>
  </nav>

  <!-- logic cut from here and pasted into snippets/projects.php -->
  <?php snippet('projects') ?>

  <!-- logic cut from here and pasted into snippets/pagination.php -->
  <?php snippet('pagination') ?>
  <p><?php echo $page->text() ?></p>
</main>
<?php snippet('footer') ?>
