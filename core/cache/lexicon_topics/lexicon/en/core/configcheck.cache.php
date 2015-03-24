<?php  return array (
  'configcheck_admin' => 'Please contact a systems administrator and warn them about this message!',
  'configcheck_allowtagsinpost_context_enabled' => 'allow_tags_in_post Context Setting Enabled outside `mgr`',
  'configcheck_allowtagsinpost_context_enabled_msg' => 'The allow_tags_in_post Context Setting is enabled in your installation outside the mgr Context. MODX recommends this setting be disabled unless you need to explicitly allow users to submit MODX tags, numeric entities, or HTML script tags via the POST method to a form in your site. This should generally be disabled except in the mgr Context.',
  'configcheck_allowtagsinpost_system_enabled' => 'allow_tags_in_post System Setting Enabled',
  'configcheck_allowtagsinpost_system_enabled_msg' => 'The allow_tags_in_post System Setting is enabled in your installation. MODX recommends this setting be disabled unless you need to explicitly allow users to submit MODX tags, numeric entities, or HTML script tags via the POST method to a form in your site. It is better to enable this via Context Settings for specific Contexts.',
  'configcheck_cache' => 'Cache directory not writable',
  'configcheck_cache_msg' => 'MODX cannot write to the cache directory. MODX will still function as expected, but no caching will take place. To solve this, make the /_cache/ directory writable.',
  'configcheck_configinc' => 'Config file still writable!',
  'configcheck_configinc_msg' => 'Your site is vulnerable to hackers who could do a lot of damage to the site. Please make your config file read only! If you are not the site admin, please contact a systems administrator and warn them about this message! It is located at [[+path]]',
  'configcheck_default_msg' => 'An unspecified warning was found. Which is strange.',
  'configcheck_errorpage_unavailable' => 'Your site\'s Error page is not available.',
  'configcheck_errorpage_unavailable_msg' => 'This means that your Error page is not accessible to normal web surfers or does not exist. This can lead to a recursive looping condition and many errors in your site logs. Make sure there are no webuser groups assigned to the page.',
  'configcheck_errorpage_unpublished' => 'Your site\'s Error page is not published or does not exist.',
  'configcheck_errorpage_unpublished_msg' => 'This means that your Error page is inaccessible to the general public. Publish the page or make sure it is assigned to an existing document in your site tree in the System &gt; System Settings menu.',
  'configcheck_images' => 'Images directory not writable',
  'configcheck_images_msg' => 'The images directory isn\'t writable, or doesn\'t exist. This means the Image Manager functions in the editor will not work!',
  'configcheck_installer' => 'Installer still present',
  'configcheck_installer_msg' => 'The setup/ directory contains the installer for MODX. Just imagine what might happen if an evil person finds this folder and runs the installer! They probably won\'t get too far, because they\'ll need to enter some user information for the database, but it\'s still best to remove this folder from your server. It is located at: [[+path]]',
  'configcheck_lang_difference' => 'Incorrect number of entries in language file',
  'configcheck_lang_difference_msg' => 'The currently selected language has a different number of entries than the default language. While not necessarily a problem, this may mean the language file needs to be updated.',
  'configcheck_notok' => 'One or more configuration details didn\'t check out OK: ',
  'configcheck_ok' => 'Check passed OK - no warnings to report.',
  'configcheck_register_globals' => 'register_globals is set to ON in your php.ini configuration file',
  'configcheck_register_globals_msg' => 'This configuration makes your site much more susceptible to Cross Site Scripting (XSS) attacks. You should speak to your host about what you can do to disable this setting.',
  'configcheck_title' => 'Configuration check',
  'configcheck_unauthorizedpage_unavailable' => 'Your site\'s Unauthorized page is not published or does not exist.',
  'configcheck_unauthorizedpage_unavailable_msg' => 'This means that your Unauthorized page is not accessible to normal web surfers or does not exist. This can lead to a recursive looping condition and many errors in your site logs. Make sure there are no webuser groups assigned to the page.',
  'configcheck_unauthorizedpage_unpublished' => 'The Unauthorized page defined in the site configuration settings is not published.',
  'configcheck_unauthorizedpage_unpublished_msg' => 'This means that your Unauthorized page is inaccessible to the general public. Publish the page or make sure it is assigned to an existing document in your site tree in the System &gt; System Settings menu.',
  'configcheck_warning' => 'Configuration warning:',
  'configcheck_what' => 'What does this mean?',
);