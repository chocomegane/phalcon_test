<?php

use Phalcon\Mvc\Controller;
use Phalcon\Http\Response;

class ControllerBase extends Controller
{
 public function response($hr)
    {
     
     
        $hr_json = json_encode($hr,JSON_UNESCAPED_UNICODE);
        
        
        
        $response = new Response();
        
        $feed = 
        // ... Load here the feed
        // Set the content of the response
        $response->setContent(
            $hr_json
        );

        // Return the response
        return $feed;
    }
}
