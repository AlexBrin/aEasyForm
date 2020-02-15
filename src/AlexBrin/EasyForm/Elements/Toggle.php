<?php

declare(strict_types=1);

namespace AlexBrin\EasyForm\Elements;

/**
 * Class Toggle
 *
 * @author Alexander Gorenkov <Tg:@alex_brin>
 * @package AlexBrin\EasyForm\Elements
 * @version 1.0.0
 * @since 0.7.0
 */
class Toggle extends BaseElement
{
    /**
     * Toggle constructor.
     * @param string $text
     * @param bool|null $default
     * @param string|null $label
     */
    public function __construct(string $text = '', ?bool $default = null, ?string $label = null)
    {
        parent::__construct($label);
        $this->data = [
            'type' => 'toggle',
            'text' => $text,
            'default' => $default,
        ];
    }
}