<?php

declare(strict_types=1);

namespace AlexBrin\EasyForm\Windows;

use AlexBrin\EasyForm\Elements\Button;

/**
 * Class SimpleForm
 *
 * @author  Alexander Gorenkov <Tg:@alex_brin>
 * @package AlexBrin\EasyForm\Windows
 * @version 1.0.0
 * @since   1.0.0
 */
abstract class SimpleForm extends Form
{

    public function __construct()
    {
        $this->data += [
            'type' => 'form',
            'title' => '',
            'content' => '',
            'buttons' => [],
        ];
    }

    /**
     * @param string $content
     *
     * @return SimpleForm
     */
    public function setContent(string $content): SimpleForm
    {
        $this->data['content'] = $content;
        return $this;
    }

    /**
     * @param Button $button
     *
     * @return SimpleForm
     */
    public function addButton(Button $button): SimpleForm
    {
        if (!isset($this->data['buttons']))
            $this->data['buttons'] = [];

        $this->data['buttons'][] = $button;

        if (($label = $button->getLabel())) {
            $this->labelMap[] = $label;
        }

        return $this;
    }
}