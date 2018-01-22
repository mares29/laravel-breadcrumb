<?php
/**
 * Created by PhpStorm.
 * User: karelmares
 * Date: 15/01/2018
 * Time: 22:55
 */

namespace Mares29\Breadcrumb\Facades;


use Illuminate\Support\Facades\Facade;
use Mares29\Breadcrumb\Breadcrumb;


/**
 * Class Search
 *
 * @package App\Facades
 */
class BreadcrumbFacade extends Facade
{

	/**
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return Breadcrumb::class;
	}
}