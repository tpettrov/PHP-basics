<link href="style_chessboard.css" rel="stylesheet">
<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 1/28/2017
 * Time: 22:57
 */


$n = 8;
$html = '<div class="chessboard" >';
$color = 'black';
for ($i = 0; $i < $n; $i++) {

    if ($i % 2 != 0) {
        $color = 'black';
    } else $color = 'white';

    $html .= '<div class="row">';

    for ($j = 0; $j < $n; $j++) {

        $color = ($color == 'white') ? 'black' : 'white';

        $html .= "<span style='background: $color'></span>";

    }

    $html .= '</div>';

}
$html .= '</div>';
echo $html;