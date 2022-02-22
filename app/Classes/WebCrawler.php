<?php

namespace App\Classes;
use Goutte\Client;
//use Illuminate\Http\Request;

class WebCrawler
{
    private $results = array();

    public static function Scraper(string $searchParameter){
        $client = new Client();
        $url = 'https://www.imdb.com/';
        $page = $client->request('GET', $url);
        echo $page->filter($searchParameter)->text();
        /*
        $page->filter('css tag')->each(function($item){
            self::$results[$item->filter('h1 filter tag')->text()] = $item->filter('css tag')->text();
        });

        return self::$results;
        */
    }
}
