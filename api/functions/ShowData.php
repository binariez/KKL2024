<?php

function ShowData($estate, $kategori)
{
    $uri = 'mongodb+srv://' . $_ENV['MDB_USER'] . ':' . $_ENV['MDB_PASS'] . '@' . $_ENV['ATLAS_CLUSTER_SRV'] . '/?retryWrites=true&w=majority&appName=' . $_ENV['APP_NAME'];
    $client = new MongoDB\Client($uri);
    $db = $client->parit;

    $est = "estate_" . $estate;
    $cek = "estate_" . $estate . "_cek";

    echo '<tr style="border-color: black">
          <td colspan="14" bgcolor="#d6dee0"><b>' . $kategori . '</b></td>
          </tr>';

    $i = 1;
    foreach ($db->$est->find(["kategori" => "$kategori"]) as $d_est) {
        foreach ($db->$cek->find(["field" => $d_est["field"]]) as $d_cek) {
?>
            <tr style="text-align: center; border-color: black">

                <!-- field & ha -->
                <td <?= $i % 2 == 1 ? 'bgcolor="8bd6f1"' : ''; ?>><?= strtoupper($d_est['field']) ?></td>
                <td <?= $i % 2 == 1 ? 'bgcolor="8bd6f1"' : ''; ?>><?= $d_est['ha'] ?></td>

                <!-- ceklis & tanggal -->

                <!-- w1 -->
                <td><?= $d_cek['w1']['w1a'] == true ? '&#x2714' : ''; ?></td>
                <td><?= $d_cek['w1']['w1b'] == true ? '&#x2714' : ''; ?></td>
                <td><?= $d_cek['w1']['w1c'] != 'N/A' ? $d_cek['w1']['w1c'] : ''; ?></td>
                <!-- w2 -->
                <td><?= $d_cek['w2']['w2a'] == true ? '&#x2714' : ''; ?></td>
                <td><?= $d_cek['w2']['w2b'] == true ? '&#x2714' : ''; ?></td>
                <td><?= $d_cek['w2']['w2c'] != 'N/A' ? $d_cek['w2']['w2c'] : ''; ?></td>
                <!-- w3 -->
                <td><?= $d_cek['w3']['w3a'] == true ? '&#x2714' : ''; ?></td>
                <td><?= $d_cek['w3']['w3b'] == true ? '&#x2714' : ''; ?></td>
                <td><?= $d_cek['w3']['w3c'] != 'N/A' ? $d_cek['w3']['w3c'] : ''; ?></td>
                <!-- w4 -->
                <td><?= $d_cek['w4']['w4a'] == true ? '&#x2714' : ''; ?></td>
                <td><?= $d_cek['w4']['w4b'] == true ? '&#x2714' : ''; ?></td>
                <td><?= $d_cek['w4']['w4c'] != 'N/A' ? $d_cek['w4']['w4c'] : ''; ?></td>

            </tr>

<?php }
        $i += 1;
    }
}
