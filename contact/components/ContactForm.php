<?php namespace Jiri\Contact\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;

class ContactForm extends ComponentBase
{

	public function componentDetails(){
		return [
			'name' => 'Contact Form',
			'description' => 'Simple contact form'
		];
	}


	public function onSend(){

		$vars = ['name' => Input::get('name'), 'email' => Input::get('email'),  'subject' => Input::get('subject'), 'phone' => Input::get('phone'), 'txtMessage' => Input::get('txtMessage')];

		Mail::send('jiri.contact::mail.message', $vars, function($message) {

			$message->from('sender@behaku.com', 'behaku.com');
		    $message->to('davidlikaldo@gmail.com', 'Admin Person');
		    $message->subject('New message from behaku.com');

		});

	}
}