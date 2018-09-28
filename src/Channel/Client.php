<?php

namespace Hachi\Bearychat\Channel;

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\TransferException;
use Hachi\Bearychat\Kernel\BaseClient;

class Client extends BaseClient
{
    const LIST = 'channel.list';

    const INIFO = 'channel.info';

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


    public function info($channelId)
    {
        try{
            $respsone = $this->httpGet(self::INIFO,[
                'channel_id'=>$channelId
            ]);
        }catch (TransferException $exception){
            $re = getResponseFromGuzzleException($exception);
            dd($re);
        }

        dd($repsone);

    }
}
