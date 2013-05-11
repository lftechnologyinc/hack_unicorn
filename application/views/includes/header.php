<!-- template from::http://twitter.github.io/bootstrap/examples/justified-nav.html#-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Unicorn Innovations</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url('assets');?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url('assets');?>/css/jquery-ui-1.8.22.custom.css" rel="stylesheet">
    <link href="<?php echo base_url('assets');?>/css/js-image-slider.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets');?>/css/style.css" rel="stylesheet">
    
    <script src="<?php echo base_url('assets');?>/js/js-image-slider.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets');?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>
    
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 60px;
      }

      /* Custom container */
      .container {
        margin: 0 auto;
        max-width: 1000px;
      }
      .container > hr {
        margin: 60px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 80px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 100px;
        line-height: 1;
      }
      .jumbotron .lead {
        font-size: 24px;
        line-height: 1.25;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }


      /* Customize the navbar links to be fill the entire space of the .navbar */
      .navbar .navbar-inner {
        padding: 0;
      }
      .navbar .nav {
        margin: 0;
        display: table;
        width: 100%;
      }
      .navbar .nav li {
        display: table-cell;
        width: 1%;
        float: none;
      }
      .navbar .nav li a {
        font-weight: bold;
        text-align: center;
        border-left: 1px solid rgba(255,255,255,.75);
        border-right: 1px solid rgba(0,0,0,.1);
      }
      .navbar .nav li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
      .navbar .nav li:last-child a {
        border-right: 0;
        border-radius: 0 3px 3px 0;
      }
    </style>
    <link href="<?php echo base_url('assets');?>/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
     </head>
     <body>
      <div class="container">
        <div class="row-fluid">
                <?php 
                  if($this->bitauth->logged_in()){
                    echo '<div class="span2">'.img('assets/images/logo.jpg').'</div>';
                    echo '<div class="span9"><h3 class="muted">Unicorn Ticketing Reservation System</h3></div>';
                    echo '<div class="span1">';
                      echo anchor('base/logout', 'Logout');
                      echo '</div>';
                    }
                    else{
                      echo '<div class="span2">'.img('assets/images/logo.jpg').'</div>';
                      echo '<div class="span8"><h3 class="muted">Unicorn Ticketing Reservation System</h3></div>';
                      echo '<div class="span3">';
                      echo anchor('base/login', 'Login')."&nbsp"."|"; echo anchor('base/register', 'Register');
                      echo '</div>';
//                      echo '<div class="span1">';
//                      echo anchor('base/register', 'Register');
//                      echo '</div>';
                    }
                ?>  
            
          </div>
          
<div class="masthead">
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li class="active"><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="<?php echo base_url('vendor');?>">Rental</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="<?php echo base_url('vehicle');?>">Vehicle</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>
