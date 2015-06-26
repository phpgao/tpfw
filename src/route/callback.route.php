<?php

$app->group('/wb',function() use($app, $wb_oauth){

    //callback
    $app->get('/callback/:code', function($code) use($wb_oauth){
        ChromePhp::log($code);
    });

    //go to auth
    $app->get('/go', function() use($app, $wb_oauth){
        $url = $wb_oauth->getAuthorizeURL(WB_CALLBACK_URL);
        //$url = 'http://www.phpgao.com';
        $app->redirect($url, 301);
    });

});

