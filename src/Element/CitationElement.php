<?php

namespace Kreadiv\ContaoCitationBundle\Element;

class CitationElement extends \ContentElement
{

    /**
     * @var string
     */
    protected $strTemplate = 'ce_citation';

    /**
     * Displays a wildcard in the back end.
     *
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE') {
            $template = new \BackendTemplate('be_wildcard');
            $template->wildcard = '### ' . $GLOBALS['TL_LANG']['tl_content']['citation'][0] . ' ###';
            return $template->parse();
        }

        return parent::generate();
    }

    /**
     * Generates the module.
     */
    protected function compile()
    {
    }
}
