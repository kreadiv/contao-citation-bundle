<?php

// Palettes
$GLOBALS['TL_DCA']['tl_content']['palettes']['citation'] = '{type_legend},type,citation,citation_src;{protected_legend:hide},protected;{expert_legend:hide},guests,invisible,cssID,space';

// Fields
$GLOBALS['TL_DCA']['tl_content']['fields']['citation'] = array(
    'label'       => &$GLOBALS['TL_LANG']['tl_content']['citation'],
    'exclude'   => true,
    'search'    => true,
    'inputType' => 'textarea',
    'eval'      => array('mandatory' => true, 'tl_class' => 'long', 'style' => 'height:5em;')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['citation_src'] = array(
    'label'       => &$GLOBALS['TL_LANG']['tl_content']['citation_src'],
    'exclude'   => true,
    'search'    => true,
    'inputType' => 'text',
    'eval'      => array('maxlength' => 255, 'tl_class' => 'long')
);
