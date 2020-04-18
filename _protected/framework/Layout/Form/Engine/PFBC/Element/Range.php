<?php
/**
 * File created by WebMaster <hi@ph7.me>
 */

namespace PFBC\Element;

class Range extends Textbox
{
    public function render()
    {
        $this->attributes += [
            'type' => 'range', // Range Type
            'id' => 'rangeInput',
            'oninput' => 'rangeOutput.value = rangeInput.value'
        ];
        $this->validation[] = new \PFBC\Validation\Numeric;
        parent::render();

        echo <<<'HTML'
            <strong><output id="rangeOutput"></output></strong>
            <script>$(function(){$("#rangeOutput").val($("#rangeInput").val())});</script>
HTML;
    }
}
