<?php

/**
 * This file is part of Laravel Zero.
 *
 * (c) Nuno Maduro <enunomaduro@gmail.com>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

namespace LaravelZero\Framework\Components;

use Illuminate\Support\ServiceProvider;

/**
 * This is the Laravel Zero Framework Abstract Component Provider Implementation.
 */
abstract class AbstractComponentProvider extends ServiceProvider
{
    /**
     * Registers the component on the application.
     *
     * Should adapt the service to the console/cli context.
     *
     * @return void
     */
    abstract public function register(): void;

    /**
     * Checks if the component is available.
     *
     * @return bool
     */
    abstract public function isAvailable(): bool;
}
