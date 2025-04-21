<?php

use Sikessem\Tracer\Backtrace;

beforeEach(function () {
    $this->trace = new Backtrace();
    $this->helperTrace = backtrace();
});

it('should be an instance of "'.Backtrace::class.'"', function () {
    expect($this->helperTrace)->toBeInstanceOf(Backtrace::class);
    expect($this->trace)->toBeInstanceOf(Backtrace::class);
});

test('its helper should match its class', function () {
    expect($this->helperTrace->getFile())->toEqual($this->trace->getFile());
    expect($this->helperTrace->getDirectory())->toEqual($this->trace->getDirectory());
});
