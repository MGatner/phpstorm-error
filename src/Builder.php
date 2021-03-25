<?php namespace MGatner\PHPStorm;

/**
 * Class Query Builder
 */
class Builder
{
	/**
	 * A reference to the database connection.
	 *
	 * @var Connection
	 */
	protected $db;

	/**
	 * Model constructor.
	 *
	 * @param Connection $db
	 */
	public function __construct(Connection &$db)
	{
		$this->db = $db;
	}
}
