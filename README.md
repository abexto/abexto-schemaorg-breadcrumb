# abexto/abexto-schemaorg-breadcrumb
TYPO3 CMS schema.org/BreadcrumbList as JSON-LD

Copyright (c) 2019, [Andreas Prucha (Abexto - Helicon Software Development)](http://www.abexto.com)
All rights reserved.

Published under BDS-2 License

Install
-------

Install in TYPO3 via composer

`composer require abexto/abexto-schemaorg-breadcrumb' 

or via TYPO3 repository:

https://packagist.org/packages/abexto/abexto-schemaorg-breadcrumb


Configuration
-------------

Add the static template `Abexto Schema.Org Breadcrumb` to your root template.

This static template defines the TypoScript object `lib.abexto.schemaorg.breadcrumb`, 
which generates the Breadcrumb-Json.

It also defines the following page item:

`page.1561473085 =< lib.abexto.schemaorg.breadcrumb.json` 
