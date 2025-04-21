<?php

use Sikessem\Tracer\Backtrace;

if (! function_exists('backtrace')) {
    function backtrace(int $flags = Backtrace::DEFAULT_FLAGS, int $reset = Backtrace::DEFAULT_RESET, int $limit = Backtrace::DEFAULT_LIMIT): Backtrace
    {
        return new Backtrace($flags, ++$reset, $limit === 0 ? $limit : ++$limit);
    }
}
