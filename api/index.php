<?php
require_once __DIR__ . '/functions/Sessions.php';
require_once __DIR__ . '/template.php';

try {
    $session = NSessionHandler::cekLogin();
} catch (Exception $e) {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="application/vnd.ms-excel; charset=UTF-8">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../public/reset.css" />
    <link rel="stylesheet" href="../public/style.css" />
    <title>Dashboard</title>
</head>

<body>
    <div class="container" style="display:<?= !isset($_GET['estate']) ? 'none' : $_GET['estate'] ?>">
        <table
            id="data"
            style="border: 1px solid; border-collapse: collapse"
            border="1">
            <caption>
                <b>Checklist Pemantauan Kondisi Kerusakan Parit Isolasi</b>
            </caption>
            <br />
            <caption><b>Estate: <?= strtoupper($_GET['estate']) ?></b></caption>

            <?php include_once __DIR__ . '/pages/thead.php' ?>

            <!-- DATA -->
            <tbody>
                <tr>
                    &nbsp;
                </tr>

                <?php ShowData($_GET['estate'], "OIL PALM"); ?>
                <?php ShowData($_GET['estate'], "RUBBER"); ?>

            </tbody>
        </table>
        <br />
        <input style="height: 2rem; cursor: pointer;"
            type="button"
            value="Export"
            onclick="exportToExcel('data')" />
    </div>

    <hr><br><br>
    <a href="client.php"><button>Halaman Client</button></a>
    <br><br>
    <hr><br>

    <form action="" method="get">
        <label for="est">Pilih Estate untuk ditampilkan datanya</label><br>
        <select id="est" name="estate">
            <option value="gbe">GURACH BATU</option>
            <option value="kpe">KWALA PIASA</option>
            <option value="sbe">SEI BALAI</option>
            <option value="sre">SERBANGAN</option>
            <option value="tre">TANAH RAJA</option>
        </select>
        <input type="submit" value="TAMPILKAN">
    </form>
    <br><br>
    <div style="text-align: center;">
        <span>2024 &copy; Azhar. <a href=""></a></span>
    </div>

    <script src="../public/js/exportToExcel.js" defer></script>
</body>

</html>