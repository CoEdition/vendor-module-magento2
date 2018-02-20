# For Help with this installation, please contact connectorsupport@coedition.com 
# Magento1 Vendor Module

The Coedition Vendor module for magento 2 handles the integration for coedition marketplace vendors.

## Configurable Product API Extension

This extension updates API endpoints for coedition to integrate into your system.

## Installation

There are many ways to install a magento 2 module, the simplest is to download the code from this repository and change the name of the folder from `vendor-module-magento2-master` to `Coedition_Vendor` and then drop the folder into your `app/code` folder. Then run `php bin/magento setup:upgrade` to install. You many then run `php bin/magento setup:di:compile` and `php bin/magento setup:static-content:deploy` to complete the process for production.

## Prepare API access for Coedition

You must create an api/admin user for Coedition to access your categories and products and to have the ability to push orders back into your system. Here is a video for instructions, just click the image below to view the video.

[![Prepare API/ADMIN User](https://content.screencast.com/users/ragboy/folders/Snagit/media/c6e04ebf-32bf-4c17-9d37-bb11bf67a94c/FirstFrame.jpg)](https://www.screencast.com/t/cLhyVaeuv)

## Categorize to Coedition Taxonomy and Publish products

You now need to categorize your products into the Coedition taxonomy so that we can pull into our system. Here is a video for instructions, just click the image below to view the video.

[![Categorize](https://content.screencast.com/users/ragboy/folders/Snagit/media/09b96e8a-1556-4f64-a45b-890ade0f2c60/FirstFrame.jpg)](https://www.screencast.com/t/ULMLp9vfw)
