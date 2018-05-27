<?php
class View
{
	//function for genereting views
	function generate($content_view, $template_view, $data = null)
	{
		include 'application/views/'.$template_view;
	}
}
