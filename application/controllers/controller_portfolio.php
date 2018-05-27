<?php
class Controller_Portfolio extends Controller
{
	//create new objects(model and view)
	function __construct()
	{
		$this->model = new Model_Portfolio();
		$this->view = new View();
	}
	//call model->get_data, then generate view and send data
	function action_index()
	{
		$data = $this->model->get_data();		
		$this->view->generate('portfolio_view.php', 'template_view.php', $data);
	}
}
