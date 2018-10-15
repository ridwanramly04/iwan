<?php
/**
 * Define database credentials
 */
define("DB_HOST", "localhost");
define("DB_NAME", "nextpost");
define("DB_USER", "root");
define("DB_PASS", "111599fa20a2a91b9647cd5c52e7f34c96661b2a22f2f345");
define("DB_ENCODING", "utf8"); // DB connnection charset

/**
 * Define DB tables
 */
define("TABLE_PREFIX", "TABLE_");

// Set table names without prefix
define("TABLE_USERS", "USERS");
define("TABLE_ACCOUNTS", "ACCOUNTS");
define("TABLE_PACKAGES", "PACKAGES");
define("TABLE_POSTS", "POSTS");
define("TABLE_GENERAL_DATA", "GENERAL_DATA");
define("TABLE_OPTIONS", "OPTIONS");
define("TABLE_ORDERS", "ORDERS");

define("TABLE_FILES", "FILES");
define("TABLE_CAPTIONS", "CAPTIONS");
define("TABLE_PROXIES", "PROXIES");

define("TABLE_PLUGINS", "PLUGINS");
define("TABLE_THEMES", "THEMES");
