<?php
use Phalcon\Http\Response;


class IndexController extends ControllerBase
{
    public function indexAction()
    {
        $respons = new Response;
        
        $hr =  array(
            'name' =>'金子'
        );
//        $this->response->setContentType($hr);
//        $this->response->send();
        return $respons ->$hr ;

    }
}

