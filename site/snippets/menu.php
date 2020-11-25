<nav class="menu">
  <ul>
    <?php foreach($site->children()->listed() as $item) { ?>
    <li><a href="<?php echo $item->url() ?>"><?php echo $item->title() ?></a></li>
    <?php } ?>
  </ul>
</nav>
