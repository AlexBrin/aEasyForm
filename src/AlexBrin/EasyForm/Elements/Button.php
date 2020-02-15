<?php

declare(strict_types=1);

namespace AlexBrin\EasyForm\Elements;

/**
 * Class Button
 *
 * @author Alexander Gorenkov <Tg:@alex_brin>
 */
class Button extends BaseElement
{
    const TYPE_PATH = 'path';
    const TYPE_URL = 'url';

    protected $label = null;

    public function __construct(string $text, ?string $imageType = null, string $imagePath = "", ?string $label = null)
    {
        parent::__construct($label);
        $this->data += [
            'text' => $text,
        ];

        if (!is_null($imageType)) {
            $this->data['image'] = [
                'type' => $imageType,
                'data' => $imagePath
            ];
        }
    }
}