<?php

declare(strict_types=1);

namespace AlexBrin\EasyForm\Elements;

/**
 * Class Label
 *
 * @author Alexander Gorenkov <Tg:@alex_brin>
 * @package AlexBrin\EasyForm\Elements
 * @version 1.0.0
 * @since 0.7.0
 */
class Label extends BaseElement
{
    /**
     * Label constructor.
     * @param string $text
     * @param string|null $label
     */
    public function __construct(string $text = '', ?string $label = null)
    {
        parent::__construct($label);
        $this->data = [
            'type' => 'label',
            'text' => $text,
        ];
    }
}