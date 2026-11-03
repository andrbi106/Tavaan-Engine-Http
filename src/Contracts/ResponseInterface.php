<?php

declare(strict_types=1);

namespace Tavaan\Engine\Http\Contracts;

/**
 * قرارداد Response.
 *
 * @see \Tavaan\Engine\Http\Response
 * @api 1.0
 */
interface ResponseInterface
{
    /**
     * متد statusCode.
     *
     * @return mixed
     */
    public function statusCode(/* ... */): mixed;

    /**
     * متد withStatus.
     *
     * @return mixed
     */
    public function withStatus(/* ... */): mixed;

    /**
     * متد header.
     *
     * @return mixed
     */
    public function header(/* ... */): mixed;

    /**
     * متد withHeader.
     *
     * @return mixed
     */
    public function withHeader(/* ... */): mixed;

    /**
     * متد withHeaders.
     *
     * @return mixed
     */
    public function withHeaders(/* ... */): mixed;

    /**
     * متد body.
     *
     * @return mixed
     */
    public function body(/* ... */): mixed;

    /**
     * متد withBody.
     *
     * @return mixed
     */
    public function withBody(/* ... */): mixed;

    /**
     * متد withJson.
     *
     * @return mixed
     */
    public function withJson(/* ... */): mixed;

    /**
     * متد cookie.
     *
     * @return mixed
     */
    public function cookie(/* ... */): mixed;

    /**
     * متد send.
     *
     * @return mixed
     */
    public function send(/* ... */): mixed;

    /**
     * متد isSuccessful.
     *
     * @return mixed
     */
    public function isSuccessful(/* ... */): mixed;

    /**
     * متد isRedirect.
     *
     * @return mixed
     */
    public function isRedirect(/* ... */): mixed;
}