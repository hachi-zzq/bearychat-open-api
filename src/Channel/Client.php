<?php

namespace Hachi\Bearychat\Channel;

use Hachi\Bearychat\Kernel\BaseClient;

class Client extends BaseClient
{
    const LIST = 'channel.list';

    const CREATE = 'channel.create';

    /**
     * 频道列表.
     *
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     *
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
     *
     * @author zhuzhengqian <hachi.zzq@gmail.com>
     */
    public function list()
    {
        return $this->httpGet(self::LIST);
    }

    public function create($params = [])
    {
        return $this->httpPost(self::CREATE, $params);
    }
}
