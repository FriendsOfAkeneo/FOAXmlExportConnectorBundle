FOAXmlExportConnectorBundle
===========================

[![Join the chat at https://gitter.im/FriendsOfAkeneo/FOAXmlExportConnectorBundle](https://badges.gitter.im/FriendsOfAkeneo/FOAXmlExportConnectorBundle.svg)](https://gitter.im/FriendsOfAkeneo/FOAXmlExportConnectorBundle?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

## Installation

1) Install bundle using [Composer](https://getcomposer.org/download/):

```bash
    composer install friendsofakeneo/xml-export-connector-bundle
```

2) Enable the bundle in `AppKernel.php` file:
```php
    public function registerBundles()
    {
        $bundles = [
            ...
            new FOA\FOAXmlExportConnectorBundle\FOAXmlExportConnectorBundle(),
        ];
        ...
```
3) Create export job instance:
```bash
php app/console akeneo:batch:create-job 'FOA XML Export connector' foa_xml_export export xml_export_instance '[]'
```
4) Configure job instance:

