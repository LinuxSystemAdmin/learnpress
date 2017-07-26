<?php

/**
 * Interface LP_Interface_CURD
 */
interface LP_Interface_CURD {
	/**
	 * Create item and insert to database.
	 *
	 * @since 3.0.0
	 *
	 * @param $args array
	 *
	 * @return mixed
	 */
	public function create( $args );

	/**
	 * Load data from database.
	 *
	 * @since 3.0.0
	 *
	 * @param object $object
	 *
	 * @return mixed
	 */
	public function load( &$object );

	/**
	 * Update data into database.
	 *
	 * @since 3.0.0
	 *
	 * @param $args array
	 *
	 * @return mixed
	 */
	public function update( $args = array() );

	/**
	 * Delete data from database.
	 *
	 * @since 3.0.0
	 *
	 * @return mixed
	 */
	public function delete();

}