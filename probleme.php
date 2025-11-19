<?php

$klubaBiedri = [
    ["name" => "Juris", "surname" => "Liepiņš", "loma" => "leader", "stundas" => 20],
    ["name" => "Anna", "surname" => "Lapiņa", "loma" => "leader", "stundas" => 21],
    ["name" => "Toms", "surname" => "Sēja", "loma" => "member", "stundas" => 13],
    ["name" => "Ralfs", "surname" => "Beitāns", "loma" => "member", "stundas" => 15],
    ["name" => "Andrejs", "surname" => "Komašilovs", "loma" => "member", "stundas" => 17],
    ["name" => "Rihards", "surname" => "Krūmiņš", "loma" => "member", "stundas" => 12],
    ["name" => "Adrians", "surname" => "Koks", "loma" => "member", "stundas" => 20],
];

echo "Balvas 'Zvaigžņu brīvprātīgais' saņem:\n";

$balvasSaņēmēji = 0;

for ($i = 0; $i < count($klubaBiedri); $i++) {
    if ($klubaBiedri[$i]["loma"] !== "leader" && $klubaBiedri[$i]["stundas"] >= 20) {
        echo $klubaBiedri[$i]["name"] . " " . $klubaBiedri[$i]["surname"] . "\n";
        $balvasSaņēmēji++;
    }
}


$totalStundas = 0;
for ($i = 0; $i < count($klubaBiedri); $i++) {
    $totalStundas += $klubaBiedri[$i]["stundas"];
}
echo "Total stundas: $totalStundas\n";


for ($i = 0; $i < count($klubaBiedri); $i++) {
    if ($klubaBiedri[$i]["loma"] === "leader") {
        echo $klubaBiedri[$i]["name"] . " " . $klubaBiedri[$i]["surname"] . " ";
    }
}


?>







