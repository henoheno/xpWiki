<?php
/*
 * Created on 2008/01/24 by nao-pon http://hypweb.net/
 * $Id: conf.lng.php,v 1.2 2008/01/30 07:29:40 nao-pon Exp $
 */

$msg = array(
	'title_form' => 'xpWiki Preference',
	'title_done' => 'xpWiki Preference updated',
	'btn_submit' => 'Apply this setting',
	'msg_done' => 'Saved it in "$cache_file" by the following setting.',
	'title_description' => 'Explanation of xpWiki Preference',
	'msg_description' => '<p>In this preference setting, only a typical item can be set by a set item of "pukiwiki.ini.php".</p>'
	                   . '<p>In "$trust_ini_file", it also has a lot of set items besides this. </p>'
	                   . '<p>Please pull out and set the item of the correspondence to "$html_ini_file" when you want to change the item for you not to be found on this set screen.</p>'
	                   . '<p># The content of this set screen set is applied in top priority. </p>',

	'Yes' => 'Yes',
	'No' => 'No',

	'PKWK_READONLY' => array(
		'caption'     => 'Only for reading?',
		'description' => 'When it does only for reading, it is not possible to administer and every inclusion edit it.',
	),

	'function_freeze' => array(
		'caption'     => 'Is freeze function effective?',
		'description' => '',
	),

	'adminpass' => array(
		'caption'     => 'Administer password',
		'description' => 'It is possible to specify it even by the clear text. However, please input the encrypted character string by using "<a href="?cmd=md5" target="_blank">cmd=md5</a>".<br />'
		               . 'Under "XOOPS", the problem is not in the administer password as cannot an attestation of everything as "{x-php-md5}" because of unnecessary if it logs it in as an administer. ',
	),

	'html_head_title' => array(
		'caption'     => '&lt;title&gt; format in &lt;head&gt;',
		'description' => 'The content displayed in the &lt;title&gt; tag in &lt;head&gt; of HTML is set.<br />'
		               . 'It is substituted by <b>$page_title</b>: Page name and <b>$content_title</b>: page title and <b>$module_title</b>: module title.',
	),

	'modifier' => array(
		'caption'     => 'Administer name',
		'description' => '',
	),
	
	'modifierlink' => array(
		'caption'     => 'Administer\'s site URL',
		'description' => '',
	),
	
	'notify' => array(
		'caption'     => 'Mail notified on page updated?',
		'description' => 'Mail is notified to the administer when page updated.',
	),

	'notify_diff_only' => array(
		'caption'     => 'Mail notification only diff?',
		'description' => 'The mail notification when the page is updated transmits only the change difference. When "No" is selected, the full text is transmitted.',
	),

	'defaultpage' => array(
		'caption'     => 'Default page',
		'description' => 'It is a top page, displayed when the page is not specified.',
	),
	
	'page_case_insensitive' => array(
		'caption'     => 'Is case insensitive of the page name?',
		'description' => 'Neither lower case nor upper case are distinguished of the page name.',
	),
	
	'SKIN_NAME' => array(
		'caption'     => 'Default Skin name',
		'description' => 'The skin name of default is specified.',
	),
	
	'SKIN_CHANGER' => array(
		'caption'     => 'Is the skin\'s change permitted?',
		'description' => 'The user comes to be able to select skin by selecting "Yes".<br />'
		               . 'Moreover, specifying the tdiary plugin etc. on each use page becomes possible.',
	),
	
	'referer' => array(
		'caption'     => 'Do get referer information?',
		'description' => 'It is a function to total where those who inspected it visited page each page.',
	),
	
	'allow_pagecomment' => array(
		'caption'     => 'Is page comment effective?',
		'description' => 'The comment integration of d3forum modules is provided and the comment function of 
each use page can be provided.<br />'
		               . 'It is necessary to set the comment integration by a general setting to actually use it.',
	),

	'nowikiname' => array(
		'caption'     => 'Is WikiName invalid?',
		'description' => 'The automatic link function to WikiName is invalidated.',
	),

	'pagename_num2str' => array(
		'caption'     => 'Is page name concretely displayed?',
		'description' => 'When the last hierarchical part, the number - (the hyphen) it consists, the part of that is substituted in page title.',
	),

	'static_url' => array(
		'caption'     => 'Make URL by static page style?',
		'description' => 'Page URL is assumed to be "Page ID.html", and it behaves like URL on a static page.<br />'
		               . 'However, when you make this function effective. It is necessary to do the following descriptions with ".htaccess" effectively.<br />'
		               . '<code>RewriteEngine on<br />RewriteRule ^([0-9]+)\.html$ index.php?pgid=$1 [qsappend,L]</code>',
	),

	'link_target' => array(
		'caption'     => 'Ext.Link Attribute "target"',
		'description' => '"target" attribute of external link.',
	),

	'class_extlink' => array(
		'caption'     => 'Ext.Link Attribute "class"',
		'description' => '"class" attribute of external link.',
	),

	'nofollow_extlink' => array(
		'caption'     => 'Set "nofollow" in Ext.Link?',
		'description' => 'The "nofollow" attribute is applied to an external link.',
	),

	'autolink' => array(
		'caption'     => 'AutoLink\'s bytes of page name',
		'description' => 'An autolink is a function that links automatically with page existing name.<br />'
		               . 'The number of page bytes that becomes effective is input. (It is invalid by 0.)<br />'
		               . 'Please note no number of characters it and becoming byte number specification.',
		'extention'   => 'Bytes',
	),

	'autolink_omissible_upper' => array(
		'caption'     => 'AutoLink, omits above hierarchy',
		'description' => 'It is the settings auto linked even if the above hierarchy is omitted. An autolink should be effective. <br />'
		               . 'It auto links with "/hoge/fuga" by writing "fuga" on the page "/hoge/hoge". <br />'
		               . 'It is byte number specification as well as an autolink. (Specify it by the number of bytes that corresponds to fuga. )',
		'extention'   => 'Bytes',
	),

	'autoalias' => array(
		'caption'     => 'AutoAlias\'s bytes of word',
		'description' => 'It is a function to put the link to specified "URI, page or InterWiki" on "Specified word" automatically.<br />'
		               . 'It becomes byte number specification as well as an autolink. (It specifies it by bytes for the substituted word. It is invalid by 0.)<br />'
		               . 'Config page: <a href="?'.rawurlencode($this->root->aliaspage).'" target="_blank">'.$this->root->aliaspage.'</a>',
		'extention'   => 'Bytes',
	),

	'autoalias_max_words' => array(
		'caption'     => 'AutoAlias\'s max pairs',
		'description' => 'Number of maximum dictionary item registration of autoalias.',
		'extention'   => 'pairs',
	),

	'plugin_follow_editauth' => array(
		'caption'     => 'Plugin follow to the edit auth?',
		'description' => 'The contribution by the plugin is not permitted when there is no page edit authority.',
	),

	'plugin_follow_freeze' => array(
		'caption'     => 'Plugin follow to page freezing?',
		'description' => 'The contribution by the plugin is not permitted when the page is freezed.',
	),

	'fixed_heading_anchor_edit' => array(
		'caption'     => 'Use chapter unit editing?',
		'description' => '',
	),

	'paraedit_partarea' => array(
		'caption'     => 'Range of chapter unit editing',
		'description' => 'The range of the chapter unit edit is set.<br />'
		               . 'The range in the chapter is begun by the head line that starts by * of the Wiki format.',
		'compat'      => 'Up to next',
		'level'       => 'Up to equality or higher level',
	),

	'pagecache_min' => array(
		'caption'     => 'Page cache expiration time',
		'description' => 'The expiration time (Unit: Minute) when HTML that does the page in rendering is cached and it speeds it up is set.<br />'
		               . 'However, only when the guest account is accessed, it is cached. I will recommend being made to effective for the site where a lot of page views exist.',
		'extention'   => 'min',
	),

	'pre_width' => array(
		'caption'     => 'CSS:width of &lt;pre&gt;',
		'description' => 'The width value of CSS specified for &lt;pre&gt; tag is specified.',
	),

	'pre_width_ie' => array(
		'caption'     => 'CSS:width of &lt;pre&gt;(IE Only)',
		'description' => 'Here is a value only for IE of a browser. When the display falls into disorder because the theme of XOOPS is composed of &lt;Table&gt;, specify a fixed value such as "700px".',
	),

	'pagereading_enable' => array(
		'caption'     => 'Classify by page name reading?',
		'description' => 'The setting concerning page name reading is a setting only for a Japanese environment.',
	),

	'pagereading_kanji2kana_converter' => array(
		'caption'     => 'Page name reading converter',
		'description' => '',
	),

	'pagereading_kanji2kana_encoding' => array(
		'caption'     => 'Converter\'s encoding',
		'description' => '',
	),

	'pagereading_chasen_path' => array(
		'caption'     => 'ChaSen path',
		'description' => '',
	),

	'pagereading_kakasi_path' => array(
		'caption'     => 'KAKASI path',
		'description' => '',
	),

	'pagereading_config_dict' => array(
		'caption'     => 'Reading dictionary page',
		'description' => 'It is used for "None" the method of acquiring page name reading.',
	),

);
?>