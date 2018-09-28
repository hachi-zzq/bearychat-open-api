<?php

namespace Hachi\Bearychat;

use Hachi\Bearychat\Kernel\ServiceContainer;
use Hachi\Bearychat\Channel\ServiceProvider as ChannelServiceProvider;

/**
 * Application.
 *
 * @property \Hachi\Bearychat\Channel\Client $channel
 * @property \Hachi\Bearychat\Kernel\Config $config
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        ChannelServiceProvider::class,
    ];
}
