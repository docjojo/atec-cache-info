=== atec Cache Info ===
Contributors: DocJoJo
Tags: OPcache, Object-Cache, APCu, Memcached, Redis
Requires at least: 5.2
Tested up to: 6.7.1
Requires PHP: 7.4
Requires CP: 1.7
Tested up to PHP: 8.4.1
Stable tag: 1.7.41
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

 Show all system caches, status and statistics (OPcache, WP-Object-Cache, JIT, APCu, Memcached, Redis, SQLite-Object-Cache).

== Description ==

This plugin provides detailed status information and statistics for PHP cache features, namely OPcache, WP-Object-Cache, JIT, APCu, Memcached, Redis and SQLite-Object-Cache.
Use this plugin to check important server and cache settings to improve the performance of your WordPress installation.

Lightweight (143KB) and resource-efficient.
Backend CPU footprint: <1 ms.
Frontend CPU footprint: <1 ms.

== 3rd party as a service ==

Once, when activating the plugin, an integrity check is requested from our server (https://atecplugins.com/) – if you give your permission.
Privacy policy: https://atecplugins.com/privacy-policy/

== Installation ==

1. Upload the plugin folder to the `/wp-content/plugins/` directory or through the `Plugins` menu.
2. Activate the plugin through the `Plugins` menu in WordPress.
3. Click "atec Cache Info" link in admin menu bar.

== Frequently Asked Questions ==

== Screenshots ==

1. Cache Info
2. Server Info
3. PHP Extensions

== Changelog ==

= 1.7.41 [2025.02.05] =
* New flushing

= 1.7.40 [2025.02.04] =
* Improved memory conversion

= 1.7.39 [2025.02.03] =
* Spanish translation

= 1.7.38 [2025.02.03] =
* Spanish translation

= 1.7.37 [2025.02.03] =
* Fixed require on Dashboard line 86

= 1.7.36 [2025.02.03] =
* Updated atec-check.js

= 1.7.35 [2025.02.02] =
* Russian translation updated

= 1.7.34 [2025.02.02] =
* French translation by Stephane

= 1.7.33 [2025.02.02] =
* russian translation

= 1.7.32 [2025.02.02] =
* Framework changes (atec-check)

= 1.7.31 [2025.01.29] =
* define(\'ATEC_TOOLS_INC\',true); // just for backwards compatibility

= 1.7.30 [2025.01.26] =
* switched require_once -> require

= 1.7.29 [2025.01.26] =
* Fixed $options[\'redis\']

= 1.7.28 [2025.01.26] =
* removed exit() afer redirect

= 1.7.27 [2025.01.26] =
* ATEC_WPcache_info

= 1.7.26 [2025.01.26] =
* Improved admin bar toggle

= 1.7.25 [2025.01.17] =
* Check button replaced

= 1.7.24 [2025.01.16] =
* SVN cleanup

= 1.7.23 [2025.01.16] =
* German translation

= 1.7.22 [2025.01.16] =
* German translation

= 1.7.21 [2025.01.06] =
* New redis connect

= 1.7.20 [2025.01.05] =
* New Redis Info and Settings

= 1.7.19 [2024.12.24] =
* Fixed style sheet

= 1.7.18 [2024.12.21] =
* Clean up

= 1.7.17 [2024.12.21] =
* Clean up

= 1.7.16 [2024.12.21] =
* New styles, cleaned up .svg

= 1.7.15 [2024.12.14] =
* Memcached unix socket

= 1.7.14 [2024.12.12] =
* Toogle admin bar – improved

= 1.7.13 [2024.12.11] =
* $redisSettings

= 1.7.12 [2024.12.11] =
* $redis->auth($pwd);

= 1.7.11 [2024.12.07] =
* Toogle admin bar display

= 1.7.10 [2024.11.27] =
* Improved plugin activation routine

= 1.7.9 [2024.11.24] =
* [\'used_memory\']+[\'free_memory\']

= 1.7.8 [2024.11.23] =
* Fixed translation

= 1.7.7 [2024.11.22] =
* Fixed OC percentage

= 1.7.6 [2024.11.22] =
* opcache.memory_consumption versus memory_usage

= 1.7.5 [2024.11.22] =
* Optimized atec-*-install.php routine

= 1.7.4 [2024.11.21] =
* Added OPC Override & Max waste

= 1.7.3 [2024.11.21] =
* Added OPC free_memory

= 1.7.2 [2024.11.21] =
* Improved OPC stats and new OPC Scripts tab

= 1.7.1 [2024.11.18] =
* minor fixes, APCu help und persisten OC test
* ob_flush() issue

= 1.6.9 [2024.10.24] =
* jit

= 1.6.8 [2024.10.09] =
* new translation

= 1.6.7 [2024.10.04] =
* Memcached - connection

= 1.6.6 [2024.09.05] =
* Removed plugin install feature

= 1.6.5 [2024.08.26] =
* OPC info

= 1.6.4 [2024.08.21] =
* framework change

= 1.6.3 [2024.08.08] =
* license code

= 1.6.2 [2024.07.29] =
* inline_style

= 1.6.0 [2024.07.26] =
* extension check

= 1.5.9 [2024.07.03] =
* redis

= 1.5.8 [2024.06.26] =
* deploy

= 1.5.6,1.5.7 [2024.06.20] =
* update

= 1.5.5 [2024.06.16] =
* update

= 1.5.4 [2024.06.1] =
* dashboard

= 1.5.3 [2024.06.09] =
* svn

= 1.5.2 [2024.06.06] =
* atec-check

= 1.5.1 [2024.06.05] =
* WP 6.5.4 approved

= 1.5 [2024.06.01] =
* max_accelerated_files, interned_strings_buffer, revalidate_freq

= 1.4.9 [2024.05.30] =
* clean up

= 1.4.8 [2024.05.25] =
* subversion

= 1.4.7 [2024.05.25] =
* translation

= 1.4.5, 1.4.6 [2024.05.22] =
* WP Object Cache Stats
* Extension list updated

= 1.4.3, 1.4.4 [2024.05.14] =
* new atec-wp-plugin-framework

= 1.4.1, 1.4.2 [2024.05.03] =
* optimized

= 1.4.0 [2024.04.29] =
* register_activation_hook

= 1.3.6, 1.3.7-1.3.9 [2024.04.11] =
* redis unix socket

= 1.3.5 [2024.04.06] =
* bug fix and icons

= 1.3.4 [2024.04.02] =
* PHPinfo

= 1.3.3 [2024.04.01] =
* requestUrl | port

= 1.3.1, 1.3.2 [2024.03.29] =
* OPcache bug fix

= 1.3.0 [2024.03.28] =
* tabs

= 1.2.9 [2024.03.27] =
* new grid

= 1.2.8 [2024.03.24] =
* admin menu atec group

= 1.2.7 [2024.03.23] =
* ob_flush bug fix and new styling

= 1.2.5 [2024.03.23] =
* new styles, SVG, Memory usage

= 1.2.3, 1.2.4 [2024.03.18] =
* new slug check

= 1.2.2 [2024.03.15] =
* new atec-style

= 1.2.1 [2024.03.13] =
* changes according to plugin check

= 1.1.7, 1.2 [2024.02.21] =
Tested up to: 6.5, minor fixes

= 1.1.6 [2023.09.14] =
* woocommerce Styles

= 1.1.5 [2023.07.21] =
* Tested with WP 6.3

= 1.1.4 [2023.06.29] =
* Additional php.ini info 

= 1.1.3 [2023.06.26] =
* Memcached fix

= 1.1.2 [2023.06.26] =
* JIT check added

= 1.1.1 [2023.06.14] =
* Tested with WP 6.2.2

= 1.1.1 [2023.05.09] =
* Changes requested by wordpress.org in review process

= 1.1 [2023.05.06] =
* Changes requested by wordpress.org in review process

= 1.0 [2023.04.07] =
* Initial Release

