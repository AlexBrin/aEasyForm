<?php

declare(strict_types=1);

namespace AlexBrin\EasyForm\Elements;

/**
 * Class Dropdown
 *
 * @author Alexander Gorenkov <Tg:@alex_brin>
 * @package AlexBrin\EasyForm\Elements
 * @version 1.0.0
 * @since 0.7.0
 */
class Dropdown extends BaseElement
{
    /**
     * Dropdown constructor.
     * @param string $text
     * @param array $options
     * @param int $default
     * @param string|null $label
     */
    public function __construct(string $text, array $options, int $default = -1, ?string $label = null)
    {
        parent::__construct($label);
        $this->data = [
            'type' => 'dropdown',
            'text' => $text,
            'options' => $options
        ];

        if($default > -1) {
            $this->data['default'] = $default;
        }
    }

    /**
     * @param string[]|int[]
     * @return Dropdown
     */
    public function setOptions(...$options): Dropdown {
        $this->data['options'] = $options;
        return $this;
    }
}