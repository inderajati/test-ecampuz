<?php

$i = 0;
$num = 1;
$data = array( "gtAkademik", "gtFinansi", "gtPerizinan", "eCampuz", "eOviz" );

while($i <= 4) {
    
    echo '$aplikasi['. $num++ .'] =’'. $data[$i] .'’; <br>';
    $i++;
}
