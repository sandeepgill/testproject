<?php

class CrmController extends BaseController {

    protected $layout='crm.layout';
    
    public function indexAction() {
        $this->layout->content = View::make('crm.index');
    }

}