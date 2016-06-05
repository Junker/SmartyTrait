# Silex Smarty Trait
Smarty Trait for Silex

## Requirements
- silex 1.x, 2.x
- SmartyServiceProvider

##Installation
The best way to install Smarty Trait is to use a [Composer](https://getcomposer.org/download):

    php composer.phar require junker/smarty-trait

## Examples

```php

class Application extends \Silex\Application
{
	use \Junker\Silex\Application\SmartyTrait;
}

```

```php

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;

$app->get('/', function() use ($app) {

    return $app->render('index.tpl', ['name' => 'Junker']);

    $response = new Response();
    $response->setTtl(10);

    return $app->render('index.tpl', ['name' => 'Junker'], $response);

	return $app->render('index.tpl', ['name' => 'Junker'], new StreamedResponse());
});

```
##Documentation
http://silex.sensiolabs.org/doc/master/usage.html#traits
