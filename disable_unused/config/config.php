<?php

/**
 * Disable Unused for Contao Open Source CMS
 *
 * Copyright (C) 2015 Alexander Stulnikov
 *
 * @license    http://opensource.org/licenses/MIT
 */


// Remove back end modules
unset($GLOBALS['BE_MOD']['accounts']['member']);
unset($GLOBALS['BE_MOD']['accounts']['mgroup']);


// Remove content elements
unset($GLOBALS['TL_CTE']['accordion']);
unset($GLOBALS['TL_CTE']['slider']);


// Remove front end modules
unset($GLOBALS['FE_MOD']['user']);


// Backend only
if (TL_MODE == 'BE')
{
    $GLOBALS['TL_CSS'][] = 'system/modules/disable_unused/assets/disable_unused.css';

    $GLOBALS['TL_HOOKS']['addPatternToDataContainer'][] = array('disable_unused', 'addPatternToDataContainer');
}


class disable_unused extends Backend
{
    public function addPatternToDataContainer($strTable)
    {
        foreach($GLOBALS['TL_DCA'][$strTable]['palettes'] as $key => $val)
        {
            // Remove member group protection
            $GLOBALS['TL_DCA'][$strTable]['palettes'][$key] = str_replace('{protected_legend:hide},protected;', '', $GLOBALS['TL_DCA'][$strTable]['palettes'][$key]);

            // Remove showing to guests only
            $GLOBALS['TL_DCA'][$strTable]['palettes'][$key] = str_replace(',guests', '', $GLOBALS['TL_DCA'][$strTable]['palettes'][$key]);

            // Remove space
            $GLOBALS['TL_DCA'][$strTable]['palettes'][$key] = str_replace(',space', '', $GLOBALS['TL_DCA'][$strTable]['palettes'][$key]);

            // Remove publish dates
            $GLOBALS['TL_DCA'][$strTable]['palettes'][$key] = str_replace(',start,stop', '', $GLOBALS['TL_DCA'][$strTable]['palettes'][$key]);
        }
    }
}