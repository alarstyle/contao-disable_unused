<?php

/**
 * Disable Unused for Contao Open Source CMS
 *
 * Copyright (C) 2015 Alexander Stulnikov
 *
 * @license    http://opensource.org/licenses/MIT
 */


// Remove filter and search
unset($GLOBALS['TL_DCA']['tl_theme']['list']['sorting']['panelLayout']);

// Remove multiple edit button and theme store button
unset($GLOBALS['TL_DCA']['tl_theme']['list']['global_operations']['all']);
unset($GLOBALS['TL_DCA']['tl_theme']['list']['global_operations']['store']);

// Remove css button
unset($GLOBALS['TL_DCA']['tl_theme']['list']['operations']['css']);