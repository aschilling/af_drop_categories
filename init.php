<?php

/**
* TT-RSS Plugin which removes category tags of a feed.
*/
class Af_Drop_Categories extends Plugin {

        private $host;

        function about() {
                return array("0.1",
                        "Removes category tags from every feed.",
                        "aschilling");
        }

        function init($host) {
                $this->host = $host;
                $host->add_hook($host::HOOK_FEED_FETCHED, $this);
        }

        /**
* After the feed is fetched, clean the category tags from $feed_data.
*/
        function hook_feed_fetched($feed_data, $fetch_url, $owner_uid, $feed) {
                _debug("category_cleaner: Removing category tags");
                $feed_data_cleaned = preg_replace("/(<category.*?<\\/category>)/", "", $feed_data);
                $feed_data_cleaned = preg_replace("/(<category.*?\\/>)/", "", $feed_data_cleaned);
                return $feed_data_cleaned;
        }

        function api_version() {
                return 2;
        }

}
?>