<?php

$cards = 'A,2,3,4,5,6,7,8,9,10,J,Q,K';
$colors = ['spade', 'heart', 'diamond', 'club'];
$cards = explode(',', $cards);

echo sprintf(
    '    CARD_BLANK = 0;' . PHP_EOL
);

foreach ($colors as $i => $color) {
    foreach ($cards as $j => $card) {
        echo sprintf(
            '    CARD_%s_%s = %d;' . PHP_EOL,
            strtoupper($color),
            $card,
            $i << 4 | ($j + 1)
        );
    }
}

echo sprintf(
    '    CARD_QUEEN = %d;' . PHP_EOL,
    4 << 4 | 1
);

echo sprintf(
    '    CARD_KING = %d;' . PHP_EOL,
    4 << 4 | 2
);
