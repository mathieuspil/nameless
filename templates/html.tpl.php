<?php

/**
 * @file
 * nameless theme implementation to display the basic html structure of
 * a single Drupal page.
 *
 * Variables:
 * for info on available variables see modules/system/html.tpl.php
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 * @see nameless_preprocess_html()
 */

?>
<!DOCTYPE html>
<!--[if IEMobile 7]><html class="iem7" <?php print $html_attributes; ?>><![endif]-->
<!--[if (lte IE 6)&(!IEMobile)]><html class="ie6 ie6-7 ie6-8" <?php print $html_attributes; ?>><![endif]-->
<!--[if (IE 7)&(!IEMobile)]><html class="ie7 ie6-7 ie6-8" <?php print $html_attributes; ?>><![endif]-->
<!--[if (IE 8)&(!IEMobile)]><html class="ie8 ie6-8" <?php print $html_attributes; ?>><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html <?php print $html_attributes . $rdf_namespaces; ?>><!--<![endif]-->
<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>

  <?php if ($add_responsive_meta): ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="apple-mobile-web-app-capable" content="yes">
  <?php endif; ?>
  <meta http-equiv="cleartype" content="on">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <?php print $styles; ?>
  <script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>

  <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  <?php print $page_top; ?>
  <?php print $page; ?>

  <?php print $scripts; ?>
  <!--  page bottom region-->
  <?php print $page_bottom; ?>
</body>
</html>
