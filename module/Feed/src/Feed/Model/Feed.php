<?php 
 namespace Feed\Model;

 class Feed
 {
     public function RetornaFeed(){

     	header('Content-Type: text/html; charset=UTF-8');
     	
     	$url = 'http://feeds.feedburner.com/GuiFerreiraCode';
     	$feed = simplexml_load_file($url);
		//var_dump($feed);exit;
     	$json['item'] = array();
		$tamanho = sizeof($feed->channel->item);

		$pagina = $feed->channel->title;
		$url = $feed->channel->link;
		$descricao = $feed->channel->description;

		$json['pagina'] = $pagina;
		$json['descricao'] = $descricao;
		$json['url'] = $url;

		for($i=0; $i < $tamanho; $i++) {

			 
			 $title = $feed->channel->item[$i]->title;
			 $description = $feed->channel->item[$i]->description;
			 $pubDate = $feed->channel->item[$i]->pubDate;
			 $link = $feed->channel->item[$i]->link;
			 $guid = $feed->channel->item[$i]->guid;


			 
			 

			 $json['item'][$i]['title'] = $title;
			 $json['item'][$i]['link'] = $link;
			 $json['item'][$i]['description'] = $description;
			 $json['item'][$i]['pubdate'] = $pubDate;
			 $json['item'][$i]['guid'] = $guid;

			 
 		}


		

     	return $json;

     }
 }