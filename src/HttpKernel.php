<?php

declare(strict_types=1);

namespace Tavaan\Engine\Http;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * HttpKernel — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Http\Contracts\HttpKernelInterface
 */
final class HttpKernel implements Contracts\HttpKernelInterface
{
    /**
     * @param Config $config پیکربندی موتور
     */
    public function __construct(
        private readonly Config $config,
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function handle(/* ... */): mixed
    {
        // TODO: پیاده‌سازی handle مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function terminate(/* ... */): mixed
    {
        // TODO: پیاده‌سازی terminate مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function sendAndTerminate(/* ... */): mixed
    {
        // TODO: پیاده‌سازی sendAndTerminate مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function handleSubRequest(/* ... */): mixed
    {
        // TODO: پیاده‌سازی handleSubRequest مطابق مستندات (سند §3 API).
        return null;
    }
}