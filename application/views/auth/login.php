<!DOCTYPE html>
<!-- saved from url=(0026)http://skeleton.test/login -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">



  <title>VIP Panel | Login</title>


  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="shortcut icon" href="http://skeleton.test/media/logos/favicon.ico">


  <link rel="stylesheet" href="<?php echo base_url() ?>assets/auth/css">


  <link href="<?php echo base_url() ?>assets/auth/plugins.bundle.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url() ?>assets/auth/prismjs.bundle.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url() ?>assets/auth/style.bundle.css" rel="stylesheet" type="text/css">


  <link href="<?php echo base_url() ?>assets/auth/light.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url() ?>assets/auth/light(1).css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url() ?>assets/auth/dark.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url() ?>assets/auth/dark(1).css" rel="stylesheet" type="text/css">


  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/auth/login-4.css">
  <style type="text/css">.apexcharts-canvas {
    position: relative;
    user-select: none;
    /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
  }


  /* scrollbar is not visible by default for legend, hence forcing the visibility */
  .apexcharts-canvas ::-webkit-scrollbar {
    -webkit-appearance: none;
    width: 6px;
  }

  .apexcharts-canvas ::-webkit-scrollbar-thumb {
    border-radius: 4px;
    background-color: rgba(0, 0, 0, .5);
    box-shadow: 0 0 1px rgba(255, 255, 255, .5);
    -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
  }


  .apexcharts-inner {
    position: relative;
  }

  .apexcharts-text tspan {
    font-family: inherit;
  }

  .legend-mouseover-inactive {
    transition: 0.15s ease all;
    opacity: 0.20;
  }

  .apexcharts-series-collapsed {
    opacity: 0;
  }

  .apexcharts-tooltip {
    border-radius: 5px;
    box-shadow: 2px 2px 6px -4px #999;
    cursor: default;
    font-size: 14px;
    left: 62px;
    opacity: 0;
    pointer-events: none;
    position: absolute;
    top: 20px;
    display: flex;
    flex-direction: column;
    overflow: hidden;
    white-space: nowrap;
    z-index: 12;
    transition: 0.15s ease all;
  }

  .apexcharts-tooltip.apexcharts-active {
    opacity: 1;
    transition: 0.15s ease all;
  }

  .apexcharts-tooltip.apexcharts-theme-light {
    border: 1px solid #e3e3e3;
    background: rgba(255, 255, 255, 0.96);
  }

  .apexcharts-tooltip.apexcharts-theme-dark {
    color: #fff;
    background: rgba(30, 30, 30, 0.8);
  }

  .apexcharts-tooltip * {
    font-family: inherit;
  }


  .apexcharts-tooltip-title {
    padding: 6px;
    font-size: 15px;
    margin-bottom: 4px;
  }

  .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
    background: #ECEFF1;
    border-bottom: 1px solid #ddd;
  }

  .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
    background: rgba(0, 0, 0, 0.7);
    border-bottom: 1px solid #333;
  }

  .apexcharts-tooltip-text-value,
  .apexcharts-tooltip-text-z-value {
    display: inline-block;
    font-weight: 600;
    margin-left: 5px;
  }

  .apexcharts-tooltip-text-z-label:empty,
  .apexcharts-tooltip-text-z-value:empty {
    display: none;
  }

  .apexcharts-tooltip-text-value,
  .apexcharts-tooltip-text-z-value {
    font-weight: 600;
  }

  .apexcharts-tooltip-marker {
    width: 12px;
    height: 12px;
    position: relative;
    top: 0px;
    margin-right: 10px;
    border-radius: 50%;
  }

  .apexcharts-tooltip-series-group {
    padding: 0 10px;
    display: none;
    text-align: left;
    justify-content: left;
    align-items: center;
  }

  .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
    opacity: 1;
  }

  .apexcharts-tooltip-series-group.apexcharts-active,
  .apexcharts-tooltip-series-group:last-child {
    padding-bottom: 4px;
  }

  .apexcharts-tooltip-series-group-hidden {
    opacity: 0;
    height: 0;
    line-height: 0;
    padding: 0 !important;
  }

  .apexcharts-tooltip-y-group {
    padding: 6px 0 5px;
  }

  .apexcharts-tooltip-candlestick {
    padding: 4px 8px;
  }

  .apexcharts-tooltip-candlestick>div {
    margin: 4px 0;
  }

  .apexcharts-tooltip-candlestick span.value {
    font-weight: bold;
  }

  .apexcharts-tooltip-rangebar {
    padding: 5px 8px;
  }

  .apexcharts-tooltip-rangebar .category {
    font-weight: 600;
    color: #777;
  }

  .apexcharts-tooltip-rangebar .series-name {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
  }

  .apexcharts-xaxistooltip {
    opacity: 0;
    padding: 9px 10px;
    pointer-events: none;
    color: #373d3f;
    font-size: 13px;
    text-align: center;
    border-radius: 2px;
    position: absolute;
    z-index: 10;
    background: #ECEFF1;
    border: 1px solid #90A4AE;
    transition: 0.15s ease all;
  }

  .apexcharts-xaxistooltip.apexcharts-theme-dark {
    background: rgba(0, 0, 0, 0.7);
    border: 1px solid rgba(0, 0, 0, 0.5);
    color: #fff;
  }

  .apexcharts-xaxistooltip:after,
  .apexcharts-xaxistooltip:before {
    left: 50%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
  }

  .apexcharts-xaxistooltip:after {
    border-color: rgba(236, 239, 241, 0);
    border-width: 6px;
    margin-left: -6px;
  }

  .apexcharts-xaxistooltip:before {
    border-color: rgba(144, 164, 174, 0);
    border-width: 7px;
    margin-left: -7px;
  }

  .apexcharts-xaxistooltip-bottom:after,
  .apexcharts-xaxistooltip-bottom:before {
    bottom: 100%;
  }

  .apexcharts-xaxistooltip-top:after,
  .apexcharts-xaxistooltip-top:before {
    top: 100%;
  }

  .apexcharts-xaxistooltip-bottom:after {
    border-bottom-color: #ECEFF1;
  }

  .apexcharts-xaxistooltip-bottom:before {
    border-bottom-color: #90A4AE;
  }

  .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
    border-bottom-color: rgba(0, 0, 0, 0.5);
  }

  .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
    border-bottom-color: rgba(0, 0, 0, 0.5);
  }

  .apexcharts-xaxistooltip-top:after {
    border-top-color: #ECEFF1
  }

  .apexcharts-xaxistooltip-top:before {
    border-top-color: #90A4AE;
  }

  .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
    border-top-color: rgba(0, 0, 0, 0.5);
  }

  .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
    border-top-color: rgba(0, 0, 0, 0.5);
  }

  .apexcharts-xaxistooltip.apexcharts-active {
    opacity: 1;
    transition: 0.15s ease all;
  }

  .apexcharts-yaxistooltip {
    opacity: 0;
    padding: 4px 10px;
    pointer-events: none;
    color: #373d3f;
    font-size: 13px;
    text-align: center;
    border-radius: 2px;
    position: absolute;
    z-index: 10;
    background: #ECEFF1;
    border: 1px solid #90A4AE;
  }

  .apexcharts-yaxistooltip.apexcharts-theme-dark {
    background: rgba(0, 0, 0, 0.7);
    border: 1px solid rgba(0, 0, 0, 0.5);
    color: #fff;
  }

  .apexcharts-yaxistooltip:after,
  .apexcharts-yaxistooltip:before {
    top: 50%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
  }

  .apexcharts-yaxistooltip:after {
    border-color: rgba(236, 239, 241, 0);
    border-width: 6px;
    margin-top: -6px;
  }

  .apexcharts-yaxistooltip:before {
    border-color: rgba(144, 164, 174, 0);
    border-width: 7px;
    margin-top: -7px;
  }

  .apexcharts-yaxistooltip-left:after,
  .apexcharts-yaxistooltip-left:before {
    left: 100%;
  }

  .apexcharts-yaxistooltip-right:after,
  .apexcharts-yaxistooltip-right:before {
    right: 100%;
  }

  .apexcharts-yaxistooltip-left:after {
    border-left-color: #ECEFF1;
  }

  .apexcharts-yaxistooltip-left:before {
    border-left-color: #90A4AE;
  }

  .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
    border-left-color: rgba(0, 0, 0, 0.5);
  }

  .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
    border-left-color: rgba(0, 0, 0, 0.5);
  }

  .apexcharts-yaxistooltip-right:after {
    border-right-color: #ECEFF1;
  }

  .apexcharts-yaxistooltip-right:before {
    border-right-color: #90A4AE;
  }

  .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
    border-right-color: rgba(0, 0, 0, 0.5);
  }

  .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
    border-right-color: rgba(0, 0, 0, 0.5);
  }

  .apexcharts-yaxistooltip.apexcharts-active {
    opacity: 1;
  }

  .apexcharts-yaxistooltip-hidden {
    display: none;
  }

  .apexcharts-xcrosshairs,
  .apexcharts-ycrosshairs {
    pointer-events: none;
    opacity: 0;
    transition: 0.15s ease all;
  }

  .apexcharts-xcrosshairs.apexcharts-active,
  .apexcharts-ycrosshairs.apexcharts-active {
    opacity: 1;
    transition: 0.15s ease all;
  }

  .apexcharts-ycrosshairs-hidden {
    opacity: 0;
  }

  .apexcharts-selection-rect {
    cursor: move;
  }

  .svg_select_boundingRect, .svg_select_points_rot {
    pointer-events: none;
    opacity: 0;
    visibility: hidden;
  }
  .apexcharts-selection-rect + g .svg_select_boundingRect,
  .apexcharts-selection-rect + g .svg_select_points_rot {
    opacity: 0;
    visibility: hidden;
  }

  .apexcharts-selection-rect + g .svg_select_points_l,
  .apexcharts-selection-rect + g .svg_select_points_r {
    cursor: ew-resize;
    opacity: 1;
    visibility: visible;
  }

  .svg_select_points {
    fill: #efefef;
    stroke: #333;
    rx: 2;
  }

  .apexcharts-svg.apexcharts-zoomable.hovering-zoom {
    cursor: crosshair
  }

  .apexcharts-svg.apexcharts-zoomable.hovering-pan {
    cursor: move
  }

  .apexcharts-zoom-icon,
  .apexcharts-zoomin-icon,
  .apexcharts-zoomout-icon,
  .apexcharts-reset-icon,
  .apexcharts-pan-icon,
  .apexcharts-selection-icon,
  .apexcharts-menu-icon,
  .apexcharts-toolbar-custom-icon {
    cursor: pointer;
    width: 20px;
    height: 20px;
    line-height: 24px;
    color: #6E8192;
    text-align: center;
  }

  .apexcharts-zoom-icon svg,
  .apexcharts-zoomin-icon svg,
  .apexcharts-zoomout-icon svg,
  .apexcharts-reset-icon svg,
  .apexcharts-menu-icon svg {
    fill: #6E8192;
  }

  .apexcharts-selection-icon svg {
    fill: #444;
    transform: scale(0.76)
  }

  .apexcharts-theme-dark .apexcharts-zoom-icon svg,
  .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
  .apexcharts-theme-dark .apexcharts-zoomout-icon svg,
  .apexcharts-theme-dark .apexcharts-reset-icon svg,
  .apexcharts-theme-dark .apexcharts-pan-icon svg,
  .apexcharts-theme-dark .apexcharts-selection-icon svg,
  .apexcharts-theme-dark .apexcharts-menu-icon svg,
  .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
    fill: #f3f4f5;
  }

  .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
  .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
  .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
    fill: #008FFB;
  }

  .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
  .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
  .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
  .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
  .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
  .apexcharts-theme-light .apexcharts-menu-icon:hover svg {
    fill: #333;
  }

  .apexcharts-selection-icon,
  .apexcharts-menu-icon {
    position: relative;
  }

  .apexcharts-reset-icon {
    margin-left: 5px;
  }

  .apexcharts-zoom-icon,
  .apexcharts-reset-icon,
  .apexcharts-menu-icon {
    transform: scale(0.85);
  }

  .apexcharts-zoomin-icon,
  .apexcharts-zoomout-icon {
    transform: scale(0.7)
  }

  .apexcharts-zoomout-icon {
    margin-right: 3px;
  }

  .apexcharts-pan-icon {
    transform: scale(0.62);
    position: relative;
    left: 1px;
    top: 0px;
  }

  .apexcharts-pan-icon svg {
    fill: #fff;
    stroke: #6E8192;
    stroke-width: 2;
  }

  .apexcharts-pan-icon.apexcharts-selected svg {
    stroke: #008FFB;
  }

  .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
    stroke: #333;
  }

  .apexcharts-toolbar {
    position: absolute;
    z-index: 11;
    max-width: 176px;
    text-align: right;
    border-radius: 3px;
    padding: 0px 6px 2px 6px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .apexcharts-menu {
    background: #fff;
    position: absolute;
    top: 100%;
    border: 1px solid #ddd;
    border-radius: 3px;
    padding: 3px;
    right: 10px;
    opacity: 0;
    min-width: 110px;
    transition: 0.15s ease all;
    pointer-events: none;
  }

  .apexcharts-menu.apexcharts-menu-open {
    opacity: 1;
    pointer-events: all;
    transition: 0.15s ease all;
  }

  .apexcharts-menu-item {
    padding: 6px 7px;
    font-size: 12px;
    cursor: pointer;
  }

  .apexcharts-theme-light .apexcharts-menu-item:hover {
    background: #eee;
  }

  .apexcharts-theme-dark .apexcharts-menu {
    background: rgba(0, 0, 0, 0.7);
    color: #fff;
  }

  @media screen and (min-width: 768px) {
    .apexcharts-canvas:hover .apexcharts-toolbar {
      opacity: 1;
    }
  }

  .apexcharts-datalabel.apexcharts-element-hidden {
    opacity: 0;
  }

  .apexcharts-pie-label,
  .apexcharts-datalabels,
  .apexcharts-datalabel,
  .apexcharts-datalabel-label,
  .apexcharts-datalabel-value {
    cursor: default;
    pointer-events: none;
  }

  .apexcharts-pie-label-delay {
    opacity: 0;
    animation-name: opaque;
    animation-duration: 0.3s;
    animation-fill-mode: forwards;
    animation-timing-function: ease;
  }

  .apexcharts-canvas .apexcharts-element-hidden {
    opacity: 0;
  }

  .apexcharts-hide .apexcharts-series-points {
    opacity: 0;
  }

  .apexcharts-gridline,
  .apexcharts-annotation-rect,
  .apexcharts-tooltip .apexcharts-marker,
  .apexcharts-area-series .apexcharts-area,
  .apexcharts-line,
  .apexcharts-zoom-rect,
  .apexcharts-toolbar svg,
  .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
  .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
  .apexcharts-radar-series path,
  .apexcharts-radar-series polygon {
    pointer-events: none;
  }


  /* markers */

  .apexcharts-marker {
    transition: 0.15s ease all;
  }

  @keyframes opaque {
    0% {
      opacity: 0;
    }
    100% {
      opacity: 1;
    }
  }


  /* Resize generated styles */

  @keyframes resizeanim {
    from {
      opacity: 0;
    }
    to {
      opacity: 0;
    }
  }

  .resize-triggers {
    animation: 1ms resizeanim;
    visibility: hidden;
    opacity: 0;
  }

  .resize-triggers,
  .resize-triggers>div,
  .contract-trigger:before {
    content: " ";
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    overflow: hidden;
  }

  .resize-triggers>div {
    background: #eee;
    overflow: auto;
  }

  .contract-trigger:before {
    width: 200%;
    height: 200%;
  }</style></head>

  <body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed aside-enabled aside-fixed">


    <div class="d-flex flex-column flex-root">
      <!--begin::Login-->
      <div class="login login-4 wizard d-flex flex-column flex-lg-row flex-column-fluid">
       <!--begin::Content-->
       <div class="login-container order-2 order-lg-1 d-flex flex-center flex-row-fluid px-7 pt-lg-0 pb-lg-0 pt-4 pb-6 bg-white">
        <!--begin::Wrapper-->
        <div class="login-content d-flex flex-column pt-lg-0 pt-12">
         <!--begin::Logo-->
         <a href="http://skeleton.test/login#" class="login-logo pb-xl-20 pb-15">
          <img src="<?php echo base_url() ?>assets/auth/logo-4.png" class="max-h-70px" alt="">
        </a>
        <!--end::Logo-->
        <!--begin::Signin-->
        <div class="login-form">
          <!--begin::Form-->
          <form class="form" id="kt_login_singin_form" method="POST" action="<?php echo site_url('auth/login') ?>">
           <input type="hidden" name="_token" value="YJ0jMallzFHGV84hfWBPx0mw7z1EaZSexuUnJXgT">
           <!--begin::Title-->
           <div class="pb-5 pb-lg-15">
            <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Sign In</h3>
            <div class="text-muted font-weight-bold font-size-h4">New Here?
             <a href="http://skeleton.test/register" class="text-primary font-weight-bolder">Create Account</a></div>
           </div>
           <!--begin::Title-->
           <!--begin::Form group-->
           <div class="form-group">
             <label class="font-size-h6 font-weight-bolder text-dark">Username</label>
             <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0 " type="text" name="username" value="" autocomplete="off" required="">
           </div>
           <!--end::Form group-->
           <!--begin::Form group-->
           <div class="form-group">
             <div class="d-flex justify-content-between mt-n5">
              <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
              <a href="http://skeleton.test/password/reset" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5">Forgot Password ?</a>
            </div>
            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0 " type="password" name="password" autocomplete="off" required="">
          </div>
          <!--end::Form group-->
          <!--begin::Action-->
          <div class="pb-lg-0 pb-5">
           <button type="submit" id="kt_login_singin_form_submit_button" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Sign In</button>
           <button type="button" class="btn btn-light-primary font-weight-bolder px-8 py-4 my-3 font-size-lg">
            <span class="svg-icon svg-icon-md">
             <!--begin::Svg Icon | path:assets/media/svg/social-icons/google.svg-->
             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
              <path d="M19.9895 10.1871C19.9895 9.36767 19.9214 8.76973 19.7742 8.14966H10.1992V11.848H15.8195C15.7062 12.7671 15.0943 14.1512 13.7346 15.0813L13.7155 15.2051L16.7429 17.4969L16.9527 17.5174C18.879 15.7789 19.9895 13.221 19.9895 10.1871Z" fill="#4285F4"></path>
              <path d="M10.1993 19.9313C12.9527 19.9313 15.2643 19.0454 16.9527 17.5174L13.7346 15.0813C12.8734 15.6682 11.7176 16.0779 10.1993 16.0779C7.50243 16.0779 5.21352 14.3395 4.39759 11.9366L4.27799 11.9466L1.13003 14.3273L1.08887 14.4391C2.76588 17.6945 6.21061 19.9313 10.1993 19.9313Z" fill="#34A853"></path>
              <path d="M4.39748 11.9366C4.18219 11.3166 4.05759 10.6521 4.05759 9.96565C4.05759 9.27909 4.18219 8.61473 4.38615 7.99466L4.38045 7.8626L1.19304 5.44366L1.08875 5.49214C0.397576 6.84305 0.000976562 8.36008 0.000976562 9.96565C0.000976562 11.5712 0.397576 13.0882 1.08875 14.4391L4.39748 11.9366Z" fill="#FBBC05"></path>
              <path d="M10.1993 3.85336C12.1142 3.85336 13.406 4.66168 14.1425 5.33717L17.0207 2.59107C15.253 0.985496 12.9527 0 10.1993 0C6.2106 0 2.76588 2.23672 1.08887 5.49214L4.38626 7.99466C5.21352 5.59183 7.50242 3.85336 10.1993 3.85336Z" fill="#EB4335"></path>
            </svg>
            <!--end::Svg Icon-->
          </span>Sign in with Google</button>
        </div>
        <!--end::Action-->
      </form>
      <!--end::Form-->
    </div>
    <!--end::Signin-->
  </div>
  <!--end::Wrapper-->
</div>
<!--begin::Content-->
<!--begin::Aside-->
<div class="login-aside order-1 order-lg-2 bgi-no-repeat bgi-position-x-right">
  <div class="login-conteiner bgi-no-repeat bgi-position-x-right bgi-position-y-bottom" style="background-image: url(http://skeleton.test/media/svg/illustrations/login-visual-4.svg);">
   <!--begin::Aside title-->
   <h3 class="pt-lg-40 pl-lg-20 pb-lg-0 pl-10 py-20 m-0 d-flex justify-content-lg-start font-weight-boldest display5 display1-lg text-white">We Got
    <br>A Surprise
    <br>For You</h3>
    <!--end::Aside title-->
  </div>
</div>
<!--end::Aside-->
</div>
<!--end::Login-->
</div>

<script>var HOST_URL = "http://skeleton.test";</script>


<script>
  var KTAppSettings = {
    "breakpoints": {
      "sm": 576,
      "md": 768,
      "lg": 992,
      "xl": 1200,
      "xxl": 1200
    },
    "colors": {
      "theme": {
        "base": {
          "white": "#ffffff",
          "primary": "#6993FF",
          "secondary": "#E5EAEE",
          "success": "#1BC5BD",
          "info": "#8950FC",
          "warning": "#FFA800",
          "danger": "#F64E60",
          "light": "#F3F6F9",
          "dark": "#212121"
        },
        "light": {
          "white": "#ffffff",
          "primary": "#E1E9FF",
          "secondary": "#ECF0F3",
          "success": "#C9F7F5",
          "info": "#EEE5FF",
          "warning": "#FFF4DE",
          "danger": "#FFE2E5",
          "light": "#F3F6F9",
          "dark": "#D6D6E0"
        },
        "inverse": {
          "white": "#ffffff",
          "primary": "#ffffff",
          "secondary": "#212121",
          "success": "#ffffff",
          "info": "#ffffff",
          "warning": "#ffffff",
          "danger": "#ffffff",
          "light": "#464E5F",
          "dark": "#ffffff"
        }
      },
      "gray": {
        "gray-100": "#F3F6F9",
        "gray-200": "#ECF0F3",
        "gray-300": "#E5EAEE",
        "gray-400": "#D6D6E0",
        "gray-500": "#B5B5C3",
        "gray-600": "#80808F",
        "gray-700": "#464E5F",
        "gray-800": "#1B283F",
        "gray-900": "#212121"
      }
    },
    "font-family": "Poppins"
  };
</script>


<script src="<?php echo base_url() ?>assets/auth/plugins.bundle.js.download" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/auth/prismjs.bundle.js.download" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/auth/scripts.bundle.js.download" type="text/javascript"></script>






<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg></body></html>
