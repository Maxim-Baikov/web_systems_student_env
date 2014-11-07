<?php

class Model
{
	public function get_data()
	{

	    if (empty($_SESSION['email']) or empty($_SESSION['id']))
        {}
        else
        {
            echo '<section id="login-form">
			<div class="left">Вы вошли как '.$_SESSION['email'].'</div>

			</section>';
        }
	}
}