<?php

declare(strict_types=1);

namespace AlexBrin\EasyForm\Elements;

/**
 * Class Input
 * @package AlexBrin\EasyForm\Elements
 * @version 1.0.0
 * @since 0.7.0
 */
class Input extends BaseElement
{
    /**
     * Input constructor.
     * @param string $text
     * @param string $placeholder
     * @param string|null $default
     */
    public function __construct(string $text, string $placeholder = '', ?string $default = null, ?string $label = null)
    {
        parent::__construct($label);
        $this->data = [
            'type' => 'input',
            'text' => $text,
            'placeholder' => $placeholder,
        ];

        if(!is_null($default))
            $this->data['default'] = $default;
    }

    /**
     * @param string $placeholder
     * @return Input
     */
    public function setPlaceholder(string $placeholder): Input {
        $this->data['placeholder'] = $placeholder;
        return $this;
    }
}