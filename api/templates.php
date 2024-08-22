<?php

if (isset($_POST['submit'])) {

    // nilai hasil input
    $bln = $_POST['bulan'];
    $kat = $_POST['kategori'];
    $thn = $_POST['tahun'];
    $field = $_POST['field'];
    $ha = $_POST['ha'];

    $template = insertTemplate(($bln . ' ' . $thn), $kat, $field, $ha, false, false, "N/A", false, false, "N/A", false, false, "N/A", false, false, "N/A");

    $col->insertOne($template);

    header("Location: /api");
}
