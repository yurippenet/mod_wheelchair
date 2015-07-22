<?php
/**
 * Wheelchair Module for My-Netti
 * 
 * @package    Atom-it.dk
 * @subpackage Modules
 * @license    
 * @link       http://atom-it.dk
 */
 
// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

//Prepare fields
$technicalData = $params->get("list_technicaldata");

//$helper = modWheelchairHelper::getHello($params);


require JModuleHelper::getLayoutPath('mod_wheelchair');