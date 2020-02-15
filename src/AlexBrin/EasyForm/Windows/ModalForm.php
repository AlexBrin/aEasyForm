<?php

declare(strict_types=1);

namespace AlexBrin\EasyForm\Windows;

/**
 * Class ModalForm
 *
 * @author  Alexander Gorenkov <Tg:@alex_brin>
 * @package AlexBrin\EasyForm\Windows
 * @version 1.0.0
 * @since   1.0.0
 */
abstract class ModalForm extends Form
{
    public function __construct()
    {
        $this->data += [
            'type' => 'modal',
            'title' => '',
            'content' => '',
            'button1' => '',
            'button2' => '',
        ];
    }

    /**
     * @param string $content
     *
     * @return ModalForm
     */
    public function setContent(string $content): ModalForm
    {
        $this->data['content'] = $content;
        return $this;
    }

    /**
     * @param string $content
     *
     * @return ModalForm
     */
    public function setConfirmButton(string $content): ModalForm
    {
        $this->data['button1'] = $content;
        return $this;
    }

    /**
     * @param string $content
     *
     * @return ModalForm
     */
    public function setCancelButton(string $content): ModalForm
    {
        $this->data['button2'] = $content;
        return $this;
    }
}