<?php
require_once "Connection.php";
require_once "Sessions.php";

$est = strtolower($_GET['estate']);
$col = "estate_" . $est;

$filter = ['kategori' => $_GET['kategori']];
$options = ['sort' => ['_id' => 1]];
$result = $db->$col->find($filter, $options);

$count = $db->$col->aggregate([
    [
        '$facet' => [
            'notFound' => [
                [
                    '$project' => [
                        '_id' => 0,
                        'count' => [
                            '$const' => 0
                        ]
                    ]
                ],
                [
                    '$limit' => 1
                ]
            ],
            'found' => [
                [
                    '$match' => [
                        'kategori' => $_GET['kategori']
                    ]
                ],
                [
                    '$count' => 'count'
                ]
            ]
        ]
    ],
    [
        '$replaceRoot' => [
            'newRoot' => [
                '$mergeObjects' => [
                    [
                        '$arrayElemAt' => [
                            '$notFound',
                            0
                        ]
                    ],
                    [
                        '$arrayElemAt' => [
                            '$found',
                            0
                        ]
                    ]
                ]
            ]
        ]
    ]
]);


foreach ($count as $c) {
    if ($c['count'] == 0) {

?>
        <option value="" hidden>-TIDAK ADA DATA-</option>
        <?php
    } else {
        foreach ($result as $r) {
        ?>
            <option value="<?= $r['field'] ?>"><?= strtoupper($r['field']) ?></option>
<?php
        }
    }
}
