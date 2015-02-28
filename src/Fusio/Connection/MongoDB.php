<?php

namespace Fusio\Connection;

use Fusio\ConnectionInterface;
use Fusio\Parameters;
use Fusio\Form;
use Fusio\Form\Element;

class MongoDB implements ConnectionInterface
{
	public function getName()
	{
		return 'Mongo-DB';
	}

	/**
	 * @return MongoDB
	 */
	public function getConnection(Parameters $config)
	{
		$client = new MongoClient($config->get('url'));

		return $client->selectDB($config->get('database'));
	}

	public function getForm()
	{
		$form = new Form\Container();
		$form->add(new Element\Input('url', 'Url'));
		$form->add(new Element\Input('database', 'Database'));

		return $form;
	}
}