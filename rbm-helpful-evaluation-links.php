<?php

/*
Plugin Name: RBM Helpful Evaluation Links
Plugin URI: http://realbigplugins.com
Description: Adds a meta box to the evaluations post type with helpful links.
Version: 0.1
Author: Kyle
Author URI: http://kyleblog.net
License: GPL2
Text Domain: rbmhl
*/

/**
 * Class rbm_helpful_evaluation_links
 */
class rbm_helpful_evaluation_links {

	/**
	 * Initialize all the things
	 */
	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'box' ) );
	}

	/**
	 * Adds the new meta box
	 */
	public function box() {
		add_meta_box(
			'helpful_links'
			, __( 'Helpful links', 'rbmhl' )
			, array( $this, 'content' )
			, 'evaluations'
			, 'side'
			, 'high'
		);
	}

	/**
	 * Outputs the contents of the new meta box
	 */
	public function content() {
		$links = array(
			'The problem with sliders'                            => 'http://searchengineland.com/homepage-sliders-are-bad-for-seo-usability-163496',
			'Should I use a carousel?'                            => 'http://shouldiuseacarousel.com/',
			'Sliders Suck (Yoast)'                                => 'https://yoast.com/opinion-on-sliders/',
			'Sliders Suck (Brian Krogsgard)'                      => 'http://krogsgard.com/2013/sliders-suck/',
			'Why page speed matters'                              => 'http://www.speedawarenessmonth.com/breaking-down-why-page-speed-matters/',
			'Why improve your page speed'                         => 'http://marketingland.com/page-speed-matters-why-you-need-to-improve-yours-today-56774',
			'Website speed matters'                               => 'http://www.copyblogger.com/website-speed-matters/',
			'The case for responsive design'                      => 'http://www.precisionmarketinggroup.com/blog/the-case-for-responsive-design',
			'The business case for responsive design'             => 'http://thetomorrowlab.com/2013/05/the-business-case-for-responsive-web-design/',
			'Why responsive web design is important'              => 'http://www.webstarsltd.com/blog/why-responsive-web-design-is-important',
			'6 reasons responsive design is the future'           => 'http://blog.hubspot.com/insiders/why-responsive-web-design',
			'Basics of website design and accessibility'          => 'http://www.studygs.net/accessibility.htm',
			'Is the use of text embedded in images bad practice?' => 'http://ux.stackexchange.com/questions/41593/is-the-usage-of-text-embedded-in-an-image-a-bad-practice-for-very-controlled-us',
			'Core Caching Concepts'                               => 'https://www.tollmanz.com/core-caching-concepts-in-wordpress/',

		);
		echo '<em>Simply drag and drop links you like to your content.</em>';
		foreach ( $links as $title => $link ) {
			echo '<a href="' . $link . '" target="_BLANK" rel="nofollow">' . $title . '</a><br/>';
		}
	}
}

$rbm_helpful_evaluation_links = new rbm_helpful_evaluation_links();