<?php

/*******************************************************************************
 * Copyright (c) 2009 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

	# Set the theme for your project's web pages.
	# See http://eclipse.org/phoenix/
	$theme = "solstice";
	

	# Define your project-wide Navigation here
	# This appears on the left of the page if you define a left nav
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	
	# If you want to override the eclipse.org navigation, uncomment below.
	# $Nav->setLinkList(array());
	
	# Break the navigation into sections
	$Nav->addNavSeparator("Virgo Home", 	"/virgo");
	$Nav->addCustomNav("About Virgo",	 	"/virgo/about",	    	"_self", 3);
	$Nav->addCustomNav("Background", 	    "http://www.eclipse.org/projects/project.php?id=rt.virgo",    	"_self", 3);
	$Nav->addCustomNav("Benefits",	 		"/virgo/benefits",    	"_self", 3);
	$Nav->addCustomNav("Cloud",	 		    "/virgo/cloud",    	    "_self", 3);
	$Nav->addCustomNav("Deliverables",	 	"/virgo/deliverables", "_self", 3);
	$Nav->addCustomNav("Documentation", 	"/virgo/documentation", "_self", 3);
	$Nav->addCustomNav("Download", 			"/virgo/download", 		"_self", 3);
	$Nav->addCustomNav("FAQ",			 	"http://wiki.eclipse.org/Virgo/FAQ", "_self", 3);
	$Nav->addCustomNav("Feature Summary", 	"/virgo/feature-summary", "_self", 3);
	$Nav->addCustomNav("Getting Involved", 	"/virgo/contribute", 	"_self", 3);
	$Nav->addCustomNav("License", 			"http://www.eclipse.org/legal/epl/notice.php", 		"_self", 3);
	$Nav->addCustomNav("White Paper",	 	"http://git.eclipse.org/c/virgo/org.eclipse.virgo.documentation.git/plain/white-paper/virgo-white-paper.pdf", "_self", 3);
	$Nav->addCustomNav("Samples", 	        "/virgo/samples", "_self", 3);
	$Nav->addCustomNav("Support", 			"/virgo/support", 		"_self", 3);
	$Nav->addCustomNav("Tooling",		 	"http://wiki.eclipse.org/Virgo/Tooling", "_self", 3);

	# Define keywords, author and title here, or in each PHP page specifically
	# $pageKeywords	= "eclipse, OSGi, virgo";
	# $pageAuthor		= "Christopher Frost";
	# $pageTitle 		= "Virgo Server from EclipseRT";

	# top navigation bar
	# To override and replace the navigation with your own, uncomment the line below.
	# $Menu->setMenuItemList(array());
	# $Menu->addMenuItem("Home", "/project", "_self");
	# $Menu->addMenuItem("Download", "/project/download.php", "_self");
	# $Menu->addMenuItem("Documentation", "/project/documentation.php", "_self");
	# $Menu->addMenuItem("Support", "/project/support.php", "_self");
	# $Menu->addMenuItem("Developers", "/project/developers", "_self");

	# To define additional CSS or other pre-body headers
	$App->AddExtraHtmlHeader('<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">');
	$App->AddExtraHtmlHeader('<link media="screen" rel="stylesheet" type="text/css" href="/virgo/resources/local.css"/>');

	$App->AddExtraJsFooter('<script src="//code.jquery.com/jquery-1.10.2.js"></script>');
	$App->AddExtraJsFooter('<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>');

	$App->AddExtraJsFooter('<script>$(function() {$( "#accordion" ).accordion();});</script>');
	$App->AddExtraJsFooter('<script>$(function() {$( "#accordion2" ).accordion();});</script>');

	# To enable occasional Eclipse Foundation Promotion banners on your pages (EclipseCon, etc)
	$App->Promotion = TRUE;

	# If you have Google Analytics code, use it here
	$App->SetGoogleAnalyticsTrackingCode("UA-15496793-1");
?>