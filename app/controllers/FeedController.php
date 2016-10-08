
<?php
class FeedController extends Phalcon\Mvc\Controller
 {
public function getAction()
 {
 // レスポンスインスタンスの取得
 $response = new \Phalcon\Http\Response();
$feed = //.. load here the feed
//レスポンスのコンテンツをセット
 $response->setContent($feed->asString());
//レスポンスを返す
 return $response;
 }
}

