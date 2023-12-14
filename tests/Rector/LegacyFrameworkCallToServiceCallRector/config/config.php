<?php

declare(strict_types=1);

use Contao\Controller;
use Contao\Rector\Rector\LegacyFrameworkCallToServiceCallRector;
use Contao\Rector\ValueObject\LegacyFrameworkCallToServiceCall;
use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->ruleWithConfiguration(LegacyFrameworkCallToServiceCallRector::class, [
        new LegacyFrameworkCallToServiceCall(Controller::class, 'parseSimpleTokens', 'contao.string.simple_token_parser', 'parse')
    ]);
};
