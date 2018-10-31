<?php
defined('BASEPATH') OR exit('No direct script access allowed');


function field($validation, $database = NULL, $last = ''){
	$value = (isset($validation)) ? $validation : ( (isset($database)) ? $database : $last);
	return $value;
}




function iconbar($items = array()) {

	$html = "<p class='iconbar'>";
	$i = 1;
	$max = count($items);

	foreach ($items as $item) {
		list($link, $name, $icon) = $item;
		$html .= img("assets/images/ui/{$icon}", FALSE, "alt='{$name}' align='top' hspace='0' border='0'");
		$html .= ' ' . anchor($link, $name);
		if ($i < $max) {
			$html .= img("assets/images/sep.gif", FALSE, "alt='|' align='top' hspace='0' border='0' style='margin:0px 6px;'");
		}
	}

	$html .= "</p>";

	return $html;
}


function tab_index($reset = NULL)
{
	static $_tab_index;

	if ( ! strlen($_tab_index) || $_tab_index === 0)
	{
		$_tab_index = 0;
	}
	else
	{
		$_tab_index++;
	}

	return $_tab_index;
}




function msgbox($type = 'error', $content = '')
{
	$html = "<p class='msgbox {$type}'>{$content}</p>";
	return $html;
}



function icon($name, $attributes = array())
{
	$CI =& get_instance();
	return $CI->feather->get($name, $attributes, FALSE);
}
