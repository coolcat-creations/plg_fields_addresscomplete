<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Fields.Addresscomplete
 *
 * @copyright   Copyright (C) 2018 COOLCAT creations. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

if (!$field->value || $field->value == '-1')
{
	return;
}

echo $field->value;

