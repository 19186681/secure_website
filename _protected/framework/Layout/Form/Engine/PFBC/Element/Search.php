<?php
/**
 * File created by WebMaster <hi@ph7.me>
 */

namespace PFBC\Element;

class Search extends Textbox
{
    public function render()
    {
        $this->attributes['type'] = 'search'; // Search type
        parent::render();
    }
}
