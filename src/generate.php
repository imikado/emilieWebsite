<?php

use MyWebsite\Pages\BioPage;
use MyWebsite\Pages\ContactPage;
use MyWebsite\Pages\HomePage;
use MyWebsite\Pages\PsyOfWorkPage;
use MyWebsite\Pages\SkillAssesmentPage;

require __DIR__ . '/../vendor/autoload.php';

$pagesList = [

    new HomePage(),
    new PsyOfWorkPage(),
    new SkillAssesmentPage(),
    new ContactPage(),
    new BioPage()
    //new OtherPage()

];

foreach ($pagesList as $pageLoop) {
    print("Generate " . $pageLoop->getFilename() . "\n");
    $pageLoop->generateTo(__DIR__ . '/../docs/');
}
