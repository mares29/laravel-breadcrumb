<?php
/**
 * Created by PhpStorm.
 * User: karelmares
 * Date: 15/01/2018
 * Time: 22:55
 */

namespace Mares29\Breadcrumb\Facades;


use Illuminate\Support\Facades\Facade;


/**
 * Class BreadcrumbFacade
 *
 * @package Mares29\Breadcrumb\Facades
 */
class BreadcrumbFacade extends Facade
{

	/**
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'breadcrumb';
	}
}