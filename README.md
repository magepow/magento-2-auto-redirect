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
![Image of magento backend](https://github.com/magepow/magento-2-auto-redirect/blob/master/media/config_backend.png)
Select `yes` to enable the module
* Url: Make an input for the url you want to change. Incase there is no change, please use slash "/" as default url
* Endpoint: Make an input for new endpoint after url. If there is no change, please leave it empty as default
Save and clear cache
### Result
![Image of magento backend](https://github.com/magepow/magento-2-auto-redirect/blob/master/media/result.gif)

## Donation

If this project help you reduce time to develop, you can give me a cup of coffee :) 

[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/paypalme/alopay)

      
**Free Extensions List**

* [Magento 2 Categories Extension](https://alothemes.com/magento-categories-extension.html)

* [Magento 2 Sticky Cart](https://alothemes.com/magento-sticky-cart.html)

**Premium Extensions List**

* [Magento 2 Pages Speed Optimizer](https://alothemes.com/magento2-speed-optimizer.html)

* [Magento 2 Mutil Translate](https://alothemes.com/magento-multi-translate.html)

* [Magento 2 Instagram Integration](https://alothemes.com/magento-2-instagram.html)

* [Magento 2 Lookbook Pin Products](https://alothemes.com/lookbook-pin-products.html)

**Featured Magento Themes**

* [Expert Multipurpose responsive Magento 2 Theme](https://1.envato.market/c/1314680/275988/4415?u=https://themeforest.net/item/expert-premium-responsive-magento-2-and-1-support-rtl-magento-2-/21667789)

* [Gecko Premium responsive Magento 2 Theme](https://1.envato.market/c/1314680/275988/4415?u=https://themeforest.net/item/gecko-responsive-magento-2-theme-rtl-supported/24677410)

* [Milano Fashion responsive Magento 2 Theme](https://1.envato.market/c/1314680/275988/4415?u=https://themeforest.net/item/milano-fashion-responsive-magento-1-2-theme/12141971)

* [Electro responsive Magento 2 Theme](https://1.envato.market/c/1314680/275988/4415?u=https://themeforest.net/item/electro-responsive-magento-1-2-theme/17042067)

* [Pizzaro Food responsive Magento 2 Theme](https://1.envato.market/c/1314680/275988/4415?u=https://themeforest.net/item/pizzaro-food-responsive-magento-1-2-theme/19438157)

* [Biolife Organic responsive Magento 2 Theme](https://1.envato.market/c/1314680/275988/4415?u=https://themeforest.net/item/biolife-organic-food-magento-2-theme-rtl-supported/25712510)

* [Market responsive Magento 2 Theme](https://1.envato.market/c/1314680/275988/4415?u=https://themeforest.net/item/market-responsive-magento-2-theme/22997928)

* [Kuteshop responsive Magento 2 Theme](https://1.envato.market/c/1314680/275988/4415?u=https://themeforest.net/item/kuteshop-multipurpose-responsive-magento-1-2-theme/12985435)

**Featured Magento Services**

* [PSD to Magento 2 Theme Conversion](https://alothemes.com/psd-to-magento-theme-conversion.html)

* [Magento Speed Optimization Service](https://alothemes.com/magento-speed-optimization-service.html)

* [Magento Security Patch Installation](https://alothemes.com/magento-security-patch-installation.html)

* [Magento Website Maintenance Service](https://alothemes.com/website-maintenance-service.html)

* [Magento Professional Installation Service](https://alothemes.com/professional-installation-service.html)

* [Magento Upgrade Service](https://alothemes.com/magento-upgrade-service.html)

* [Customization Service](https://alothemes.com/customization-service.html)

* [Hire Magento Developer](https://alothemes.com/hire-magento-developer.html)

[![Latest Stable Version](https://poser.pugx.org/magepow/autoredirect/v/stable)](https://packagist.org/packages/magepow/autoredirect)
[![Total Downloads](https://poser.pugx.org/magepow/autoredirect/downloads)](https://packagist.org/packages/magepow/autoredirect)



