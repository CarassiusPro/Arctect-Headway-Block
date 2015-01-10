<?php

    class HeadwayArctextBlockOptions extends HeadwayBlockOptionsAPI {

        public $tabs = array(

			'content-tab' => 'Content'

		);

		public $inputs = array(

			'content-tab' => array(

			

				'content' => array(

					'type' => 'text',

					'name' => 'content',

					'label' => 'Text',

					'default' => '',
                    
                    'tooltip' => 'Leave blank to display your page title, otherwise enter any text you like.'

				),
                
                'hyperlink' => array(

    				'type' => 'text',

					'name' => 'hyperlink',

					'label' => 'URL',

					'default' => '',

					'tooltip' => 'Enter the link you want to jump to when clicked.'

				),
				'arc-input' => array(
					'type' => 'select',
					'name' => 'arc-input',
					'label' => 'Choose Your Style',
					'tooltip' => '',
					'options' => array(
                        'blank' => '--Choose One--',
						'semi' => 'semi-circle',
						'full' => 'full-circle',
						'bezier' => 'bezier',
						'spiral' => 'spiral',
					),
					
				),
				
				

			)

		);

	}