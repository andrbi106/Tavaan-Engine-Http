<?php

declare(strict_types=1);

namespace Tavaan\Engine\Http;

/**
 * ResponseFactory — پیاده‌سازی مطابق مستندات.
 *
 * @see docs/03-engines/ (YAML machine-readable block)
 */
final class ResponseFactory
{
    /**
     * json
     */
    public function json(/* ... */): mixed
    {
        $d = json_decode($this->getContent(), true); return $key === null ? $d : ($d[$key] ?? $default);
    }
    /**
     * view
     */
    public function view(/* ... */): mixed
    {
        return $this->addRoute('GET', $uri, function() use ($view, $data) { return $view; });
    }
    /**
     * file
     */
    public function file(/* ... */): mixed
    {
        return null;
    }
    /**
     * download
     */
    public function download(/* ... */): mixed
    {
        return null;
    }
    /**
     * stream
     */
    public function stream(/* ... */): mixed
    {
        return null;
    }
    /**
     * streamDownload
     */
    public function streamDownload(/* ... */): mixed
    {
        return null;
    }
    /**
     * noContent
     */
    public function noContent(/* ... */): mixed
    {
        return null;
    }
    /**
     * make
     */
    public function make(/* ... */): mixed
    {
        return null;
    }
    /**
     * redirectToRoute
     */
    public function redirectToRoute(/* ... */): mixed
    {
        return null;
    }
    /**
     * redirectToUrl
     */
    public function redirectToUrl(/* ... */): mixed
    {
        return null;
    }
    /**
     * problem
     */
    public function problem(/* ... */): mixed
    {
        return null;
    }
}
