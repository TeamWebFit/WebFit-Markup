<?php
include ("components/header.php");
?>

<div class="container">
  <a href="../">zurück</a><br />
  <a href="../button-examples.php">>>Info´s zu Buttons hier.</a>
  <br /><br />
  <h2>WebFit Animations</h2>
  <p>Wichtig! Bei den Basic-Buttons muss ein leeres div-Tag um den Button erstellt werden, welches die Animationsklasse erhält. (Sonst bleibt der Rand des Buttons nicht erhalten)</p>
  <div class="row">
    <div class="col-md-6">
      <h4>Klick-Event | Pulsieren: </h4>
      <p>class = animate-clickPulse</p>
      <div class="animate-clickPulse"><div class="btn-basic">Example</div></div>
    </div>
    <div class="col-md-6">
      <h4>Hover-Event | Pulsieren: </h4>
      <p>class = animate-hoverPulse</p>
      <div class="animate-hoverPulse"><div class="btn-basic">Example</div></div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <br /><br />
      <h4>Klick-Event | Shake: </h4>
      <p>class = animate-clickShake</p>
      <div class="animate-clickShake"><div class="btn-basic">Example</div></div>
    </div>
    <div class="col-md-6">
      <br /><br />
      <h4>Hover-Event | Shake: </h4>
      <p>class = animate-hoverShake</p>
      <div class="animate-hoverShake"><div class="btn-basic">Example</div></div>
    </div>
  </div>
</div>

<?php
include ("components/footer.php");
?>
