<?php

class Controller_Rooms extends Controller
{

	function action_index()
	{
		$this->view->generate('rooms_view.php', 'template_view.php');
	}
}
