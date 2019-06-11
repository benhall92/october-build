<?php namespace Benrhall\Profile;

use System\Classes\PluginBase;
use Rainlab\User\Controllers\Users as UsersController;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function boot()
    {
    	UsersController::extendFormFields(function($form, $model, $context){
    		$form->addTabFields([
    			'contact_number' => [
    				'label' => 'Contact Number'
    				'type' => 'text',
    				'tab' => 'Profile'
    			],
    			'job_role' => [
    				'label' => 'Job Role'
    				'type' => 'text',
    				'tab' => 'Profile'
    			]
    		]);
    	});
    }
}
