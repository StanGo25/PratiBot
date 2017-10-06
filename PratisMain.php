$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('w92EXt5ExG8ag/GKqIUhVt5qy+O63q2guL++8W2d2ry9nWKABy0YVAg0A3GU2ctfC3j3WHZljkoAGqH4YHoXWBSVA09YRnCtSgIA+A3SHjIBWYvb8dWqHXm+RBICuToSF+A87TtUM26QZJcieMwcXwdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => 'd0c393557c41e139b951fb4a74ae9d63']);


$response = $bot->replyText('Hello Prati', 'hello!');

