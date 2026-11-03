<?php

declare(strict_types=1);

namespace Tavaan\Engine\Http\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * serve command.
 */
final class ServeCommand implements CommandInterface
{
    public function name(): string
    {
        return 'serve';
    }

    public function description(): string
    {
        return 'Run serve (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
