<?php
namespace Blog\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Posts
{
	public function get(Request $request)
	{
		$response = new Response('I am a post!');
		return $response;
	}
}