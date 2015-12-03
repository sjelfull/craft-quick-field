<?php
namespace Craft;

/**
 * Class QuickFieldPlugin
 *
 * Thank you for using Craft Quick Field!
 * @see https://github.com/benjamminf/craft-quick-field
 * @package Craft
 */
class QuickFieldPlugin extends BasePlugin
{
	function getName()
	{
		return Craft::t('Quick Field');
	}

	function getVersion()
	{
		return '0.0.1';
	}

	function getDeveloper()
	{
		return 'Benjamin Fleming';
	}

	function getDeveloperUrl()
	{
		return 'http://benf.co';
	}

	public function init()
	{
		parent::init();

		if($this->isCraftRequiredVersion())
		{
			$this->includeResources();
		}
	}

	public function isCraftRequiredVersion()
	{
		return version_compare(craft()->getVersion(), '2.5', '>=');
	}

	protected function includeResources()
	{
		craft()->templates->includeCssResource('quickfield/css/main.css');
		craft()->templates->includeJsResource('quickfield/js/main.js');
	}
}
