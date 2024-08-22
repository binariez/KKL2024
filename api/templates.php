<?php

if (isset($_POST['submit'])) {

    // nilai hasil input
    $bln = "8";
    $thn = "2024";
    $est = $_POST['estate'];
    $kat = $_POST['kategori'];
    $field = $_POST['field'];
    $ha = $_POST['ha'];

    $estate = insertEstate($est, $kat, $field, $ha);

    $template = insertTemplate($bln, $thn, $field, false, false, "N/A", false, false, "N/A", false, false, "N/A", false, false, "N/A");

    if ($db->estate_sbe->insertOne($estate)) {
        $db->estate_sbe_cek->insertOne($template);
    }
    header("Location: /api");
}
