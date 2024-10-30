<?php
/**
 * Plugin Name: 		Cryptocurrency.id Widgets
 * Author: 				Cryptocurrency.id
 * Author URI:			https://cryptocurrency.id
 * Description: 		Cryptocurrency widgets for Indonesia
 * Requires PHP:        7.2
 * Requires at least:   5.1
 * Tested up to:        5.7
 * Version: 			1.1
 * License: 			GPL v3
 * Text Domain:			cryptoid-widgets
 * Domain Path: 		/languages
 * Copyright 2021 Cryptocurrency.id
**/

if (!defined('ABSPATH')) {
    exit;
}

define('CID_VERSION', '1.1');
define('CID_PATH', plugin_dir_path(__FILE__));
define('CID_URL', plugin_dir_url(__FILE__));

if (!class_exists('CryptoIdWidgets')) {

    class CryptoIdWidgets {

        public $endpoint = 'https://cryptocurrency.id';

        public function __construct() {
            $this->apitoken = get_option('cid_api_token', false);
            $this->init();
            register_activation_hook(__FILE__, array($this, 'activate'));
            register_deactivation_hook(__FILE__, array($this, 'deactivate'));
        }

        public function init() {
            add_shortcode('cryptoid', array($this, 'shortcode'));
            add_action('admin_enqueue_scripts', array($this, 'admin_scripts'));
            add_action('admin_menu', array($this, 'register_menu'));
            add_action('admin_post_cid_save_api_key', array($this, 'save_api_key'));
        }

        public function admin_scripts() {
            if (isset($_GET['page']) && in_array($_GET['page'], array('cryptocurrency-id', 'cryptocurrency-id-shortcodes', 'cryptocurrency-id-api'))) {
                wp_enqueue_style('cid-a-selectize', CID_URL . 'assets/admin/css/selectize.min.css', array(), CID_VERSION);
                wp_enqueue_style('cid-a-editor', CID_URL . 'assets/admin/css/style.css', array(), CID_VERSION);
                wp_enqueue_script('cid-a-vendor', CID_URL . 'assets/admin/js/vendor.min.js', array(), CID_VERSION, true);
                wp_register_script('cid-a-script', CID_URL . 'assets/admin/js/script.js', array('jquery', 'cid-a-vendor'), CID_VERSION, true);
                wp_localize_script('cid-a-script', 'cryptoid', array('url' => CID_URL, 'ajaxurl' => admin_url('admin-ajax.php'), 'endpoint' => trailingslashit($this->endpoint), 'apitoken' => $this->apitoken ));
                wp_enqueue_script('cid-a-script');
            }
        }

        public function register_menu() {
            add_menu_page('Cryptocurrency.id Widgets', 'Cryptocurrency.id', 'manage_options', 'cryptocurrency-id', array($this, 'editor'), 'data:image/svg+xml;base64,' . base64_encode('<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 85 85" style="enable-background:new 0 0 85 85;" xml:space="preserve"><g class="st0"><path class="st1" d="M85,42.7c0,5.7,0,11.5,0,17.2c0,8.9-5.9,15.5-14.9,16.5c-1.1,0.1-2.2,0.2-3.3,0.2c-10.2,0-20.4,0-30.6,0 c-7.8,0-14.3-2.8-19.3-9C12.8,62.3,8.2,57.2,3.8,52c-5.1-6-5.1-12.8,0-18.8c4.7-5.6,9.4-11.1,14.1-16.6c4.2-4.9,9.5-7.7,15.9-7.9 c11.6-0.2,23.3-0.4,34.9,0C78.9,9,85,15.9,85,26C85,31.6,85,37.1,85,42.7z M69,45.2c-2.6,0-4.9-0.1-7.2,0.1 c-0.9,0.1-1.7,0.9-2.4,1.5c-1.5,1.3-2.6,3.1-4.3,3.9c-3.7,1.7-7.8-0.3-9.5-4.1c-2-4.4-0.4-9.6,3.4-11.7c3.7-1.9,7.7-0.7,10.2,2.9 c0.4,0.7,1.2,1.5,1.9,1.6c2.6,0.2,5.2,0.1,7.8,0.1c-0.3-8-7.9-14.3-16.7-14.1c-9.7,0.2-16.9,7.4-17.1,16.9 c-0.1,9.9,7,17.2,16.9,17.6C60.8,60.1,68.5,53.7,69,45.2z M11,32.2c2.4,2.9,4.6,5.5,6.9,8.1c1.3,1.4,1.3,2.5,0,4 c-2.4,2.6-4.6,5.3-7,8.1c1.9,1.6,3.5,2.9,5.3,4.4c2.8-3.3,5.5-6.3,7.9-9.4c2.2-2.8,2.7-6.2,0.6-9.1c-2.5-3.6-5.5-6.9-8.5-10.4 C14.4,29.4,12.8,30.7,11,32.2z"/></g></svg>'));
            add_submenu_page('cryptocurrency-id', __('Widgets', 'cryptoid-widgets'), 'Widgets', 'manage_options', 'cryptocurrency-id', array($this, 'editor'));
            add_submenu_page('cryptocurrency-id', __('Shortcodes', 'cryptoid-widgets'), 'Shortcodes', 'manage_options', 'cryptocurrency-id-shortcodes', array($this, 'shortcodes_page'));
            add_submenu_page('cryptocurrency-id', __('API Token', 'cryptoid-widgets'), 'API Token', 'manage_options', 'cryptocurrency-id-api', array($this, 'api_token_page'));
        }

        public function editor() {
            if ($this->apitoken == false) {
                require_once(CID_PATH . 'includes/apikey.php');
            } else {
                $config = array();
                require_once(CID_PATH . 'includes/admin.php');
            }
        }

        public function shortcodes_page() {
            if ($this->apitoken == false) {
                require_once(CID_PATH . 'includes/apikey.php');
            } else {
                require_once(CID_PATH . 'includes/shortcodes.php');
            }
        }

        public function api_token_page() {
            require_once(CID_PATH . 'includes/apikey.php');
        }

        public function shortcode($atts) {

            $atts = shortcode_atts(array(
                'type' => 'card',
                'design' => 'price-slider',
                'theme' => 'light',
                'coin' => 'bitcoin',
                'width' => '480',
                'height' => '560',
                'responsive' => '',
                'transparent' => '',
                'pair' => 'BTCIDR',
                'exchange' => 'Indodax',
                'info' => 'price'
            ), $atts, 'cryptoid');

            if ($atts['type'] === 'text') {

                $out = '';
                $prices = $this->get_price($atts['pair']);

                if (isset($prices['tikers'])) {

                    $exchanges = array_column($prices['tikers'], NULL, 'market');

                    switch ($atts['info']) {
                        case 'price':
                            $out .= isset($prices['avg']['price']) ? $this->price_format($prices['avg']['price']) : '';
                            break;
                        case 'diff':
                            $out .= isset($prices['avg']['diff']) ? $this->price_format($prices['avg']['diff']) : '';
                            break;
                        case 'perc':
                            $out .= isset($prices['avg']['perc']) ? number_format($prices['avg']['perc'], 2) . '%' : '';
                            break;
                        case 'last':
                        case 'open':
                        case 'high':
                        case 'low':
                        case 'buy':
                        case 'sell':
                            $out .= isset($exchanges[$atts['exchange']][$atts['info']]) ? $this->price_format($exchanges[$atts['exchange']][$atts['info']]) : '';
                            break;
                        case 'volume':
                            $out .= isset($exchanges[$atts['exchange']]['vol_main']) ? number_format($exchanges[$atts['exchange']]['vol_main'], 2, '.', '.') . ' ' . str_replace('IDR', '', $atts['pair']) : '';
                            break;
                        case 'lastupdate':
                            $out .= isset($exchanges[$atts['exchange']]['updated_at']) ? $exchanges[$atts['exchange']]['updated_at'] : '';
                            break;
                    }

                }

                return $out;

            } else {
                $out = "\n" . '<!-- Cryptocurrency.id Widget -->';
                $out .= "\n" . '<div class="cryptocurrency-id-widget-container">';
                $out .= "\n" . '<div class="cryptocurrency-id-widget"></div>';
                $out .= "\n" . '<script src="' . trailingslashit($this->endpoint) . 'js/embed.js"></script>';
                $out .= "\n" . '<script class="cryptowidget">new CryptocurrencyID.widget({ token: "' . $this->apitoken . '", type: "' . $atts['type'] . '", design: "' . $atts['design'] . '", theme: "' . $atts['theme'] . '", coin: "' . $atts['coin'] . '", width: "' . $atts['width'] . '", height: "' . $atts['height'] . '", responsive: "' . $atts['responsive'] . '", transparent: "' . $atts['transparent'] . '" });</script>';
                $out .= "\n" . '</div>';
                $out .= "\n" . '<!-- Cryptocurrency.id Widget -->';
            }

            return $out;
        }

        public function save_api_key() {
            $token = sanitize_text_field($_POST['token']);
            update_option('cid_api_token', $token);
            wp_redirect(admin_url('admin.php?page=cryptocurrency-id'));
        }

        public function get_price($pair) {

            $prices = get_transient('cryptoid-pair-' . $pair);

            if ($prices === false) {

                $request = wp_remote_get(trailingslashit($this->endpoint) . 'api/arbitrage/' . $pair . '?token=' . $this->apitoken);

                if (is_wp_error($request) || wp_remote_retrieve_response_code($request) != 200) {
                    $prices = array();
                }

                $body = wp_remote_retrieve_body($request);
                $data = json_decode($body, true);

                $prices = !empty($data) ? $data : array();

            }

            set_transient('cryptoid-pair-' . $pair, $prices, 900);
            return $prices;

        }

        public function price_format($price) {
            return 'Rp ' . number_format($price, 0, '.', '.');
        }

        public function activate() {

        }

        public function deactivate() {

        }

    }

}

$cryptoidwidgets = new CryptoIdWidgets();