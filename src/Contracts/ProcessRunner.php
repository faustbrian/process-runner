<?php

declare(strict_types=1);

/*
 * This file is part of Process Runner.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KodeKeep\ProcessRunner\Contracts;

use KodeKeep\ProcessRunner\ShellResponse;
use Symfony\Component\Process\Process;

interface ProcessRunner
{
    public function run(Process $process): ShellResponse;
}
