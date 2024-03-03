<?php
// sisi kubus a = 9, sisi kubus b = 4
// hitung total masing masing kedua kubus 
// $sisi_a = 9;
// $sisi_b = 4;
// $volume_a = $sisi_a * $sisi_a * $sisi_a;
// $volume_b = $sisi_b * $sisi_b * $sisi_b;
// $total = $volume_a + $volume_b;
// echo "Kotal Volume Kubus A dan B adalah = $total";

function total_volume_dua_kubus($a, $b) {
    $volume_a = $a * $a * $a;
    $volume_b = $a * $b * $b;
    $total = $volume_a + $volume_b;

    return $total;
}
echo "Total Volume Kubus A dan B = " . total_volume_dua_kubus(9, 4);
echo "<br>";
echo "Total Volume Kubus C dan D = " . total_volume_dua_kubus(10, 15)