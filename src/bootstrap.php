<?php
require '../vendor/autoload.php';

$app_config = require CONFIG_DIR . 'app_config.php';


# init silm app
$app = new \Slim\Slim($app_config);


# init weibo app
require CONFIG_DIR . 'wb_config.php';

$wb_oauth = new \SaeTOAuthV2(WB_AKEY , WB_SKEY );

