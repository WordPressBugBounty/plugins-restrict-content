<?php
/**
 * The API implemented by all subscribers.
 *
 * @package RCP\StellarWP\Telemetry\Contracts
 *
 * @license GPL-2.0-or-later
 * Modified using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace RCP\StellarWP\Telemetry\Contracts;

/**
 * Interface Subscriber_Interface
 *
 * @package RCP\StellarWP\Telemetry\Contracts
 */
interface Subscriber_Interface {

	/**
	 * Register action/filter listeners to hook into WordPress
	 *
	 * @return void
	 */
	public function register();
}
