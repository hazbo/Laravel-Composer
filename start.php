<?php
/**
 * Laravel Composer Bundle
 *
 * @category  Bundle
 * @package   Laravel
 * @author    Ben Edmunds <http://benedmunds.com>
 * @copyright 2012 Ben Edmunds
 * @license   MIT License http://www.opensource.org/licenses/mit-license.php
 * @version   Release: 1.0
 * @link      https://github.com/benedmunds/Laravel-Composer
 */

$path = path('base').DS.'vendor'.DS.'autoload.php';
if (file_exists($path)) {
  require_once($path);
}
