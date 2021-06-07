<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use Guzzle;

class GitHubSearchController extends BaseController
{

    public function Search($searchQuery) {
        $client = new GuzzleHttp\Client();
        $res = $client->request('GET', 'https://searchcode.com/api/' .
            "codesearch_I/?q=".$searchQuery."&src=2");
        $res->getStatusCode();
        $res->getHeader('content-type')[0];
        $body = $res->getBody();

        // $client = new \GuzzleHttp\Client('https://searchcode.com/api/');
        // $response = $client->get("codesearch_I/?q=".$searchQuery."&src=2")->send();
        return dd($body);
    }

}
