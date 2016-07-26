<?php

class MSI_Frontend {

	/**
	 * Should we hide the original menu text, or put the icon before it?
	 * Override with storm_social_icons_hide_text filter
	 *
	 * @var bool
	 */
	var $hide_text = true;

	/**
	 * Contains 3.2.1 FontAwesome icons only. See $networks_latest for additional 4.0 icons.
	 * @var array links social site URLs with CSS classes for icons
	 */
	var $networks = array(
		'bitbucket.org'      => array( 'name' => 'Bitbucket',      'class' => 'bitbucket',     'icon' => 'fa-bitbucket',     'fa-sign' => 'fa-bitbucket-sign'   ),
		'dribbble.com'       => array( 'name' => 'Dribbble',       'class' => 'dribbble',      'icon' => 'fa-dribbble',      'fa-sign' => 'fa-dribbble'         ),
		'dropbox.com'        => array( 'name' => 'Dropbox',        'class' => 'dropbox',       'icon' => 'fa-dropbox',       'fa-sign' => 'fa-dropbox'          ),
		'facebook.com'       => array( 'name' => 'Facebook',       'class' => 'facebook',      'icon' => 'fa-facebook',      'fa-sign' => 'fa-facebook-sign'    ),
		'flickr.com'         => array( 'name' => 'Flickr',         'class' => 'flickr',        'icon' => 'fa-flickr',        'fa-sign' => 'fa-flickr'           ),
		'foursquare.com'     => array( 'name' => 'Foursquare',     'class' => 'foursquare',    'icon' => 'fa-foursquare',    'fa-sign' => 'fa-foursquare'       ),
		'github.com'         => array( 'name' => 'Github',         'class' => 'github',        'icon' => 'fa-github',        'fa-sign' => 'fa-github-sign'      ),
		'gittip.com'         => array( 'name' => 'GitTip',         'class' => 'gittip',        'icon' => 'fa-gittip',        'fa-sign' => 'fa-gittip'           ),
		'instagr.am'         => array( 'name' => 'Instagram',      'class' => 'instagram',     'icon' => 'fa-instagram',     'fa-sign' => 'fa-instagram'        ),
		'instagram.com'      => array( 'name' => 'Instagram',      'class' => 'instagram',     'icon' => 'fa-instagram',     'fa-sign' => 'fa-instagram'        ),
		'linkedin.com'       => array( 'name' => 'LinkedIn',       'class' => 'linkedin',      'icon' => 'fa-linkedin',      'fa-sign' => 'fa-linkedin-sign'    ),
		'mailto:'            => array( 'name' => 'Email',          'class' => 'envelope',      'icon' => 'fa-envelope',      'fa-sign' => 'fa-envelope-alt'     ),
		'pinterest.com'      => array( 'name' => 'Pinterest',      'class' => 'pinterest',     'icon' => 'fa-pinterest',     'fa-sign' => 'fa-pinterest-sign'   ),
		'plus.google.com'    => array( 'name' => 'Google+',        'class' => 'google-plus',   'icon' => 'fa-google-plus',   'fa-sign' => 'fa-google-plus-sign' ),
		'renren.com'         => array( 'name' => 'RenRen',         'class' => 'renren',        'icon' => 'fa-renren',        'fa-sign' => 'fa-renren'           ),
		'stackoverflow.com'  => array( 'name' => 'Stack Exchange', 'class' => 'stackexchange', 'icon' => 'fa-stackexchange', 'fa-sign' => 'fa-stackexchange'    ),
		'trello.com'         => array( 'name' => 'Trello',         'class' => 'trello',        'icon' => 'fa-trello',        'fa-sign' => 'fa-trello'           ),
		'tumblr.com'         => array( 'name' => 'Tumblr',         'class' => 'tumblr',        'icon' => 'fa-tumblr',        'fa-sign' => 'fa-tumblr'           ),
		'twitter.com'        => array( 'name' => 'Twitter',        'class' => 'twitter',       'icon' => 'fa-twitter',       'fa-sign' => 'fa-twitter-sign'     ),
		'vk.com'             => array( 'name' => 'VK',             'class' => 'vk',            'icon' => 'fa-vk',            'fa-sign' => 'fa-vk'               ),
		'weibo.com'          => array( 'name' => 'Weibo',          'class' => 'weibo',         'icon' => 'fa-weibo',         'fa-sign' => 'fa-weibo'            ),
		'xing.com'           => array( 'name' => 'Xing',           'class' => 'xing',          'icon' => 'fa-xing',          'fa-sign' => 'fa-xing'             ),
		'youtu.be'           => array( 'name' => 'YouTube',        'class' => 'youtube',       'icon' => 'fa-youtube',       'fa-sign' => 'fa-youtube-sign'     ),
		'youtube.com'        => array( 'name' => 'YouTube',        'class' => 'youtube',       'icon' => 'fa-youtube',       'fa-sign' => 'fa-youtube-sign'     ),
	);

	/**
	 * Contains 4.0+ FontAwesome icons only.
	 * @var array links social site URLs with CSS classes for icons
	 */
	var $networks_latest = array(
		'slideshare.net'     => array( 'name' => 'SlideShare',     'class' => 'slideshare',     'icon' => 'fa fa-slideshare',     'fa-sign' => 'fa fa-slideshare'     ),
		'stackoverflow.com'  => array( 'name' => 'Stack Overflow', 'class' => 'stack-overflow', 'icon' => 'fa fa-stack-overflow', 'fa-sign' => 'fa fa-stack-overflow' ),
		'stackexchange.com'  => array( 'name' => 'Stack Exchange', 'class' => 'stack-exchange', 'icon' => 'fa fa-stack-exchange', 'fa-sign' => 'fa fa-stack-exchange' ),
		'vimeo.com'          => array( 'name' => 'Vimeo',          'class' => 'vimeo',          'icon' => 'fa fa-vimeo-square',   'fa-sign' => 'fa fa-vimeo-square'   ),
		'mailto:'            => array( 'name' => 'Email',          'class' => 'envelope',       'icon' => 'fa fa-envelope',       'fa-sign' => 'fa fa-envelope-o'     ),
	);

	/**
	 * Class to apply to the <li> of all social menu items
	 */
	var $li_class = 'social-icon';

	/**
	 * FontAwesome 4.0+ -- Size options available for icon output
	 * These are sizes that render as "pixel perfect" according to FontAwesome.
	 */
	var $icon_sizes = array(
		'normal' => '',
		'large'  => 'fa-lg',
		'2x'     => 'fa-2x',
		'3x'     => 'fa-3x',
		'4x'     => 'fa-4x',
		'5x'     => 'fa-5x',
	);

	/**
	 * FontAwesome 3.2.1 -- Size options available for icon output
	 * These are sizes that render as "pixel perfect" according to FontAwesome.
	 */
	var $legacy_icon_sizes = array(
		'normal' => '',
		'large'  => 'fa-large',
		'2x'     => 'fa-2x',
		'3x'     => 'fa-3x',
		'4x'     => 'fa-4x',
	);

	/**
	 * Size of the icons to display.
	 * Override with storm_social_icons_size filter
	 *
	 * @var string normal|large|2x|3x|4x
	 */
	var $size = '2x';

	/**
	 * Display normal icons, or icons cut out of a box (sign) shape?
	 * Override with storm_social_icons_type filter
	 *
	 * @var string icon|fa-sign
	 */
	var $type = 'icon';

	/**
	 * @var bool If true, use FontAwesome 4.0+, which drops IE7, but adds Vimeo
	 */
	var $use_latest = false;

	/**
	 * @var Storm_Menu_Social_Icons Instance of the class.
	 */
	private static $instance = false;

	/**
	 * Don't use this. Use ::get_instance() instead.
	 */
	public function __construct() {
		if ( !self::$instance ) {
			$message = '<code>' . __CLASS__ . '</code> is a singleton.<br/> Please get an instantiate it with <code>' . __CLASS__ . '::get_instance();</code>';
			wp_die( $message );
		}
	}

	public static function get_instance() {
		if ( !is_a( self::$instance, __CLASS__ ) ) {
			self::$instance = true;
			self::$instance = new self();
			self::$instance->init();
		}
		return self::$instance;
	}

	/**
	 * Initial setup. Called by get_instance.
	 */
	protected function init() {

		// Option to update to FontAwesome 4.0+ format (drops IE7 support)
		$this->use_latest = apply_filters( 'storm_social_icons_use_latest', $this->use_latest );

		if ( $this->use_latest ) {
			add_filter( 'storm_social_icons_networks', array( $this, 'update_network_classes' ), 1000 );
		}

		$this->size         = apply_filters( 'storm_social_icons_size',         $this->size );
		$this->type         = apply_filters( 'storm_social_icons_type',         $this->type );
		$this->hide_text    = apply_filters( 'storm_social_icons_hide_text',    $this->hide_text );
		$this->networks     = apply_filters( 'storm_social_icons_networks',     $this->networks );

		add_action( 'wp_enqueue_scripts', array( $this, 'wp_enqueue_scripts' ) );
		add_action( 'wp_print_scripts', array( $this, 'wp_print_scripts' ) );

		add_filter( 'wp_nav_menu_objects', array( $this, 'wp_nav_menu_objects' ), 5, 2 );

		// Shortcode for testing all fontawesome icons: [fontawesometest]
		add_shortcode( 'fontawesometest', array( $this, 'shortcode_fontawesometest' ) );
		add_action( 'fontawesometest', array( $this, 'fontawesometest' ) );

	}

	/**
	 * Load FontAwesome from NetDNA's Content Deliver Network (faster, likely to be cached)
	 * @see http://www.bootstrapcdn.com/#tab_fontawesome
	 */
	public function wp_enqueue_scripts() {
		wp_enqueue_style( 'fontawesome', '//netdna.bootstrapcdn.com/font-awesome/latest/css/font-awesome.css', array(), MSI_VERSION, 'all' );
	}

	/**
	 * Hide text visually, but keep available for screen readers.
	 * Just a few lines of stylesheet, so loading inline rather than adding another HTTP request.
	 */
	public function wp_print_scripts() {
		?>
		<style>
			/* Accessible for screen readers but hidden from view */
			.fa-hidden { position:absolute; left:-10000px; top:auto; width:1px; height:1px; overflow:hidden; }
			.rtl .fa-hidden { left:10000px; }
			.fa-showtext { margin-right: 5px; }
		</style>
		<?php
	}

	/**
	 * Get icon HTML with appropriate classes depending on size and icon type
	 */
	public function get_icon( $network ) {

		// Switch between legacy or current icon size classes
		$icon_sizes = ( $this->use_latest ) ?  $this->icon_sizes : $this->legacy_icon_sizes;

		$size = $icon_sizes[ $this->size ];
		$icon = $network[ $this->type ];
		$show_text = $this->hide_text ? '' : 'fa-showtext';

		$html = "<i class='fa $size $icon $show_text'></i>";

		return apply_filters( 'storm_social_icons_icon_html', $html, $size, $icon, $show_text );

	}

	/**
	 * Find social links in top-level menu items, add icon HTML
	 */
	public function wp_nav_menu_objects( $sorted_menu_items, $args ){

		foreach( $sorted_menu_items as &$item ) {
			if ( 0 != $item->menu_item_parent ) {
				// Skip submenu items
				continue;
			}

			foreach( $this->networks as $url => $network ) {
				if ( false !== strpos( $item->url, $url ) ) {

					$item->classes[] = $this->li_class;
					$item->classes[] = $network['class'];

					if ( $this->hide_text ) {
						$html = "<span class='fa-hidden'>{$item->title}</span>";
						$item->title = apply_filters( 'storm_social_icons_title_html', $html, $item->title );
					}

					$item->title = $this->get_icon( $network ) . $item->title ;
				}
			}
		}

		return $sorted_menu_items;

	}

	/**
	 * Change size classes from 3.2.1 format to 4.0+ format.
	 *
	 * @param  array $networks See $this->$networks
	 * @return array $networks Filtered to change "fa-" to "fa fa-"
	 */
	public function update_network_classes( $networks ) {

		foreach ( $networks as $url => &$values ) {
			$values['icon']      = str_replace( 'fa-', 'fa fa-', $values['icon'] );
			$values['fa-sign'] = str_replace( 'fa-', 'fa fa-', $values['fa-sign'] );
			$values['fa-sign'] = str_replace( '-sign', '-square', $values['fa-sign'] );
		}

		$networks = array_merge( $networks, $this->networks_latest );

		return $networks;
	}

	/**
	 * Test output of all FontAwesome icons
	 */
	public function fontawesometest( $args ) {
		include dirname( __FILE__ ) . '/font-awesome-test.html';
	}

	/**
	 * Shortcode to test output of all FontAwesome icons
	 */
	public function shortcode_fontawesometest( $args ) {
		ob_start();
		$this->fontawesometest();
		return ob_get_clean();
	}
}
