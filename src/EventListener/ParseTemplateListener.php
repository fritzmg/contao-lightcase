<?php

declare(strict_types=1);

/*
 * This file is part of the Contao Lightcase extension.
 *
 * (c) inspiredminds
 *
 * @license LGPL-3.0-or-later
 */

namespace InspiredMinds\ContaoLightcase\EventListener;

use Contao\CoreBundle\ServiceAnnotation\Hook;
use Contao\Template;
use Symfony\Contracts\Translation\TranslatorInterface;

/**
 * @Hook("parseTemplate")
 */
class ParseTemplateListener
{
    private static $labels = [
        'errorMessage',
        'sequenceInfo.of',
        'close',
        'navigator.prev',
        'navigator.next',
        'navigator.play',
        'navigator.pause',
    ];

    private $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    public function __invoke(Template $template): void
    {
        if (0 !== stripos($template->getName(), 'j_')) {
            return;
        }

        $template->getLightcaseLabels = function () {
            $translations = [];

            foreach (self::$labels as $label) {
                $translated = $this->translator->trans($label, [], 'im_contao_lightcase');

                if ($label === $translated) {
                    continue;
                }

                $translations[$label] = $this->translator->trans($label, [], 'im_contao_lightcase');
            }

            return (object) $translations;
        };
    }
}
