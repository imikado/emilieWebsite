<?php

namespace MyWebsite\Pages;

use Dupot\StaticGenerationFramework\Page\PageAbstract;
use Dupot\StaticGenerationFramework\Page\PageInterface;
use MyWebsite\Components\NavComponent;
use MyWebsite\Components\ViewComponent;

class HomePage extends PageAbstract implements PageInterface
{
    const FILENAME = 'index.html';
    const DOCTOLIB_LINK = 'https://www.doctolib.fr/psychologue/vincennes/emilie-pereira-vincennes/booking/places?specialityId=14&telehealth=false&bookingFunnelSource=profile';

    public function getFilename(): string
    {
        return self::FILENAME;
    }

    public function render(): string
    {
        return $this->renderLayoutWithParamList(
            __DIR__ . '/layout/default.php',
            [
                'nav' => new NavComponent($this->getFilename()),
                'contentList' => [
                    new ViewComponent('home'),
                ]
            ]
        );
    }
}
