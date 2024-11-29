<?php
$urls = [
    'http://localhost:8080/',
    'http://localhost:8080/ganyang_setan_alas_the_game',
];

foreach ($urls as $url) {
    $content = file_get_contents($url);
    $fileName = basename(parse_url($url, PHP_URL_PATH)) ?: 'index.html';
    file_put_contents($fileName, $content);
}
?>