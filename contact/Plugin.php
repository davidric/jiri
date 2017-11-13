<?php namespace Jiri\Contact;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
			'Jiri\Contact\Components\ContactForm' => 'contactform',
    	];
    }

    public function registerSettings()
    {
    }
}
