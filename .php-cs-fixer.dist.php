<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__);

return (new PhpCsFixer\Config())
    ->setRules(
        [
            '@PhpCsFixer' => true,
        ]
    )
    ->setFinder($finder);