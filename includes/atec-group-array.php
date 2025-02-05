<?php
if (!defined('ABSPATH')) { exit(); }
	
$atec_group_arr = 
[
	['slug'=>'wpau', 'name'=>'auth-keys','desc'=>__('Randomize the authentication keys and salt in the „wp-config.php“ file.','atec-cache-info'),'pro'=>'-/-','wp'=>false, 'multi'=>true],
	['slug'=>'wpb', 'name'=>'backup','desc'=>__('All-in-one Backup and restore solution – fast & reliable','atec-cache-info'),'pro'=>'FTP storage (FTP & SSH)','wp'=>false, 'multi'=>false],
		['slug'=>'wpbn', 'name'=>'banner','desc'=>__('Temporary site banner with auto-hide feature','atec-cache-info'),'pro'=>'-/-','wp'=>false, 'multi'=>true],
	['slug'=>'wpca', 'name'=>'cache-apcu','desc'=>__('APCu object and page cache','atec-cache-info'),'pro'=>'Advanced page cache','wp'=>true, 'multi'=>true],
	['slug'=>'wpci', 'name'=>'cache-info','desc'=>__('Cache Info & Statistics (OPcache, all types of Object-Caches & JIT)','atec-cache-info'),'pro'=>'PHP extensions','wp'=>true, 'multi'=>true],
	
	['slug'=>'wpcm', 'name'=>'cache-memcached','desc'=>__('Fast and persistent Memcached WP Object Cache.','atec-cache-info'),'pro'=>'PRO only','wp'=>false, 'multi'=>true],
	['slug'=>'wpcr', 'name'=>'cache-redis','desc'=>__('Super fast and persistent Redis WP Object Cache.','atec-cache-info'),'pro'=>'PRO only','wp'=>false, 'multi'=>true],
		['slug'=>'wpc', 'name'=>'code','desc'=>__('Custom code snippets for WP','atec-cache-info'),'pro'=>'PHP-snippets','wp'=>false, 'multi'=>true],
	['slug'=>'wpdb', 'name'=>'database','desc'=>__('Optimize WP database tables','atec-cache-info'),'pro'=>'Cleanup comments, posts, revisions, transients and options','wp'=>true, 'multi'=>true],
	['slug'=>'wpd', 'name'=>'debug','desc'=>__('Show debug log in admin bar','atec-cache-info'),'pro'=>'Show queries, includes and wp-config.php; manage cron jobs','wp'=>true, 'multi'=>true],
	
	['slug'=>'wpdp', 'name'=>'deploy','desc'=>__('Install and auto update „atec“ plugins','atec-cache-info'),'pro'=>'-/-','wp'=>false, 'multi'=>true],
	['slug'=>'wpdv', 'name'=>'developer','desc'=>__('Essential toolbox to debug a WordPress installation','atec-cache-info'),'pro'=>'-/-','wp'=>false, 'multi'=>true],
		['slug'=>'wpds', 'name'=>'dir-scan','desc'=>__('Dir Scan & Statistics (Number of files and size per directory)','atec-cache-info'),'pro'=>'Deep scan for folder sizes','wp'=>true, 'multi'=>true],
	['slug'=>'wpdpp', 'name'=>'duplicate-page-post','desc'=>__('Duplicate page or post with one click','atec-cache-info'),'pro'=>'-/-','wp'=>false, 'multi'=>true],
	['slug'=>'wpht', 'name'=>'htaccess','desc'=>__('Optimize the webserver „.htaccess“ file for better performance of your site','atec-cache-info'),'pro'=>'-/-','wp'=>false, 'multi'=>true],
	
	['slug'=>'wplu', 'name'=>'login-url','desc'=>__('Customize the default login URL to protect your site against brute-force attacks','atec-cache-info'),'pro'=>'-/-','wp'=>false, 'multi'=>true],
	['slug'=>'wpll', 'name'=>'limit-login','desc'=>__('Limit login attempts to prevent brute-force attacks','atec-cache-info'),'pro'=>'Attack statistics','wp'=>false, 'multi'=>true],
		['slug'=>'wpmtm', 'name'=>'maintenance-mode','desc'=>__('Single click, temporary maintenance mode for visitors only','atec-cache-info'),'pro'=>'-/-','wp'=>false, 'multi'=>true],
	['slug'=>'wpm', 'name'=>'meta','desc'=>__('Add custom meta tags to the head section','atec-cache-info'),'pro'=>'Automatically add description tag per page','wp'=>false, 'multi'=>true],
	['slug'=>'wpmi', 'name'=>'migrate','desc'=>__('All-in-one site migration, with multisite support.','atec-cache-info'),'pro'=>'Only available for PRO users','wp'=>false, 'multi'=>true],
	
	['slug'=>'wpo', 'name'=>'optimize','desc'=>__('Lightweight performance tuning plugin','atec-cache-info'),'pro'=>'Enable performance and WooCommerce tweaks','wp'=>false, 'multi'=>true],
	['slug'=>'wppp', 'name'=>'page-performance','desc'=>__('Measure the PageScore and SpeedIndex of your WordPress site','atec-cache-info'),'pro'=>'-/-','wp'=>false, 'multi'=>true],
		['slug'=>'wppo', 'name'=>'poly-addon','desc'=>__('Custom translation strings for polylang plugin','atec-cache-info'),'pro'=>'-/-','wp'=>false, 'multi'=>false],
	['slug'=>'wppr', 'name'=>'profiler','desc'=>__('Measure plugins & theme plus pages execution time','atec-cache-info'),'pro'=>'Monitor page performance and queries','wp'=>false, 'multi'=>true],
	['slug'=>'wpsr', 'name'=>'search-replace','desc'=>__('Search & Replace strings in all tables','atec-cache-info'),'pro'=>'-/-','wp'=>false, 'multi'=>true],
	
	['slug'=>'wpsh', 'name'=>'shell','desc'=>__('Connect to a remote server via SSH','atec-cache-info'),'pro'=>'-/-','wp'=>false, 'multi'=>true],
	['slug'=>'wpsm', 'name'=>'smtp-mail','desc'=>__('Add custom SMTP mail settings to WP_Mail','atec-cache-info'),'pro'=>'DKIM support and test; SPAM filter','wp'=>false, 'multi'=>true],
		['slug'=>'wps', 'name'=>'stats','desc'=>__('Lightweight and GDPR compliant WP statistics','atec-cache-info'),'pro'=>'Statistics on a world map','wp'=>true, 'multi'=>true],
	['slug'=>'wpsi', 'name'=>'system-info','desc'=>__('System Information (OS, server, memory, PHP info and more)','atec-cache-info'),'pro'=>'List PHP-extensions & system variables; Show the php.ini, wp-config.php & .htaccess files','wp'=>true, 'multi'=>true],
	['slug'=>'wpsv', 'name'=>'svg','desc'=>__('Adds SVG support for media uploads.','atec-cache-info'),'pro'=>'-/-','wp'=>false, 'multi'=>true],
	
	['slug'=>'wpta', 'name'=>'temp-admin','desc'=>__('Create temporary admin accounts for maintenance purposes','atec-cache-info'),'pro'=>'-/-','wp'=>false, 'multi'=>true],
	['slug'=>'wpur', 'name'=>'user-roles','desc'=>__('Manage WordPress User Roles and Capabilities','atec-cache-info'),'pro'=>'List and manage users','wp'=>false, 'multi'=>true],
		['slug'=>'wms', 'name'=>'web-map-service','desc'=>__('Web map, conform with privacy regulations','atec-cache-info'),'pro'=>'Discount on atecmap.com API key','wp'=>true, 'multi'=>true],
	['slug'=>'wpwp', 'name'=>'webp','desc'=>__('Auto convert all images to WebP format','atec-cache-info'),'pro'=>'PNG, GIF and BMP support','wp'=>true, 'multi'=>true],
	
	['slug'=>'wpmc', 'name'=>'mega-cache','desc'=>__('Ultra fast page cache to improve site speed.','atec-cache-info'),'pro'=>'8 storage options: APCu, Redis, Memcached etc.; Custom post types; WooCommerce caching','wp'=>true, 'multi'=>true],
];
	
?>