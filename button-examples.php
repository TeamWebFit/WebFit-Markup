<?php
include ("components/header.php");

?>

  <div class="container">
    <a href="../">zurück</a><br />
    <a href="../animation-examples.php">>>Info´s zu Animationen hier.</a>
    <br /><br />
    <h2>WebFit Buttons</h2>
    <p>Wichtig! Button anlegen: div-tag + Klasse</p>
    <div class="row">
      <div class="col-md-6">
        <h4>Button Basic:</h4>
        <p>class = btn-basic</p>
        <?php include ("components/button_basic.php") ?>
      </div>
      <div class="col-md-6">
        <h4>Button Black:</h4>
        <p>class = btn-black</p>
        <?php include ("components/button_black.php") ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <br /><br />
        <h4>Button Ghost:</h4>
        <p>class = btn-ghost</p>
        <?php include ("components/button_ghost.php") ?>
      </div>
      <div class="col-md-6">
        <br /><br />
        <h4>Button blauer Rahmen:</h4>
        <p>class = btn-blueline</p>
        <?php include ("components/button_blueline.php") ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <br /><br />
        <h4>Button roter Rahmen:</h4>
        <p>class = btn-redline</p>
        <?php include ("components/button_redline.php") ?>
      </div>
      <div class="col-md-6">
        <br /><br />
        <h4>Button oranger Rahmen:</h4>
        <p>class = btn-orangeline</p>
        <?php include ("components/button_orangeline.php") ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <br /><br />
        <h4>Button schwarzer Rahmen:</h4>
        <p>class = btn-blackline</p>
        <?php include ("components/button_blackline.php") ?>
      </div>
      <div class="col-md-6">
        <br /><br />
        <h4>Button weißer Rahmen:</h4>
        <p>class = btn-whiteline</p>
        <?php include ("components/button_whiteline.php") ?>
      </div>
    </div>
  </div>
    <hr />


<?php
include ("components/footer.php");
?>
