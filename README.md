Af_Drop_Categories
=============

This is a plugin for the feed aggregator tt-rss. It removes the author provided categories of feed items. 

The motivation of this plugin was to host a productive tt-rss setup on herku. However, heroku supports on its free tier only up to 10,000 database entries. In order to use this limitation primarily for feed posts rather than for the classification of feed items I created this plugin.

Basically, this plugin removes all `<category></category>` (for RSS) and all `<category .*/>` (for Atom) tags from all feeds. Hence, you can still use your custom tag schemes (manually or using filters) and only have to give up the (feed-)author supplied categories.   


		
## Installation Notes

Download this Zip archive and extract it to the plugins directory within your tt-rss installation. Make sure that the folder is named af_drop_categories. Finally, go to the TT-RSS preference section and enable the plutin

Important: Please make sure that you install and activate this plugin before importing any feeds. The plugin can removes the item categories from new feed items, and does not touch already stored classifications.

