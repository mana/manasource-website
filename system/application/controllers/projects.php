<?php

class Projects extends Controller {

	function Projects()
	{
		parent::Controller();	
	}
	
	function mana()
	{
		$this->output->showPage('projects/mana/index');
	}

    function manaserv()
    {
        $this->output->showPage('projects/manaserv/index');
    }

    function manaweb()
    {
        $this->output->showPage('projects/manaweb/index');
    }
}

