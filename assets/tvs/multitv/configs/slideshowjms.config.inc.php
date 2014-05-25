<?php
$settings['display'] = 'vertical';
$settings['fields'] = array(
    'color' => array(
        'caption' => 'color',
        'type' => 'dropdown',
        'elements' => 'color-1||color-2||color-3||color-4||color-5'
    ),
    'dataxy' => array(
        'caption' => 'data xy',
        'type' => 'dropdown',
        'elements' => 'data-x||data-y'
    ),
    'dataxyvalue' => array(
        'caption' => 'data value',
        'type' => 'dropdown',
        'elements' => ' ||500||1000||2000||3000||4000'
    ),
    'dataZvalue' => array(
        'caption' => 'Z value',
        'type' => 'dropdown',
        'elements' => ' ||500||1000||2000||3000||4000'
    ),
    'dataScalevalue' => array(
        'caption' => 'Scale value',
        'type' => 'dropdown',
        'elements' => ' ||0.2||0.4||0.6||0.8||1.0'
    ),
    'dataRotate' => array(
        'caption' => 'data Rotate',
        'type' => 'dropdown',
        'elements' => 'data-rotate-x||data-rotate-y'
    ),
    'dataRotateValue' => array(
        'caption' => 'Rotate Value',
        'type' => 'text'
    ),
    'image' => array(
        'caption' => 'Image',
        'type' => 'image'
    ),
    'thumb' => array(
        'caption' => 'Thumbnail',
        'type' => 'thumb',
        'thumbof' => 'image'
    ),
    'title' => array(
        'caption' => 'Caption Title',
        'type' => 'text'
    ),

    'legend' => array(
        'caption' => 'Caption text',
        'type' => 'richtext'
    ),
    'link' => array(
        'caption' => 'Link',
        'type' => 'text'
    ),
    'readmoretext' => array(
        'caption' => 'read more text',
        'type' => 'text'
    )
);
$settings['templates'] = array(
    'outerTpl' => '<section id="jms-slideshow" class="jms-slideshow">[+wrapper+]</section>',
    'rowTpl' => '<div class="step" data-color="[+color+]" [+dataxyvalue:ne=``:then=`[+dataxy+]="[+dataxyvalue+]"`+] [+dataScalevalue:ne=``:then=`data-scale="[+dataScalevalue+]"`+] [+dataRotateValue:ne=``:then=`[+dataRotate+]="[+dataRotateValue+]"`+]>
					<div class="jms-content">
    <h3>[+title+]</h3><p>[+legend+]</p><a href="[+link+]" class="jms-link">[+readmoretext:ne=``:then=`[+readmoretext+]`:else=`read more`+]</a>
    		</div>
					<img src="[+image+]" alt="[+title+]" />
				</div>'
);