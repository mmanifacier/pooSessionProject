<?php
    require './include.php';

    session_start();

    $session = new Session();
    //$session->prenom = 'Marie';
    //$session->nom = 'Manifacier';
    //$session->adresse = 'Randan';

    var_dump($session);

    var_dump(isset($session->numero));

    var_dump($session);

    //$session->logout();
?>