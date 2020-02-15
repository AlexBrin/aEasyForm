<?php

declare(strict_types=1);

namespace AlexBrin\EasyForm\Elements;

/**
 * Class StepSlider
 * @package AlexBrin\EasyForm\Elements
 * @version 1.0.0
 * @since 0.7.0
 */
class StepSlider extends BaseElement
{
    /**
     * StepSlider constructor.
     * @param string $text
     * @param string[] $steps
     * @param int $defaultIndex
     * @param string|null $label
     */
    public function __construct(string $text, array $steps, int $defaultIndex = -1, ?string $label = null)
    {
        parent::__construct($label);
        $this->data = [
            'type' => 'step_slider',
            'text' => $text,
            'steps' => $steps,
        ];

        if ($defaultIndex > -1) {
            $this->data['default'] = $defaultIndex;
        }
    }

    /**
     * @param int[]
     * @return StepSlider
     */
    public function setSteps(...$steps): StepSlider
    {
        $this->data['steps'] = $steps;
        return $this;
    }
}