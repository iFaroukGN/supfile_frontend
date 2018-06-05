<?php
/**
 * Created by PhpStorm.
 * User: f76278
 * Date: 20/02/2018
 * Time: 16:19
 */

class Flash
{
	public function success($message)
	{
		$CI = &get_instance();
		$CI->session->set_flashdata('success', $message);
		return $CI->index();
	}

	public function error($message)
	{
		$CI = &get_instance();
		$CI->session->set_flashdata('error', $message);
		return $CI->index();
	}

	public function warning($message)
	{
		$CI = &get_instance();
		$CI->session->set_flashdata('warning', $message);
		return $CI->index();
	}

	public function info($message)
	{
		$CI = &get_instance();
		$CI->session->set_flashdata('warning', $message);
		return $CI->index();
	}

}
