<?php 


function curr_rp($number)
{
	return 'Rp. '.$number;
}

function template_success_msg($msg)
{
	return '<div class="alert alert-success" role="alert">'.$msg.'</div>';
}

function template_error_msg($msg)
{
	return '<div class="alert alert-danger" role="alert">'.$msg.'</div>';
}