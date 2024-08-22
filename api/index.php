<?php
error_reporting(E_ALL ^ E_DEPRECATED);
require_once __DIR__ . '/functions/Connection.php';
require_once __DIR__ . '/templates.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="application/vnd.ms-excel; charset=UTF-8">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="public/reset.css" />
    <link rel="stylesheet" href="public/style.css" />
    <title>Dashboard</title>
</head>

<body>
    <div class="container">
        <table
            id="data"
            style="border: 1px solid; border-collapse: collapse"
            border="1">
            <caption>
                <b>Checklist Pemantauan Kondisi Kerusakan Parit Isolasi</b>
            </caption>
            <br />
            <caption><b>Estate: SBE</b></caption>

            <?php include_once __DIR__ . '/pages/thead.php' ?>

            <!-- DATA -->
            <tbody>
                <tr>
                    &nbsp;
                </tr>

                <!-- OIL PALM -->
                <tr style="border-color: black">
                    <td colspan="14" bgcolor="#d6dee0"><b>OIL PALM</b></td>
                </tr>

                <?php

                $i = 1;
                foreach ($col->find() as $d) {
                ?>
                    <tr style="text-align: center; border-color: black">

                        <!-- field & ha -->
                        <td <?= $i % 2 == 1 ? 'bgcolor="8bd6f1"' : ''; ?>><?= $d['field'] ?></td>
                        <td <?= $i % 2 == 1 ? 'bgcolor="8bd6f1"' : ''; ?>><?= $d['ha'] ?></td>

                        <!-- ceklis pengecekan -->
                        <!-- w1 -->
                        <td><?= $d['w1']['w1a'] == 1 ? '&#x2714' : ''; ?></td>
                        <td><?= $d['w1']['w1b'] == 1 ? '&#x2714' : ''; ?></td>
                        <td><?= $d['w1']['w1c'] != 'N/A' ? $d['w1']['w1c'] : ''; ?></td>
                        <!-- w2 -->
                        <td><?= $d['w2']['w2a'] == 1 ? '&#x2714' : ''; ?></td>
                        <td><?= $d['w2']['w2b'] == 1 ? '&#x2714' : ''; ?></td>
                        <td><?= $d['w2']['w2c'] != 'N/A' ? $d['w2']['w2c'] : ''; ?></td>
                        <!-- w3 -->
                        <td><?= $d['w3']['w3a'] == 1 ? '&#x2714' : ''; ?></td>
                        <td><?= $d['w3']['w3b'] == 1 ? '&#x2714' : ''; ?></td>
                        <td><?= $d['w3']['w3c'] != 'N/A' ? $d['w3']['w3c'] : ''; ?></td>
                        <!-- w4 -->
                        <td><?= $d['w4']['w4a'] == 1 ? '&#x2714' : ''; ?></td>
                        <td><?= $d['w4']['w4b'] == 1 ? '&#x2714' : ''; ?></td>
                        <td><?= $d['w4']['w4c'] != 'N/A' ? $d['w4']['w4c'] : ''; ?></td>

                    </tr>

                <?php $i += 1;
                } ?>

                <!-- RUBBER -->
                <tr style="border-color: black">
                    <td colspan="14" bgcolor="#d6dee0"><b>RUBBER</b></td>
                </tr>
                <?php
                ?>

            </tbody>
        </table>
        <br />
        <input style="height: 2rem;"
            type="button"
            value="Export"
            onclick="exportToExcel('data')" />

        <hr><br><br>

        <?php include_once __DIR__ . '/pages/v_insert.php' ?>

    </div>
    <script src="index.js"></script>

    <script src="public/export/exportToExcel.js" defer></script>
</body>

</html>