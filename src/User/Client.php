<?php

namespace Hachi\Bearychat\User;

use Hachi\Bearychat\Kernel\BaseClient;

class Client extends BaseClient
{
    const INFO = 'vchannel.info';

    /**
     * 返回指定聊天会话的完整信息.
     *
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     *
     * @author Caikeal<caikeal@qq.com>
     */
    public function info($vchannelId)
    {
        return $this->httpGet(self::INFO, ['vchannel_id' => $vchannelId]);
    }
}
