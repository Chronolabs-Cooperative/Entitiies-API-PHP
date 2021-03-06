<?php
/**
 * Chronolabs Cooperative Entitisms Repository Services REST API
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Chronolabs Cooperative http://syd.au.snails.email
 * @license         ACADEMIC APL 2 (https://sourceforge.net/u/chronolabscoop/wiki/Academic%20Public%20License%2C%20version%202.0/)
 * @license         GNU GPL 3 (http://www.gnu.org/licenses/gpl.html)
 * @package         entities-api
 * @since           2.2.1
 * @author          Dr. Simon Antony Roberts <simon@snails.email>
 * @version         2.2.8
 * @description		A REST API for the storage and management of entities + persons + beingness collaterated!
 * @link            http://internetfounder.wordpress.com
 * @link            https://github.com/Chronolabs-Cooperative/Emails-API-PHP
 * @link            https://sourceforge.net/p/chronolabs-cooperative
 * @link            https://facebook.com/ChronolabsCoop
 * @link            https://twitter.com/ChronolabsCoop
 */
	/**
 * @author Gasper Kozak
 * @copyright 2007-2011

    This file is part of WideImage.
		
    WideImage is free software; you can redistribute it and/or modify
    it under the terms of the GNU Lesser General Public License as published by
    the Free Software Foundation; either version 2.1 of the License, or
    (at your option) any later version.
		
    WideImage is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Lesser General Public License for more details.
		
    You should have received a copy of the GNU Lesser General Public License
    along with WideImage; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

    * @package Internal/Operations
  **/
	
	/**
	 * ApplyFilter operation class
	 * 
	 * @package Internal/Operations
	 */
	class WideImage_Operation_ApplyFilter
	{
		/**
		 * A list of filters that only accept one arguments for imagefilter()
		 *
		 * @var array
		 */
		static protected $one_arg_filters = array(IMG_FILTER_SMOOTH, IMG_FILTER_CONTRAST, IMG_FILTER_BRIGHTNESS);
		
		/**
		 * Executes imagefilter
		 *
		 * @param WideImage_Image $image
		 * @param int $filter 
		 * @param numeric $arg1
		 * @param numeric $arg2
		 * @param numeric $arg3
		 * @return WideImage_TrueColorImage
		 */
		function execute($image, $filter, $arg1 = null, $arg2 = null, $arg3 = null, $arg4 = null)
		{
			$new = $image->asTrueColor();
			
			if (in_array($filter, self::$one_arg_filters))
				$res = imagefilter($new->getHandle(), $filter, $arg1);
			elseif (defined('IMG_FILTER_PIXELATE') && $filter == IMG_FILTER_PIXELATE)
				$res = imagefilter($new->getHandle(), $filter, $arg1, $arg2);
			elseif ($filter == IMG_FILTER_COLORIZE)
				$res = imagefilter($new->getHandle(), $filter, $arg1, $arg2, $arg3, $arg4);
			else
				$res = imagefilter($new->getHandle(), $filter);
			
			if (!$res)
				throw new WideImage_GDFunctionResultException("imagefilter() returned false");
			
			return $new;
		}
	}
