<?php
/* SVN FILE: $Id: HamlMarkdownFilter.php 51 2010-04-14 12:05:03Z chris.l.yates $ */
/**
 * Markdown Filter for {@link http://haml-lang.com/ Haml} the 
 * {@link http://cakephp.org/ Yii CakePHP framework} for use with
 * {@link http://phamlp.googlecode.com PHamlP}.
 * 
 * Requires {@link http://www.michelf.com/projects/php-markdown/ Markdown Extra}
 * to be installed in your APP.vendors.markdown directory.
 * 
 * This file should be placed in the filterDir directory as defined in the
 * HamlParser options.
 * 
 * @author			Chris Yates <chris.l.yates@gmail.com>
 * @copyright		Copyright (c) 2010 PBM Web Development
 * @license			http://phamlp.googlecode.com/files/license.txt
 * @package			PHamlP
 * @subpackage	Cake.filters
 */

// Change this to the required path
define('VENDOR_PATH', APP.'Vendor'.DS.'markdown'.DS.'markdown.php');

// The base filter class
App::import('Vendor', 'HamlMarkdownFilter', array('file'=>'haml'.DS.'filters'.DS.'_HamlMarkdownFilter.php'));

/**
 * Markdown Filter for {@link http://haml-lang.com/ Haml} class.
 * Parses the text with Markdown.
 * @package			PHamlP
 * @subpackage	Yii.filters
 */
class HamlMarkdownFilter extends _HamlMarkdownFilter {
	/**
	 * Initialise the filter with the $vendorPath
	 */
	public function init() {
		$this->vendorPath = VENDOR_PATH;		
		parent::init();
	}
}
