<?php include_once 'includes/header.php'; ?>
<body>

    <div class="container">

      <div class="masthead">
        <h3 class="muted">Unicorn Innovations</h3>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Downloads</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>

      <!-- Jumbotron -->
      <div class="slider">
          <div id="sliderFrame">
              <div id="slider">
                  <a href="" target="_blank">
                      <img src="<?php echo base_url('assets');?>/images/slider/image-slider-1.jpg" alt="Leapfrog Campus Building" height="306px" width="996px"/>
                  </a>
                  <img src="<?php echo base_url('assets');?>/images/slider/image-slider-2.jpg" alt="Leapfrog Campus Staff Members" height="306px" width="996px"/>
                  <img src="<?php echo base_url('assets');?>/images/slider/image-slider-3.jpg" alt="Students at Discussion" height="306px" width="996px"/>
                  <img src="<?php echo base_url('assets');?>/images/slider/image-slider-4.jpg" alt="Graduation Ceremony" height="306px" width="996px"/>
                  <img src="<?php echo base_url('assets');?>/images/slider/image-slider-5.jpg" height="306px" width="996px" alt="Leapfrog College Library"/>
              </div>
          </div>

      </div>
      
      <hr>

      <!-- Example row of columns -->
      <div class="row-fluid">
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

<?php include_once 'includes/footer.php'; ?>    