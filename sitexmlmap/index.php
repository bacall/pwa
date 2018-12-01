<?php

if($_COOKIE['loginuser']!=1 ) {
  //header("Location: http://www.pisossantcugat.net/mant"); 
}
require_once('inc/startup.php');

switch ($state) {
	case PSNG_ACTION_SETTINGS_RESET:
		viewSetup(TRUE);
		break;
			
	case PSNG_ACTION_SETTINGS_SETUP:
		resetRunon();
		viewSetup();
		break;

	case PSNG_ACTION_SETTINGS_GET: // & parse
		getSettings();
		
	case PSNG_ACTION_SETTINGS_PARSE:
		$FILE = parseFilesystem();
		
		// check for timeout
		if ($SETTINGS[PSNG_TIMEOUT_ACTION] != '') break;
		// if no timeout, print result or write it
		if ($SETTINGS[PSNG_EDITRESULT] == PSNG_EDITRESULT_TRUE) {
			displaySitemapEdit($FILE);
		} else {
			writeSitemap($FILE); 
		}
		break;
		
	case PSNG_ACTION_SETTINGS_WRITESITEMAP_USERINPUT:
		writeSitemapUserinput();
		break;
	
	case PSNG_ACTION_SETTINGS_PINGGOOGLE:
		submitPageToGoogle();		
		break;

	case PSNG_ACTION_CHECK_UPDATESTATUS:
		checkUpdateStatus();
		break;
	
	default:
		viewSetup();
		break;
}

require_once(PSNG_FILE_INC_SHUTDOWN);

?>