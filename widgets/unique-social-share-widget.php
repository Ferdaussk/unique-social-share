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
        return 'usshare-usshare-icon eicon-social-icons';
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
			'usshare_main_title',
			[
				'label' => esc_html__( 'Title', 'unique-social-share' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Social Share' , 'unique-social-share' ),
				'dynamic'     => [
					'active' => true,
				],
				'label_block' => true,
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'usshare_whole_social_icons',
			array(
				'label' => esc_html__( 'Make Icons/Links', 'unique-social-share' ),
			)
		);
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'usshare_btn_title',
			[
				'label' => esc_html__( 'Title', 'unique-social-share' ),
				'type' => Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Type your social title' , 'unique-social-share' ),
				'label_block' => true,
				'dynamic'     => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'usshare_social_type',
			[
				'label'   => esc_html__( 'Networks', 'unique-social-share' ),
				'type'    => Controls_Manager::SELECT,
				'options' => [
					'facebook'    => esc_html__( 'Facebook', 'unique-social-share' ),
					'twitter'     => esc_html__( 'Twitter', 'unique-social-share' ),
					'linkedin'    => esc_html__( 'Linkedin', 'unique-social-share' ),
					'instagram'   => esc_html__( 'Instagram', 'unique-social-share' ),
					'email'       => esc_html__( 'Email', 'unique-social-share' ),
					'whatsapp'    => esc_html__( 'Whatsapp', 'unique-social-share' ),
					'youtube'     => esc_html__( 'Youtube', 'unique-social-share' ),
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
					'quora'       => esc_html__( 'Quora', 'unique-social-share' ),
					'snapchat'      => esc_html__( 'Snapchat', 'elementskit-lite' ),
					'flicker'       => esc_html__( 'Flicker', 'elementskit-lite' ),
					'odnoklassniki' => esc_html__( 'Odnoklassniki', 'elementskit-lite' ),
					'moimir'        => esc_html__( 'Moimir', 'elementskit-lite' ),
					'blogger'       => esc_html__( 'Blogger', 'elementskit-lite' ),
					'evernote'      => esc_html__( 'Evernote', 'elementskit-lite' ),
					'delicious'     => esc_html__( 'Delicious', 'elementskit-lite' ),
					'surfingbird'   => esc_html__( 'Surfingbird', 'elementskit-lite' ),
					'liveinternet'  => esc_html__( 'Liveinternet', 'elementskit-lite' ),
					'buffer'        => esc_html__( 'Buffer', 'elementskit-lite' ),
					'instapaper'    => esc_html__( 'Instapaper', 'elementskit-lite' ),
					'wordpress'     => esc_html__( 'WordPress', 'elementskit-lite' ),
					'baidu'         => esc_html__( 'Baidu', 'elementskit-lite' ),
					'line'          => esc_html__( 'Line', 'elementskit-lite' ),
				],
				'default' => 'facebook',
			]
		);
		$repeater->add_control(
			'usshare_social_icons',
			[
				'label' => esc_html__( 'Icon', 'unique-social-share' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-circle',
					'library' => 'fa-solid',
				],
			]
		);
		$repeater->add_control(
			'usshare_custom_link',
			[
				'label'       => esc_html__( 'Custom Link', 'unique-social-share' ),
				'placeholder' => esc_html__( 'https://your-share-link.com', 'unique-social-share' ),
				'type'        => Controls_Manager::URL,
				'label_block' => true,
				'dynamic'     => [
					'active' => true,
				],
			]
		);

		// Hover control start for box
		$repeater->start_controls_tabs(
			'usshare_social_box_style_share'
		);
		$repeater->start_controls_tab(
			'usshare_social_box_normal_share',
			[
				'label' => esc_html__('Normal', 'unique-social-share'),
			]
		);
		// Normal Controls
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'usshare_social_title_typography',
				'selector' => '{{WRAPPER}} .usshare_btn_wrap a, {{WRAPPER}} .usshare_btn_wrap i',
			]
		);
		$repeater->add_control(
			'usshare_social_title_color',
			[
				'label' => esc_html__('Color', 'the-share-timeline'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .usshare_btn_wrap a, {{WRAPPER}} .usshare_btn_wrap i' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'usshare_social_box_bg_grediant_color',
				'label' => esc_html__('Background', 'unique-social-share'),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .usshare_btn_wrap a',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'usshare_social_box_boxshadow',
				'label' => esc_html__('Content Shadow', 'unique-social-share'),
				'selector' => '{{WRAPPER}} .usshare_btn_wrap a',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'usshare_social_box_border',
				'label' => esc_html__('Border', 'unique-social-share'),
				'selector' => '{{WRAPPER}} .usshare_btn_wrap a',
			]
		);
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'usshare_social_box_hover_tab',
			[
				'label' => esc_html__('Hover', 'unique-social-share'),
			]
		);
		// Hover Controls
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'usshare_social_title_hover_typography',
				'selector' => '{{WRAPPER}} .usshare_btn_wrap a:hover, {{WRAPPER}} .usshare_btn_wrap i:hover',
			]
		);
		$repeater->add_control(
			'usshare_social_title_hover_color',
			[
				'label' => esc_html__('Color', 'the-share-timeline'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .usshare_btn_wrap a:hover, {{WRAPPER}} .usshare_btn_wrap i:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'usshare_social_box_bg_grediant_color_hover',
				'label' => esc_html__('Background', 'unique-social-share'),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .usshare_btn_wrap a:hover',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'usshare_social_box_boxshadow_hover',
				'label' => esc_html__('Box Shadow', 'unique-social-share'),
				'selector' => '{{WRAPPER}} .usshare_btn_wrap a:hover',
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'usshare_social_box_border_hover',
				'label' => esc_html__('Border', 'unique-social-share'),
				'selector' => '{{WRAPPER}} .usshare_btn_wrap a:hover',
			]
		);
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		// Hover Control End
		$repeater->add_responsive_control(
			'usshare_social_the_box_border_radius',
			[
				'label' => esc_html__('Border Radius', 'unique-social-share'),
				'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} {{WRAPPER}} .usshare_btn_wrap a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->add_responsive_control(
			'usshare_social_the_box_border_bottom',
			[
				'label' => esc_html__('Margin', 'unique-social-share'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} {{WRAPPER}} .usshare_btn_wrap a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$repeater->add_responsive_control(
			'usshare_social_box_padding',
			[
				'label' => esc_html__('Padding', 'unique-social-share'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} {{WRAPPER}} .usshare_btn_wrap a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'usshare_all_social_btn',
			[
				'label' => esc_html__( 'Icons/Links List', 'unique-social-share' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'usshare_social_icons'    => [
							'value'   => 'fab fa-facebook',
							'library' => 'fa-brands',
						],
						'usshare_social_type' => 'facebook',
					],
					[
						'usshare_social_icons'    => [
							'value'   => 'fab fa-twitter',
							'library' => 'fa-brands',
						],
						'usshare_social_type' => 'twitter',
					],
					[
						'usshare_social_icons'    => [
							'value'   => 'fab fa-linkedin',
							'library' => 'fa-brands',
						],
						'usshare_social_type' => 'linkedin',
					],
					[
						'usshare_social_icons'    => [
							'value'   => 'fab fa-whatsapp',
							'library' => 'fa-brands',
						],
						'usshare_social_type' => 'whatsapp',
					],
				],
				'title_field' => '{{{ usshare_social_type }}}',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'usshare_social_title_style',
			[
				'label' => esc_html__( 'Wraper', 'unique-social-share' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'usshare_content_alignment',
			[
				'label' => esc_html__( 'Alignment', 'unique-social-share' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'unique-social-share' ),
						'icon' => 'eicon-h-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'unique-social-share' ),
						'icon' => 'eicon-h-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'unique-social-share' ),
						'icon' => ' eicon-h-align-right',
					],
				],
				'toggle' => true,
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'usshare_title_style_post'
		);
		$this->start_controls_tab(
			'usshare_title_normal_post',
			[
				'label' => esc_html__( 'Normal', 'unique-social-share' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'usshare_title_typography',
				'selector' => '{{WRAPPER}} .usshare_btn_wrap .usshare_share_text',
			]
		);
		$this->add_control(
			'usshare_title_color',
			[
				'label' => esc_html__( 'Color', 'unique-social-share' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .usshare_btn_wrap .usshare_share_text' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'usshare_social_box_bg_grediant_color_hover',
				'label' => esc_html__('Background', 'unique-social-share'),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .usshare_style1 .usshare_share_text',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'usshare_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'unique-social-share' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'usshare_title_hover_typography',
				'selector' => '{{WRAPPER}} .usshare_btn_wrap:hover .usshare_share_text',
			]
		);
		$this->add_control(
			'usshare_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'unique-social-share' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .usshare_btn_wrap:hover .usshare_share_text' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'usshare_social_box_bg_grediant_color_hover',
				'label' => esc_html__('Background', 'unique-social-share'),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .usshare_style1:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'usshare_social_box_border_wraa',
				'label' => esc_html__('Border', 'unique-social-share'),
				'selector' => '{{WRAPPER}} .usshare_style1, {{WRAPPER}} .usshare_btn_wrap .usshare_share_text',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
			'usshare_titlee_border_radius',
			[
				'label' => esc_html__('Border Radius', 'unique-social-share'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .usshare_style1, {{WRAPPER}} .usshare_btn_wrap .usshare_share_text' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'usshare_social_box_boxshadow_wraa',
				'label' => esc_html__('Box Shadow', 'unique-social-share'),
				'selector' => '{{WRAPPER}} .usshare_style1, {{WRAPPER}} .usshare_btn_wrap .usshare_share_text',
			]
		);
		$this->add_responsive_control(
			'usshare_title_padding',
			[
				'label' => esc_html__('Padding', 'unique-social-share'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .usshare_style1, {{WRAPPER}} .usshare_btn_wrap .usshare_share_text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'usshare_title_margin',
			[
				'label' => esc_html__('Margin', 'unique-social-share'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .usshare_style1, {{WRAPPER}} .usshare_btn_wrap .usshare_share_text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
	}

	protected function render(){
		$settings = $this->get_settings_for_display();
		echo '<div class="usshare_btn_wrap usshare_'.$settings['usshare_presets_style'].'">';
			echo '<span class="usshare_share_text">'.$settings['usshare_main_title'].'</span>';
			echo '<div class="container">';
				foreach (  $settings['usshare_all_social_btn'] as $usshare_btn ) {
					$types = $usshare_btn['usshare_social_type'];
					$social_title = $usshare_btn['usshare_btn_title'];
					$current = get_the_permalink();
					$titlE = get_the_title();
					$link = $usshare_btn['usshare_custom_link']['url'];
					if($types == 'facebook'): $usshare_Alink = (!empty($link))?'https://www.facebook.com/sharer/sharer.php?u='.$link:'https://www.facebook.com/sharer/sharer.php?u='.$current; 
						elseif($types == 'twitter'): $usshare_Alink = (!empty($link))?'https://twitter.com/intent/tweet?text='.$link:'https://twitter.com/intent/tweet?text='.$titlE.'&amp;url='.$current; 
							elseif($types == 'whatsapp'): $usshare_Alink = (!empty($link))?'https://api.whatsapp.com/send?text='.$link:'https://api.whatsapp.com/send?text='.$titlE.$current; 
								elseif($types == 'linkedin'): $usshare_Alink = (!empty($link))?'https://www.linkedin.com/sharing/share-offsite/?url='.$link:'https://www.linkedin.com/sharing/share-offsite/?url='.$current; 
						elseif($types == 'reddit'): $usshare_Alink = (!empty($link))?'https://www.reddit.com/submit?url='.$link:'https://www.reddit.com/submit?url='.$current.'&amp;title='.$titlE; 
							elseif($types == 'tumblr'): $usshare_Alink = (!empty($link))?'https://www.tumblr.com/share/link?url='.$link:'https://www.tumblr.com/share/link?url='.$current.'&amp;name='. $titlE.'&amp;description='.get_the_excerpt(); 
								elseif($types == 'telegram'): $usshare_Alink = (!empty($link))?'https://telegram.me/share/url?url='.$link:'https://telegram.me/share/url?url='.$current.'&amp;text='.$titlE; 
									elseif($types == 'email'): $usshare_Alink = (!empty($link))?'mailto:?subject='.$link:'mailto:?subject='.$titlE.'&body='.$current; 
						elseif($types == 'viber'): $usshare_Alink = (!empty($link))?'viber://forward?text='.$link:'viber://forward?text='.$titlE.$current; 
							elseif($types == 'vk'): $usshare_Alink = (!empty($link))?'http://vk.com/share.php?url='.$link:'http://vk.com/share.php?url='.$current; 
								elseif($types == 'xing'): $usshare_Alink = (!empty($link))?'https://www.xing.com/spi/shares/new?url='.$link:'https://www.xing.com/spi/shares/new?url='.$current; 
									elseif($types == 'pocket'): $usshare_Alink = (!empty($link))?'https://getpocket.com/save?url='.$link:'https://getpocket.com/save?url='.$current.'&title='.$titlE; 
						elseif($types == 'digg'): $usshare_Alink = (!empty($link))?'http://digg.com/submit?url='.$link:'http://digg.com/submit?url='.$current; 
							elseif($types == 'stumbleupon'): $usshare_Alink = (!empty($link))?'http://www.stumbleupon.com/submit?url='.$link:'http://www.stumbleupon.com/submit?url='.$current.'&title='.$titlE; 
								elseif($types == 'weibo'): $usshare_Alink = (!empty($link))?'http://service.weibo.com/share/share.php?url='.$link:'http://service.weibo.com/share/share.php?url='.$current.'&title='.$titlE; 
									elseif($types == 'renren'): $usshare_Alink = (!empty($link))?'http://widget.renren.com/dialog/share?resourceUrl='.$link:'http://widget.renren.com/dialog/share?resourceUrl='.$current.'&title='.$titlE; 
						elseif($types == 'skype'): $usshare_Alink = (!empty($link))?'skype:?chat&topic='.$link:'skype:?chat&topic='.$titlE.'&add='.$current; 
							elseif($types == 'pinterest'): $usshare_Alink = (!empty($link))?'https://pinterest.com/pin/create/button/?url='.$link:'https://pinterest.com/pin/create/button/?url='.$current.'&amp;media='.wp_get_attachment_url( get_share_thumbnail_id($share->ID) ).'&amp;description='.get_the_excerpt(); 
								elseif($types == 'youtube'): $usshare_Alink = (!empty($link))?'https://www.youtube.com/share?url='.$link:'https://www.youtube.com/share?url='.$current; 
									elseif($types == 'instagram'): $usshare_Alink = (!empty($link))?'https://www.instagram.com/share?url='.$link:'https://www.instagram.com/share?url='.$current.'&title='.$titlE; 
						elseif($types == 'quora'): $usshare_Alink = (!empty($link))?'http://www.quora.com/share?url='.$link:'http://www.quora.com/share?url='.$current.'&title='.$titlE; 
							elseif($types == 'snapchat'): $usshare_Alink = (!empty($link))?'https://www.snapchat.com/share?url='.$link:'https://www.snapchat.com/share?url='.$current; 
								elseif($types == 'flickr'): $usshare_Alink = (!empty($link))?'https://www.flickr.com/search/?q='.$link:'https://www.flickr.com/search/?q='.$titlE; 
									elseif($types == 'odnoklassniki'): $usshare_Alink = (!empty($link))?'https://connect.ok.ru/offer?url='.$link:'https://connect.ok.ru/offer?url='.urlencode($current); 
						elseif($types == 'blogger'): $usshare_Alink = (!empty($link))?'https://www.blogger.com/share?u='.$link:'https://www.blogger.com/share?u='.urlencode($current); 
							elseif($types == 'evernote'): $usshare_Alink = (!empty($link))?'https://www.evernote.com/clip.action?url='.$link:'https://www.evernote.com/clip.action?url='.urlencode($current).'&title='.urlencode($titlE); 
								elseif($types == 'delicious'): $usshare_Alink = (!empty($link))?'https://del.icio.us/post?url='.$link:'https://del.icio.us/post?url='.urlencode($current).'&amp;title='.urlencode($titlE); 
									elseif($types == 'surfingbird'): $usshare_Alink = (!empty($link))?'http://surfingbird.ru/share?url='.$link:'http://surfingbird.ru/share?url='.$current.'&title='.$titlE; 
						elseif($types == 'liveinternet'): $usshare_Alink = (!empty($link))?'http://www.liveinternet.ru/journal_post.php?action=n_add&cnurl='.$link:'http://www.liveinternet.ru/journal_post.php?action=n_add&cnurl='.$current.'&cntitle='.$titlE; 
							elseif($types == 'buffer'): $usshare_Alink = (!empty($link))?'https://bufferapp.com/add?url='.$link:'https://bufferapp.com/add?url='.urlencode($current).'&amp;text='.urlencode($titlE); 
								elseif($types == 'instapaper'): $usshare_Alink = (!empty($link))?'http://www.instapaper.com/hello2?url='.$link:'http://www.instapaper.com/hello2?url='.urlencode($current).'&title='.urlencode($titlE);
									elseif($types == 'wordpress'): $usshare_Alink = (!empty($link))?'https://wordpress.com/press-this.php?u='.$link:'https://wordpress.com/press-this.php?u='.urlencode($current).'&t='.urlencode($titlE);
						elseif($types == 'baidu'): $usshare_Alink = (!empty($link))?'http://cang.baidu.com/do/add?iu=&it=&fr=ien#nw=1&iu=&link='.$link:'http://cang.baidu.com/do/add?iu=&it=&fr=ien#nw=1&iu=&link='.esc_url($current).'&title='.esc_attr($titlE);
							elseif($types == 'line'): $usshare_Alink = (!empty($link))?'https://line.me/R/msg/text/?'.$link:'https://line.me/R/msg/text/?'.$titlE.'%0A'.$current;
					endif;
					echo '<div class="usshare_btn_link_wrap usshare-repeater-btn-' . esc_attr( $usshare_btn['_id'] ) . '">';
						echo '<a class="usshare_btn_link" href="'.$usshare_Alink.'" target="_blank">'; 
							\Elementor\Icons_Manager::render_icon( $usshare_btn['usshare_social_icons'], [ 'aria-hidden' => 'true' ] ); 
							echo (!empty($social_title))?$social_title:'';
						echo '</a>';
					echo '</div>';
				}
			echo '</div>';
    echo '</div>';
	}
}
