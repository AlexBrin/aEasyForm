<?php

declare(strict_types=1);

namespace AlexBrin\EasyForm\Elements;

use JsonSerializable;

/**
 * Class BaseElement
 *
 * @author Alexander Gorenkov <Tg:@alex_brin>
 * @package AlexBrin\EasyForm\Elements
 * @version 1.0.0
 * @since 0.7.0
 */
abstract class BaseElement implements JsonSerializable
{
    /**
     * @var array
     */
    protected $data = [];

    /**
     * @var string|null
     */
    protected $label = null;

    /**
     * BaseElement constructor.
     * @param string|null $label
     */
    public function __construct(?string $label = null)
    {
        $this->label = $label;
    }

    /**
     * @param string|null $label
     * @return static
     */
    public function setLabel(?string $label = null): BaseElement {
        $this->label = $label;
        return $this;
    }

    public function getLabel(): ?string {
        return $this->label;
    }

    /**
     * @param string $text
     * @return static
     */
    public function setText(string $text): BaseElement {
        $this->data['text'] = $text;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->data['text'] ?? null;
    }

    /**
     * @param string|int $default
     * @return static
     */
    public function setDefault($default): BaseElement {
        if(in_array($this->data['type'], ['button', 'label']))
            return $this;

        $this->data['default'] = $default;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize()
    {
        return $this->data;
    }
}