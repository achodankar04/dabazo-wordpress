<?php
// Exit if accessed directly.
if (!defined('ABSPATH')){
    exit;
}
// gets the current theme
$theme = wp_get_theme(); 
if ( 'Big Store' == $theme ){
  return;
 }
if ( ! class_exists( 'THNotice' ) ){
  class THNotice{
    function __construct(){
      add_action( 'admin_notices', array( $this, 'admin_notice' ));
      add_action( 'admin_init', array( $this, 'notice_ignore' ));
      add_action( 'admin_enqueue_scripts', array( $this, 'notice_scripts' ));
    }
    function admin_notice() {
      global $current_user;
      $user_id = $current_user->ID;

      if ( ! get_user_meta( $user_id, 'th_thunk_notice_ignore' ) ) {
        ?>
                <div class="notice thunk-notice">
                    <div class="thunk-review-thumbnail">
                        <a href="https://themehunk.com/product/big-store/?utm_source=th&utm_medium=banner&utm_campaign=th_plugins"
                           target="_blank">
                            <img src="<?php echo THEMEHUNK_CUSTOMIZER_PLUGIN_URL.'themehunk/assets/images/plugin-banner.png'; ?>"
                                 alt="Big Store - New Free WooCommerce Theme"/>
                        </a>
                    </div>
                    <div class="thunk-notice-text">
                        <h3><?php esc_html_e( 'Big Store - New Free WooCommerce Theme', 'hunk-companion' ) ?></h3>
                        <p>
              <?php esc_html_e( 'Big Store is a free eCommerce WordPress theme, Specially made for WooCommerce. Theme comes
                            with one click demo import feature, Which help you to setup website in few minutes. You can
                            create single as well as multi vendor store using this theme.', 'hunk-companion' ) ?>
                        </p>
                        <ul class="thunk-review-ul">
                            <li class="show-mor-message">
                                <a href="https://themehunk.com/big-store-ecommerce-wordpress-theme/?utm_source=th&utm_medium=banner&utm_campaign=th_plugins"
                                   target="_blank">
                                    <span class="dashicons dashicons-desktop"></span>
                  <?php esc_html_e( 'Live Demo', 'hunk-companion' ) ?>
                                </a>
                            </li>
                            <li class="free-download-message">
                                <a href="https://themehunk.com/product/big-store/?utm_source=th&utm_medium=banner&utm_campaign=th_plugins"
                                   target="_blank">
                                    <span class="dashicons dashicons-external"></span>
                  <?php esc_html_e( 'Check Detail', 'hunk-companion' ) ?>
                                </a>
                            </li>
                            <li class="hide-message">
                <?php printf( '<a href="%1$s" class="dashicons-dismiss-icon"><span class="dashicons dashicons-welcome-comments"></span>Hide message</a>', '?th_thunk_notice_ignore=1' ); ?>
                            </li>
                        </ul>
                    </div>
                </div>
        <?php
      }
    }

    function notice_ignore() {
      global $current_user;
      $user_id = $current_user->ID;

      if ( isset( $_GET['th_thunk_notice_ignore'] ) ) {
        if ( $_GET['th_thunk_notice_ignore'] == '1' ) {
          update_user_meta( $user_id, 'th_thunk_notice_ignore', 'true', true );
        } else {
          delete_user_meta( $user_id, 'th_thunk_notice_ignore' );
        }
      }
    }

    function notice_scripts(){
      wp_enqueue_style( 'th-notice', plugins_url('assets/css/notice.css', __FILE__) );
    }
  }
  new THNotice();
}