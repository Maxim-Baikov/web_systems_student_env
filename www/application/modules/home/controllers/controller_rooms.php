<?php

class Controller_Rooms extends Controller
{

	function __construct()
	{
		$this->model = new Model_Rooms();
		$this->view = new View();
	}
	
	function action_index()
	{
		$data = $this->model->get_query();
		$this->view->generate('rooms_view.php', 'template_view.php', $data);
	}
}
