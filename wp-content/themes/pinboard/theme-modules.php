<?php

/*
To add custom modules to the theme, create a new 'custom-modules.php' file in the theme folder.
They will be added to the theme automatically.
*/

/* 	Custom Modules
/***************************************************************************/

	///////////////////////////////////////////
	// Disable comments on home
	///////////////////////////////////////////
	function themify_disable_comments_home($data=array()){
		$data = themify_get_data();
		if($data['setting-nohomecomments']) $auto_checked = "checked='checked'";
		$html = '<p>';
			$html .= '<input type="checkbox" name="setting-nohomecomments" '.checked(isset($data['setting-nohomecomments'])? $data['setting-nohomecomments'] : '', 'on', false).'/> ' . __('Do not show comments on home page.', 'themify');
		$html .= '</p>';
		
		return $html;
	}

	///////////////////////////////////////////
	// Choose pagination or infinite scroll
	///////////////////////////////////////////
	function themify_pagination_infinite($data=array()){
		$data = themify_get_data();
		if($data['setting-autoinfinite']) $auto_checked = "checked='checked'";
		$html = '<p>';
		
		//Infinite Scroll
		$html .= '<input ' . checked(isset($data['setting-more_posts'])? $data['setting-more_posts'] : 'infinite', 'infinite', false) . ' type="radio" name="setting-more_posts" value="infinite" /> ';
		$html .= __('Infinite Scroll (posts are loaded on the same page)', 'themify');
		$html .= '<br/>';
		$html .= '<input style="margin-left:15px" type="checkbox" name="setting-autoinfinite" '.checked(isset($data['setting-autoinfinite'])? $data['setting-autoinfinite'] : '', 'on', false).'/> ' . __('Disable automatic infinite scroll', 'themify');
		$html .= '<br/><br/>';
		
		//Numbered pagination
		$html .= '<input ' . checked( $data['setting-more_posts'], 'pagination', false) . ' type="radio" name="setting-more_posts" value="pagination" /> ';
		$html .= __('Numbered Page Navigation (page 1, 2, 3, etc.)', 'themify');
		$html .= '</p>';
		
		return $html;
	}
	
	///////////////////////////////////////////
	// Homepage Welcome Function
	///////////////////////////////////////////
	function themify_homepage_welcome($data=array()){
		$data = themify_get_data();
		return '<p><textarea class="widthfull" name="setting-homepage_welcome" rows="4">'.$data['setting-homepage_welcome'].'</textarea></p>';
	}
	
	///////////////////////////////////////////
	// Footer Text Left Function
	///////////////////////////////////////////
	function themify_footer_text_left($data=array()){
		$data = themify_get_data();
		return '<p><textarea class="widthfull" rows="4" name="setting-footer_text_left">'.$data['setting-footer_text_left'].'</textarea></p>';	
	}
		
	///////////////////////////////////////////
	// Footer Text Right Function
	///////////////////////////////////////////
	function themify_footer_text_right($data=array()){
		$data = themify_get_data();
		return '<p><textarea class="widthfull" rows="4" name="setting-footer_text_right">'.$data['setting-footer_text_right'].'</textarea></p>';	
	}
		
	///////////////////////////////////////////
	// Footer Sidebars Function
	///////////////////////////////////////////
	function themify_footer_widgets($data=array()){
		$data = themify_get_data();
		$options = array(
			array("value" => "footerwidget-4col", "img" => "images/layout-icons/footerwidget-4col.png"),
			array("value" => "footerwidget-3col", "img" => "images/layout-icons/footerwidget-3col.png", "selected" => true),
			array("value" => "footerwidget-2col", "img" => "images/layout-icons/footerwidget-2col.png"),
			array("value" => "footerwidget-1col", "img" => "images/layout-icons/footerwidget-1col.png"),
			array("value" => "none",			  "img" => "images/layout-icons/none.png")
		);
		$val = $data['setting-footer_widgets'];
		$output = "";
		foreach($options as $option){
			if(($val == "" || !$val || !isset($val)) && $option['selected']){ 
				$val = $option['value'];
			}
			if($val == $option['value']){ 
				$class = "selected";
			} else {
				$class = "";	
			}
			$output .= '<a href="#" class="preview-icon '.$class.'"><img src="'.get_bloginfo('template_directory').'/'.$option['img'].'" alt="'.$option['value'].'"  /></a>';	
		}
		
		$output .= '<input type="hidden" name="setting-footer_widgets" class="val" value="'.$val.'" />';
		
		return $output;
	}

	///////////////////////////////////////////
	// Exclude RSS
	///////////////////////////////////////////
	function themify_exclude_rss($data=array()){
		$data = themify_get_data();
		if($data['setting-exclude_rss']){
			$pages_checked = "checked='checked'";	
		}
		return '<p><input type="checkbox" name="setting-exclude_rss" '.$pages_checked.'/> ' . __('Check here to exclude RSS icon/button', 'themify') . '</p>';	
	}

	///////////////////////////////////////////
	// Exclude Search Form
	///////////////////////////////////////////
	function themify_exclude_search_form($data=array()){
		$data = themify_get_data();
		if($data['setting-exclude_search_form']){
			$pages_checked = "checked='checked'";	
		}
		return '<p><input type="checkbox" name="setting-exclude_search_form" '.$pages_checked.'/> ' . __('Check here to exclude search form', 'themify') . '</p>';	
	}
	
	///////////////////////////////////////////
	// Default Page Layout Module - Action
	///////////////////////////////////////////
	function themify_default_page_layout($data=array()){
		$data = themify_get_data();
		
		$options = array(
			array("value" => "sidebar1", 	"img" => "images/layout-icons/sidebar1.png", "selected" => true),
			array("value" => "sidebar1 sidebar-left", 	"img" => "images/layout-icons/sidebar1-left.png"),
			array("value" => "sidebar-none",	 	"img" => "images/layout-icons/sidebar-none.png")
		);
		
		$default_options = array(
			array('name'=>'','value'=>''),
			array('name'=>__('Yes', 'themify'),'value'=>'yes'),
			array('name'=>__('No', 'themify'),'value'=>'no')
		);
							 
		$val = $data['setting-default_page_layout'];
		
		$output .= '<p>
						<span class="label">' . __('Page Sidebar Option', 'themify') . '</span>';
		foreach($options as $option){
			if(($val == "" || !$val || !isset($val)) && $option['selected']){ 
				$val = $option['value'];
			}
			if($val == $option['value']){ 
				$class = "selected";
			} else {
				$class = "";	
			}
			$output .= '<a href="#" class="preview-icon '.$class.'"><img src="'.get_bloginfo('template_directory').'/'.$option['img'].'" alt="'.$option['value'].'"  /></a>';	
		}
		$output .= '<input type="hidden" name="setting-default_page_layout" class="val" value="'.$val.'" /></p>';
		$output .= '<p>
						<span class="label">' . __('Hide Title in All Pages', 'themify') . '</span>
						
						<select name="setting-hide_page_title">';
						foreach($default_options as $title_option){
							if($title_option['value'] == $data['setting-hide_page_title']){
								$output .= '<option selected="selected" value="'.$title_option['value'].'">'.$title_option['name'].'</option>';
							} else {
								$output .= '<option value="'.$title_option['value'].'">'.$title_option['name'].'</option>';
							}
						}
						
						
		$output .=	'</select>
					</p>';
		if($data['setting-comments_pages']){
			$pages_checked = "checked='checked'";	
		}
		$output .= '<p><span class="label">' . __('Page Comments', 'themify') . '</span><input type="checkbox" name="setting-comments_pages" '.$pages_checked.' /> ' . __('Disable comments in all Pages', 'themify') . '</p>';	
		
		return $output;													 
	}
	
	///////////////////////////////////////////
	// Default Index Layout Module - Action
	///////////////////////////////////////////
	function themify_default_layout($data=array()){
		$data = themify_get_data();
		
		if($data['setting-default_more_text'] == ""){
			$more_text = __('More', 'themify');
		} else {
			$more_text = $data['setting-default_more_text'];
		}
		
		$default_options = array(
			array('name'=>'','value'=>''),
			array('name'=>__('Yes', 'themify'),'value'=>'yes'),
			array('name'=>__('No', 'themify'),'value'=>'no')
		);
		$default_layout_options = array(
			array('name' => __('Full Content', 'themify'),'value'=>'content'),
			array('name' => __('Excerpt', 'themify'),'value'=>'excerpt'),
			array('name' => __('None', 'themify'),'value'=>'none')
		);
		$default_post_layout_options = array(
			array("value" => "list-post", "img" => "images/layout-icons/list-post.png"),
			array("value" => "grid4", "img" => "images/layout-icons/grid4.png", "selected" => true),
			array("value" => "grid3", "img" => "images/layout-icons/grid3.png"),
			array("value" => "grid2", "img" => "images/layout-icons/grid2.png")
		);
																 	 
		$options = array(
			array("value" => "sidebar1", 	"img" => "images/layout-icons/sidebar1.png"),
			array("value" => "sidebar1 sidebar-left", 	"img" => "images/layout-icons/sidebar1-left.png"),
			array("value" => "sidebar-none", "img" => "images/layout-icons/sidebar-none.png",  "selected" => true)
		);
						 
		$val = $data['setting-default_layout'];
		
		$output = "";
		
		$output .= '<p>
						<span class="label">' . __('Index Sidebar Option', 'themify') . '</span>';
		foreach($options as $option){
			if(($val == "" || !$val || !isset($val)) && $option['selected']){ 
				$val = $option['value'];
			}
			if($val == $option['value']){ 
				$class = "selected";
			} else {
				$class = "";	
			}
			$output .= '<a href="#" class="preview-icon '.$class.'"><img src="'.get_bloginfo('template_directory').'/'.$option['img'].'" alt="'.$option['value'].'"  /></a>';	
		}
		
		$output .= '<input type="hidden" name="setting-default_layout" class="val" value="'.$val.'" />';
		$output .= '</p>';
		$output .= '<p>
						<span class="label">' . __('Post Layout', 'themify') . '</span>';
						
		$val = $data['setting-default_post_layout'];
		
		foreach($default_post_layout_options as $option){
			if(($val == "" || !$val || !isset($val)) && $option['selected']){ 
				$val = $option['value'];
			}
			if($val == $option['value']){ 
				$class = "selected";
			} else {
				$class = "";	
			}
			$output .= '<a href="#" class="preview-icon '.$class.'"><img src="'.get_bloginfo('template_directory').'/'.$option['img'].'" alt="'.$option['value'].'"  /></a>';	
		}
		
		$output .= '<input type="hidden" name="setting-default_post_layout" class="val" value="'.$val.'" />
					</p>
					<p>
						<span class="label">' . __('Display Content', 'themify') . '</span> 
						<select name="setting-default_layout_display">';
						foreach($default_layout_options as $layout_option){
							if($layout_option['value'] == $data['setting-default_layout_display']){
								$output .= '<option selected="selected" value="'.$layout_option['value'].'">'.$layout_option['name'].'</option>';
							} else {
								$output .= '<option value="'.$layout_option['value'].'">'.$layout_option['name'].'</option>';
							}
						}
		$output .=	'	</select>
					</p>
					<p>
						<span class="label">' . __('Query Categories', 'themify') . '</span>  
						<input type="text" name="setting-default_query_cats" value="'.$data['setting-default_query_cats'].'"><br />
						<span class="pushlabel"><small>' . __('Use minus sign (-) to exclude categories.', 'themify') . '</small></span><br />
						<span class="pushlabel"><small>' . __('Example: "1,4,-7" = only include Category 1, 4, and exclude Category 7.', 'themify') . '</small></span>
					</p>
					<p>
						<span class="label">' . __('More Text', 'themify') . '</span>
						<input type="text" name="setting-default_more_text" value="'.$more_text.'">
					</p>
					<p>
						<span class="label">' . __('Hide Post Title', 'themify') . '</span>
						
						<select name="setting-default_post_title">';
						foreach($default_options as $title_option){
							if($title_option['value'] == $data['setting-default_post_title']){
								$output .= '<option selected="selected" value="'.$title_option['value'].'">'.$title_option['name'].'</option>';
							} else {
								$output .= '<option value="'.$title_option['value'].'">'.$title_option['name'].'</option>';
							}
						}
		$output .=	'</select>
					</p>
					<p>
						<span class="label">' . __('Unlink Post Title', 'themify') . '</span>
						
						<select name="setting-default_unlink_post_title">';
						foreach($default_options as $title_option){
							if($title_option['value'] == $data['setting-default_unlink_post_title']){
								$output .= '<option selected="selected" value="'.$title_option['value'].'">'.$title_option['name'].'</option>';
							} else {
								$output .= '<option value="'.$title_option['value'].'">'.$title_option['name'].'</option>';
							}
						}
		$output .=	'</select>
					</p>
					<p>
						<span class="label">' . __('Hide Post Meta', 'themify') . '</span>
						
						<select name="setting-default_post_meta">';
						foreach($default_options as $title_option){
							if($title_option['value'] == $data['setting-default_post_meta']){
								$output .= '<option selected="selected" value="'.$title_option['value'].'">'.$title_option['name'].'</option>';
							} else {
								$output .= '<option value="'.$title_option['value'].'">'.$title_option['name'].'</option>';
							}
						}
		$output .=	'</select>
					</p>
					<p>
						<span class="label">' . __('Hide Post Date', 'themify') . '</span>
						
						<select name="setting-default_post_date">';
						foreach($default_options as $title_option){
							if($title_option['value'] == $data['setting-default_post_date']){
								$output .= '<option selected="selected" value="'.$title_option['value'].'">'.$title_option['name'].'</option>';
							} else {
								$output .= '<option value="'.$title_option['value'].'">'.$title_option['name'].'</option>';
							}
						}
		$output .=	'</select>
					</p>
					<p>
						<span class="label">' . __('Auto Featured Image', 'themify') . '</span>

						<input type="checkbox" value="1" name="setting-auto_featured_image" '.checked($data['setting-auto_featured_image'], 1, false).'/> ' . __('If no featured image is specified, display first image in content.', 'themify') . '
					</p>

					<p>
						<span class="label">' . __('Hide Featured Image', 'themify') . '</span>

						<select name="setting-default_post_image">';
						foreach($default_options as $title_option){
							if($title_option['value'] == $data['setting-default_post_image']){
								$output .= '<option selected="selected" value="'.$title_option['value'].'">'.$title_option['name'].'</option>';
							} else {
								$output .= '<option value="'.$title_option['value'].'">'.$title_option['name'].'</option>';
							}
						}
		$output .=	'</select>
					</p>
					<p>
						<span class="label">' . __('Unlink Featured Image', 'themify') . '</span>
						
						<select name="setting-default_unlink_post_image">';
						foreach($default_options as $title_option){
							if($title_option['value'] == $data['setting-default_unlink_post_image']){
								$output .= '<option selected="selected" value="'.$title_option['value'].'">'.$title_option['name'].'</option>';
							} else {
								$output .= '<option value="'.$title_option['value'].'">'.$title_option['name'].'</option>';
							}
						}
		$output .=	'</select>
					</p>';
		
		$output .= themify_feature_image_sizes_select('image_post_feature_size');
		$data = themify_get_data();
		$options = array("left","right");
		
		if($data['setting-post_image_single_disabled']){
			$checked = 'checked="checked"';
		}
		
		$output .= '<p>
						<span class="label">' . __('Image size', 'themify') . '</span>  
						<input type="text" class="width2" name="setting-image_post_width" value="'.$data['setting-image_post_width'].'" /> ' . __('width', 'themify') . ' <small>(px)</small>  
						<input type="text" class="width2" name="setting-image_post_height" value="'.$data['setting-image_post_height'].'" /> ' . __('height', 'themify') . ' <small>(px)</small>
						<br /><span class="pushlabel"><small>' . __('Enter height = 0 to disable vertical cropping with img.php enabled', 'themify') . '</small></span>
					</p>
					<p>
						<span class="label">' . __('Post Image Alignment', 'themify') . '</span>
						<select name="setting-image_post_align">
							<option></option>';
		foreach($options as $option){
			if($option == $data['setting-image_post_align']){
				$output .= '<option value="'.$option.'" selected="selected">'.$option.'</option>';
			} else {
				$output .= '<option value="'.$option.'">'.$option.'</option>';
			}
		}
		$output .=	'</select>
					</p>
					';
		//Open in lightbox
		if($data['setting-open_inline']) $auto_checked = "checked='checked'";
		$output .= '
			<p><span class="label">' . __('Post in Lightbox', 'themify') . '</span>
				<input type="checkbox" name="setting-open_inline" '.checked(isset($data['setting-open_inline'])? $data['setting-open_inline'] : '', 'on', false).'/> ' .
				__('Open posts in lightbox mode', 'themify') . '
			</p>';
		
		//Hide social icons
		if($data['setting-hidesocial_index']) $auto_checked = "checked='checked'";
		$output .= '
			<p><span class="label">' . __('Share Buttons', 'themify') . '</span>
				<input type="checkbox" name="setting-hidesocial_index" '.checked(isset($data['setting-hidesocial_index'])? $data['setting-hidesocial_index'] : '', 'on', false).'/> ' .
				__('Hide share buttons', 'themify') . '
			</p>';
		
		return $output;
	}
	
	///////////////////////////////////////////
	// Default Single ' . __('Post Layout', 'themify') . '
	///////////////////////////////////////////
	function themify_default_post_layout($data=array()){
		
		$data = themify_get_data();
		
		$default_options = array(
								array('name'=>'','value'=>''),
								array('name'=>__('Yes', 'themify'),'value'=>'yes'),
								array('name'=>__('No', 'themify'),'value'=>'no')
								);
		
		$val = $data['setting-default_page_post_layout'];

		$output .= '<p>
						<span class="label">' . __('Post Sidebar Option', 'themify') . '</span>';
						
		$options = array(
							 array("value" => "sidebar1", 	"img" => "images/layout-icons/sidebar1.png", "selected" => true),
							 array("value" => "sidebar1 sidebar-left", 	"img" => "images/layout-icons/sidebar1-left.png"),
							 array("value" => "sidebar-none",	 	"img" => "images/layout-icons/sidebar-none.png")
							 );
										
		foreach($options as $option){
			if(($val == "" || !$val || !isset($val)) && $option['selected']){ 
				$val = $option['value'];
			}
			if($val == $option['value']){ 
				$class = "selected";
			} else {
				$class = "";	
			}
			$output .= '<a href="#" class="preview-icon '.$class.'"><img src="'.get_bloginfo('template_directory').'/'.$option['img'].'" alt="'.$option['value'].'"  /></a>';	
		}
		
		$output .= '<input type="hidden" name="setting-default_page_post_layout" class="val" value="'.$val.'" />';
		$output .= '</p>
					<p>
						<span class="label">' . __('Hide Post Title', 'themify') . '</span>
						
						<select name="setting-default_page_post_title">';
						foreach($default_options as $title_option){
							if($title_option['value'] == $data['setting-default_page_post_title']){
								$output .= '<option selected="selected" value="'.$title_option['value'].'">'.$title_option['name'].'</option>';
							} else {
								$output .= '<option value="'.$title_option['value'].'">'.$title_option['name'].'</option>';
							}
						}
		$output .=	'</select>
					</p>
					<p>
						<span class="label">' . __('Unlink Post Title', 'themify') . '</span>
						
						<select name="setting-default_page_unlink_post_title">';
						foreach($default_options as $title_option){
							if($title_option['value'] == $data['setting-default_page_unlink_post_title']){
								$output .= '<option selected="selected" value="'.$title_option['value'].'">'.$title_option['name'].'</option>';
							} else {
								$output .= '<option value="'.$title_option['value'].'">'.$title_option['name'].'</option>';
							}
						}
		$output .=	'</select>
					</p>
					<p>
						<span class="label">' . __('Hide Post Meta', 'themify') . '</span>
						
						<select name="setting-default_page_post_meta">';
						foreach($default_options as $title_option){
							if($title_option['value'] == $data['setting-default_page_post_meta']){
								$output .= '<option selected="selected" value="'.$title_option['value'].'">'.$title_option['name'].'</option>';
							} else {
								$output .= '<option value="'.$title_option['value'].'">'.$title_option['name'].'</option>';
							}
						}
		$output .=	'</select>
					</p>
					<p>
						<span class="label">' . __('Hide Post Date', 'themify') . '</span>
						
						<select name="setting-default_page_post_date">';
						foreach($default_options as $title_option){
							if($title_option['value'] == $data['setting-default_page_post_date']){
								$output .= '<option selected="selected" value="'.$title_option['value'].'">'.$title_option['name'].'</option>';
							} else {
								$output .= '<option value="'.$title_option['value'].'">'.$title_option['name'].'</option>';
							}
						}
		$output .=	'</select>
					</p>
					<p>
						<span class="label">' . __('Hide Featured Image', 'themify') . '</span>
						
						<select name="setting-default_page_post_image">';
						foreach($default_options as $title_option){
							if($title_option['value'] == $data['setting-default_page_post_image']){
								$output .= '<option selected="selected" value="'.$title_option['value'].'">'.$title_option['name'].'</option>';
							} else {
								$output .= '<option value="'.$title_option['value'].'">'.$title_option['name'].'</option>';
							}
						}
		$output .=	'</select>
					</p><p>
						<span class="label">' . __('Unlink Featured Image', 'themify') . '</span>
						
						<select name="setting-default_page_unlink_post_image">';
						foreach($default_options as $title_option){
							if($title_option['value'] == $data['setting-default_page_unlink_post_image']){
								$output .= '<option selected="selected" value="'.$title_option['value'].'">'.$title_option['name'].'</option>';
							} else {
								$output .= '<option value="'.$title_option['value'].'">'.$title_option['name'].'</option>';
							}
						}
		$output .= '</select></p>';
		$output .= themify_feature_image_sizes_select('image_post_single_feature_size');
		$output .= '<p>
				<span class="label">' . __('Image size', 'themify') . '</span>
						<input type="text" class="width2" name="setting-image_post_single_width" value="'.$data['setting-image_post_single_width'].'" /> ' . __('width', 'themify') . ' <small>(px)</small>  
						<input type="text" class="width2" name="setting-image_post_single_height" value="'.$data['setting-image_post_single_height'].'" /> ' . __('height', 'themify') . ' <small>(px)</small>
						<br /><span class="pushlabel"><small>' . __('Enter height = 0 to disable vertical cropping with img.php enabled', 'themify') . '</small></span>
					</p>
					<p>
						<span class="label">' . __('Post Image Alignment', 'themify') . '</span>
						<select name="setting-image_post_single_align">
							<option></option>';
		$options = array("left","right");
		foreach($options as $option){
			if($option == $data['setting-image_post_single_align']){
				$output .= '<option value="'.$option.'" selected="selected">'.$option.'</option>';
			} else {
				$output .= '<option value="'.$option.'">'.$option.'</option>';
			}
		}
		$output .=	'</select>
					</p>';
		if($data['setting-comments_posts']){
			$comments_posts_checked = "checked='checked'";	
		}
		$output .= '<p><span class="label">' . __('Post Comments', 'themify') . '</span><input type="checkbox" name="setting-comments_posts" '.$comments_posts_checked.' /> ' . __('Disable comments in all Posts', 'themify') . '</p>';	
		
		if($data['setting-post_author_box']){
			$author_box_checked = "checked='checked'";	
		}
		$output .= '<p><span class="label">' . __('Show Author Box', 'themify') . '</span><input type="checkbox" name="setting-post_author_box" '.$author_box_checked.' /> ' . __('Show author box in all Posts', 'themify') . '</p>';
		//Hide social icons
		if($data['setting-hidesocial_single']) $auto_checked = "checked='checked'";
		$output .= '
			<p><span class="label">' . __('Share Buttons', 'themify') . '</span>
				<input type="checkbox" name="setting-hidesocial_single" '.checked(isset($data['setting-hidesocial_single'])? $data['setting-hidesocial_single'] : '', 'on', false).'/> ' .
				__('Hide share buttons', 'themify') . '
			</p>';
			
		return $output;
	}

	///////////////////////////////////////////
	// Footer Logo
	///////////////////////////////////////////
	function themify_footer_logo($data=array()){
		if($data['attr']['target'] != ''){
			$target = "<span class='hide target'>".$data['attr']['target']."</span>";	
		}
		$data = themify_get_data();
		if($data['setting-footer_logo'] == "image"){
			$image = "checked='checked'";
			$image_display = "";
			$text_display = "";
		} else {
			$text = "checked='checked'";	
			$text_display = "";
			$image_display = "";
		}
		return '<div class="row">
					<p>
						<span class="label">' . __('Display', 'themify') . '</span> 
						<input name="setting-footer_logo" type="radio" value="text" '.$text.' /> ' . __('Site Title', 'themify') . ' 
						<input name="setting-footer_logo" type="radio" value="image" '.$image.' /> ' . __('Image', 'themify') . '
					</p>
					'.$target.'
					<p class="pushlabel image">
						<input type="text" class="width10" name="setting-footer_logo_image_value" value="'.$data['setting-footer_logo_image_value'].'" /> <br />
						<a href="#" id="setting-'.$data['category'].'-'.$data['title'].'-footer_logo" class="upload-btn upload-image logo">' . __('+ Upload', 'themify') . '</a>
					</p>
					<p class="pushlabel image">
						<input type="text" name="setting-footer_logo_width" class="width2" value="'.$data['setting-footer_logo_width'].'" /> ' . __('width', 'themify') . ' 
						<input type="text" name="setting-footer_logo_height" class="width2" value="'.$data['setting-footer_logo_height'].'" /> ' . __('height', 'themify') . '
					</p>
				</div>';	
	}

?>