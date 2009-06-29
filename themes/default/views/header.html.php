<?php defined("SYSPATH") or die("No direct script access.") ?>
<?= $theme->header_top() ?>
<? if ($header_text = module::get_var("gallery", "header_text")): ?>
<?= $header_text ?>
<? else: ?>
<a href="<?= url::site("albums/1") ?>">
  <img width="107" height="48" id="gLogo" alt="<?= t("Gallery: Your photos on your web site") ?>" src="<?= $theme->theme_url("images/logo.png") ?>" />
</a>
<? endif ?>

<div id="gSiteMenu" style="display: none">
<?= $theme->site_menu() ?>
</div>

<?= $theme->header_bottom() ?>

<? if (!empty($parents)): ?>
<ul class="gBreadcrumbs">
  <? foreach ($parents as $parent): ?>
  <li>
    <a href="<?= url::site("albums/{$parent->id}?show=$item->id") ?>">
      <?= p::clean($parent->title) ?>
    </a>
  </li>
  <? endforeach ?>
  <li class="active"><?= p::clean($item->title) ?></li>
</ul>
<? endif ?>
