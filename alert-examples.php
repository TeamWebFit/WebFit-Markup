<?php
include ("components/header.php");

?>

  <div class="container">
    <a href="../">zurück</a><br />
    <br /><br />
    <h2>WebFit Alerts</h2>
    <div class="container-fluid">
	    <div class="row">
	  	  <div class="col">
          <?php include ("components/alert_gradient.php") ?>
        </div>
      </div>
    </div>
    <div class="container-fluid">
	    <div class="row">
	  	  <div class="col">
          <?php include ("components/alert_blue.php") ?>
        </div>
      </div>
    </div>
    <div class="container-fluid">
	    <div class="row">
	  	  <div class="col">
          <?php include ("components/alert_yellow.php") ?>
        </div>
      </div>
    </div>
    <div class="container-fluid">
	    <div class="row">
	  	  <div class="col">
          <?php include ("components/alert_red.php") ?>
        </div>
      </div>
    </div>
    <div class="container-fluid">
	    <div class="row">
	  	  <div class="col">
          <?php include ("components/alert_dark.php") ?>
        </div>
      </div>
    </div>
  </div>
  
<?php
include ("components/footer.php");
?>