## Chronolabs Cooperative presents

# Persons' + Organisations' Contactual Services REST API

### Author: Dr. Simon Antony Roberts <simon@snails.email>

### Demo: http://entities.snails.email 

This is the Installation Instructions for Entities Repository API. 

 -- You will Require Ubuntu 15.10+ to run this API.

*** Database ***

 	1. Use MySQL Workbench to restore the Database Import stored in /sql
 	2. Create Username for the API to use
 	3. Set the Database settings in /class/entitiesages.php for the Database
 
 *** Constants ***
 
 	The constants are found in the file of the root of in /constants.php
 
  	1. Set API_URL ~ this is the full path for the API root
  	2. Set API_URL_SHORT ~ this is the path for short referee's it must contain '%s' where the abbrivated path is added
  	3. Set API_URL_CALLBACK ~ this is the path for API Callback it must contain '%s' where the function mode is added
  	
  	
 *** Cron Jobs / Scheduled Tasks ***
 
 	You must set the cron jobs found in /cronjobs this is done by executing 'sudo crontab -e'
 
  	1. */7 * * * * /usr/bin/php -q /path/to/entities/cronjob/gravatar-mapping.php
  	2. */10 * * * * /usr/bin/php -q /path/to/entities/cronjob/scan-mapping.php
  	3. */15 * * * * /usr/bin/php -q /path/to/entities/cronjob/import-mapping.php
  	
*** Executables ***

 	1. execute 'sudo apt-get install zip zoo xarchiver unzip rar 7zip'
 	2. If your not running 64Bit then copy these executables from /usr/bin too replace them in the / root of entities to operate
