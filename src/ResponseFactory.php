<?php

declare(strict_types=1);

namespace Tavaan\Engine\Http;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * ResponseFactory — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Http\Contracts\ResponseFactoryInterface
 */
final class ResponseFactory implements Contracts\ResponseFactoryInterface
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
    public function json(/* ... */): mixed
    {
        // TODO: پیاده‌سازی json مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function view(/* ... */): mixed
    {
        // TODO: پیاده‌سازی view مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function file(/* ... */): mixed
    {
        // TODO: پیاده‌سازی file مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function download(/* ... */): mixed
    {
        // TODO: پیاده‌سازی download مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function stream(/* ... */): mixed
    {
        // TODO: پیاده‌سازی stream مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function streamDownload(/* ... */): mixed
    {
        // TODO: پیاده‌سازی streamDownload مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function noContent(/* ... */): mixed
    {
        // TODO: پیاده‌سازی noContent مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function make(/* ... */): mixed
    {
        // TODO: پیاده‌سازی make مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function redirectToRoute(/* ... */): mixed
    {
        // TODO: پیاده‌سازی redirectToRoute مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function redirectToUrl(/* ... */): mixed
    {
        // TODO: پیاده‌سازی redirectToUrl مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function problem(/* ... */): mixed
    {
        // TODO: پیاده‌سازی problem مطابق مستندات (سند §3 API).
        return null;
    }
}