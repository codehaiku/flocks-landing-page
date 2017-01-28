
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Flocks | Social networking ready WordPress theme capable of handling any niche or purpose</title>

    <!-- Bootstrap core CSS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:600|Source+Sans+Pro" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/justified-nav.css" rel="stylesheet">

    <!-- Custom styles for this template -->
  </head>

  <body>
      <div class="jumbotron">
        <div class="container">
        	<h1 class="sr-only">Marketing stuff!</h1>
        	<img id="logo" src="http://flocks.dunhakdis.com/modern/wp-content/themes/flockswp/logo-alternative.svg" alt="Marketing Stuff!" />
	        <h2 class="lead body">Perfect for any Social Media and Community Websites</h2>
            <?php 
                $tf_link = 'https://themeforest.net/cart/configure_before_adding/{ITEM_ID_HERE}?license=regular&size=source&support=bundle_12month&ref=dunhakdis'; 
            ?>
	        <p><a title="You will be redirected to Envato Market" class="btn btn-lg btn-success main-btn" href="<?php echo $tf_link; ?>" role="button">Get FLOCKS - $64.00</a></p>
        </div>
      </div>
      <div id="demo-section">
      <div class="container">
      	<div class="row">
        <?php 
        $demos = array(
                'demo-1' => array(
                        'title' => 'Original Classic',
                        'link' => 'http://flocks.dunhakdis.com',
                        'preview' => 'images/demo1.jpg'
                    ),
                'demo-2' => array(
                        'title' => 'Modern',
                        'link' => 'http://flocks.dunhakdis.com/modern',
                        'preview' => 'images/demo3.jpg'
                    ),
                'demo-3' => array(
                        'title' => 'Modern Minimalist',
                        'link' => 'http://flocks.dunhakdis.com/modern-minimalist',
                        'preview' => 'images/demo4.jpg'
                    ),
                'demo-4' => array(
                        'title' => 'Classic Minimal',
                        'link' => 'http://flocks.dunhakdis.com/classic-minimal',
                        'preview' => 'images/demo2.jpg'
                    ),
            );
        ?>
        <?php foreach ( $demos as $demo ) { ?>
        <div class="col-lg-3 col-sm-6">
            <div class="featurette">
                <div class="featurette-image">
                     <p>
                        <img alt="Demo 1" src="<?php echo $demo['preview'] ?>" />
                     </p>
                </div>
                <div class="featurette-details">
                    <div class="table">
                        <div class="table-cell vertical-align-middle">
                            <h2 class="featurette-title"><?php echo $demo['title']; ?></h2>
                            <p class="featurette-link">
                                <a class="btn btn-primary" href="<?php echo $demo['link']; ?>" role="button">
                                    See Demo
                                </a>
                            </p>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <?php } ?>
      </div><!--.row-->
      </div>
</div>
      <!-- Site footer -->
      <footer class="footer">
      	<div class="container center">
        	<p>&copy; 2015 - 2020 · 
          <a href="https://dunhakdis.com" target="_blank" title="Dunhakdis Software Creatives">Dunhakdis Software Creatives</a>. All Rights Reserved.  
      	</div>

      </footer>


    <!-- Bootstrap core some JS -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
