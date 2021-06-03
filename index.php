<?php

    require './include.php';

    $session = new Session();
    $session->prenom = 'Marie';
    $session->nom = 'Manifacier';
    $session->adresse = 'Randan';

    var_dump($session);

    var_dump(isset($session->numero));

    //SERIALIZE AND UNSERIALIZE
    $string = serialize($session);
    var_dump('Déconstruction de l\'objet : ' . $string);

    var_dump(unserialize($string));
?>