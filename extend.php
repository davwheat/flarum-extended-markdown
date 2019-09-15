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

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js')
        ->css(__DIR__.'/resources/less/forum.less'),
    
    
];
