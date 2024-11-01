<?php
/*
Plugin Name: Third Party Host Fix
Plugin URI: http://wordpress.org/extend/plugins/third-party-host-fix/
Description: Fixes Wordpress' inability to find the install directory when it's not in the root folder. This is a plugin workaround to get the following built in features working - Plugin Installation, Theme Installation and Wordpress AutoUpdate.
Version: 1.1
Author: DrenBoy
Author URI: http://wordpress.org/extend/plugins/third-party-host-fix/

    Copyright 2010  @DrenBoy  (contact : twitter.com/drenboy)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

putenv('TMPDIR=' . ini_get('upload_tmp_dir'));

if(is_admin()) {
add_filter('filesystem_method', create_function('$a', 'return "direct";' ));
define( 'FS_CHMOD_DIR', 0751 );
}

?>
