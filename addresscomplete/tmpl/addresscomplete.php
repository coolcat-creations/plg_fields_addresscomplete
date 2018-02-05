<?php defined('_JEXEC') or die;

if (!$field->value || $field->value == '-1')
{
	return;
}

echo $field->value;

