<?php
if (isset($_POST['id_client'])) {
    $exitClient = new ClientControllers();
    $exitClient->deleteClient();
}


?>