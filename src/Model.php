<?php namespace MGatner\PHPStorm;

/**
 * Class Model
 *
 * @mixin Builder
 */
class Model
{
	/**
	 * Database Connection
	 *
	 * @var Connection
	 */
	protected $db;

	/**
	 * Query Builder object
	 *
	 * @var Builder
	 */
	protected $builder;

	/**
	 * Model constructor.
	 *
	 * @param Connection $db
	 * @param Builder $builder
	 */
	public function __construct(Connection &$db, Builder $builder)
	{
		$this->db      = $db;
		$this->builder = $builder;
	}

	/**
	 * Provides access to protected and Builder properties.
	 *
	 * @param string $name
	 *
	 * @return mixed
	 */
	public function __get(string $name)
	{
		if (property_exists($this, $name))
		{
			return $this->$name;
		}

		if (isset($this->builder->$name))
		{
			return $this->builder->$name;
		}

		return null;
	}

	/**
	 * Checker for properties existence.
	 *
	 * @param string $key
	 *
	 * @return boolean
	 */
	public function __isset(string $key): bool
	{
		return property_exists($this, $key) || property_exists($this->builder, $key);
	}
}
