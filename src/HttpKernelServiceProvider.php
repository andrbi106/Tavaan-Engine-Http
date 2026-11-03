<?php

declare(strict_types=1);

namespace Tavaan\Engine\Http;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Http\Contracts\HttpKernelInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * HttpKernelServiceProvider — ثبت سرویس‌های موتور HttpKernel.
 */
final class HttpKernelServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(HttpKernelInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new HttpKernel($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت commandها
        $this->commands[] = \Tavaan\Engine\Http\Console\ServeCommand::class;
        $this->commands[] = \Tavaan\Engine\Http\Console\Route_listCommand::class;
        $this->commands[] = \Tavaan\Engine\Http\Console\Route_cacheCommand::class;
        $this->commands[] = \Tavaan\Engine\Http\Console\Route_clearCommand::class;
        $this->commands[] = \Tavaan\Engine\Http\Console\Route_matchCommand::class;
        $this->commands[] = \Tavaan\Engine\Http\Console\Middleware_listCommand::class;

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            HttpKernelInterface::class,
        ];
    }
}