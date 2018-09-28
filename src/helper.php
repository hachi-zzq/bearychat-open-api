<?php

if(!function_exists('getGuzzleResponseBody')){
    /**
     * 查询 $response 返回的具体 内容
     * @param \GuzzleHttp\Psr7\Response $response
     * @return array
     * @author zhuzhengqian <hachi.zzq@gmail.com>
     */
    function getGuzzleResponseBody(\GuzzleHttp\Psr7\Response $response):array
    {
        $content = $response->getBody()->getContents();

        return json_decode($content,true);
    }
}



if(!function_exists('getResponseFromGuzzleException')){
    /**
     * @param $exception
     * @return array
     * @author: hachi.zzq <hachi.zzq@gmail.com>
     */
    function getResponseFromGuzzleException(\GuzzleHttp\Exception\BadResponseException $exception){
        $errorResponse = $exception->getResponse();
        return getGuzzleResponseBody($errorResponse);
    }
}

