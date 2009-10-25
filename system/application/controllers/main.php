<?php

class Main extends Controller {

	function Main()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->output->showPage('main');
	}

    function development()
    {        
        $this->output->showPage('development');
    }

    function downloads()
    {
        $this->output->showPage('download');
    }
}
