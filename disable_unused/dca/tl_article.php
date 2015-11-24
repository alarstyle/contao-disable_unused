<?php

/**
 * Disable Unused for Contao Open Source CMS
 *
 * Copyright (C) 2015 Alexander Stulnikov
 *
 * @license    http://opensource.org/licenses/MIT
 */


// Remove filter and search
unset($GLOBALS['TL_DCA']['tl_article']['list']['sorting']['panelLayout']);

// Remove multiple edit button
unset($GLOBALS['TL_DCA']['tl_article']['list']['global_operations']['all']);

// Remove member group protection
$GLOBALS['TL_DCA']['tl_article']['palettes']['default'] = str_replace('{protected_legend:hide},protected;', '', $GLOBALS['TL_DCA']['tl_article']['palettes']['default']);

// Remove showing to guests only
$GLOBALS['TL_DCA']['tl_article']['palettes']['default'] = str_replace(',guests', '', $GLOBALS['TL_DCA']['tl_article']['palettes']['default']);

// Remove space
$GLOBALS['TL_DCA']['tl_article']['palettes']['default'] = str_replace(',space', '', $GLOBALS['TL_DCA']['tl_article']['palettes']['default']);

// Remove publish dates
unset($GLOBALS['TL_DCA']['tl_article']['subpalettes']['published']);
unset($GLOBALS['TL_DCA']['tl_article']['fields']['published']['eval']['submitOnChange']);
