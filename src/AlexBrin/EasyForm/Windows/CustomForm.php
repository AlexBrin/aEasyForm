<?php

declare(strict_types=1);

namespace AlexBrin\EasyForm\Windows;

use AlexBrin\EasyForm\Elements\Dropdown;
use AlexBrin\EasyForm\Elements\Input;
use AlexBrin\EasyForm\Elements\Label;
use AlexBrin\EasyForm\Elements\Slider;
use AlexBrin\EasyForm\Elements\StepSlider;
use AlexBrin\EasyForm\Elements\Toggle;

/**
 * Class CustomForm
 *
 * @author  Alexander Gorenkov <Tg:@alex_brin>
 * @package AlexBrin\EasyForm\Windows
 * @version 1.0.0
 * @since   1.0.0
 */
abstract class CustomForm extends Form
{

    public function __construct()
    {
        $this->data += [
            'type' => 'custom_form',
            'title' => '',
            'content' => [],
        ];
    }

    /**
     * @param Label $label
     *
     * @return CustomForm
     */
    public function addLabel(Label $label): CustomForm
    {
        $this->labelMap[] = $label->getLabel() ?? count($this->labelMap);
        $this->data['content'][] = $label;
        return $this;
    }

    /**
     * @param Slider $slider
     *
     * @return CustomForm
     */
    public function addSlider(Slider $slider): CustomForm
    {
        $this->labelMap[] = $slider->getLabel() ?? count($this->labelMap);
        $this->data['content'][] = $slider;
        return $this;
    }

    /**
     * @param StepSlider $stepSlider
     *
     * @return CustomForm
     */
    public function addStepSlider(StepSlider $stepSlider): CustomForm
    {
        $this->labelMap[] = $stepSlider->getLabel() ?? count($this->labelMap);
        $this->data['content'][] = $stepSlider;
        return $this;
    }

    /**
     * @param Toggle $toggle
     *
     * @return CustomForm
     */
    public function addToggle(Toggle $toggle): CustomForm
    {
        $this->labelMap[] = $toggle->getLabel() ?? count($this->labelMap);
        $this->data['content'][] = $toggle;
        return $this;
    }

    /**
     * @param Dropdown $dropdown
     *
     * @return CustomForm
     */
    public function addDropdown(Dropdown $dropdown): CustomForm
    {
        $this->labelMap[] = $dropdown->getLabel() ?? count($this->labelMap);
        $this->data['content'][] = $dropdown;
        return $this;
    }

    /**
     * @param Input $input
     *
     * @return CustomForm
     */
    public function addInput(Input $input): CustomForm
    {
        $this->labelMap[] = $input->getLabel() ?? count($this->labelMap);
        $this->data['content'][] = $input;
        return $this;
    }
}