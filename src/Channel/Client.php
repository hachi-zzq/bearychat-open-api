<?php

namespace Hachi\Bearychat\Channel;

use Hachi\Bearychat\Kernel\BaseClient;

class Client extends BaseClient
{
    const LIST = 'channel.list';
    const CREATE = 'channel.create';
    const INFO = 'channel.info';
    const ARCHIVE = 'channel.archive';
    const INVITE = 'channel.invite';
    const JOIN = 'channel.join';
    const KICK = 'channel.kick';
    const KICKOUT = 'channel.kickout';
    const LEAVE = 'channel.leave';
    const UNARCHIVE = 'channel.unarchive';

    /**
     * 团队内的讨论组列表.
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

    /**
     * 创建一个讨论组.
     *
     * @param array $params
     *
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * 
     * @author Caikeal<caikeal@qq.com>
     */
    public function create($params = [])
    {
        return $this->httpPost(self::CREATE, $params);
    }

    /**
     * 指定讨论组的完整信息
     * @param $channelId
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @author Caikeal<caikeal@qq.com>
     */
    public function detail($channelId)
    {
        return $this->httpGet(self::INFO, ['channel_id' => $channelId]);
    }

    /**
     * 归档一个讨论组
     * @param $channelId
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @author Caikeal<caikeal@qq.com>
     */
    public function archive($channelId)
    {
        return $this->httpPost(self::ARCHIVE, ['channel_id' => $channelId]);
    }

    /**
     * 当前用户邀请一个团队成员加入讨论组
     * @param $channelId
     * @param $inviteUid
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @author Caikeal<caikeal@qq.com>
     */
    public function invite($inviteUid, $channelId)
    {
        return $this->httpPost(self::INVITE, ['channel_id' => $channelId, 'invite_uid' => $inviteUid]);
    }

    /**
     * 当前用户加入指定讨论组
     * @param $channelId
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @author Caikeal<caikeal@qq.com>
     */
    public function join($channelId)
    {
        return $this->httpPost(self::JOIN, ['channel_id' => $channelId]);
    }

    /**
     * 当前用户移除一个讨论组成员
     * @param $kickUid
     * @param $channelId
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @author Caikeal<caikeal@qq.com>
     */
    public function kick($kickUid, $channelId)
    {
        return $this->httpPost(self::KICK, ['channel_id' => $channelId, 'kick_uid' => $kickUid]);
    }

    /**
     * 当前用户移除一个讨论组成员
     * @param $kickUid
     * @param $channelId
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @author Caikeal<caikeal@qq.com>
     */
    public function kickout($kickUid, $channelId)
    {
        return $this->httpPost(self::KICKOUT, ['channel_id' => $channelId, 'kick_uid' => $kickUid]);
    }

    /**
     * 当前用户离开讨论组
     * @param $channelId
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @author Caikeal<caikeal@qq.com>
     */
    public function leave($channelId)
    {
        return $this->httpPost(self::LEAVE, ['channel_id' => $channelId]);
    }

    /**
     * 恢复一个已被归档的讨论组
     * @param $channelId
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @author Caikeal<caikeal@qq.com>
     */
    public function unarchive($channelId)
    {
        return $this->httpPost(self::UNARCHIVE, ['channel_id' => $channelId]);
    }
}
