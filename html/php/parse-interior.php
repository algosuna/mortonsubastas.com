<?php
//page-specific styles like "active" nav menu item, titles and breadcrumbs.

$pageId = $pageTitle = $depCurrent = $pageBanner = "";

// if statment to figure out the pageId

if ($pageId == 'depInd') {
	$pageTitle		= 'Departamentos';
	$depCurrent		= ' active';
	$pageBanner		= 'departamentos';
} elseif ($pageId == 0) {
	$pageTitle = "error";
}