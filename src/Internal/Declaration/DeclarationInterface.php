<?php

/**
 * This file is part of Temporal package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Temporal\Client\Internal\Declaration;

/**
 * @template-covariant MetadataAttribute of object
 */
interface DeclarationInterface
{
    /**
     * @psalm-return MetadataAttribute
     *
     * @return object
     */
    public function getMetadata(): object;
}
