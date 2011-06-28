<?php // AT Biz ?>
<div id="page-wrapper">
	<div id="page">

  <?php if($page['menu_bar_top']): ?>
    <div id="menu-top-wrapper"><div class="container clearfix">
      <?php print render($page['menu_bar_top']); ?>
    </div></div>
  <?php endif; ?>

  <div id="header-wrapper"><div class="container clearfix">
    <header class="clearfix">
      <div id="branding">
        <?php if ($linked_site_logo): ?>
          <div id="logo"><?php print $linked_site_logo; ?></div>
        <?php endif; ?>

        <?php if ($site_name || $site_slogan): ?>
          <hgroup<?php if (!$site_slogan && $hide_site_name): ?> class="<?php print $visibility; ?>"<?php endif; ?>>
            <?php if ($site_name): ?>
              <h1 id="site-name"<?php if ($hide_site_name): ?> class="<?php print $visibility; ?>"<?php endif; ?>><?php print $site_name; ?></h1>
            <?php endif; ?>
            <?php if ($site_slogan): ?>
              <h2 id="site-slogan"><?php print $site_slogan; ?></h2>
            <?php endif; ?>
          </hgroup>
        <?php endif; ?>
      </div>

      <?php print render($page['header']); ?>

    </header>
  </div></div>


<script type="text/javascript">
  jQuery(document).ready(function() {
    jQuery("#superfish ul.menu").superfish();
  });
</script>

<?php if ($page['superfish_menu']): ?>
  <div id="superfish">
	  <?php print render ($page['superfish_menu']); ?>
	</div>
<?php endif; ?>


  <!-- <?php if ($menubar = render($page['menu_bar'])): ?>
    <div id="nav-wrapper"><div class="container clearfix">
      <?php print $menubar; ?>
    </div></div>
  <?php endif; ?> -->

  <div id="secondary-content-wrapper">
    <div class="image-overlay">
      <div class="container clearfix">

        <?php if ($page['secondary_content']): ?>
          <?php print render($page['secondary_content']); ?>
        <?php endif; ?>

        <!-- Three column 3x33 Gpanel -->
        <?php if ($page['three_33_first'] || $page['three_33_second'] || $page['three_33_third']): ?>
          <div id="tri-panel" class="three-3x33 gpanel clearfix">
            <?php print render($page['three_33_first']); ?>
            <?php print render($page['three_33_second']); ?>
            <?php print render($page['three_33_third']); ?>
          </div>
        <?php endif; ?>

      </div>
    </div>
  </div>

  <?php if ($breadcrumb): ?>
    <div id="breadcrumb-wrapper"><div class="container">
      <section class="breadcrumb clearfix">
        <?php print $breadcrumb; ?>
      </section>
    </div></div>
  <?php endif; ?>

  <?php if ($messages || $page['help']): ?>
    <div id="messages-help-wrapper"><div class="container clearfix">
      <?php print $messages; ?>
      <?php print render($page['help']); ?>
    </div></div>
  <?php endif; ?>

  <div id="content-wrapper"><div class="container">

    <!-- Three column 3x33 Gpanel (2) -->
    <?php if ($page['three_2_33_first'] || $page['three_2_33_second'] || $page['three_2_33_third']): ?>
      <div id="tri-panel-2" class="three-3x33 gpanel clearfix">
        <?php print render($page['three_2_33_first']); ?>
        <?php print render($page['three_2_33_second']); ?>
        <?php print render($page['three_2_33_third']); ?>
      </div>
    <?php endif; ?>

    <div id="columns"><div class="columns-inner clearfix">
      <div id="content-column"><div class="content-inner">

        <?php print render($page['highlighted']); ?>

        <!-- Two column 2x50 Gpanel -->
        <?php if ($page['two_50_first'] || $page['two_50_second']): ?>
          <div id="bi-panel" class="two-50 gpanel clearfix">
            <?php print render($page['two_50_first']); ?>
            <?php print render($page['two_50_second']); ?>
          </div>
        <?php endif; ?>

        <?php $tag = $title ? 'section' : 'div'; ?>
        <<?php print $tag; ?> id="main-content">

          <?php if ($title || $primary_local_tasks || $secondary_local_tasks || $action_links = render($action_links)): ?>
            <header class="clearfix">
              <?php print render($title_prefix); ?>
              <?php if ($title): ?>
                <h1 id="page-title"><?php print $title; ?></h1>
              <?php endif; ?>
              <?php print render($title_suffix); ?>

              <?php if ($primary_local_tasks || $secondary_local_tasks || $action_links): ?>
                <div id="tasks" class="clearfix">
                  <?php if ($primary_local_tasks): ?>
                    <ul class="tabs primary"><?php print render($primary_local_tasks); ?></ul>
                  <?php endif; ?>
                  <?php if ($secondary_local_tasks): ?>
                    <ul class="tabs secondary"><?php print render($secondary_local_tasks); ?></ul>
                  <?php endif; ?>
                  <?php if ($action_links = render($action_links)): ?>
                    <ul class="action-links"><?php print $action_links; ?></ul>
                  <?php endif; ?>
                </div>
              <?php endif; ?>
            </header>
          <?php endif; ?>

          <div id="content"><?php print render($page['content']); ?></div>

          <?php print $feed_icons; ?>

        </<?php print $tag; ?>>

        <?php print render($page['content_aside']); ?>

      </div></div>

      <?php print render($page['sidebar_first']); ?>
      <?php print render($page['sidebar_second']); ?>

    </div></div>
  </div></div>

  <!-- Four column Gpanel (Quad) -->
  <?php if ($page['four_2_first'] || $page['four_2_second'] || $page['four_2_third'] || $page['four_2_fourth']): ?>
    <div id="quadpanel-wrapper"><div class="container clearfix">
      <div id="quad-panel" class="four-4x25 gpanel clearfix">
        <?php print render($page['four_2_first']); ?>
        <?php print render($page['four_2_second']); ?>
        <?php print render($page['four_2_third']); ?>
        <?php print render($page['four_2_fourth']); ?>
      </div>
    </div></div>
  <?php endif; ?>

  <?php if ($page['tertiary_content']): ?>
    <div id="tertiary-content-wrapper">
      <div class="image-overlay">
        <div class="container clearfix">
          <?php print render($page['tertiary_content']); ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($page['footer'] || $page['four_first'] || $page['four_second'] || $page['four_third'] || $page['four_fourth']): ?>
    <div id="footer-wrapper">
      <div class="container clearfix">
        <footer class="clearfix">
          <!-- Four column Gpanel (Quad) -->
          <?php if ($page['four_first'] || $page['four_second'] || $page['four_third'] || $page['four_fourth']): ?>
            <div id="footer-panel" class="four-4x25 gpanel clearfix">
              <?php print render($page['four_first']); ?>
              <?php print render($page['four_second']); ?>
              <?php print render($page['four_third']); ?>
              <?php print render($page['four_fourth']); ?>
            </div>
          <?php endif; ?>
          <?php print render($page['footer']); ?>
        </footer>
      </div>
    </div>
  <?php endif; ?>

</div></div>
