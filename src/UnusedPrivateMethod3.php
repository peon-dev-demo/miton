<?php

declare(strict_types=1);

namespace PHPMateDogFood;

final class UnusedPrivateMethod3
{
    public function someMethod(): void
    {
        $this->used();
    }

    private function used(): void {}
}