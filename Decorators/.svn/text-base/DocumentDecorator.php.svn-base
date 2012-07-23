<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DocumentDecorator
 *
 * @author rwinslow1016
 */
abstract class DocumentDecorator extends DocumentClass implements Document
{
    protected $decorated;
    protected $bodyPrefix = '';
    protected $bodySuffix = '';

    public function __construct(Document $decorated) {
        $this->decorated = $decorated;
        $this->setBody($this->decorated->getBody());
        $this->setTitle($this->decorated->getTitle());
    }

    public function getBody() {
        return $this->bodyPrefix . $this->decorated->getBody() . $this->bodySuffix;
    }
}

?>
