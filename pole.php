<?php

$drivers = [
    ["nama" => "Max Verstappen", "kecepatan" => 85, "lap" => 70],
    ["nama" => "Lewis Hamilton", "kecepatan" => 87, "lap" => 70],
    ["nama" => "Charles Leclerc", "kecepatan" => 90, "lap" => 70]
];

$winner = "";
$minTime = PHP_INT_MAX;
$results = [];

foreach ($drivers as $driver) {
    $totalTime = $driver["kecepatan"] * $driver["lap"];
    
    if ($totalTime < $minTime) {
        $minTime = $totalTime;
        $winner = $driver["nama"];
    }

    $results[] = [
        "nama" => $driver["nama"],
        "totalTime" => $totalTime
    ];
}

// Output
echo "$winner meraih Pole Position dengan total waktu $minTime detik.\n";
echo "Detail waktu kualifikasi:\n";
foreach ($results as $result) {
    echo "- {$result['nama']}: {$result['totalTime']} detik\n";
}
?>