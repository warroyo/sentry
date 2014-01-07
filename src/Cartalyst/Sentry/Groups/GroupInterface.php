<?php namespace Cartalyst\Sentry\Groups;
/**
 * Part of the Sentry package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Sentry
 * @version    3.0.0
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011-2014, Cartalyst LLC
 * @link       http://cartalyst.com
 */

interface GroupInterface {

	/**
	 * Return the group's primary key.
	 *
	 * @return int
	 */
	public function getGroupId();

	/**
	 * Return the group's slug.
	 *
	 * @return string
	 */
	public function getGroupSlug();

	/**
	 * Return all users for the group.
	 *
	 * @return \IteratorAggregate
	 */
	public function getUsers();

}
