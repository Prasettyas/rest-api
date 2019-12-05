<?php

    // $mahasiswa =[
    //     [
    //         "nama" => "Prasetya Ningtyas",
    //         "nrp" => "173040087",
    //         "email" => "173040087@mail.unpas.ac.id"
    //     ],
    //     [
    //         "nama" => "Wika Uspinawati",
    //         "nrp" => "173040060",
    //         "email" => "173040060@mail.unpas.ac.id"
    //     ],
    // ];

    $dbh = new PDO('mysql:host=localhost;dbname=wpu_laravel','root','');
    $db = $dbh-> prepare('SELECT * FROM mahasiswa');
    $db->execute();
    $mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

    $data = json_encode($mahasiswa);
    echo $data;

?>