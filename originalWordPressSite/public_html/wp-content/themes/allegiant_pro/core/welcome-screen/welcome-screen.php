<?php

/**
 * Welcome Screen Class
 */
class Allegiant_Welcome {

	/**
	 * Constructor for the welcome screen
	 */
	public function __construct() {
		/* create dashbord page */
		add_action( 'admin_menu', array( $this, 'allegiant_welcome_register_menu' ) );

		/* activation notice */
		add_action( 'load-themes.php', array( $this, 'allegiant_activation_admin_notice' ) );

		/* enqueue script and style for welcome screen */
		add_action( 'admin_enqueue_scripts', array( $this, 'allegiant_welcome_style_and_scripts' ) );

		/* ajax callback for dismissable required actions */
		add_action( 'wp_ajax_allegiant_dismiss_required_action', array(
			$this,
			'allegiant_dismiss_required_action_callback'
		) );

		add_action( 'wp_ajax_allegiant_dismiss_recommended_plugins', array(
			$this,
			'allegiant_dismiss_recommended_plugins_callback'
		) );

		add_action( 'wp_ajax_allegiant_allegiant_set_frontpage', array(
			$this,
			'allegiant_set_pages'
		) );


		add_action( 'admin_init', array( $this, 'allegiant_activate_plugin' ) );
		add_action( 'admin_init', array( $this, 'allegiant_deactivate_plugin' ) );
		add_action( 'admin_init', array( $this, 'allegiant_set_pages' ) );
	}

	public function allegiant_set_pages() {
		if ( ! empty( $_GET ) ) {
			/**
			 * Check action
			 */
			if ( ! empty( $_GET['action'] ) && $_GET['action'] === 'allegiant_set_frontpage' ) {
				$about      = get_page_by_title( 'Homepage' );
				update_option( 'page_on_front', $about->ID );
				update_option( 'show_on_front', 'page' );

				// Set the blog page
				$blog = get_page_by_title( 'Blog' );
				update_option( 'page_for_posts', $blog->ID );
				echo 'succes';
				exit();

			}
		}
	}


	public function allegiant_activate_plugin() {
		if ( ! empty( $_GET ) ) {
			/**
			 * Check action
			 */
			if ( ! empty( $_GET['action'] ) && ! empty( $_GET['plugin'] ) && $_GET['action'] === 'activate_plugin' ) {
				$active_tab = $_GET['tab'];
				$url        = self_admin_url( 'themes.php?page=cpotheme-welcome&tab=' . $active_tab );
				activate_plugin( $_GET['plugin'], $url );
			}
		}
	}

	public function allegiant_deactivate_plugin() {
		if ( ! empty( $_GET ) ) {
			/**
			 * Check action
			 */
			if ( ! empty( $_GET['action'] ) && ! empty( $_GET['plugin'] ) && $_GET['action'] === 'deactivate_plugin' ) {
				$active_tab = $_GET['tab'];
				$url        = self_admin_url( 'themes.php?page=cpotheme-welcome&tab=' . $active_tab );
				$current    = get_option( 'active_plugins', array() );
				$search     = array_search( $_GET['plugin'], $current );
				if ( array_key_exists( $search, $current ) ) {
					unset( $current[ $search ] );
				}
				update_option( 'active_plugins', $current );
			}
		}
	}

	/**
	 * Creates the dashboard page
	 *
	 * @see   add_theme_page()
	 * @since 1.8.2.4
	 */
	public function allegiant_welcome_register_menu() {
		$action_count = $this->count_actions();
		$title        = $action_count > 0 ? 'About Allegiant <span class="badge-action-count">' . esc_html( $action_count ) . '</span>' : 'About Allegiant';

		add_theme_page( 'About Allegiant', $title, 'edit_theme_options', 'cpotheme-welcome', array(
			$this,
			'allegiant_welcome_screen'
		) );
	}

	/**
	 * Adds an admin notice upon successful activation.
	 *
	 * @since 1.8.2.4
	 */
	public function allegiant_activation_admin_notice() {
		global $pagenow;

		if ( is_admin() && ( 'themes.php' == $pagenow ) && isset( $_GET['activated'] ) ) {
			add_action( 'admin_notices', array( $this, 'allegiant_welcome_admin_notice' ), 99 );
		}
	}

	/**
	 * Display an admin notice linking to the welcome screen
	 *
	 * @since 1.8.2.4
	 */
	public function allegiant_welcome_admin_notice() {
		?>
		<div class="updated notice is-dismissible">
			<p><?php echo sprintf( esc_html__( 'Welcome! Thank you for choosing Allegiant! To fully take advantage of the best our theme can offer please make sure you visit our %swelcome page%s.', 'allegiant' ), '<a href="' . esc_url( admin_url( 'themes.php?page=cpotheme-welcome' ) ) . '">', '</a>' ); ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=cpotheme-welcome' ) ); ?>" class="button"
			      style="text-decoration: none;"><?php _e( 'Get started with Allegiant', 'allegiant' ); ?></a></p>
		</div>
		<?php
	}

	/**
	 * Load welcome screen css and javascript
	 *
	 * @since  1.8.2.4
	 */
	public function allegiant_welcome_style_and_scripts( $hook_suffix ) {

		$screen = get_current_screen();

		wp_enqueue_style( 'cpotheme-welcome-screen-css', get_template_directory_uri() . '/core/welcome-screen/css/welcome.css' );

		if ( $screen->base != 'customize' ) {
			wp_enqueue_script( 'cpotheme-welcome-screen-js', get_template_directory_uri() . '/core/welcome-screen/js/welcome.js', array( 'jquery' ), '1.0', true );

			wp_localize_script( 'cpotheme-welcome-screen-js', 'allegiantWelcomeScreenObject', array(
				'nr_actions_required'      => $this->count_actions(),
				'ajaxurl'                  => admin_url( 'admin-ajax.php' ),
				'template_directory'       => get_template_directory_uri(),
				'no_required_actions_text' => __( 'Hooray! There are no required actions for you right now.', 'allegiant' )
			) );
		}
		


	}

	/**
	 * Dismiss required actions
	 *
	 * @since 1.8.2.4
	 */
	public function allegiant_dismiss_required_action_callback() {
		global $allegiant_required_actions;
		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;
		echo $action_id; /* this is needed and it's the id of the dismissable required action */
		if ( ! empty( $action_id ) ):
			/* if the option exists, update the record for the specified id */
			if ( get_option( 'allegiant_show_required_actions' ) ):
				$allegiant_show_required_actions = get_option( 'allegiant_show_required_actions' );
				switch ( $_GET['todo'] ) {
					case 'add';
						$allegiant_show_required_actions[ $action_id ] = true;
						break;
					case 'dismiss';
						$allegiant_show_required_actions[ $action_id ] = false;
						break;
				}
				update_option( 'allegiant_show_required_actions', $allegiant_show_required_actions );
			/* create the new option,with false for the specified id */
			else:
				$allegiant_show_required_actions_new = array();
				if ( ! empty( $allegiant_required_actions ) ):
					foreach ( $allegiant_required_actions as $allegiant_required_action ):
						if ( $allegiant_required_action['id'] == $action_id ):
							$allegiant_show_required_actions_new[ $allegiant_required_action['id'] ] = false;
						else:
							$allegiant_show_required_actions_new[ $allegiant_required_action['id'] ] = true;
						endif;
					endforeach;
					update_option( 'allegiant_show_required_actions', $allegiant_show_required_actions_new );
				endif;
			endif;
		endif;
		die(); // this is required to return a proper result
	}

	public function allegiant_dismiss_recommended_plugins_callback() {
		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;
		echo $action_id; /* this is needed and it's the id of the dismissable required action */
		if ( ! empty( $action_id ) ):
			/* if the option exists, update the record for the specified id */
			$allegiant_show_recommended_plugins = get_option( 'allegiant_show_recommended_plugins' );
				
				switch ( $_GET['todo'] ) {
					case 'add';
						$allegiant_show_recommended_plugins[ $action_id ] = true;
						break;
					case 'dismiss';
						$allegiant_show_recommended_plugins[ $action_id ] = false;
						break;
				}
				update_option( 'allegiant_show_recommended_plugins', $allegiant_show_recommended_plugins );
			/* create the new option,with false for the specified id */
		endif;
		die(); // this is required to return a proper result
	}

	/**
	 *
	 */
	public function count_actions() {
		global $allegiant_required_actions;

		$allegiant_show_required_actions = get_option( 'allegiant_show_required_actions' );
		if ( ! $allegiant_show_required_actions ) {
			$allegiant_show_required_actions = array();
		}

		$i = 0;
		foreach ( $allegiant_required_actions as $action ) {
			$true      = false;
			$dismissed = false;

			if ( ! $action['check'] ) {
				$true = true;
			}

			if ( ! empty( $allegiant_show_required_actions ) && isset( $allegiant_show_required_actions[ $action['id'] ] ) && ! $allegiant_show_required_actions[ $action['id'] ] ) {
				$true = false;
			}

			if ( $true ) {
				$i ++;
			}
		}


		return $i;
	}

	public function call_plugin_api( $slug ) {
		include_once( ABSPATH . 'wp-admin/includes/plugin-install.php' );

		if ( false === ( $call_api = get_transient( 'allegiant_plugin_information_transient_' . $slug ) ) ) {
			$call_api = plugins_api( 'plugin_information', array(
				'slug'   => $slug,
				'fields' => array(
					'downloaded'        => false,
					'rating'            => false,
					'description'       => false,
					'short_description' => true,
					'donate_link'       => false,
					'tags'              => false,
					'sections'          => true,
					'homepage'          => true,
					'added'             => false,
					'last_updated'      => false,
					'compatibility'     => false,
					'tested'            => false,
					'requires'          => false,
					'downloadlink'      => false,
					'icons'             => true
				)
			) );
			set_transient( 'allegiant_plugin_information_transient_' . $slug, $call_api, 30 * MINUTE_IN_SECONDS );
		}

		return $call_api;
	}

	public function check_active( $slug ) {
		if ( file_exists( ABSPATH . 'wp-content/plugins/' . $slug . '/' . $slug . '.php' ) ) {
			include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

			$needs = is_plugin_active( $slug . '/' . $slug . '.php' ) ? 'deactivate' : 'activate';

			return array( 'status' => is_plugin_active( $slug . '/' . $slug . '.php' ), 'needs' => $needs );
		}

		return array( 'status' => false, 'needs' => 'install' );
	}

	public function check_for_icon( $arr ) {
		if ( ! empty( $arr['svg'] ) ) {
			$plugin_icon_url = $arr['svg'];
		} elseif ( ! empty( $arr['2x'] ) ) {
			$plugin_icon_url = $arr['2x'];
		} elseif ( ! empty( $arr['1x'] ) ) {
			$plugin_icon_url = $arr['1x'];
		} else {
			$plugin_icon_url = $arr['default'];
		}

		return $plugin_icon_url;
	}

	public function create_action_link( $state, $slug ) {
		switch ( $state ) {
			case 'install':
				return wp_nonce_url(
					add_query_arg(
						array(
							'action' => 'install-plugin',
							'plugin' => $slug
						),
						network_admin_url( 'update.php' )
					),
					'install-plugin_' . $slug
				);
				break;
			case 'deactivate':
				return add_query_arg( array(
					                      'action'        => 'deactivate',
					                      'plugin'        => rawurlencode( $slug . '/' . $slug . '.php' ),
					                      'plugin_status' => 'all',
					                      'paged'         => '1',
					                      '_wpnonce'      => wp_create_nonce( 'deactivate-plugin_' . $slug . '/' . $slug . '.php' ),
				                      ), network_admin_url( 'plugins.php' ) );
				break;
			case 'activate':
				return add_query_arg( array(
					                      'action'        => 'activate',
					                      'plugin'        => rawurlencode( $slug . '/' . $slug . '.php' ),
					                      'plugin_status' => 'all',
					                      'paged'         => '1',
					                      '_wpnonce'      => wp_create_nonce( 'activate-plugin_' . $slug . '/' . $slug . '.php' ),
				                      ), network_admin_url( 'plugins.php' ) );
				break;
		}
	}

	/**
	 * Welcome screen content
	 *
	 * @since 1.8.2.4
	 */
	public function allegiant_welcome_screen() {
		require_once( ABSPATH . 'wp-load.php' );
		require_once( ABSPATH . 'wp-admin/admin.php' );
		require_once( ABSPATH . 'wp-admin/admin-header.php' );

		$allegiant      = wp_get_theme();
		$active_tab   = isset( $_GET['tab'] ) ? $_GET['tab'] : 'getting_started';
		$action_count = $this->count_actions();

		?>

		<div class="wrap about-wrap epsilon-wrap">

			<h1><?php echo __( 'Welcome to Allegiant! - Version ', 'allegiant' ) . $allegiant['Version']; ?></h1>

			<div
				class="about-text"><?php echo esc_html__( 'Allegiant is now installed and ready to use! Get ready to build something beautiful. We hope you enjoy it! We want to make sure you have the best experience using Allegiant and that is why we gathered here all the necessary information for you. We hope you will enjoy using Allegiant, as much as we enjoy creating great products.', 'allegiant' ); ?></div>

			<div class="wp-badge epsilon-welcome-logo"></div>


			<h2 class="nav-tab-wrapper wp-clearfix">
				<a href="<?php echo admin_url( 'themes.php?page=cpotheme-welcome&tab=getting_started' ); ?>"
				   class="nav-tab <?php echo $active_tab == 'getting_started' ? 'nav-tab-active' : ''; ?>"><?php echo esc_html__( 'Getting Started', 'allegiant' ); ?></a>
				<a href="<?php echo admin_url( 'themes.php?page=cpotheme-welcome&tab=recommended_actions' ); ?>"
				   class="nav-tab <?php echo $active_tab == 'recommended_actions' ? 'nav-tab-active' : ''; ?> "><?php echo esc_html__( 'Recommended Actions', 'allegiant' ); ?>
					<?php echo $action_count > 0 ? '<span class="badge-action-count">' . esc_html( $action_count ) . '</span>' : '' ?></a>
				<a href="<?php echo admin_url( 'themes.php?page=cpotheme-welcome&tab=recommended_plugins' ); ?>"
				   class="nav-tab <?php echo $active_tab == 'recommended_plugins' ? 'nav-tab-active' : ''; ?> "><?php echo esc_html__( 'Recommended Plugins', 'allegiant' ); ?></a>
				<a href="<?php echo esc_url( admin_url( 'themes.php?page=cpotheme-welcome&tab=registration' ) ); ?>"
				   class="nav-tab <?php echo $active_tab == 'registration' ? 'nav-tab-active' : ''; ?> "><?php echo esc_html__( 'Registration', 'allegiant' ); ?></a>
				<a href="<?php echo admin_url( 'themes.php?page=cpotheme-welcome&tab=support' ); ?>"
				   class="nav-tab <?php echo $active_tab == 'support' ? 'nav-tab-active' : ''; ?> "><?php echo esc_html__( 'Support', 'allegiant' ); ?></a>
			</h2>

			<?php
			switch ( $active_tab ) {
				case 'getting_started':
					require_once get_template_directory() . '/core/welcome-screen/sections/getting-started.php';
					break;
				case 'recommended_actions':
					require_once get_template_directory() . '/core/welcome-screen/sections/actions-required.php';
					break;
				case 'recommended_plugins':
					require_once get_template_directory() . '/core/welcome-screen/sections/recommended-plugins.php';
					break;
				case 'support':
					require_once get_template_directory() . '/core/welcome-screen/sections/support.php';
					break;
				case 'registration':
					do_action( 'allegiant-registration-section' );
					break;
				default:
					require_once get_template_directory() . '/core/welcome-screen/sections/getting-started.php';
					break;
			}
			?>


		</div><!--/.wrap.about-wrap-->

		<?php
	}
}

new Allegiant_Welcome();
