<?php namespace Jiri\Subscribe;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
			'Jiri\Subscribe\Components\SubscribeForm' => 'subscribeform',
    	];
    }

    public function registerSettings()
    {
    }
}
