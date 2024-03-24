<?php

namespace MyWebsite\Components;

use Dupot\StaticGenerationFramework\Component\ComponentAbstract;
use Dupot\StaticGenerationFramework\Component\ComponentInterface;

class PsyOfWorkComponent extends ComponentAbstract implements ComponentInterface
{
    public function render(): string
    {
        return $this->renderViewWithParamList(
            __DIR__ . '/Views/psyofwork.php',
            []
        );
    }
}
