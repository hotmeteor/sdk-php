<?php

/**
 * This file is part of Temporal package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Temporal\Client\Activity;

use Temporal\Client\Meta\ReaderInterface;
use Temporal\Client\Protocol\Command\RequestInterface;
use Temporal\Client\Protocol\Command\ResponseInterface;
use Temporal\Client\Protocol\DispatcherInterface;
use Temporal\Client\Worker\Declaration\Repository\ActivityRepositoryInterface;
use Temporal\Client\Worker\Declaration\Repository\ActivityRepositoryTrait;

/**
 * @noinspection PhpSuperClassIncompatibleWithInterfaceInspection
 */
class ActivityWorker implements ActivityRepositoryInterface, DispatcherInterface
{
    use ActivityRepositoryTrait;

    /**
     * @var ReaderInterface
     */
    private ReaderInterface $reader;

    /**
     * @param ReaderInterface $reader
     * @param string $taskQueue
     */
    public function __construct(ReaderInterface $reader, string $taskQueue)
    {
        $this->reader = $reader;

        $this->bootActivityRepositoryTrait();
    }

    /**
     * TODO
     *
     * {@inheritDoc}
     */
    public function dispatch(RequestInterface $request, array $headers = []): ResponseInterface
    {
        throw new \LogicException(__METHOD__ . ' not implemented yet');
    }

    /**
     * @return ReaderInterface
     */
    protected function getReader(): ReaderInterface
    {
        return $this->reader;
    }
}
