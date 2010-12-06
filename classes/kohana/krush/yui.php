<?php defined('SYSPATH') or die('No direct script access.');
/**
 * YUI Compressor driver for Krush.
 *
 * @package    Krush
 * @category   Driver
 * @author     Gabriel Evans <gabriel@codeconcoction.com>
 * @copyright  (c) 2010 Gabriel Evans
 * @license    http://www.opensource.org/licenses/mit-license.php MIT license
 */
class Kohana_Krush_YUI extends Krush {

	/**
	 * Version of YUI Compressor being used.
	 */
	const YUI_VERSION = '2.4.2';

	/**
	 * @var  string  location of YUI Compressor bin
	 */
	public static $bin = '';

	/**
	 * Sets location of YUI Compressor.
	 */
	protected function __construct($config)
	{
		parent::__construct($config);

		if ( ! $bin = Kohana::find_file())
		{
			throw new Kohana_Exception('YUI Compressor :version not found',
				array(':version' => self::YUI_VERSION));
		}
		elseif (is_executable($bin))
		{
			throw new Kohana_Exeption("YUI Compressor at ':location' must be executable",
				array(':location' => $bin));
		}

		self::$bin = $bin;
	}

}
