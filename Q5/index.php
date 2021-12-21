<?php

$word = 'Lorem Ipsum';

$count = 0;
for ($i = 0; $i > -1; $i++) {
    if (! isset($word[$i])) {
        $count = $i - 1;
        break;
    }
}

$reverseWord = '';
for ($i = $count; $i >= 0; $i--) {
    $reverseWord.= $word[$i];
}

echo $reverseWord;