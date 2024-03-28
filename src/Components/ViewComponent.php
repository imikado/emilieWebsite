<?php

namespace MyWebsite\Components;

use Dupot\StaticGenerationFramework\Component\ComponentAbstract;
use Dupot\StaticGenerationFramework\Component\ComponentInterface;

class ViewComponent extends ComponentAbstract implements ComponentInterface
{
    protected $view;

    public function __construct(string $view)
    {
        $this->view = $view;
    }

    public function render(): string
    {
        return $this->renderViewWithParamList(
            __DIR__ . '/Views/' . $this->view . '.php',
            []
        );
    }
}
