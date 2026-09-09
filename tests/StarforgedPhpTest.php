<?php

use Alathazal\StarforgedPhp\StarforgedPhp;

beforeEach(function () {
    $this->starforged = new StarforgedPhp();
});

it('returns asset types', function () {
    expect($this->starforged->asset_types())->toBeArray()->not->toBeEmpty();
});

it('returns assets', function () {
    expect($this->starforged->assets())->toBeArray()->not->toBeEmpty();
});

it('returns encounters', function () {
    expect($this->starforged->encounters())->toBeArray()->not->toBeEmpty();
});

it('returns move categories', function () {
    expect($this->starforged->move_categories())->toBeArray()->not->toBeEmpty();
});

it('returns moves', function () {
    expect($this->starforged->moves())->toBeArray()->not->toBeEmpty();
});

it('returns oracles', function () {
    expect($this->starforged->oracles())->toBeArray()->not->toBeEmpty();
});

it('returns truths', function () {
    expect($this->starforged->truths())->toBeArray()->not->toBeEmpty();
});
