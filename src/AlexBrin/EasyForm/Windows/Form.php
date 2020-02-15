<?php

declare(strict_types=1);

namespace AlexBrin\EasyForm\Windows;

use pocketmine\form\Form as IForm;
use pocketmine\Player;

/**
 * Class Form
 *
 * @author  Alexander Gorenkov <Tg:@alex_brin>
 * @package AlexBrin\EasyForm\Windows
 * @version 1.0.0
 * @since   1.0.0
 */
abstract class Form implements IForm
{
    protected $data = [];

    /**
     * @var string[]
     */
    protected $labelMap = [];

    /**
     * @param string $title
     *
     * @return static
     */
    public function setTitle(string $title): Form
    {
        $this->data['title'] = $title;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function handleResponse(Player $player, $data): void
    {
        if (is_null($data) || $data === false) {
            $this->onCancel($player);
            return;
        }

        if (is_int($data)) {
            $data = $this->labelMap[$data] ?? $data;
        } elseif (is_bool($data)) {

        } elseif (is_array($data)) {
            $newData = [];
            foreach ($data as $key => $value) {
                $key = $this->labelMap[$key] ?? $key;
                $newData[$key] = $value;
            }
            $data = $newData;
        }

        $this->onSubmit($player, $data);
    }

    /**
     * @param Player $player
     * @param        $data
     */
    abstract public function onSubmit(Player $player, $data): void;

    /**
     * @param Player $player
     */
    abstract public function onCancel(Player $player): void;

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize()
    {
        return $this->data;
    }
}