<?php

namespace MyWebsite\Components;

use Dupot\StaticGenerationFramework\Component\ComponentAbstract;
use Dupot\StaticGenerationFramework\Component\ComponentInterface;
use MyWebsite\Pages\ContactPage;
use MyWebsite\Pages\HomePage;
use MyWebsite\Pages\PsyOfWorkPage;
use MyWebsite\Pages\SkillAssesmentPage;

class NavComponent extends ComponentAbstract implements ComponentInterface
{

    protected $pageSelected;

    public function __construct($pageSelected)
    {
        $this->pageSelected = $pageSelected;
    }

    public function render(): string
    {
        $linkList = [
            'Accueil' => HomePage::FILENAME,
            'La psychologie du travail' => PsyOfWorkPage::FILENAME,
            'Bilan de compétences' => SkillAssesmentPage::FILENAME,
            'Contact' => ContactPage::FILENAME
        ];

        return $this->renderViewWithParamList(
            __DIR__ . '/Nav/nav.php',
            [
                'linkList' => $linkList,
                'pageSelected' => $this->pageSelected
            ]
        );
    }
}
