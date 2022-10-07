<?php

namespace Mautic\CoreBundle\Templating\Twig\Extension;

use Twig\Extension\AbstractExtension;
use Twig\TwigTest;

class ObjectExtension extends AbstractExtension {
    public function getTests(){
        return [
            new TwigTest('object', fn($value) => is_object($value)),
            new TwigTest('array', fn($value) => is_array($value))
        ];
    }
}