<aside id="sidebar" role="complementary">

  <?php if (!defined('DISPLAY_MULTIPLE')) : ?>
    <ul class="nav nav-list sidenav"></ul>
  <?php endif; ?>

  <ul id="sidebar_widgets" class="xoxo unstyled">
    <?php print $theme->area('sidebar'); ?>
  </ul>
</aside>
