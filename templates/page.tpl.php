<header class="dcf-header" id="dcf-header" role="banner">

    <div class="dcf-header-global dcf-wrapper dcf-d-flex dcf-flex-row dcf-flex-nowrap dcf-ai-center dcf-jc-between dcf-relative unl-bg-scarlet">        <?php include(DRUPAL_ROOT . "/wdn/templates_5.0/includes/global/institution.html"); ?>
        <?php include(DRUPAL_ROOT . "/wdn/templates_5.0/includes/global/institution.html"); ?>
        <?php include(DRUPAL_ROOT . "/wdn/templates_5.0/includes/global/nav-global.html"); ?>
        <?php include(DRUPAL_ROOT . "/wdn/templates_5.0/includes/global/idm.html"); ?>
        <?php include(DRUPAL_ROOT . "/wdn/templates_5.0/includes/global/search.html"); ?>
    </div>

    <div class="dcf-logo-lockup dcf-wrapper dcf-d-flex dcf-ai-flex-end dcf-relative dcf-overflow-hidden">
        <?php include(DRUPAL_ROOT . "/wdn/templates_5.0/includes/global/logo.html"); ?>
        <div class="dcf-site-group dcf-d-flex dcf-flex-col dcf-jc-center unl-font-sans">
            <div class="dcf-site-affiliation dcf-lh-3 dcf-txt-2xs" id="dcf-site-affiliation">
                <!-- InstanceBeginEditable name="affiliation" -->
                <?php if ($site_slogan): ?><?php print $site_slogan; ?><?php endif; ?>
                <!-- InstanceEndEditable -->
            </div>
            <div class="dcf-site-title dcf-bold dcf-lh-2 dcf-uppercase unl-ls-1" id="dcf-site-title">
                <!-- InstanceBeginEditable name="titlegraphic" -->
                <?php if ($site_name): ?><a href="<?php print $front_page; ?>"><?php print $site_name; ?></a><?php endif; ?>
                <!-- InstanceEndEditable -->
            </div>
        </div>
    </div>

    <?php include(DRUPAL_ROOT . "/wdn/templates_5.0/includes/global/nav-toggle.html"); ?>

    <div class="dcf-nav-bar dcf-modal-parent dcf-txt-xs unl-font-sans">

        <button class="dcf-nav-toggle-btn dcf-nav-toggle-btn-menu dcf-flex-col dcf-ai-center dcf-jc-center dcf-w-9 dcf-pt-4 dcf-pr-0 dcf-pb-3 dcf-pl-0 dcf-b-0 dcf-bg-transparent unl-font-sans" id="dcf-menu-toggle" aria-expanded="false">
            <svg class="dcf-h-5 dcf-w-5 dcf-mb-2 dcf-fill-current" aria-hidden="true" focusable="false" width="16" height="16" viewBox="0 0 48 48">
                <path d="M45.5 22.5h-43c-.8 0-1.5.7-1.5 1.5s.7 1.5 1.5 1.5h43c.8 0 1.5-.7 1.5-1.5s-.7-1.5-1.5-1.5zM45.5 7.5h-43C1.7 7.5 1 8.2 1 9s.7 1.5 1.5 1.5h43c.8 0 1.5-.7 1.5-1.5s-.7-1.5-1.5-1.5zM45.5 37.5h-43c-.8 0-1.5.7-1.5 1.5s.7 1.5 1.5 1.5h43c.8 0 1.5-.7 1.5-1.5s-.7-1.5-1.5-1.5z"/>
            </svg>
            <svg class="dcf-mb-1 dcf-h-6 dcf-w-6 dcf-fill-current dcf-d-none" aria-hidden="true" focusable="false" width="16" height="16" viewBox="0 0 48 48">
                <path d="M38.1 7.7L7.7 38.1c-.6.6-.6 1.5 0 2.1.6.6 1.5.6 2.1 0L40.3 9.9c.6-.6.6-1.5 0-2.1-.6-.6-1.6-.6-2.2-.1z"/><path d="M7.7 7.7c-.6.6-.6 1.5 0 2.1l30.4 30.4c.6.6 1.5.6 2.1 0 .6-.6.6-1.5 0-2.1L9.9 7.7c-.6-.5-1.6-.5-2.2 0z"/>
            </svg>
            <span class="dcf-sr-only">Show </span><span class="dcf-nav-toggle-label dcf-txt-3xs dcf-bold dcf-uppercase unl-ls-2">Menu</span>
        </button>

        <div class="dcf-nav-menu dcf-mobile-toolbar-modal dcf-w-100%" id="dcf-navigation">
            <div class="dcf-nav-local-wrapper dcf-w-100%">
                <nav class="dcf-nav-local dcf-w-100% dcf-lh-3" role="navigation" aria-label="local navigation">
                    <!-- InstanceBeginEditable name="navlinks" -->
                    <?php print render($page['navlinks']); ?>
                    <!-- InstanceEndEditable -->
                </nav>
                <nav class="dcf-breadcrumbs dcf-txt-sm dcf-d-none" id="dcf-breadcrumbs" role="navigation" aria-label="breadcrumbs">
                    <ol class="dcf-list-bare dcf-mb-0 dcf-pt-4 dcf-bt-solid dcf-bt-1">
                        <!-- InstanceBeginEditable name="breadcrumbs" -->
                        <?php if ($breadcrumb): ?><?php print $breadcrumb; ?><?php endif; ?>
                        <!-- InstanceEndEditable -->
                    </ol>
                </nav>
            </div>
        </div>

    </div>

</header>

<main class="dcf-wrapper" id="dcf-main" role="main" tabindex="-1">

    <div class="dcf-stretch<?php if ($unl_hide_page_title): ?> dcf-sr-only<?php endif; ?>">
        <div class="dcf-wrapper dcf-pt-10 dcf-pb-7">
            <div id="dcf-page-title">
                <!-- InstanceBeginEditable name="pagetitle" -->
                <?php print render($title_prefix); ?>
                <?php if ($title): ?><h1 class="dcf-mb-0"><?php print $title; ?></h1><?php endif; ?>
                <?php print render($title_suffix); ?>
                <!-- InstanceEndEditable -->
            </div>
        </div>
    </div>

    <!-- InstanceBeginEditable name="maincontentarea" -->
    <?php print $messages; ?>
    <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

    <?php print render($page['content_top']); ?>

    <?php if ($unl_remove_inner_wrapper): ?><div class="dcf-stretch"><?php endif; ?>

        <?php if ($page['sidebar_first'] || $page['sidebar_second']): ?>
        <div class="wdn-band"><div class="wdn-inner-wrapper wdn-inner-padding-no-top"><section class="wdn-grid-set">
        <?php endif; ?>

        <?php if($page['sidebar_first']): ?>
        <?php print render($page['sidebar_first']); ?>
        <?php endif; ?>

        <?php if (isset($page['sidebar_first']['#region']) && isset($page['sidebar_second']['#region'])): ?>
          <div class="<?php print theme_get_setting('grid_class_content_two_sidebars'); ?>">
            <?php print render($page['content']); ?>
          </div>
        <?php elseif (isset($page['sidebar_first']['#region']) || isset($page['sidebar_second']['#region'])): ?>
          <div class="<?php print theme_get_setting('grid_class_content_one_sidebar'); ?>">
            <?php print render($page['content']); ?>
          </div>
        <?php else: ?>
        <?php print render($page['content']); ?>
        <?php endif; ?>

        <?php if($page['sidebar_second']): ?>
        <?php print render($page['sidebar_second']); ?>
        <?php endif; ?>

        <?php if ($page['sidebar_first'] || $page['sidebar_second']): ?>
        </section></div></div>
        <?php endif; ?>

    <?php if ($unl_remove_inner_wrapper): ?></div><?php endif; ?>

    <?php print render($page['content_bottom']); ?>
    <!-- InstanceEndEditable -->

</main>
<footer class="dcf-footer dcf-txt-xs" id="dcf-footer" role="contentinfo">
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
