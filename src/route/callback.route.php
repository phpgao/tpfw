<?php

$app->get('/callback', function() use($wb_oauth){
    var_dump($wb_oauth);
    echo $wb_oauth->getAuthorizeURL(WB_CALLBACK_URL);
});
