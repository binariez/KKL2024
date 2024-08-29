<?php

// Input field
if (isset($_POST['inputField'])) {

    $est = "estate_" . $_POST['estate'];
    $col = "estate_" . $_POST['estate'] . "_cek";

    $bln = "N/A";
    $thn = intval(date("Y"));
    $kat = $_POST['kategori'];
    $field = $_POST['field'];
    $ha = $_POST['ha'];

    $estate = Estate($_POST['estate'], $kat, $field, $ha);
    $ceklis = Ceklis($bln, $thn, $field, false, false, "N/A", false, false, "N/A", false, false, "N/A", false, false, "N/A");

    if ($db->$est->insertOne($estate)) {
        $db->$col->insertOne($ceklis);
    }
    header("Location: /api?estate=" . $_POST['estate']);
}

// Update pengecekan
if (isset($_GET['updateCek'])) {

    $col = "estate_" . strtolower($_GET['estate']) . "_cek";

    $bulan = $_GET['bulan'];
    $tahun = $_GET['tahun'];
    $field = $_GET['field'];
    $week = $_GET['week'];

    if (isset($_GET['pengecekan'])) $pengecekean = $_GET['pengecekan'];
    else $pengecekean = false;

    if (isset($_GET['kerusakan'])) $kerusakan = $_GET['kerusakan'];
    else $kerusakan = false;

    $tglPerbaikan = $_GET['tglPerbaikan'];
    $tglPerbaikan != "" ?: $tglPerbaikan = "N/A";

    switch ($week) {
        case "w1":
            $w = "w1";
            break;
        case "w2":
            $w = "w2";
            break;
        case "w3":
            $w = "w3";
            break;
        case "w4":
            $w = "w4";
            break;
    }

    $filter = ['field' => $field];
    $update =
        [
            '$set' => [
                'bln' => $bulan,
                'thn' => $tahun,
                $w => [
                    $w . 'a' => $pengecekean,
                    $w . 'b' => $kerusakan,
                    $w . 'c' => $tglPerbaikan,
                ]
            ]
        ];

    $db->$col->updateOne($filter, $update);
    header("Location: client.php?m=Sukses");
}
