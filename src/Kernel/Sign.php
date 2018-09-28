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

use function GuzzleHttp\Psr7\str;
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
        $token = $this->app->config['token'];

        if (strtoupper($request->getMethod()) == 'GET') {
            $uri = $request->getUri();
            $query = $uri->getQuery();
            if($query){
                $uri = $uri->withQuery($uri->getQuery().'&token='.$token);
            }else{
                $uri = $uri->withQuery("token=".$token);
            }
            $request = $request->withUri(new Uri($uri));
        } else {
            $request = $request->withBody(stream_for(http_build_query($parameters)));
        }

        return $request;
    }


}
