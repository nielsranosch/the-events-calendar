<?php
/**
 * Classes implementing this interface will provide methods to locate them based on a URL and will provide URL-related
 * methods.
 *
 * @since   TBD
 * @package Tribe\Events\Views\V2\Interfaces
 */

namespace Tribe\Events\Views\V2\Interfaces;

/**
 * Interface Url_Provider_Interface
 *
 * @since   TBD
 * @package Tribe\Events\Views\V2\Interfaces
 */
interface View_Url_Provider_Interface {

	/**
	 * Returns the URL associated to this View, if any.
	 *
	 * @since TBD
	 *
	 * @param bool $canonical Whether to return the canonical version of the URL or the normal one.
	 *
	 * @return string The current URL associated to the view or an empty string if this View does not correspond to a
	 *                URL.
	 */
	public function get_url( $canonical = false );

	/**
	 * Returns the URL associated to this View logical, next view.
	 *
	 * @since TBD
	 *
	 * @param bool $canonical Whether to return the canonical version of the URL or the normal one.
	 *
	 * @return string The URL associated to this View logical, next view or an empty string if no next View exists.
	 */
	public function next_url( $canonical = false );

	/**
	 * Returns the URL associated to this View logical, previous view.
	 *
	 * @since TBD
	 *
	 * @param bool $canonical Whether to return the canonical version of the URL or the normal one.
	 *
	 * @return string The URL associated to this View logical, next view or an empty string if no previous View exists.
	 */
	public function prev_url( $canonical = false );

	/**
	 * Returns the URL object used by the View, if any.
	 *
	 * @since TBD
	 *
	 * @return \Tribe\Events\Views\V2\Url|null
	 */
	public function get_url_object();
}
