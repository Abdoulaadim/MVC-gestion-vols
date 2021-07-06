<?php
if (isset($_POST['id_pilote'])) {
    $exitPilote = new PiloteControllers();
    $exitPilote->deletePilote();
}


?>