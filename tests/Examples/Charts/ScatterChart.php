<?php
    $data = $lava->DataTable();
    $data->addNumberColumn('Age')
         ->addNumberColumn('Weight');

    for ($i=0; $i < 50; $i++) {
        $data->addRow([rand(20, 40), rand(100, 300)]);
    }

    $lava->ScatterChart('AgeWeight', $data, [
        'title' => 'Age vs. Weight comparison',
        'width' => $width,
        'height' => $height,
        'hAxis' => [
            'title' => 'Age',
            'minValue' => 20,
            'maxValue' => 40
        ],
        'vAxis' => [
            'title' => 'Age',
            'minValue' => 100,
            'maxValue' => 300
        ],
        'legend' => [
            'position' => 'none'
        ]
    ]);
?>

<html>
    <head></head>
    <body>
        <div class="render" id="chart"></div>
        <?= $lava->render('ScatterChart', 'AgeWeight', 'chart'); ?>
    </body>
</html>
