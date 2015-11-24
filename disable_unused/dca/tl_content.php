<?php

/**
 * Disable Unused for Contao Open Source CMS
 *
 * Copyright (C) 2015 Alexander Stulnikov
 *
 * @license    http://opensource.org/licenses/MIT
 */


// Remove filter and search
unset($GLOBALS['TL_DCA']['tl_content']['list']['sorting']['panelLayout']);

// Remove multiple edit button
unset($GLOBALS['TL_DCA']['tl_content']['list']['global_operations']['all']);

// Remove header fields
if(($key = array_search('start', $GLOBALS['TL_DCA']['tl_content']['list']['sorting']['headerFields'])) !== false) {
    unset($GLOBALS['TL_DCA']['tl_content']['list']['sorting']['headerFields'][$key]);
}
if(($key = array_search('stop', $GLOBALS['TL_DCA']['tl_content']['list']['sorting']['headerFields'])) !== false) {
    unset($GLOBALS['TL_DCA']['tl_content']['list']['sorting']['headerFields'][$key]);
}

foreach($GLOBALS['TL_DCA']['tl_content']['palettes'] as $key => $val)
{
    // Remove headline
    $GLOBALS['TL_DCA']['tl_content']['palettes'][$key] = str_replace(',headline', '', $GLOBALS['TL_DCA']['tl_content']['palettes'][$key]);

    // Remove member group protection
    $GLOBALS['TL_DCA']['tl_content']['palettes'][$key] = str_replace('{protected_legend:hide},protected;', '', $GLOBALS['TL_DCA']['tl_content']['palettes'][$key]);

    // Remove showing to guests only
    $GLOBALS['TL_DCA']['tl_content']['palettes'][$key] = str_replace(',guests', '', $GLOBALS['TL_DCA']['tl_content']['palettes'][$key]);

    // Remove space
    $GLOBALS['TL_DCA']['tl_content']['palettes'][$key] = str_replace(',space', '', $GLOBALS['TL_DCA']['tl_content']['palettes'][$key]);

    // Remove publish dates
    $GLOBALS['TL_DCA']['tl_content']['palettes'][$key] = str_replace(',start,stop', '', $GLOBALS['TL_DCA']['tl_content']['palettes'][$key]);
}
