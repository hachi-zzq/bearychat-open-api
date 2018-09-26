<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Hachi\Bearychat\Kernel;

use function GuzzleHttp\Psr7\stream_for;
use GuzzleHttp\Psr7\Uri;
use Hachi\Bearychat\Application;
use Hachi\Bearychat\Kernel\Contracts\SignInterface;
use Psr\Http\Message\RequestInterface;

/**
 * Class Config.
 *
 * @author overtrue <i@overtrue.me>
 */
class Sign implements SignInterface
{
    protected $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * @param \Psr\Http\Message\RequestInterface $request
     * @param array $requestOptions
     *
     * @return \Psr\Http\Message\RequestInterface
     */
    public function applyToRequest(RequestInterface $request, array $requestOptions = []): RequestInterface
    {
//        if (strtoupper($request->getMethod()) == 'GET') {
//            $params = $request->getUri()->getQuery();
//        } else {
//            $params = $request->getBody()->getContents();
//        }
//
//        if (strtoupper($request->getMethod()) == 'GET') {
//            $request = $request->withUri(new Uri(http_build_query($parameters)));
//        } else {
//            $request = $request->withBody(stream_for(http_build_query($parameters)));
//        }

        return $request;
    }


}
