<?php

declare(strict_types=1);

namespace Tavaan\Engine\Http\Contracts;

/**
 * قرارداد Request.
 *
 * @see \Tavaan\Engine\Http\Request
 * @api 1.0
 */
interface RequestInterface
{
    /**
     * متد capture.
     *
     * @return mixed
     */
    public function capture(/* ... */): mixed;

    /**
     * متد create.
     *
     * @return mixed
     */
    public function create(/* ... */): mixed;

    /**
     * متد method.
     *
     * @return mixed
     */
    public function method(/* ... */): mixed;

    /**
     * متد path.
     *
     * @return mixed
     */
    public function path(/* ... */): mixed;

    /**
     * متد fullUrl.
     *
     * @return mixed
     */
    public function fullUrl(/* ... */): mixed;

    /**
     * متد header.
     *
     * @return mixed
     */
    public function header(/* ... */): mixed;

    /**
     * متد input.
     *
     * @return mixed
     */
    public function input(/* ... */): mixed;

    /**
     * متد query.
     *
     * @return mixed
     */
    public function query(/* ... */): mixed;

    /**
     * متد post.
     *
     * @return mixed
     */
    public function post(/* ... */): mixed;

    /**
     * متد json.
     *
     * @return mixed
     */
    public function json(/* ... */): mixed;

    /**
     * متد all.
     *
     * @return mixed
     */
    public function all(/* ... */): mixed;

    /**
     * متد only.
     *
     * @return mixed
     */
    public function only(/* ... */): mixed;

    /**
     * متد except.
     *
     * @return mixed
     */
    public function except(/* ... */): mixed;

    /**
     * متد file.
     *
     * @return mixed
     */
    public function file(/* ... */): mixed;

    /**
     * متد files.
     *
     * @return mixed
     */
    public function files(/* ... */): mixed;

    /**
     * متد cookie.
     *
     * @return mixed
     */
    public function cookie(/* ... */): mixed;

    /**
     * متد attribute.
     *
     * @return mixed
     */
    public function attribute(/* ... */): mixed;

    /**
     * متد ip.
     *
     * @return mixed
     */
    public function ip(/* ... */): mixed;

    /**
     * متد isSecure.
     *
     * @return mixed
     */
    public function isSecure(/* ... */): mixed;

    /**
     * متد expectsJson.
     *
     * @return mixed
     */
    public function expectsJson(/* ... */): mixed;

    /**
     * متد withAttribute.
     *
     * @return mixed
     */
    public function withAttribute(/* ... */): mixed;

    /**
     * متد withMethod.
     *
     * @return mixed
     */
    public function withMethod(/* ... */): mixed;

    /**
     * متد withQuery.
     *
     * @return mixed
     */
    public function withQuery(/* ... */): mixed;

    /**
     * متد withRoute.
     *
     * @return mixed
     */
    public function withRoute(/* ... */): mixed;
}