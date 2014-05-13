<?php

/**
 * Configuration for teuz/laravel-cas
 */
return array(

	/**
	 * CAS-server url
	 */
	'url' => 'https://sso.ui.ac.id/cas2',

	/**
	 * Callback service url
	 */
	'service' => '/user/cas',

	/**
	 * The user identifier shared between the CAS-server and the user object.
	 */
	'userField' => 'name',

	/**
	 * Whether or not to create missing users.
	 */
	'createUsers' => true

);
