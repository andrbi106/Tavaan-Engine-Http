<?php

declare(strict_types=1);

namespace Tavaan\Engine\Http\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * middleware:list command.
 */
final class MiddlewareListCommand implements CommandInterface
{
    public function name(): string
    {
        return 'middleware:list';
    }

    public function description(): string
    {
        return 'Run middleware:list (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
