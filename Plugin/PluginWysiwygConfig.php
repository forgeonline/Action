<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Forgeonline\Action\Plugin;

class WysiwygConfig
{
	public function afterGetConfig($subject, \Magento\Framework\DataObject $config)
	{
		$config->addData([
			'add_directives' => true,
		]);

		return $config;
	}
}
