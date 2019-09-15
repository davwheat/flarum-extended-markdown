<?php

/*
 * This file is part of imorland/flarum-extended-markdown.
 *
 * Copyright (c) 2019 Ian Morland.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Giffgaff\ExtendedMarkdown;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Formatter)
		->configure(function (Configurator $config) {
			$config->BBcodes->addCustom(
	            '[SUPER]{TEXT}[/SUPER]',
	            '<sup>{TEXT}</sup>'
	        );
        }),
    (new Extend\Formatter)
		->configure(function (Configurator $config) {
			$config->BBcodes->addCustom(
	            '[SUB]{TEXT}[/SUB]',
	            '<sub>{TEXT}</sub>'
	        );
        }),
    (new Extend\Formatter)
		->configure(function (Configurator $config) {
			$config->BBcodes->addCustom(
	            '[Z]',
	            '<input type="checkbox" disabled="disabled"/>'
	        );
        }),
    (new Extend\Formatter)
		->configure(function (Configurator $config) {
			$config->BBcodes->addCustom(
	            '[X]',
	            '<input type="checkbox" disabled="disabled" checked/>'
	        );
        }),
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js')
        ->css(__DIR__.'/resources/less/forum.less')
    
];
