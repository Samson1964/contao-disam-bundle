<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package   bdf
 * @author    Frank Hoppe
 * @license   GNU/LGPL
 * @copyright Frank Hoppe 2014
 */

$GLOBALS['BE_MOD']['content']['disam'] = array
(
	'tables'            => array('tl_disam'),
	'exportXLS'         => array('\Schachbulle\ContaoDisamBundle\Classes\Export', 'getExcel')
);
