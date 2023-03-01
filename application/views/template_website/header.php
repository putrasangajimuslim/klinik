<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Vuesax admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, Vuesax admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <title></title>

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template_website/vendors/css/vendors.min.css') ?>">

  <?php if (isset($prepend_style)) : ?>
    <?php foreach ($prepend_style as $tag_style) : ?>
      <link rel="stylesheet" href="<?php echo $tag_style; ?>">
    <?php endforeach; ?>
  <?php endif; ?>

  <link rel="apple-touch-icon" href="<?php echo base_url('assets/template_website/images/ico/apple-icon-120.png') ?>">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/template_website/images/ico/favicon.ico') ?>">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template_website/vendors/css/forms/select/select2.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template_website/vendors/css/tables/datatable/datatables.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template_website/vendors/css/tables/datatable/select.dataTables.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template_website/vendors/css/extensions/sweetalert2.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template_website/vendors/css/charts/apexcharts.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template_website/vendors/css/extensions/tether-theme-arrows.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template_website/vendors/css/extensions/tether.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template_website/vendors/css/extensions/shepherd-theme-default.css') ?>">
  <!-- END: Vendor CSS-->

  <!-- BEGIN: Theme CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template_website/css/bootstrap.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template_website/css/bootstrap-extended.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template_website/css/colors.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template_website/css/components.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template_website/css/themes/dark-layout.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template_website/css/themes/semi-dark-layout.css') ?>">

  <!-- BEGIN: Page CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template_website/css/core/menu/menu-types/vertical-menu.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template_website/css/core/colors/palette-gradient.css') ?>">
  <!-- END: Page CSS-->

  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template_website/css/style.css') ?>">
  <!-- END: Custom CSS-->

  <?php if (isset($addon_style)) : ?>
    <?php foreach ($addon_style as $tag_style) : ?>
      <link rel="stylesheet" href="<?php echo $tag_style; ?>">
    <?php endforeach; ?>
  <?php endif; ?>

</head>
<!-- END: Head-->