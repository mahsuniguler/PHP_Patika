<?php

function ucgen($satir)
{
    if ($satir % 2 == 0) $satir -= 1;
    $a = 0;
    $html = '';
    $html .= '<body style="text-align: center;"> ';
    for ($i = 1; $i <= $satir; $i += 2) {
        for ($l = 1; $l <= (($satir - $i) / 2); $l++) {
        }
        for ($j = 1; $j <= $i; $j++) {

            $html .= 0;
        }
        $html .= '<br>';
    }
    return $html;
    $html .= '</body> ';
}

echo ucgen(500);
echo $html;
