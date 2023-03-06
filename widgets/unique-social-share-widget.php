<?php
namespace USShare\Widgets;

use Elementor\Controls_Manager;
use Elementor\Widget_Base;

if (!defined('ABSPATH')){ 
	exit; 
} // Exit if accessed directly

class USShareWidget extends Widget_Base{

    public function get_name(){
        return esc_html__('UniqueSocialShare', 'unique-social-share');
    }
    public function get_title(){
        return esc_html__('Unique Social Share', 'unique-social-share');
    }
    public function get_icon(){
        return 'usshare-usshare-icon eicon-product-usshares';
    }
    public function get_categories(){
        return ['bwdthebest_general_category'];
    }
	public function get_keywords() {
		return ['usshare', 'usshares', 'crumb', 'crumbs', 'list', 'header', 'builder'];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'section_usshares',
			array(
				'label' => esc_html__( 'Content Settings', 'unique-social-share' ),
			)
		);
		$this->add_control(
			'usshare_presets_style',
			[
				'label' => esc_html__( 'Select Style', 'unique-social-share' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style 1', 'unique-social-share' ),
					'style2' => esc_html__( 'Style 2', 'unique-social-share' ),
					'style3' => esc_html__( 'Style 3', 'unique-social-share' ),
					'style4' => esc_html__( 'Style 4', 'unique-social-share' ),
					'style5' => esc_html__( 'Style 5', 'unique-social-share' ),
					'style6' => esc_html__( 'Style 6', 'unique-social-share' ),
					'style7' => esc_html__( 'Style 7', 'unique-social-share' ),
					'style8' => esc_html__( 'Style 8', 'unique-social-share' ),
					'style9' => esc_html__( 'Style 9', 'unique-social-share' ),
					'style10' => esc_html__( 'Style 10', 'unique-social-share' ),
					'style11' => esc_html__( 'Style 11', 'unique-social-share' ),
					'style12' => esc_html__( 'Style 12', 'unique-social-share' ),
					'style13' => esc_html__( 'Style 13', 'unique-social-share' ),
					'style14' => esc_html__( 'Style 14', 'unique-social-share' ),
					'style15' => esc_html__( 'Style 15', 'unique-social-share' ),
					'style16' => esc_html__( 'Style 16', 'unique-social-share' ),
					'style17' => esc_html__( 'Style 17', 'unique-social-share' ),
					'style18' => esc_html__( 'Style 18', 'unique-social-share' ),
					'style19' => esc_html__( 'Style 19', 'unique-social-share' ),
					'style20' => esc_html__( 'Style 20', 'unique-social-share' ),
					'style21' => esc_html__( 'Style 21', 'unique-social-share' ),
				],
			]
		);
		$this->add_control(
			'usshare_all_social_btn',
			[
				'label' => esc_html__( 'Repeater List', 'unique-social-share' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'usshare_btn_title',
						'label' => esc_html__( 'Title', 'unique-social-share' ),
						'type' => Controls_Manager::TEXT,
						'default' => esc_html__( 'List Title' , 'unique-social-share' ),
						'label_block' => true,
					],
					[
						'name' => 'usshare_social_type',
						'label'   => esc_html__( 'Network', 'unique-social-share' ),
						'type'    => Controls_Manager::SELECT,
						'options' => [
							'facebook'    => esc_html__( 'Facebook', 'unique-social-share' ),
							'twitter'     => esc_html__( 'Twitter', 'unique-social-share' ),
							'linkedin'    => esc_html__( 'Linkedin', 'unique-social-share' ),
							'email'       => esc_html__( 'Email', 'unique-social-share' ),
							'whatsapp'    => esc_html__( 'Whatsapp', 'unique-social-share' ),
							'telegram'    => esc_html__( 'Telegram', 'unique-social-share' ),
							'viber'       => esc_html__( 'Viber', 'unique-social-share' ),
							'pinterest'   => esc_html__( 'Pinterest', 'unique-social-share' ),
							'tumblr'      => esc_html__( 'Tumblr', 'unique-social-share' ),
							'reddit'      => esc_html__( 'Reddit', 'unique-social-share' ),
							'vk'          => esc_html__( 'VK', 'unique-social-share' ),
							'xing'        => esc_html__( 'Xing', 'unique-social-share' ),
							'get-pocket'  => esc_html__( 'Get Pocket', 'unique-social-share' ),
							'digg'        => esc_html__( 'Digg', 'unique-social-share' ),
							'stumbleupon' => esc_html__( 'StumbleUpon', 'unique-social-share' ),
							'weibo'       => esc_html__( 'Weibo', 'unique-social-share' ),
							'renren'      => esc_html__( 'Renren', 'unique-social-share' ),
							'skype'       => esc_html__( 'Skype', 'unique-social-share' ),
						],
						'default' => 'facebook',
					],
					[
						'name' => 'usshare_social_icons',
						'label' => esc_html__( 'Icon', 'unique-social-share' ),
						'type' => Controls_Manager::ICONS,
						'default' => [
							'value' => 'fas fa-circle',
							'library' => 'fa-solid',
						],
						'recommended' => [
							'fa-solid' => [
								'circle',
								'dot-circle',
								'square-full',
							],
							'fa-regular' => [
								'circle',
								'dot-circle',
								'square-full',
							],
						],
					],
					[
						'name' => 'usshare_custom_link',
						'label'       => esc_html__( 'Custom Link', 'unique-social-share' ),
						'placeholder' => esc_html__( 'https://your-share-link.com', 'unique-social-share' ),
						'type'        => Controls_Manager::URL,
						'label_block' => true,
						'dynamic'     => [
							'active' => true,
						],
					]
				],
				'default' => [
					[
						'usshare_btn_title' => esc_html__( 'Facebook', 'unique-social-share' ),
						'usshare_social_icons'    => [
							'value'   => 'fab fa-facebook',
							'library' => 'fa-brands',
						],
						'usshare_social_type' => 'facebook',
					],
					[
						'usshare_btn_title' => esc_html__( 'Twitter', 'unique-social-share' ),
						'usshare_social_icons'    => [
							'value'   => 'fab fa-twitter',
							'library' => 'fa-brands',
						],
						'usshare_social_type' => 'twitter',
					],
					[
						'usshare_btn_title' => esc_html__( 'Linkedin', 'unique-social-share' ),
						'usshare_social_icons'    => [
							'value'   => 'fab fa-linkedin',
							'library' => 'fa-brands',
						],
						'usshare_social_type' => 'linkedin',
					],
					[
						'usshare_btn_title' => esc_html__( 'Whatsapp', 'unique-social-share' ),
						'usshare_social_icons'    => [
							'value'   => 'fab fa-whatsapp',
							'library' => 'fa-brands',
						],
						'usshare_social_type' => 'whatsapp',
					],
				],
				'title_field' => '{{{ usshare_btn_title }}}',
			]
		);
		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		?>
		<div class="usshare_btn_wrap <?php echo 'usshare'.$settings['usshare_presets_style']; ?>">
			<span class="usshare_share_text">Share</span>
			<div class="container">
				<?php 
				foreach (  $settings['usshare_all_social_btn'] as $usshare_btn ) {
					// $usshare_echoIcon = \Elementor\Icons_Manager::render_icon( $usshare_btn['usshare_social_icons'], [ 'aria-hidden' => 'true' ] );
					$types = $usshare_btn['usshare_social_type'];
					if($types == 'facebook'): $usshare_Alink = 'https://www.facebook.com/sharer/sharer.php?u='.the_permalink(); elseif($types == 'twitter'): $usshare_Alink = ''; elseif($types == 'whatsapp'): $usshare_Alink = 'https://api.whatsapp.com/send?text='.the_title().the_permalink(); endif;
					?>
					<a class="usshare_btn_link" href="<?php echo $usshare_Alink; ?>" target="_blank"><?php \Elementor\Icons_Manager::render_icon( $usshare_btn['usshare_social_icons'], [ 'aria-hidden' => 'true' ] ); ?></a>
					<?php
				}
				?>
			</div>
    </div>
		<a href="https://dribbble.com/YancyMin" class="dr-url" target="_blank"><img class="dr" src="https://cdn.dribbble.com/assets/logo-footer-hd-a05db77841b4b27c0bf23ec1378e97c988190dfe7d26e32e1faea7269f9e001b.png" alt=""></a>

<!--  -->
<?php
/*
?>
		<div class="social-share">
			<ul>
				<li><a href="https://api.whatsapp.com/send?text=<?php the_title(); ?> <?php the_permalink(); ?>" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
				<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
				<li><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>&amp;source=<?php bloginfo('name'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&amp;media=<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>&amp;description=<?php echo get_the_excerpt(); ?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
				<li><a href="https://www.reddit.com/submit?url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>" target="_blank"><i class="fa fa-reddit"></i></a></li>
				<li><a href="https://www.tumblr.com/share/link?url=<?php the_permalink(); ?>&amp;name=<?php the_title(); ?>&amp;description=<?php echo get_the_excerpt(); ?>" target="_blank"><i class="fa fa-tumblr"></i></a></li>
				<li><a href="https://www.whatsapp.com/send?text=<?php the_title(); ?> <?php the_permalink(); ?>" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
				<li><a href="https://telegram.me/share/url?url=<?php the_permalink(); ?>&amp;text=<?php the_title(); ?>" target="_blank"><i class="fa fa-telegram"></i></a></li>
			</ul>
		</div>
		<?php */
	}
}
