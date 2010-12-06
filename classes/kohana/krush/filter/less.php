<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Krush filtering for LESS, using http://leafo.net/lessphp/
 *
 * @package    Krush
 * @category   Filter
 * @author     Gabriel Evans <gabriel@codeconcoction.com>
 * @copyright  (c) 2010 Gabriel Evans
 * @license    http://www.opensource.org/licenses/mit-license.php MIT license
 */
class Kohana_Krush_Filter_LESS extends Krush_Filter {

	/**
	 * @var  array  allow only CSS
	 */
	public $filterable = array('css');

	/**
	 * Compile CSS with LESS.
	 * @param   string  CSS to filter
	 * @param   string  data type (js/css)
	 * @return  string  compiled stylesheet
	 */
	public function parse($data, $type)
	{
		// TODO: implement
	}

}
