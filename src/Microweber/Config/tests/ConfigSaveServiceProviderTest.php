<?php

class ConfigSaveServiceProviderTest extends BaseTest
{
	public function testConfigIsConfigSaveWhenUsing(){

		$this->assertInstanceOf(\MicroweberPackages\Config\ConfigSave::class, app('Config'));
	}

}