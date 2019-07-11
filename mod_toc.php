<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_toc
 *
 * @copyright   Copyright (C) NPEU 2019.
 * @license     MIT License; see LICENSE.md
 */

defined('_JEXEC') or die;

// Include the toc functions only once
JLoader::register('ModTocHelper', __DIR__ . '/helper.php');

#$thing = trim($params->get('thing'));

#$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');

require JModuleHelper::getLayoutPath('mod_toc', $params->get('layout', 'default'));