<?php

namespace MyWebsite\Pages;

use Dupot\StaticGenerationFramework\Page\PageAbstract;
use Dupot\StaticGenerationFramework\Page\PageInterface;
use MyWebsite\Components\NavComponent;
use MyWebsite\Components\ViewComponent;

class MaternityAndWorkPage extends PageAbstract implements PageInterface
{
    const FILENAME = 'maternite_et_travail.html';

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
                    new ViewComponent('maternityAndWork'),
                ]
            ]
        );
    }
}
