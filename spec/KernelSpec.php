<?php

declare(strict_types=1);

namespace spec\Nucleus\Core;

use Nucleus\Core\Kernel;
use PhpSpec\ObjectBehavior;

class KernelSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Kernel::class);
    }
}
