<?php

declare(strict_types=1);

namespace Tavaan\Engine\Http\Contracts;

/**
 * قرارداد ResponseFactory.
 *
 * @see \Tavaan\Engine\Http\ResponseFactory
 * @api 1.0
 */
interface ResponseFactoryInterface
{
    /**
     * متد json.
     *
     * @return mixed
     */
    public function json(/* ... */): mixed;

    /**
     * متد view.
     *
     * @return mixed
     */
    public function view(/* ... */): mixed;

    /**
     * متد file.
     *
     * @return mixed
     */
    public function file(/* ... */): mixed;

    /**
     * متد download.
     *
     * @return mixed
     */
    public function download(/* ... */): mixed;

    /**
     * متد stream.
     *
     * @return mixed
     */
    public function stream(/* ... */): mixed;

    /**
     * متد streamDownload.
     *
     * @return mixed
     */
    public function streamDownload(/* ... */): mixed;

    /**
     * متد noContent.
     *
     * @return mixed
     */
    public function noContent(/* ... */): mixed;

    /**
     * متد make.
     *
     * @return mixed
     */
    public function make(/* ... */): mixed;

    /**
     * متد redirectToRoute.
     *
     * @return mixed
     */
    public function redirectToRoute(/* ... */): mixed;

    /**
     * متد redirectToUrl.
     *
     * @return mixed
     */
    public function redirectToUrl(/* ... */): mixed;

    /**
     * متد problem.
     *
     * @return mixed
     */
    public function problem(/* ... */): mixed;
}