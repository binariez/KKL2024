<?php

if (isset($_POST['estate'])) {

    $est = "estate_" . $_POST['estate'];
    $cek = "estate_" . $_POST['estate'] . "_cek";

    $bln = "8";
    $thn = "2024";
    $kat = $_POST['kategori'];
    $field = $_POST['field'];
    $ha = $_POST['ha'];

    $estate = Estate($_POST['estate'], $kat, $field, $ha);

    $ceklis = Ceklis($bln, $thn, $field, false, false, "N/A", false, false, "N/A", false, false, "N/A", false, false, "N/A");

    if ($db->$est->insertOne($estate)) {
        $db->$cek->insertOne($ceklis);
    }
    header("Location: /api?estate=" . $_POST['estate']);
}
