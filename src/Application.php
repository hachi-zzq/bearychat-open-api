<?php

namespace Hachi\Bearychat;

use Hachi\Bearychat\Kernel\ServiceContainer;
use Hachi\Bearychat\Channel\ServiceProvider as ChannelServiceProvider;
use Hachi\Bearychat\Message\ServiceProvider as MessageServiceProvider;
use Hachi\Bearychat\Meta\ServiceProvider as MetaServiceProvider;
use Hachi\Bearychat\P2P\ServiceProvider as P2PServiceProvider;
use Hachi\Bearychat\Rtm\ServiceProvider as RtmServiceProvider;
use Hachi\Bearychat\SessionChannel\ServiceProvider as SessionChannelServiceProvider;
use Hachi\Bearychat\Team\ServiceProvider as TeamServiceProvider;
use Hachi\Bearychat\User\ServiceProvider as UserServiceProvider;
use Hachi\Bearychat\VChannel\ServiceProvider as VChannelServiceProvider;

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
        MessageServiceProvider::class,
        MetaServiceProvider::class,
        P2PServiceProvider::class,
        RtmServiceProvider::class,
        SessionChannelServiceProvider::class,
        TeamServiceProvider::class,
        UserServiceProvider::class,
        VChannelServiceProvider::class,
    ];
}
