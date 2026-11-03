<?php

declare(strict_types=1);

namespace Tavaan\Engine\Http\Contracts;

/**
 * قرارداد HttpKernel.
 *
 * @see \Tavaan\Engine\Http\HttpKernel
 * @api 1.0
 */
interface HttpKernelInterface
{
    /**
     * متد handle.
     *
     * @return mixed
     */
    public function handle(/* ... */): mixed;

    /**
     * متد terminate.
     *
     * @return mixed
     */
    public function terminate(/* ... */): mixed;

    /**
     * متد sendAndTerminate.
     *
     * @return mixed
     */
    public function sendAndTerminate(/* ... */): mixed;

    /**
     * متد handleSubRequest.
     *
     * @return mixed
     */
    public function handleSubRequest(/* ... */): mixed;
}