# magento-2-auto-redirect
Magento 2 Autoredirect allows user to change their url to other pages when starting on a page of the website. It works well on both storefront and backend.

Before you continue, ensure you meet the following requirements:

  * You have installed Magento2
  * You should use a Linux or Mac OS machine. Windows is not currently supported.

## Step 1: Download Magento 2 Autoredirect
### Install via composer (recommend)
Run the following commands in Magento 2 root folder:
```
composer require magepow/autoredirect
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy -f

```
## Step 2: How to use Magento 2 Autoredirect
### General Configuration
Login to magento admin, choose `stores->configuration->magepow->Auto Redirect`
Select `yes` to enable the module
* Url: Make an input for the url you want to change. Incase there is no change, please use slash "/" as default url
* Endpoint: Make an input for new endpoint after url. If there is no change, please leave it empty as default
Save and clear cache
### Result
