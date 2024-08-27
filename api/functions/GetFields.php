<?php
require_once "Connection.php";

$est = $_GET['estate'];
$col = "estate_" . $est;

$filter = ['kategori' => 'RUBBER'];
$options = ['sort' => ['field' => 1]];
$result = $db->$col->find($filter, $options);

$len = $db->$col->countDocuments($db->$col->find());

if ($len == 0) {
?>
    <option value="" hidden>--TIDAK ADA DATA FIELD--</option>
    <?php
} else {
    foreach ($result as $r) {
    ?>
        <option value="<?= $r['field'] ?>"><?= strtoupper($r['field']) ?></option>
<?php
    }
}
