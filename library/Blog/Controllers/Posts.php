<?php

namespace Blog\Controllers;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Posts extends AbstractController
{
	public function get(Request $request)
	{
		$posts = $this->entityManager
					  ->getRepository('Blog\Entities\Post')
					  ->findAll();
		$posts = array_map(function($singlePost) {
			return array(
				'title' => $singlePost->getTitle(),
				'text'  => $singlePost->getContent(),
				'author' => $singlePost->getUserId()->getName()
			);
		}, $posts);
		$response = new Response('<pre>'.print_r($posts, true));
		return $response;
	}
}