<?php

/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2019 - 2022, CodeIgniter Foundation
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2019, British Columbia Institute of Technology (https://bcit.ca/)
 * @copyright	Copyright (c) 2019 - 2022, CodeIgniter Foundation (https://codeigniter.com/)
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * CodeIgniter Directory Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		EllisLab Dev Team
 * @link		https://codeigniter.com/userguide3/helpers/directory_helper.html
 */

// ------------------------------------------------------------------------

if (! function_exists('directory_map')) {
    /**
     * Create a Directory Map
     *
     * Reads the specified directory and builds an array
     * representation of it. Sub-folders contained with the
     * directory will be mapped as well.
     *
     * @param	string	$source_dir		Path to source
     * @param	int	$directory_depth	Depth of directories to traverse
     *						(0 = fully recursive, 1 = current dir, etc)
     * @param	bool	$hidden			Whether to show hidden files
     * @return	array
     */
    function directory_map($source_dir, $directory_depth = 0, $hidden = FALSE)
    {
        if ($fp = @opendir($source_dir)) {
            $filedata    = array();
            $new_depth    = $directory_depth - 1;
            $source_dir    = rtrim($source_dir, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;

            while (FALSE !== ($file = readdir($fp))) {
                // Remove '.', '..', and hidden files [optional]
                if ($file === '.' or $file === '..' or ($hidden === FALSE && $file[0] === '.')) {
                    continue;
                }

                is_dir($source_dir . $file) && $file .= DIRECTORY_SEPARATOR;

                if (($directory_depth < 1 or $new_depth > 0) && is_dir($source_dir . $file)) {
                    $filedata[$file] = directory_map($source_dir . $file, $new_depth, $hidden);
                } else {
                    $filedata[] = $file;
                }
            }

            closedir($fp);
            return $filedata;
        }

        return FALSE;
    }
}


if (! function_exists('directory_size')) {
    function directory_size($source_dir, $unit = 'MB')
    {
        $size = 0;
        foreach (glob(rtrim($source_dir, '/') . '/*', GLOB_NOSORT) as $each) {
            $size += is_file($each) ? filesize($each) : directory_size($each);
            clearstatcache();
        }
        return $size;
    }
}

if (! function_exists('byte_size_format')) {
    function byte_size_format($size, $unit = 'MB')
    {
        switch (strtolower($unit)) {
            case 'kb':
                $size = number_format($size / 1000, 2) . $unit;
                break;
            case 'gb':
                $size = number_format($size / 1000000000, 2) . $unit;
                break;

            default:
                # MB
                $size = number_format($size / 1000000, 2) . $unit;
                break;
        }
        return $size;
    }
}
