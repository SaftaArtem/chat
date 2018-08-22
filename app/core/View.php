<?php

namespace Core;


class View
{
	public function generate($content_view, $template_view, $data = null)
	{
		include 'app/views/'.$template_view;
	}

	function  handler($handler_file) {
	    include 'app/views/'.$handler_file;
    }
}
