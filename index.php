<?php
/*
 * User: keke
 * Date: 2018/7/26
 * Time: 14:10
 *——————————————————佛祖保佑 ——————————————————
 *                   _ooOoo_
 *                  o8888888o
 *                  88" . "88
 *                  (| -_- |)
 *                  O\  =  /O
 *               ____/`---'\____
 *             .'  \|     |//  `.
 *            /  \|||  :  |||//  \
 *           /  _||||| -:- |||||-  \
 *           |   | \\  -  /// |   |
 *           | \_|  ''\---/''  |   |
 *           \  .-\__  `-`  ___/-. /
 *         ___`. .'  /--.--\  `. . __
 *      ."" '<  `.___\_<|>_/___.'  >'"".
 *     | | :  ` - `.;`\ _ /`;.`/ - ` : | |
 *     \  \ `-.   \_ __\ /__ _/   .-` /  /
 *======`-.____`-.___\_____/___.-`____.-'======
 *                   `=---='
 *——————————————————代码永无BUG —————————————————
 */
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/function.php';
use \swoole\Websocket;

$webSocket = new Websocket();
$webSocket->run();

////创建websocket服务器对象，监听0.0.0.0:9502端口
//$ws = new swoole_websocket_server("0.0.0.0", 9502);
//
////监听WebSocket连接打开事件
//$ws->on('open', function ($ws, $request) {
//    //生成依赖
//    $msgMethod = new Open();
//    //注入依赖
//    $pb = new SendMsg($msgMethod);
//    $pb->send($ws, $request);
//});
//
////监听WebSocket消息事件
//$ws->on('message', function ($ws, $frame) {
////    $ws->push($frame->fd, "server: {$frame->data}");
//});
//
////监听WebSocket连接关闭事件
//$ws->on('close', function ($ws, $fd) {
////    echo "client-{$fd} is closed\n";
//});
//
//$ws->start();