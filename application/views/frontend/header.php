<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Shirt - Erigo Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="shorcut icon" type="text/css" href="https://cf.shopee.co.id/file/59510afc4eaa2bc01551e0a751376ac5">
    <link rel="stylesheet" href="<?php echo base_url('style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('style2.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('filter.css'); ?>">
   <!-- <script src="dropdown.js"></script>-->
    <!-- my font -->
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
    <!-- my font -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<style>
    body {
      font-family: "Didact Gothic";
      font-weight: 400;
      font-size: 14px;
      color: #878787;
      font: 400 .875em/1.75 'Poppins', Arial, Helvetica, sans-serif;
      color: #878787;
      background-color: #ECECEC;
      }
    div {
      margin: 10;
      margin-top: 0px;
      padding: 0;
      padding-right: 0px;
      padding-left: 0px;
      border: 0;
      font-size: 100%;
      font: inherit;
      vertical-align: baseline;
    }

    /*style1*/
    .page-head {
      content: '';
      position: absolute;
      background: rgba(0, 0, 0, .5);
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
    }
    .page-head h4 {
        font-size: 20px;
        line-height: 20px;
        font-weight: 500;
    }
    .tu {
        text-transform: uppercase;
    }
    .cw, .bghp:hover, .bghp:active, .bghp:focus {
        color: #fff;
    }
    .mb__10 {
        margin-bottom: 10px;
    }

    /*style2*/

    /*posting1*/
    .jas-row {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex: 0 1 auto;
        -ms-flex: 0 1 auto;
        -webkit-box-flex: 0;
        flex: 0 1 auto;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        flex-direction: row;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: 0px;
        margin-left: 110px;
        margin-bottom: 50px;
        margin-top:10px;
    }

    div {
        margin: 0px;
            margin-top: 0px;
        padding: 0px;
            padding-right: 0px;
            padding-left: 0px;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }



    .mt__30 {
        margin-top: 30px;
    }

    .jas-col-md-3 {
        box-sizing: border-box;
        -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
        -webkit-box-flex: 0;
        flex: 0 0 auto;
            flex-basis: auto;
        padding-right: 1rem;
        padding-left: 1rem;

    }

    .jas-col-md-3 {
        -ms-flex-preferred-size: 25%;
        -webkit-flex-basis: 25%;
        flex-basis: 25%;
        max-width: 25%;
    }

    .jas-col-sm-4 {
        -ms-flex-preferred-size: 33.333%;
        -webkit-flex-basis: 33.333%;
        flex-basis: 33.333%;
        max-width: 33.333%;
    }

    .jas-col-sm-4 {
        box-sizing: border-box;
        -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
        -webkit-box-flex: 0;
        flex: 0 0 auto;
        padding-right: 1rem;
        padding-left: 1rem;
    }

    .jas-col-xs-6 {
        -ms-flex-preferred-size: 50%;
        -webkit-flex-basis: 50%;
        flex-basis: 50%;
        max-width: 50%;
    }

    .jas-col-xs-6 {
        box-sizing: border-box;
        -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
        -webkit-box-flex: 0;
        flex: 0 0 auto;
        padding-right: 1rem;
        padding-left: 1rem;
    }

    .product-inner {
        background: #fff !important;
        padding: 10px !important;
    }

    .pr {
        position: relative;
    }

    .product-image-flip {
      position:relative;
      height:281px;
      width:230px;
      margin:0 auto;
      
    }

    .product-image-flip img {
      position:absolute;
      left:0;
      -webkit-transition: opacity 0.5s ease-in-out;
      -moz-transition: opacity 0.5s ease-in-out;
      -o-transition: opacity 0.5s ease-in-out;
      transition: opacity 0.5s ease-in-out;
    }

    .product-image-flip img.view2:hover {
      opacity:0;
    }

    .product-image.product-attr {
        bottom: 5px;
        left: 10px;
        right: 10px;
        z-index: 2;
    }

    .product-image.product-attr{
      opacity:0;
      visibility:visible;
    }

    .ts__03 {
        transition: all .3s;
    }

    .product-attr{
      visibility: visible;
      margin-top: -7px;
      margin-left: 13px;
      color: #B9B9B9;
    }
    .product-attr:hover{
      visibility: visible;
        color: #ffff;

    }
    .pa {
        position: absolute;
    }

    .product-image .product-attr p {
        margin: 0;
    }

    p {
        text-align: justify !important;
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
        margin-bottom: 1.3em;
    }

    .mt__15 {
        margin-top: 35px;
    }

    .product-title {
        text-transform: uppercase;
    }

    .fs__14 {
        font-size: 11px;
    }

    .product-title {
        text-transform: uppercase;
    }

    .fwm {
        font-weight: 500;
    }

    .pr {
        position: relative;
    }

    .fs__14 {
        font-size: 14px;
    }

    .mg__0 {
        margin: 0;
    }

    .dropbtn {
      background-color: #ffff;
      color: black;
      font:inherit;
      font-style: bold;
      padding: 13px;
      font-size: 16px;
      border: none;
      cursor: pointer;  
      flex: middle;
      border-style: groove;
      border-color: #DFDFDF;
      border-width: 1px;
      width: 250px;

    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
      position: relative;
      display: inline-block;
      margin-top: 30px;
      margin-left:126px;
      margin-right: 22px;
      width: 130px;
      height: 100px;
    }


    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      width: 250px;
      height: 150px;
      z-index: 1;
      margin-left: 0px;
      background-color: #ffffff;
      border-style: groove;
      border-color: #DFDFDF;
      border-width: 1px;
      transition-delay: 1s;
      font-size: 10px;
      vertical-align: middle;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      border-color: #DFDFDF;
      border-style: groove;
      border-width: 1px;
      display: block;
      /*transition: 1s;*/
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {background-color: #ddd}
    .dropdown:hover .dropdown-content {
     display: block;
    }

    /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
    /*.show {display:block;}*/


    /*button*/

    .btn {
      margin-left: 10px;
      margin-right: 10px;

    }

    .btn-default {
      margin-top: -90px;
      margin-bottom: -50px;
      margin-left: 130px;
      font-family: Didact Gothic;
      font-weight: bold;
      font-size: 13px;
      color: black;
      letter-spacing: 1px;
      line-height: 25px;
      border: 2px solid;
      border-color: black;
      border-radius: 40px;
      background: transparent;
      transition: all 0.3s ease 0s;
    }

    .btn-default:hover {
      color: #FFFFFF;
      background: #24B7FF;
      border: 2px #24B7FF;
    }

    /*sampinge button*/

    #jas-footer {
        color: #878787;
    }
    #jas-footer {
        background: #f6f6f8;
    }
    .bgbl {
        background: #f6f6f8;
    }

    .footer__bot {
        background: #fff;
    }
    .lh__1 {
        line-height: 1;
    }
    .pb__20 {
        padding-bottom: 20px;
    }
    .pt__20 {
        padding-top: 20px;
    }

    .jas-container {
        width: 1100px;
    }

    .pr {
        position: relative;
    }
    .tc {
        text-align: center;
        margin-left: 125px;
    }


</style>

   <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark" class="text-white" style="position: relative; height: 62px; background-color:#0b2343">
    <div class="container">
      <a class="navbar-brand" href="<?php echo site_url('Landing'); ?>">
        <img src="<?php echo base_url('assets/erigostore.png'); ?>" width="66" height="40" class="d-inline-block align-top" alt="" style="margin-left: -57px;">
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 180px; font-size: 12px;">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item" style="margin-left: 20px;">
            <a  class="nav-link" href="<?php echo site_url('front'); ?>">Home</a>
          </li>
          <li class="nav-item" style="margin-left: 20px;">
            <a class="nav-link" href="<?php echo site_url('front/kamar'); ?>">Kamar</a>
          </li>

        </ul>
      </div>
      <div style="margin-left: 130px;">
        <ul class="navbar-nav mx-auto simbol">
          <li class="nav-item">
            <a class="nav-link" href=""><img src="<?php echo base_url('assets/search.png'); ?>"width="22" height="22"
                class="d-inline-block align-top"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Landing/login'); ?>"><img src="<?php echo base_url('assets/user.png'); ?>" width="22" height="22"
                class="d-inline-block align-top"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="<?php echo base_url('assets/like.png'); ?>"width="22" height="22"
                class="d-inline-block align-top"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('C_Keranjang'); ?>"><img src="<?php echo base_url('assets/shop.png'); ?>" width="22" height="22"
                class="d-inline-block align-top"></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end navbar -->