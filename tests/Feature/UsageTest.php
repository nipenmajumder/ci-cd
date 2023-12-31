<?php

// test('globals')
//     ->expect(['dd','dump','var_dump','die','exit'])
//     ->not
//     ->toBeUsed();

arch('debugging statements not used')
    ->expect(['dd','dump','var_dump','die','exit'])
    ->not
    ->toBeUsed();

arch('env function only used in config')
    ->expect(['env'])
    ->not
    ->toBeUsed();

// arch('strict type is declared')
//     ->expect('App')
//     ->toUseStrictTypes();
