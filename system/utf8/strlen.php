<?php
/**
 * UTF8::strlen
 *
 * @package    KO7
 * 
 * @copyright  (c) Kohana Team
 * @copyright  (c) 2005 Harry Fuecks
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt
 */
function _strlen($str)
{
	if (UTF8::is_ascii($str))
		return strlen($str);

	return strlen(utf8_decode($str));
}
