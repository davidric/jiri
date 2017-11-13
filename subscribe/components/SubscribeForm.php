<?php namespace Jiri\Subscribe\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;

class SubscribeForm extends ComponentBase
{

	public function componentDetails(){
		return [
			'name' => 'Subscribe Form',
			'description' => 'Simple subscribe form'
		];
	}


	public function onSend(){

		$vars = ['email' => Input::get('email')];

		Mail::send('jiri.subscribe::mail.message', $vars, function($message) {

			$message->from('sender@behaku.com', 'behaku.com');
		    $message->to('davidlikaldo@gmail.com', 'Admin Person');
		    $message->subject('New Subscriber from behaku.com');

		});

	}
}