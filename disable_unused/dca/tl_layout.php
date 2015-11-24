<?php

/**
 * Disable Unused for Contao Open Source CMS
 *
 * Copyright (C) 2015 Alexander Stulnikov
 *
 * @license    http://opensource.org/licenses/MIT
 */


// Remove filter and search
unset($GLOBALS['TL_DCA']['tl_layout']['list']['sorting']['panelLayout']);

// Remove multiple edit button
unset($GLOBALS['TL_DCA']['tl_layout']['list']['global_operations']['all']);
