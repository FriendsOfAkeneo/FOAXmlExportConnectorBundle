FOAXmlExportConnectorBundle
===========================

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
3) Configure export connector instance:
