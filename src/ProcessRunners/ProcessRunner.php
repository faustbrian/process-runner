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

namespace KodeKeep\ProcessRunner\ProcessRunners;

use KodeKeep\ProcessRunner\Contracts\ProcessRunner as Contract;
use KodeKeep\ProcessRunner\ShellResponse;
use Symfony\Component\Process\Exception\ProcessTimedOutException;
use Symfony\Component\Process\Process;

class ProcessRunner implements Contract
{
    public function run(Process $process): ShellResponse
    {
        try {
            $process->run();
        } catch (ProcessTimedOutException $e) {
            $timedOut = true;
        }

        $response = new ShellResponse($process->getExitCode(), $process->getOutput(), $timedOut ?? false);

        $response->setProcess($process);

        return $response;
    }
}
