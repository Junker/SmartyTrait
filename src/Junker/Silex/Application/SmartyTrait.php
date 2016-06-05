<?php

namespace Junker\Silex\Application;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;

trait SmartyTrait
{
	public function render($template, $template_data = [], Response $response = null)
	{
		$smarty = $this['smarty'];

		foreach ($template_data as $key => $value) 
		{
			$smarty->assign($key, $value);
		}

		if ($response instanceof StreamedResponse) 
		{
			$response->setCallback(function () use ($smarty, $template) 
			{
				$smarty->display($template);
			});
		}
		else 
		{
			if ($response === null)
			    $response = new Response();

			$response->setContent($smarty->fetch($template));
		}

		return $response;
	}
}