<?php
/**
 * Created by PhpStorm.
 * User: karelmares
 * Date: 22/01/2018
 * Time: 10:30
 */

namespace Mares29\Breadcrumb;


/**
 * Class Link
 *
 * @package Mares29\Breadcrumb
 */
class Link
{

	/**
	 * @var
	 */
	protected $title;

	/**
	 * @var
	 */
	protected $url;



	/**
	 * Link constructor.
	 *
	 * @param $title
	 * @param $route
	 */
	public function __construct($title, $route)
	{
		$this->title = $title;
		$this->url = $route;
	}



	/**
	 * @param $name
	 * @return mixed
	 */
	public function __get($name)
	{
		return $this->$name;
	}


}