<?php

// Palettes
$GLOBALS['TL_DCA']['tl_content']['palettes']['citation'] = '{type_legend},type,citation,citation_src;{protected_legend:hide},protected;{expert_legend:hide},guests,invisible,cssID,space';

// Fields
$GLOBALS['TL_DCA']['tl_content']['fields']['citation'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['citation'],
    'exclude'   => true,
    'search'    => true,
    'inputType' => 'textarea',
    'eval'      => ['rte' => 'tinyMCE', 'rows' => 6, 'tl_class' => 'clr'],
    'sql'       => 'mediumtext NULL'
];

$GLOBALS['TL_DCA']['tl_content']['fields']['citation_src'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['citation_src'],
    'exclude'   => true,
    'search'    => true,
    'inputType' => 'text',
    'eval'      => ['maxlength' => 255, 'tl_class' => 'long'],
    'sql'       => 'varchar(255) NULL'
];
