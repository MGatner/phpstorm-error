<?php namespace MGatner\PHPStorm;

/**
 * Class Database Connection
 */
class Connection
{
	/**
	 * @var string
	 */
	public $name;

	/**
	 * @param string $name
	 */
	public function __construct(string $name = 'default')
	{
		$this->name = $name;
	}
}
