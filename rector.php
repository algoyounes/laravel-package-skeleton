<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Privatization\Rector\Class_\FinalizeClassesWithoutChildrenRector;
use Rector\Privatization\Rector\ClassMethod\PrivatizeFinalClassMethodRector;
use Rector\Privatization\Rector\MethodCall\PrivatizeLocalGetterToPropertyRector;
use Rector\Privatization\Rector\Property\PrivatizeFinalClassPropertyRector;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([__DIR__.'/src']);

    $rectorConfig->rules(
        [
            PrivatizeLocalGetterToPropertyRector::class,
            PrivatizeFinalClassPropertyRector::class,
            PrivatizeFinalClassMethodRector::class,
        ]
    );

    $rectorConfig->skip(
        [
            FinalizeClassesWithoutChildrenRector::class,
        ]
    );

    $rectorConfig->sets(
        [
            LevelSetList::UP_TO_PHP_82,
            SetList::CODE_QUALITY,
            SetList::DEAD_CODE,
            SetList::EARLY_RETURN,
            SetList::TYPE_DECLARATION,
            SetList::PRIVATIZATION,
        ]
    );
};
