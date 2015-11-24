<?php

/**
 * Disable Unused for Contao Open Source CMS
 *
 * Copyright (C) 2015 Alexander Stulnikov
 *
 * @license    http://opensource.org/licenses/MIT
 */


// Remove filter and search
unset($GLOBALS['TL_DCA']['tl_page']['list']['sorting']['panelLayout']);

// Remove multiple edit button
unset($GLOBALS['TL_DCA']['tl_page']['list']['global_operations']['all']);

// Remove member group protection
$GLOBALS['TL_DCA']['tl_page']['palettes']['regular']    = str_replace('{protected_legend:hide},protected;', '', $GLOBALS['TL_DCA']['tl_page']['palettes']['regular']);
$GLOBALS['TL_DCA']['tl_page']['palettes']['forward']    = str_replace('{protected_legend:hide},protected;', '', $GLOBALS['TL_DCA']['tl_page']['palettes']['forward']);
$GLOBALS['TL_DCA']['tl_page']['palettes']['redirect']   = str_replace('{protected_legend:hide},protected;', '', $GLOBALS['TL_DCA']['tl_page']['palettes']['redirect']);
$GLOBALS['TL_DCA']['tl_page']['palettes']['root']       = str_replace('{protected_legend:hide},protected;', '', $GLOBALS['TL_DCA']['tl_page']['palettes']['root']);

// Remove disabling search
$GLOBALS['TL_DCA']['tl_page']['palettes']['regular']    = str_replace('{search_legend},noSearch;', '', $GLOBALS['TL_DCA']['tl_page']['palettes']['regular']);

// Remove showing to guests only
$GLOBALS['TL_DCA']['tl_page']['palettes']['regular']    = str_replace(',guests', '', $GLOBALS['TL_DCA']['tl_page']['palettes']['regular']);
$GLOBALS['TL_DCA']['tl_page']['palettes']['forward']    = str_replace(',guests', '', $GLOBALS['TL_DCA']['tl_page']['palettes']['forward']);
$GLOBALS['TL_DCA']['tl_page']['palettes']['redirect']   = str_replace(',guests', '', $GLOBALS['TL_DCA']['tl_page']['palettes']['redirect']);

// Remove tabindex and accesskey
$GLOBALS['TL_DCA']['tl_page']['palettes']['regular']    = str_replace('{tabnav_legend:hide},tabindex,accesskey;', '', $GLOBALS['TL_DCA']['tl_page']['palettes']['regular']);
$GLOBALS['TL_DCA']['tl_page']['palettes']['forward']    = str_replace('{tabnav_legend:hide},tabindex,accesskey;', '', $GLOBALS['TL_DCA']['tl_page']['palettes']['forward']);
$GLOBALS['TL_DCA']['tl_page']['palettes']['redirect']   = str_replace('{tabnav_legend:hide},tabindex,accesskey;', '', $GLOBALS['TL_DCA']['tl_page']['palettes']['redirect']);

// Remove publish dates
unset($GLOBALS['TL_DCA']['tl_page']['subpalettes']['published']);
unset($GLOBALS['TL_DCA']['tl_page']['fields']['published']['eval']['submitOnChange']);
