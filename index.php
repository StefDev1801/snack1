<?php
//Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
//Olimpia Milano - Cantù | 55-60
$basketball_games = [
    "18/02/24" => [
        "casa" => "Lakers",
        "ospite" => "Boston Celtics",
        "punteggio casa" => 90,
        "punteggio ospite" => 110,
    ],
    "19/02/24" => [
        "casa" => "Chicago Bulls",
        "ospite" => "Cleveland Cavaliers",
        "punteggio casa" => 80,
        "punteggio ospite" => 75,
    ],
    "20/02/24" => [
        "casa" => "Miami Heat",
        "ospite" => "Orlando Magic",
        "punteggio casa" => 55,
        "punteggio ospite" => 70,
    ],
    "21/02/24" => [
        "casa" => "Toronto Raptors",
        "ospite" => "Milwaukee Bucks",
        "punteggio casa" => 40,
        "punteggio ospite" => 60,
    ]
];
var_dump($basketball_games);

foreach ($basketball_games as $data => $basketball_game) {
    echo $basketball_game['casa'] . " - " . $basketball_game['ospite'] . " | " . $basketball_game['punteggio casa'] . "-" . $basketball_game['punteggio ospite'] . "<br>";
}
