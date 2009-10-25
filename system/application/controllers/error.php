<?php
class Error extends Controller {

	function error_404()
	{
		$this->output->showPage('errors/error_404');
	}
}