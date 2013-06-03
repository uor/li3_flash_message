<?php

use lithium\action\Dispatcher;
use li3_flash_message\extensions\storage\FlashMessage;

Dispatcher::applyFilter('_callable', function($self, $params, $chain) {
	return FlashMessage::bindTo($chain->next($self, $params, $chain));
});

?>