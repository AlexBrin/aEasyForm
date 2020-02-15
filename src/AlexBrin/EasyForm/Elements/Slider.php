<?php

declare(strict_types=1);

namespace AlexBrin\EasyForm\Elements;

/**
 * Class Slider
 *
 * @author Alexander Gorenkov <Tg:@alex_brin>
 * @package AlexBrin\EasyForm\Elements
 * @version 1.0.0
 * @since 0.7.0
 */
class Slider extends BaseElement
{
    /**
     * Slider constructor.
     * @param string $text
     * @param int $min
     * @param int $max
     * @param int $step
     * @param int $default
     * @param string|null $label
     */
    public function __construct(string $text, int $min, int $max, int $step = -1, int $default = -1, ?string $label = null)
    {
        parent::__construct($label);
        $this->data = [
            'type' => 'slider',
            'text' => $text,
            'min' => $min,
            'max' => $max,
        ];

        if ($step !== -1) {
            $this->data['step'] = $step;
        }

        if ($default !== $default) {
            $this->data['default'] = $default;
        }
    }

    /**
     * @param int $min
     * @return Slider
     */
    public function setMin(int $min): Slider
    {
        $this->data['min'] = $min;
        return $this;
    }

    /**
     * @param int $max
     * @return Slider
     */
    public function setMax(int $max): Slider
    {
        $this->data['max'] = $max;
        return $this;
    }

    /**
     * @param int $step
     * @return Slider
     */
    public function setStep(int $step): Slider
    {
        $this->data['step'] = $step;
        return $this;
    }
}