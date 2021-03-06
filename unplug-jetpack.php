<?php
/**
 * Plugin Name: Unplug Jetpack
 * Plugin URI:  http://wordpress.org/extend/plugins
 * Description: Enable qualifying Jetpack modules without a WordPress.com account
 * Version:     1.0.0
 * Author:      Tanner Moushey
 * Author URI:  tannermoushey.com
 * License:     GPLv2+
 */

/**
 * Copyright (c) 2020 Tanner Moushey (email : tanner@missionlab.dev)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

function uj_init() {
	add_filter( 'jetpack_offline_mode', '__return_true' );
}
add_action( 'plugins_loaded', 'uj_init' );