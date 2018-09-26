<?php

namespace Hachi\Bearychat\Channel;

use Hachi\Bearychat\Kernel\BaseClient;

class Client extends BaseClient
{
    const LIST = 'channel.list';

    public function list()
    {
        return $this->httpGet(self::LIST);
    }
}
