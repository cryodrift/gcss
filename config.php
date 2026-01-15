<?php

//declare(strict_types=1);

/**
 */

use cryodrift\fw\Core;

if (!isset($ctx)) {
    $ctx = Core::newContext(new \cryodrift\fw\Config());
}

$cfg = $ctx->config();


\cryodrift\fw\Router::addConfigs($ctx, [
  'g.css' => \cryodrift\gcss\Css::class,
  'g-min.css' => [[\cryodrift\gcss\Css::class, 'handle', ['reset' => false]]],
  'g-pure.css' => [[\cryodrift\gcss\Css::class, 'handle', ['reset' => false, 'tags' => false]]],
], \cryodrift\fw\Router::TYP_WEB);


/**
 * HtmlUi css shortcut replacer
 */
$cfg->addHandler(\cryodrift\gcss\Shorts::class, []);
