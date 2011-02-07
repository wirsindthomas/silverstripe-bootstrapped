<?php
  
class CustomSiteConfig extends DataObjectDecorator {
     
    function extraStatics() {
        return array(
            'db' => array(
				'GoogleAnalytics' => 'Text'
            ),
            'has_one' => array(
            )
        );
    }
  
    public function updateCMSFields(FieldSet &$fields) {
        $fields->addFieldToTab('Root.Main', new TextField('GoogleAnalytics', 'Google Analytics Account'));
    }

}