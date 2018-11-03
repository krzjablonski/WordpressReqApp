<?php
/**
 * Created by PhpStorm.
 * User: krzysztof
 * Date: 01.11.18
 * Time: 15:34
 */

namespace App\Controllers;
use Sober\Controller\Controller;

use \GuzzleHttp\Client as Client;


class SingleCandidates extends Controller
{

    protected $api_endpoint;
    protected $api_token;

    public function __construct()
    {
        $this->api_endpoint = get_option('api_link');
        $this->api_token = get_option('api_token');
    }

    public function candidate()
    {
        $url = $this->api_endpoint.'/'.get_field('candidate_id').'?api_token='.$this->api_token;

        $client = new Client;
        $res = $client->request('GET', $url, []);
        $response = json_decode($res->getBody());
        return collect($response->data);
    }
}