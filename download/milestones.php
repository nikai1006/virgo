<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
	$App 	= new App();
	$Nav	= new Nav();
	$Menu 	= new Menu();
	include($App->getProjectCommon());

/*******************************************************************************
 * Copyright (c) 2017 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors: Christopher Frost, Florian Waibel
 *
 *******************************************************************************/

	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Virgo - Milestone Downloads";
	$pageKeywords	= "Eclipse, EclipseRT, Virgo, OSGi, Milestones, Builds, Downloads";
	$pageAuthor		= "Glyn Normington";

	$virgoVersions = array("3.7.0.RC01", "3.7.0.M04", "3.7.0.M03", "3.7.0.M02", "3.7.0.M01");
	ob_start();
?>

<!--

<div id="midcolumn">
	<h2>Milestone Downloads</h2>
	<p>
		All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a>
		unless otherwise specified.
	</p>

	<p>
		The following are development milestones. You may prefer to <a href="http://www.eclipse.org/virgo/download/">download</a> an official release.
	</p>

	<p>
	    You can also browse the <a href="http://www.eclipse.org/virgo/documentation/">latest milestone documentation</a> online.
	</p>

	<div id='accordion'>
		<?
		$first = true;
		$tomcat = true;
		$nano = true;
    $snaps = true;
    $documentation = true;
    $update = true;
		foreach ($virgoVersions as $version){
			echo "<h4><a href='#'>$version";
			if($version == '3.7.0.RC01'){
				$nano = true;
				$nanoWeb = false;
				$nanoRap = true;
				$snaps = true;
				$documentation = false;
				$update = false;
			}
			if($version == '3.7.0.M04'){
				$nano = true;
				$nanoWeb = false;
				$nanoRap = true;
				$snaps = false;
				$documentation = false;
				$update = false;
			}
			if($version == '3.7.0.M03'){
				$nano = true;
				$nanoWeb = true;
				$nanoRap = true;
				$snaps = false;
				$documentation = false;
				$update = false;
			}
			if($version == '3.7.0.M02'){
				$nano = false;
				$nanoWeb = false;
				$nanoRap = false;
				$snaps = false;
				$documentation = false;
				$update = false;
			}
			if($version == '3.7.0.M01'){
				$nano = true;
				$nanoWeb = true;
				$nanoRap = false;
				$snaps = true;
				$documentation = true;
				$update = true;
			}
			if ($first) {
				echo " - Latest</a></h4>";
			} else {
				echo "</a></h4>";
			}

			echo "<div>";
			echo "	<ul>";
			echo "		<li><a href='http://www.eclipse.org/virgo/download/release-notes/$version.php' target='_self'>View Release Notes</a></li>";
			echo "		<li><strong>Virgo Server for Apache Tomcat</strong> -  <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/milestone/VTS/virgo-tomcat-server-$version.zip' target='_self'>Download</a></li>";
			echo "		<li><strong>Virgo Jetty Server</strong> -  <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/milestone/VJS/virgo-jetty-server-$version.zip' target='_self'>Download</a> </li>";
			echo "		<li><strong>Virgo Kernel</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/milestone/VK/virgo-kernel-$version.zip' target='_self'>Download</a></li>";
			if($nano){
				echo "		<li><strong>Virgo Nano</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/milestone/VN/virgo-nano-$version.zip' target='_self'>Download</a></li>";
			}
			if($nanoWeb) {
				echo "		<li><strong>Virgo Nano Web</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/milestone/VNF/virgo-nano-full-$version.zip' target='_self'>Download</a></li>";
      }
			if($nanoRap){
				echo "		<li><strong>Virgo RAP Server</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/milestone/VNR/virgo-nano-rap-$version.zip' target='_self'>Download</a></li>";
      }
			if($snaps){
				echo "		<li><strong>Virgo Snaps</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/milestone/VS/snaps-$version.zip' target='_self'>Download</a></li>";
      }
			if($documentation){
      	echo "    	<li><strong>Virgo Documentation</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/milestone/VD/$version/virgo-documentation-$version.zip'>Download</a>";
      }
			if($update){
      	echo "		<li><strong>Virgo Update Site</strong> - <a href='http://download.eclipse.org/virgo/updatesite/$version' target='_self'>http://download.eclipse.org/virgo/updatesite/$version</a></li>";
      }
			echo "	</ul>";
			echo "</div>";
			$first = false;
		}
		?>
	</div>

	    	<h3>Development Builds</h3>
	        	<p>
					Development builds are also available for <a href="http://www.eclipse.org/virgo/download/development-builds.php">limited use</a>.
				</p>

	    <h2>Virgo IDE Tooling Milestones</h2>
	        <p>
	            Virgo IDE tooling update site: http://download.eclipse.org/virgo/milestone/tooling/
	        </p>

	    <h2>Virgo Bundlor Milestones</h2>
	        <p>
	            Note that Bundlor milestones are available from the aggregated tooling update site: http://download.eclipse.org/virgo/milestone/tooling/
	        </p>

	<div id='accordion2'>
	    <?
	    $bundlorVersions = array("1.1.0.M05", "1.1.0.M04", "1.1.0.M03", "1.1.0.M02", "1.1.0.M01");
	    $first = true;
	    $update = true;
		foreach ($bundlorVersions as $version){

			if($version == '1.1.0.M03'){
				$update = false;
			}
			echo "<h4><a href='#'>$version";
			if ($first) {
				echo " - Latest</a></h4>";
			} else {
				echo "</a></h4>";
			}

			echo "<div>";
			echo "	<ul>";
			echo "		<li><a href='http://www.eclipse.org/virgo/download/release-notes/bundlor/$version.php' target='_self'>View Release Notes</a></li>";
			if($update){
				echo "<li>Update site - 'http://download.eclipse.org/virgo/milestone/BNDLR/$version/updatesite'</li>";
			}
			echo "		<li><strong>Virgo Bundlor</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/milestone/BNDLR/$version/bundlor-$version.zip' target='_self'>Download</a></li>";
			echo "	</ul>";
			echo "</div>";
			$first = false;
		}
		?>
	</div>
</div>

-->

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
