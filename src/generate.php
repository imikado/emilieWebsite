<?php

use MyWebsite\Pages\HomePage;
use MyWebsite\Pages\PsyOfWorkPage;

require __DIR__ . '/../vendor/autoload.php';

$pagesList = [

    new HomePage(),
    new PsyOfWorkPage()
    //new OtherPage()

];

foreach ($pagesList as $pageLoop) {
    print("Generate " . $pageLoop->getFilename() . "\n");
    $pageLoop->generateTo(__DIR__ . '/../docs/');
}
