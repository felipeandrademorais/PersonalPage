<?php
/**
 * Plugin Name: Simple Syntax Highlighting
 * Plugin URI: http://idnetter.com
 * Description: Simple syntax highlighting plugin based on highlightjs.org, automatically displays syntax highlights on code inside posts and pages. This plugin automatically detects the language code used. You just need to select it or add the code into &lt;pre&gt; &lt;code&gt; &lt;/ code&gt; &lt;/ pre&gt; format.
 * Version: 1.1
 * Author: Sulaiman Mubarak
 * Author URI: http://idnetter.com/author/gung
 * License: GPLv2 or later
 */
 
/**
 * Credits: 
 * https://highlightjs.org - highlight.js v9.12.0 | BSD3 License | git.io/hljslicense
 * https://github.com/wcoder/highlightjs-line-numbers.js/
 */

add_action( 'admin_init', 'ssh_reg' );
add_action( 'admin_menu', 'ssh_add_option_page' );
add_action( 'admin_head', 'ssh_code_button' );
add_action( 'wp_head', 'ssh_head' );
add_action( 'wp_enqueue_scripts', 'ssh_assets', 11 );
add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'ssh_add_settings_link' );

function ssh_reg() {
	register_setting( 'ssh_options_group', 'ssh_load_scripts' );
	register_setting( 'ssh_options_group', 'ssh_display_number' );
}

function ssh_add_option_page() {
	add_options_page('Simple Syntax Highlighting', 'Simple Syntax Highlighting', 'manage_options', 'ssh', 'ssh_option_page');
}

function ssh_add_settings_link( $settings_link ) {
	array_push( $settings_link, '<a href="options-general.php?page=ssh">Settings</a>' );
	return $settings_link;
}

function ssh_option_page(){
?>
<div>
	<form method="post" action="options.php">
	<?php settings_fields( 'ssh_options_group' ); ?>
	<?php do_settings_sections( 'ssh_options_group' ); ?>
		<h3>Simple syntax highlighting plugin options</h3>
		<table>
			<tr>
				<td>
					<input type="checkbox" name="ssh_display_number" id="ssh_display_number" <?php echo (get_option('ssh_display_number') ? 'checked' : ''); ?>> Display line numbers
				</td>
			</tr>
			<tr>
				<td>
					<input type="checkbox" name="ssh_load_scripts" id="ssh_load_scripts" <?php echo (get_option('ssh_load_scripts') ? 'checked' : ''); ?>> Load script only on single post or page
				</td>
			</tr>
		</table>
		<?php submit_button(); ?>
	</form>
</div>
<?php
}

function ssh_head() {
	if(get_option('ssh_load_scripts') == 'on') {
		if(is_single() || is_page()) {
			echo "<script>hljs.initHighlightingOnLoad();</script>\n";
			if(get_option('ssh_display_number') == 'on') {
				echo "<script>hljs.initLineNumbersOnLoad();</script>\n";
			}
		}
	}else{
		echo "<script>hljs.initHighlightingOnLoad();</script>\n";
		if(get_option('ssh_display_number') == 'on') {
			echo "<script>hljs.initLineNumbersOnLoad();</script>\n";
		}
  }
}

function ssh_assets() {
	if(get_option('ssh_load_scripts') == 'on') {
		if(is_single() || is_page()) {
			wp_enqueue_style( 'ssh_CSS', plugin_dir_url( __FILE__ ) . 'css/simple-syntax-highlighting.min.css', array(), '1.0', '');
			wp_enqueue_script( 'ssh_JS', plugin_dir_url( __FILE__ ) . 'js/highlight.min.js', array(), '9.12.0', '');
			if(get_option('ssh_display_number') == 'on') {
				wp_enqueue_script( 'ssh_n_JS', plugin_dir_url( __FILE__ ) . 'js/highlightjs-line-numbers.min.js', array(), '9.12.0', '');
			}
		}
	}else{
		wp_enqueue_style( 'ssh_CSS', plugin_dir_url( __FILE__ ) . 'css/simple-syntax-highlighting.min.css', array(), '1.0', '');
		wp_enqueue_script( 'ssh_JS', plugin_dir_url( __FILE__ ) . 'js/highlight.min.js', array(), '9.12.0', '');
		if(get_option('ssh_display_number') == 'on') {
			wp_enqueue_script( 'ssh_n_JS', plugin_dir_url( __FILE__ ) . 'js/highlightjs-line-numbers.min.js', array(), '9.12.0', '');
		}
	}
}

function ssh_code_button() {
    global $typenow;
    if ( !current_user_can('edit_posts') && !current_user_can('edit_pages') ) {
		return;
    }
    if( ! in_array( $typenow, array( 'post', 'page' ) ) )
        return;
    if ( get_user_option('rich_editing') == 'true') {
        add_filter("mce_external_plugins", "ssh_code_button_plugin");
        add_filter('mce_buttons', 'ssh_code_button_reg');
    }
}

function ssh_code_button_plugin($plugin_array) {
    $plugin_array['ssh_code_button'] = plugins_url( '/js/ssh-plugin.min.js', __FILE__ );
    return $plugin_array;
}

function ssh_code_button_reg($buttons) {
	array_push($buttons, "ssh_code_button");
	return $buttons;
}
