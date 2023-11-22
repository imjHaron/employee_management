<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Âm nhạc</title>
</head>

<?php

$songs = array(
    array("number" => 1, "title" => "Shape of You", "artist" => "Ed Sheeran"),
    array("number" => 2, "title" => "Blinding Lights", "artist" => "The Weeknd"),
    array("number" => 3, "title" => "Uptown Funk", "artist" => "Mark Ronson ft. Bruno Mars"),
    array("number" => 4, "title" => "Thinking Out Loud", "artist" => "Ed Sheeran"),
    array("number" => 5, "title" => "Hello", "artist" => "Adele"),
    array("number" => 6, "title" => "See You Again", "artist" => "Wiz Khalifa ft. Charlie Puth"),
    array("number" => 7, "title" => "Closer", "artist" => "The Chainsmokers ft. Halsey"),
    array("number" => 8, "title" => "Sorry", "artist" => "Justin Bieber"),
    array("number" => 9, "title" => "Love Yourself", "artist" => "Justin Bieber"),
    array("number" => 10, "title" => "Despacito", "artist" => "Luis Fonsi ft. Daddy Yankee")
);

echo "Danh sách bài hát:<br>";
foreach ($songs as $song) {
    echo "{$song['number']}. {$song['title']} - {$song['artist']}<br>";
}

function compareByTitle($a, $b) {
    return strcasecmp($a['title'], $b['title']);
}

usort($songs, 'compareByTitle');

echo "<br>Danh sách bài hát theo thứ tự tăng dần theo tên:<br>";
foreach ($songs as $song) {
    echo "{$song['number']}. {$song['title']} - {$song['artist']}<br>";
}

?>

