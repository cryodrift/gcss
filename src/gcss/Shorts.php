<?php

//declare(strict_types=1);

namespace cryodrift\gcss;

use cryodrift\fw\Context;
use cryodrift\fw\HtmlUi;
use cryodrift\fw\interface\Handler;

class Shorts implements Handler
{
    public function handle(Context $ctx): Context
    {
        $replace = [
          'g-box' => 'g-b g-p1',
          'g-box-round' => 'g-b g-btr g-bbr g-p1',
          'g-box-head' => 'g-b g-bb g-btr g-p1',
          'g-box-body' => 'g-b g-bb g-p1',
          'g-box-foot' => 'g-b g-bbr g-p1 g-tjcb',
          'g-box-small' => 'g-mhc g-phc g-ph',
          'g-cont' => 'g-fw',
          'g-cont2' => 'g-fgc g-fm',
          'g-cont-full' => 'g-fg g-oa g-fc g-h',
          'g-container' => 'gl-fr g-fw',
          'g-container-full' => 'g-fg g-oa g-fc g-h',
          'g-scroll' => 'g-fg g-oa',
          'g-container-scroll' => 'g-fg g-oa g-p1 g-b g-bt',
          'g-row' => 'g-fw gl-fr g-tjcb g-bbr g-btr g-b g-p1 g-ph g-mhc g-phc',
          'g-row-flat' => 'g-fw gl-fr g-tjcb g-bt g-b g-p1 g-ph g-mhc g-phc',
          'g-button' => 'g-tusn g-b g-btr g-bbr g-p1 g-fwm',
          'g-buttons' => 'g-fr g-brc g-btc g-bbc g-b g-btr g-bt g-bb g-bbr g-br g-bl',
          'g-header' => 'g-fr g-tjcb g-btr g-b g-p1 g-ph g-mhc g-phc',
          'g-body' => 'g-fw gl-fr g-tjcb g-b g-bb g-p1 g-ph g-mhc g-phc',
          'g-body-full' => 'g-h g-tjcb g-b g-bb g-p1 g-ph g-mhc g-phc',
          'g-footer' => 'g-fr g-tjcb g-bbr g-b g-p1 g-ph g-mhc g-phc',
        ];
        foreach ($replace as $key => $value) {
            $replace[$key] = $key . ' ' . $value;
        }
        $content = $ctx->response()->getContent();
        if ($content instanceof HtmlUi) {
            $content->setAttributes($replace);
        }
        return $ctx;
    }

}


