<?php
 
class FbLikeBoxWidget extends Widget {
	static $db = array(
		'WidgetTitle' => 'Varchar(255)',
		'url' => 'Varchar(255)',
		'width' => 'int',
		'colour' => 'Varchar(255)',
		'connections' => 'int',
		'Stream' => 'Boolean',
	    'header' => 'Boolean' 
	);
 
	static $title = 'Info';
	static $cmsTitle = 'Facebook Like Box';
	static $description = 'Adds facebook Like Box to the widget sidebar.)';
	
	function Title() {
		return $this->WidgetTitle ? $this->WidgetTitle : self::$title;
	}
	
	function url() {
		return $this->url;
	}
 
	function width() {
		return $this->width;
	}
	
	function colour() {
		return $this->colour;
	}
	
	function connections() {
		return $this->connections;
	}
 
	function stream() {
		return $this->Stream == 1;
	}
	
	function header() {
		return $this->header == 1;
	}
	
	
	function getCMSFields() {
		return new FieldSet(
			new TextField('WidgetTitle', _t('TITLE', 'Title (optional)')),
			new TextField('url', _t('URL', 'url')), 
			new NumericField('width',_t('WIDTH','width')),
			new ListboxField(
				   "colour",
				   _t('COLOR_SCHEME', 'Color Scheme'),
				   array(
				      "light" => "light",
				      "dark" => "dark",
				   ),
				   1
				),
		new NumericField('connections',_t('CONNECTIONS','connections')),
		new CheckboxField("Stream", _t('STREAM','Stream')),
		new CheckboxField("header", _t('HEADER',"header"))
		);
	}
}
 
?>
