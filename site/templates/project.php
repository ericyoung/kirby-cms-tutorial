<?php snippet('header') ?>

<main class="main">
  <article>
    <h1><?php echo $page->title() ?></h1>
    <div class="project-layout">
      <div class="project-info">
        <?php if($page->text()->isNotEmpty()) { ?>
        <div class="project-text">
          <?php echo $page->text() ?>
        </div>
        <?php } ?>
        <dl>
          <?php if($page->client()->isNotEmpty()) { ?>
          <dt>Client</dt>
          <dd><?php echo $page->client() ?></dd>
          <?php } ?>
          <?php if($page->year()->isNotEmpty()) { ?>
          <dt>Year</dt>
          <dd><?php echo $page->year() ?></dd>
          <?php } ?>
          <?php if($page->category()->isNotEmpty()) { ?>
          <dt>Category</dt>
          <dd><?php echo $page->category() ?></dd>
          <?php } ?>
          <?php if($page->link()->isNotEmpty()) { ?>
          <dt>Link</dt>
          <dd><?php echo $page->link() ?></dd>
          <?php } ?>
        </dl>
      </div>
      <div class="project-gallery">
        <ul>
          <?php foreach($page->images() as $image) { ?>
          <li>
            <figure>
              <a href="<?php echo $image->url() ?>">
                <img src="<?php echo $image->resize(1200,1200)->url() ?>" alt="<?php echo $image->alt() ?>">
              </a>
              <figcaption><?php echo $image->caption() ?></figcaption>
            </figure>
          </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </article>


</main>

<?php snippet('footer') ?>
