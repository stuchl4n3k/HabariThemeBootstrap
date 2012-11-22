<?php Plugins::act('theme_searchform_before'); ?>
<form method="get" id="searchform" class="navbar-search pull-right" action="<?php URL::out('display_search'); ?>">
  <input type="search" id="s" name="criteria" class="search-query" value="<?php echo isset($theme->criteria) ? htmlentities($theme->criteria, ENT_COMPAT, 'UTF-8') : ''; ?>" placeholder="<?php echo _t('Search'); ?>" />
  <button type="submit" id="searchsubmit" class="btn btn-inverse btn-small"><i class="icon icon-white icon-search"></i></button>
</form>
<?php Plugins::act('theme_searchform_after'); ?>
