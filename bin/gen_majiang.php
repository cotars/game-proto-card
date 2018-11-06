<?php

$cards = '1,2,3,4,5,6,7,8,9';
$colors = ['WANG', 'TONG', 'TIAO'];
$cards = explode(',', $cards);

foreach ($colors as $i => $color) {
    foreach ($cards as $j => $card) {
        echo sprintf(
            '    MAJIANG_%s_%s = %d;' . PHP_EOL,
            $card,
            strtoupper($color),
            $i << 4 | ($j + 1)
        );
    }
}

$fengs = [
    'DONG', 'NAN', 'XI', 'BEI'
];

foreach ($fengs as $j => $feng) {
    echo sprintf(
        '    MAJIANG_%s_%s = %d;' . PHP_EOL,
        $feng,
        'FENG',
        3 << 4 | ($j + 1)
    );
}

$fengs = [
    'ZHONG', 'FA', 'BAI'
];

foreach ($fengs as $j => $feng) {
    echo sprintf(
        '    MAJIANG_%s_%s = %d;' . PHP_EOL,
        $feng,
        'JIAN',
        4 << 4 | ($j + 1)
    );
}

$fengs = [
    'CHUN', 'XIA', 'QIU', 'DONG', 'MEI', 'LAN', 'ZHU', 'JU'
];

foreach ($fengs as $j => $feng) {
    echo sprintf(
        '    MAJIANG_%s_%s = %d;' . PHP_EOL,
        $feng,
        'HUA',
        5 << 4 | ($j + 1)
    );
}