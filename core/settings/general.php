<?php
error_reporting(E_ALL);
ini_set('display_errors', -1);

// Defines
if ( $_SERVER['HTTP_HOST'] == 'localhost' ) {
	$include = $_SESSION['DOCUMENT_ROOT'] = 'D:\\Wamp\\www\\checklist';
	$general_settings_file = $include.'\\core\\settings\\general.php';
} else {
	$include = $_SESSION['DOCUMENT_ROOT'] = '/var/www/checklist';
	$general_settings_file = $include.'/core/settings/general.php';
}

if ( !defined('DOCUMENT_ROOT') || !defined('GENERAL_SETTINGS_FILE') ) {
	define('DOCUMENT_ROOT', $include);
	define('GENERAL_SETTINGS_FILE', $general_settings_file);
} 

$link = 'http://'.$_SERVER['HTTP_HOST'].'/';

$linkcache		= $link.'cache/';
$linkcontent	= $link.'content/';
$linkclasses	= $link.'core/classes/';
$linklibrary	= $link.'core/library/';
$linksettings	= $link.'core/settings/';
$linkcss		= $link.'css/';
$linkimg		= $link.'img/';
$linkjs			= $link.'js/';
$linkscripts	= $link.'scripts/';

// SMARTY
include_once(DOCUMENT_ROOT.'/core/library/smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir	= DOCUMENT_ROOT.'/templates/';
$smarty->compile_dir	= DOCUMENT_ROOT.'/cache/';
$smarty->config_dir		= DOCUMENT_ROOT.'/core/settings/';
$smarty->cache_dir		= DOCUMENT_ROOT.'/cache/';


// REWRITE and SMARTY ABSOLUTE URLs
(isset($_GET['page']))			? $page			= $_GET['page']			: $page			= 'home';
(isset($_GET['subpage']))		? $subpage		= $_GET['subpage']		: $subpage		= '';
(isset($_GET['subsubpage']))	? $subsubpage	= $_GET['subsubpage']	: $subsubpage	= '';

$smarty->assign('page',$page);
$smarty->assign('subpage',$subpage);
$smarty->assign('subsubpage',$subsubpage);

$smarty->assign('link',			$link);
$smarty->assign('linkcache',	$link.'cache/');
$smarty->assign('linkcontent',	$link.'content/');
$smarty->assign('linkclasses',	$link.'core/classes/');
$smarty->assign('linklibrary',	$link.'core/library/');
$smarty->assign('linksettings',	$link.'core/settings/');
$smarty->assign('linkcss',		$link.'css/');
$smarty->assign('linkimg',		$link.'img/');
$smarty->assign('linkjs',		$link.'js/');
$smarty->assign('linkscripts',	$link.'scripts/');
?>