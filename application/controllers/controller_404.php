<?php
class Controller_404 extends Controller
{
	//generate 404 view with default template
	function action_index()
	{
		$this->view->generate('404_view.php', 'template_view.php');
	}
}
