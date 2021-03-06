<?php
	echo $_s->build_css(
		is_admin() ? '.editor-styles-wrapper .wp-block-quote__citation' : '.sv100_sv_content_wrapper article .wp-block-quote cite',
		array_merge(
			$script->get_parent()->get_setting('cite_font')->get_css_data('font-family'),
			$script->get_parent()->get_setting('cite_font_size')->get_css_data('font-size','','px'),
			$script->get_parent()->get_setting('cite_line_height')->get_css_data('line-height'),
			$script->get_parent()->get_setting('cite_text_color')->get_css_data(),
			$script->get_parent()->get_setting('cite_padding')->get_css_data('padding'),
			$script->get_parent()->get_setting('cite_margin')->get_css_data(),
			$script->get_parent()->get_setting('cite_border')->get_css_data()
		)
	);