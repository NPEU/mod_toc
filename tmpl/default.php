<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_toc
 *
 * @copyright   Copyright (C) NPEU 2019.
 * @license     MIT License; see LICENSE.md
 */

defined('_JEXEC') or die;

$hx          = $params->get('header_tag', 'h2');
$min_h_count = (int) $params->get('min_heading_count', '3');
$doc         = JFactory::getDocument();

$min_h_count = 3;
    
// ToC requires id's on headers, so add them if not already present.
// Note this is a back-up, ideally the editor will create them so they're saved into the article.
preg_match_all('#<h2[^>]*>([^<]+)</h2>#', $doc->article->text, $matches, PREG_SET_ORDER);

if (count($matches) < $min_h_count) {
    return;
}
?>
<nav aria-label="table of contents">
        <?php if ($module->showtitle): ?>
        <<?php echo $hx; ?>><?php echo $module->title; ?></<?php echo $hx; ?>>
        <?php endif; ?>
        <ul>
            <?php foreach ($matches as $match): ?>
            <?php preg_match('#id="([^"]+)"#', $match[0], $id_match);
            if(!isset($id_match[0])) {
                $h2_id = JApplicationHelper::stringURLSafe($match[1]);
                $new_h2 = str_replace('<h2', '<h2 id="' . $h2_id . '"', $match[0]);
                
                $doc->article->text      = str_replace($match[0], $new_h2, $doc->article->text);
                $doc->article->fulltext  = str_replace($match[0], $new_h2, $doc->article->fulltext);
                $doc->article->introtext = str_replace($match[0], $new_h2, $doc->article->introtext);
            } else {
                $h2_id = $id_match[1];
            } ?>
            <li><a href="#<?php echo $h2_id; ?>"><?php echo $match[1]; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>
