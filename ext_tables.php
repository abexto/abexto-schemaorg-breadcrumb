<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('abexto_schemaorg_breadcrumb', 'Configuration/TypoScript', 'Abexto Schema.Org Breadcrumbs');

    }
);
