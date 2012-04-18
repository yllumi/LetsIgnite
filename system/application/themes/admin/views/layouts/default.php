<!DOCTYPE html>
<html lang="en">
  <head>
	  <?php echo $template['partials']['metadata']; ?>
  </head>

  <body>
    <div class="navbar navbar-fixed-top">
      <?php echo $template['partials']['header']; ?>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        
        <div class="span2">
          <?php echo $template['partials']['sidebar']; ?>
        </div><!--/span-->
        
        <div class="span10">
			<?php echo $template['body']; ?>
        </div><!--/span-->
        
      </div><!--/row-->

      <hr>

      <?php echo $template['partials']['footer']; ?>

    </div><!--/.fluid-container-->

    <?php echo $template['partials']['footer_js']; ?>

  </body>
</html>
