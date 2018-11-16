<?php if ($format !== 'partial'): ?>
<header class="dcf-header" id="dcf-header" role="banner">

    <?php include(DRUPAL_ROOT . "/wdn/templates_5.0/includes/global/header-global-1.html"); ?>
    <?php include(DRUPAL_ROOT . "/wdn/templates_5.0/includes/global/idm.html"); ?>
    <?php include(DRUPAL_ROOT . "/wdn/templates_5.0/includes/global/search.html"); ?>
    <?php include(DRUPAL_ROOT . "/wdn/templates_5.0/includes/global/header-global-2.html"); ?>
    <?php include(DRUPAL_ROOT . "/wdn/templates_5.0/includes/global/logo-lockup-1.html"); ?>
    <?php include(DRUPAL_ROOT . "/wdn/templates_5.0/includes/global/site-affiliation-1.html"); ?>
        <!-- InstanceBeginEditable name="affiliation" -->
        <?php if ($site_slogan): ?><?php print $site_slogan; ?><?php endif; ?>
        <!-- InstanceEndEditable -->
    <?php include(DRUPAL_ROOT . "/wdn/templates_5.0/includes/global/site-affiliation-2.html"); ?>
    <?php include(DRUPAL_ROOT . "/wdn/templates_5.0/includes/global/site-title-1.html"); ?>
        <!-- InstanceBeginEditable name="titlegraphic" -->
        <?php if ($site_name): ?><a class="unl-site-title-medium" href="<?php print $front_page; ?>"><?php print $site_name; ?></a><?php endif; ?>
        <!-- InstanceEndEditable -->
    <?php include(DRUPAL_ROOT . "/wdn/templates_5.0/includes/global/site-title-2.html"); ?>
    <?php include(DRUPAL_ROOT . "/wdn/templates_5.0/includes/global/logo-lockup-2.html"); ?>
    <?php include(DRUPAL_ROOT . "/wdn/templates_5.0/includes/global/nav-toggle-group.html"); ?>

    <?php include(DRUPAL_ROOT . "/wdn/templates_5.0/includes/global/nav-menu-1.html"); ?>
        <?php include(DRUPAL_ROOT . "/wdn/templates_5.0/includes/global/nav-toggle-btn.html"); ?>
        <?php include(DRUPAL_ROOT . "/wdn/templates_5.0/includes/global/nav-menu-child-1.html"); ?>
            <?php print render($page['navlinks']); ?>
        <?php include(DRUPAL_ROOT . "/wdn/templates_5.0/includes/global/nav-menu-child-2.html"); ?>
    <?php include(DRUPAL_ROOT . "/wdn/templates_5.0/includes/global/nav-menu-2.html"); ?>

    <?php if ($tabs): ?><?php print render($tabs); ?><?php endif; ?>
</header>

<main class="dcf-main" id="dcf-main" role="main" tabindex="-1">

    <!-- InstanceBeginEditable name="hero" -->
    <div class="dcf-hero dcf-hero-default<?php if ($unl_hide_page_title): ?> dcf-sr-only<?php endif; ?>">
    <!-- InstanceEndEditable -->
        <div class="dcf-hero-group-1">
            <nav class="dcf-breadcrumbs" id="dcf-breadcrumbs" role="navigation" aria-label="breadcrumbs">
                <!-- InstanceBeginEditable name="breadcrumbs" -->
                <?php if ($breadcrumb): ?><?php print $breadcrumb; ?><?php endif; ?>
                <!-- InstanceEndEditable -->
            </nav>
            <header class="dcf-page-title" id="dcf-page-title">
                <!-- InstanceBeginEditable name="pagetitle" -->
                <?php print render($title_prefix); ?>
                <?php if ($title): ?><h1 class="dcf-mb-0"><?php print $title; ?></h1><?php endif; ?>
                <?php print render($title_suffix); ?>
                <!-- InstanceEndEditable -->
            </header>
            <!-- InstanceBeginEditable name="herogroup1" -->
            <!-- InstanceEndEditable -->
        </div>
        <!-- InstanceBeginEditable name="herogroup2" -->
        <div class="dcf-hero-group-2">
        </div>
        <!-- InstanceEndEditable -->
    </div>
    <div class="dcf-main-content dcf-wrapper">
    <!-- InstanceBeginEditable name="maincontentarea" -->
    <?php print $messages; ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
<?php endif; ?>
    <?php print render($page['content_top']); ?>

    <?php if ($unl_remove_inner_wrapper): ?><div class="dcf-bleed"><?php endif; ?>

        <?php if ($page['sidebar_first'] xor $page['sidebar_second']): ?>
        <div class="dcf-grid">
        <?php elseif ($page['sidebar_first'] && $page['sidebar_second']) : ?>
        <div class="dcf-grid-thirds@md">
        <?php endif; ?>

        <?php if($page['sidebar_first']): ?>
        <?php print render($page['sidebar_first']); ?>
        <?php endif; ?>

        <?php if (!isset($page['sidebar_first']['#region']) && isset($page['sidebar_second']['#region'])): ?>
          <div class="dcf-col-100% dcf-col-67%-start@md">
            <?php print render($page['content']); ?>
          </div>
        <?php elseif (isset($page['sidebar_first']['#region']) && !isset($page['sidebar_second']['#region'])): ?>
          <div class="dcf-col-100% dcf-col-67%-end@md">
            <?php print render($page['content']); ?>
          </div>
        <?php else: ?>
        <?php print render($page['content']); ?>
        <?php endif; ?>

        <?php if($page['sidebar_second']): ?>
        <?php print render($page['sidebar_second']); ?>
        <?php endif; ?>

        <?php if ($page['sidebar_first'] || $page['sidebar_second']): ?>
        </div>
        <?php endif; ?>

    <?php if ($unl_remove_inner_wrapper): ?></div><?php endif; ?>

    <?php print render($page['content_bottom']); ?>
<?php if ($format !== 'partial'): ?>
    <!-- InstanceEndEditable -->
    </div>

</main>
<footer class="dcf-footer" id="dcf-footer" role="contentinfo">
    <?php include(DRUPAL_ROOT . "/wdn/templates_5.0/includes/global/footer-global-1.html"); ?>
    <!-- InstanceBeginEditable name="contactinfo" -->
    <?php if ($page['contactinfo']): ?>

        <?php print render($page['contactinfo']); ?>

    <?php endif; ?>

    <?php if ($page['leftcollinks']): ?>

        <?php print render($page['leftcollinks']); ?>

    <?php endif; ?>
    <!-- InstanceEndEditable -->
    <?php include(DRUPAL_ROOT . "/wdn/templates_5.0/includes/global/footer-global-2.html"); ?>
</footer>
<?php endif; ?>
