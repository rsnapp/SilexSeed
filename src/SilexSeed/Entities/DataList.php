<?php

namespace SilexSeed\Entities;

/**
* @Entity
* @Table(name="data_list")
*/
class DataList 
{

	/**
	* @Id @Column(type="integer")
	* @GeneratedValue
	*/
	private $id;

	public function getId()
	{
		return $this->id;
	}

	/**
	* @Column(type="string", length=50)
	*/
	private $name;

	public function getName()
	{
		return $this->name;
	}

	public function setName($value)
	{
		$this->name = $value;
	}


	public function __construct($name)
	{
		$this->name = $name;
	}
	
}