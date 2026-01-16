<?php

//declare(strict_types=1);

namespace cryodrift\gcss;

use cryodrift\fw\Context;
use cryodrift\fw\Core;
use cryodrift\fw\FileHandler;
use cryodrift\fw\interface\Handler;
use cryodrift\fw\Response;

class Css implements Handler
{

    public function handle(Context $ctx, bool $reset = true, bool $tags = true): Context
    {
        $path = __DIR__;
        $out = Core::fileReadOnce($path . '/gvars.css');

        if ($reset) {
            $out .= Core::fileReadOnce($path . '/greset.css');
        }
        if ($tags) {
            $out .= Core::fileReadOnce($path . '/gtags.css');
        }
        $gcss = Core::fileReadOnce($path . '/g.css');
        $out .= $gcss;
        $out .= str_replace('/*{{slot}}*/', str_replace('.g-', '.gs-', $gcss), Core::fileReadOnce($path . '/gs.css'));
        $out .= str_replace('/*{{slot}}*/', str_replace('.g-', '.gl-', $gcss), Core::fileReadOnce($path . '/gl.css'));
        $size = $ctx->request()->path()->getPart(1);
        if (is_numeric($size)) {
            $out = str_replace('1080px', $size . 'px', $out);
        }
        $ctx->response()->setContent($out);
        $ctx->response()->setHeaders([Response::HEADER_CONTENT_TYPE . FileHandler::mimetypes()['css']]);
        return $ctx;
    }

}
