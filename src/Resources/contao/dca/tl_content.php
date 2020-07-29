<?php

// Palettes
$GLOBALS['TL_DCA']['tl_content']['palettes']['citation'] = '{type_legend},type,citation,citation_src_text,citation_src_url;{protected_legend:hide},protected;{expert_legend:hide},guests,invisible,cssID,space';

// Fields
$GLOBALS['TL_DCA']['tl_content']['fields']['citation'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['citation'],
    'exclude'   => true,
    'search'    => true,
    'inputType' => 'textarea',
    'eval'      => ['rte' => 'tinyMCE', 'rows' => 6, 'tl_class' => 'clr'],
    'sql'       => 'mediumtext NULL'
];

$GLOBALS['TL_DCA']['tl_content']['fields']['citation_src_text'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['citation_src_text'],
    'exclude'   => true,
    'search'    => true,
    'inputType' => 'text',
    'eval'      => ['maxlength' => 255, 'tl_class' => 'w50'],
    'sql'       => 'varchar(255) NULL'
];

$GLOBALS['TL_DCA']['tl_content']['fields']['citation_src_url'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['citation_src_url'],
    'exclude'   => true,
    'search'    => true,
    'inputType' => 'url',
    'eval'      => ['maxlength' => 255, 'tl_class' => 'w50'],
    'sql'       => 'varchar(255) NULL'
];