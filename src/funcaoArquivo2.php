<?php

include 'funcaoArquivo1.php';

function make_table($data) {
    $html = '<table>';
    foreach ($data as $row) {
        $html .= '<tr>';
        echo count($row) . PHP_EOL;
        foreach ($row as $col) {
            $html .= '<td>' . $col . '</td>';
        }
        $html .= '</tr>';
    }
    $html .= '</table>';
    return $html;
}

function extendedAssertIsHTML($html) {
    if (preg_match("/<[^<]+>/", $html)) {
        return true;
    } else {
        return false;
    }
}

$d = make_data();
echo $d[1][1];
$h = make_table($d);
$a = (bool) preg_match("/<[^<]+>/",$h);
var_dump($a);