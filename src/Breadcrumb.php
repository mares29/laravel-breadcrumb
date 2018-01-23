<?php
/**
 * Created by PhpStorm.
 * User: karelmares
 * Date: 15/01/2018
 * Time: 22:26
 */

namespace Mares29\Breadcrumb;


use Illuminate\Support\Collection;


/**
 * Class Breadcrumb
 *
 * @package Mares29\Breadcrumb
 */
class Breadcrumb
{

	/**
	 * @var Collection
	 */
	protected $links;



	/**
	 * Breadcrumb constructor.
	 */
	public function __construct()
	{
		$this->links = new Collection();

		$this->setHomeLink("home", url("/"));
	}



	/**
	 * @return array
	 */
	public function toArray()
	{
		return $this->links->toArray();
	}



	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function render()
	{
		return view("breadcrumb::index", ["links" => $this->toArray()]);
	}



	/**
	 * @param $title
	 * @param $route
	 * @return Breadcrumb
	 */
	public function addLink($title, $route)
	{
		$this->links->push(new Link($title, $route));

		return $this;
	}



	/**
	 * @param $title
	 * @param $route
	 * @return $this
	 */
	public function setHomeLink($title, $route)
	{
		$this->links->put(0, new Link($title, $route));

		return $this;
	}

}

