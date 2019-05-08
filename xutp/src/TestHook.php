<?php
declare(strict_types=1);

namespace phpsnippets\src;

final class TestHook
{
    public $mode;

    public function exec()
    {
        if ($this->mode === 'test') {
            // exec to logic for testing
        } else {
            // exec to logic for production
        }
    }
}
