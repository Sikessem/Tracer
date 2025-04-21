<?php

declare(strict_types=1);

test('globals')
    ->expect(['dd', 'dump', 'ray'])
    ->not->toBeUsed();

test('classes')
    ->expect('Sikessem\Tracer')
    ->toUseStrictTypes();

test('contracts')
    ->expect('Sikessem\Tracer\Contracts')
    ->interfaces()
    ->toOnlyBeUsedIn('Sikessem\Tracer', 'Sikessem\Tracer\Contracts');

test('concerns')
    ->expect('Sikessem\Tracer\Concerns')
    ->traits()
    ->toOnlyBeUsedIn('Sikessem\Tracer', 'Sikessem\Tracer\Concerns');
