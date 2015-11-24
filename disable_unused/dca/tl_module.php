<?php

/**
 * Disable Unused for Contao Open Source CMS
 *
 * Copyright (C) 2015 Alexander Stulnikov
 *
 * @license    http://opensource.org/licenses/MIT
 */


// Remove filter and search
unset($GLOBALS['TL_DCA']['tl_module']['list']['sorting']['panelLayout']);

// Remove multiple edit button
unset($GLOBALS['TL_DCA']['tl_module']['list']['global_operations']['all']);


foreach($GLOBALS['TL_DCA']['tl_module']['palettes'] as $key => $val)
{
    // Remove headline
    $GLOBALS['TL_DCA']['tl_module']['palettes'][$key] = str_replace(',headline', '', $GLOBALS['TL_DCA']['tl_module']['palettes'][$key]);

    // Remove member group protection
    $GLOBALS['TL_DCA']['tl_module']['palettes'][$key] = str_replace('{protected_legend:hide},protected;', '', $GLOBALS['TL_DCA']['tl_module']['palettes'][$key]);

    // Remove showing to guests only
    $GLOBALS['TL_DCA']['tl_module']['palettes'][$key] = str_replace(',guests', '', $GLOBALS['TL_DCA']['tl_module']['palettes'][$key]);

    // Remove space
    $GLOBALS['TL_DCA']['tl_module']['palettes'][$key] = str_replace(',space', '', $GLOBALS['TL_DCA']['tl_module']['palettes'][$key]);
}
