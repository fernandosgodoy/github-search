<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class GitHubSearchController extends BaseController
{

    public function Search($searchQuery) {
        $client = new Client();
        $res = $client->request('GET', 'http://searchcode.com/api/' .
            "codesearch_I/?q=".$searchQuery."&src=2", ['allow_redirects' => false]);
        $res->getStatusCode();
        $res->getHeader('content-type')[0];
        $body = $res->getBody();

        // $client = new \GuzzleHttp\Client('https://searchcode.com/api/');
        // $response = $client->get("codesearch_I/?q=".$searchQuery."&src=2")->send();
        return dd($body);
        // return $body;
    }

}
