<?php

global $project;
$project = 'SSproject';

global $databaseConfig;

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

if(APPLICATION_ENV == 'development') {

	$databaseConfig = array(
		"type" => 'MySQLDatabase',
		"database" => 'ss_project',
		"server" => 'localhost',
		"username" => 'root',
		"password" => 'root',
		"path" => '',
	);
	
	// set default admin password
	Security::setDefaultAdmin('admin', 'admin');

	//Force enviroment to Dev ** REMOVE FOR LIVE SITES **
	Director::set_environment_type("dev");

}
else if(APPLICATION_ENV == 'production'){

	$databaseConfig = array(
		"type" => 'MySQLDatabase',
		"database" => 'ss_project',
		"server" => 'localhost',
		"username" => 'root',
		"password" => 'root',
		"path" => '',
	);
	
}
MySQLDatabase::set_connection_charset('utf8');

// This line set's the current theme. More themes can be
// downloaded from http://www.silverstripe.org/themes/
SSViewer::set_theme('SSproject');

// enable nested URLs for this site (e.g. page/sub-page/)
SiteTree::enable_nested_urls();

//(v2.4) Log errors to an email address
//SS_Log::add_writer(new SS_LogEmailWriter('me@mydomain.com'), SS_Log::ERR);
//
//(v2.4) Log errors to a file
//SS_Log::add_writer(new SS_LogFileWriter('error_log.txt'), SS_Log::ERR);

//Force cache to flush on page load if in Dev mode (prevents needing ?flush=1 on the end of a URL)
if (Director::isDev()) {
    SSViewer::flush_template_cache();
}
//(v2.4) Log errors to an email address
//SS_Log::add_writer(new SS_LogEmailWriter('me@mydomain.com'), SS_Log::ERR);

//(v2.4) Log errors to a file
//SS_Log::add_writer(new SS_LogFileWriter('error_log.txt'), SS_Log::ERR);

//Set HTML EDitor Config
HtmlEditorConfig::get('cms')->setOption('force_br_newlines', true);
HtmlEditorConfig::get('cms')->setOption('remove_linebreaks', false);
HtmlEditorConfig::get('cms')->setOption('forced_root_block', '');

Object::add_extension('SiteTree', 'Translatable');

// load custom site config
DataObject::add_extension('SiteConfig', 'CustomSiteConfig');

// load sortable dataObjects
SortableDataObject::add_sortable_classes(array());