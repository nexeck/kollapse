<?php defined('SYSPATH') or die('No direct script access.');
/**
 * CSSMin & JSMin driver for Kollapse.
 *
 * @package    Kollapse
 * @category   Driver
 * @author     Gabriel Evans <gabriel@codeconcoction.com>
 * @copyright  (c) 2010 Gabriel Evans
 * @license    http://www.opensource.org/licenses/mit-license.php MIT license
 */

class Kohana_Kollapse_Minify extends Kollapse {

	/**
	 * Includes needed libraries (CSSMin & JSMin)
	 *
	 * @param array $config
	 */
	protected function __construct(array $config)
	{
		parent::__construct($config);

		require_once Kohana::find_file('vendor/cssmin', 'cssmin');
		require_once Kohana::find_file('vendor/jsmin', 'jsmin');
	}

	/**
	 * @param  $data
	 * @param  $package
	 * @param  $type
	 * @return string
	 */
	protected function optimize($data, $package, $type)
	{
		switch ($type)
		{
			case 'javascripts':
				$data = JSMin::minify($data);
			break;
			case 'stylesheets':
				$data = CSSMin::minify($data);
			break;
		}

		return $data;
	}

} // End Kohana_Kollapse_Minify