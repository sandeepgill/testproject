<?php

class IndexController extends BaseController {

    protected $layout='layouts.master';
    
    public function indexAction() {
        $this->layout->content = View::make("index");
    }

}