<?php

namespace NPEU\Module\Toc\Site\Helper;

use Joomla\CMS\Application\SiteApplication;
use Joomla\CMS\Factory;
use Joomla\Database\DatabaseAwareInterface;
use Joomla\Database\DatabaseAwareTrait;
use Joomla\Registry\Registry;

defined('_JEXEC') or die;

/**
 * Helper for mod_toc
 *
 * @since  1.5
 */
class TocHelper implements DatabaseAwareInterface
{
    use DatabaseAwareTrait;


    /*public function getStuff(Registry $config, SiteApplication $app): array
    {
        if (!$app instanceof SiteApplication) {
            return [];
        }
        $db = $this->getDatabase();

        // Do some database stuff here.

        return ["Hello, world."];
    }*/

}
