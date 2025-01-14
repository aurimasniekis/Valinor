<?php

declare(strict_types=1);

namespace CuyZ\Valinor\Type\Parser\Exception;

use RuntimeException;

final class UnknownSymbol extends RuntimeException implements InvalidType
{
    public function __construct(string $symbol)
    {
        parent::__construct(
            "Cannot parse unknown symbol `$symbol`.",
            1632918723
        );
    }
}
