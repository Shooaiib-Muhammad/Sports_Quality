
<!DOCTYPE html>
<!-- 
Template Name:  SmartAdmin Responsive WebApp - Template build with Twitter Bootstrap 4
Version: 4.0.2
Author: Sunnyat Ahmmed
Website: http://gootbootstrap.com
Purchase: https://wrapbootstrap.com/theme/smartadmin-responsive-webapp-WB0573SK0
License: You must have a valid license purchased only from wrapbootstrap.com (link above) in order to legally use this theme for your project.
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            Forward Sports Pvt Ltd.
        </title>
        <meta name="description" content="Marketing Dashboard">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <!-- Call App Mode on ios devices -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <!-- Remove Tap Highlight on Windows Phone IE -->
        <meta name="msapplication-tap-highlight" content="no">
        <!-- base css -->
        <link rel="stylesheet" media="screen, print" href="<?php echo base_url();?>/assets/css/vendors.bundle.css">
        <link rel="stylesheet" media="screen, print" href="<?php echo base_url();?>/assets/css/app.bundle.css">
        <!-- Place favicon.ico in the root directory -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>assets/img/favicon.jpg">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>assets/img/favicon.jpg">
        <link rel="mask-icon" href="<?php echo base_url();?>assets/img/favicon.jpg" color="#5bbad5">
        <link rel="stylesheet" media="screen, print" href="<?php echo base_url();?>/assets/css/datagrid/datatables/datatables.bundle.css">
          <link rel="stylesheet" href="<?php echo base_url();?>/assets/bundles/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bundles/jquery-selectric/selectric.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/Select/select2.min.css">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.jpg" />
    </head>
    <body class="mod-bg-1 ">
        <!-- DOC: script to save and load page settings -->
        <script>
        
            /**
             *	This script should be placed right after the body tag for fast execution 
             *	Note: the script is written in pure javascript and does not depend on thirdparty library
             **/
            'use strict';

            var classHolder = document.getElementsByTagName("BODY")[0],
                /** 
                 * Load from localstorage
                 **/
                themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
                {
                    themeOptions: "mod-bg-1 nav-function-top"
                },
                themeURL = themeSettings.themeURL || '',
                themeOptions = themeSettings.themeOptions || '';
            /** 
             * Load theme options
             **/
            if (themeSettings.themeOptions)
            {
                classHolder.className = themeSettings.themeOptions;
                console.log("%c✔ Theme settings loaded", "color: #148f32");
            }
            else
            {
                alert("CAlled");
                console.log("Heads up! Theme settings is empty or does not exist, loading default settings...");
            }
            if (themeSettings.themeURL && !document.getElementById('mytheme'))
            {
            
                var cssfile = document.createElement('link');
                cssfile.id = 'mytheme';
                cssfile.rel = 'stylesheet';
                cssfile.href = themeURL;   
                document.getElementsByTagName('head')[0].appendChild(cssfile);
            }
            /** 
             * Save to localstorage 
             **/
            var saveSettings = function()
            {
                themeSettings.themeOptions = String(classHolder.className).split(/[^\w-]+/).filter(function(item)
                {
                    return /^(nav|header|mod|display)-/i.test(item);
                }).join(' ');
                if (document.getElementById('mytheme'))
                {
                    themeSettings.themeURL = document.getElementById('mytheme').getAttribute("href");
                };
                localStorage.setItem('themeSettings', JSON.stringify(themeSettings));
            }
            /** 
             * Reset settings
             **/
            var resetSettings = function()
            {
                localStorage.setItem("themeSettings", "");
            }

        </script>