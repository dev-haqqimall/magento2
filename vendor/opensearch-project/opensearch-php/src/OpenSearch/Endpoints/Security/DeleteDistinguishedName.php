<?php

declare(strict_types=1);

/**
 * SPDX-License-Identifier: Apache-2.0
 *
 * The OpenSearch Contributors require contributions made to
 * this file be licensed under the Apache-2.0 license or a
 * compatible open source license.
 *
 * Modifications Copyright OpenSearch Contributors. See
 * GitHub history for details.
 */

namespace OpenSearch\Endpoints\Security;

use OpenSearch\Exception\RuntimeException;
use OpenSearch\Endpoints\AbstractEndpoint;

/**
 * NOTE: This file is autogenerated using util/GenerateEndpoints.php
 */
class DeleteDistinguishedName extends AbstractEndpoint
{
    protected $cluster_name;

    public function getURI(): string
    {
        if (!isset($this->cluster_name) || $this->cluster_name === '') {
            throw new RuntimeException('cluster_name is required for delete_distinguished_name');
        }
        $cluster_name = $this->cluster_name;

        return "/_plugins/_security/api/nodesdn/$cluster_name";
    }

    public function getParamWhitelist(): array
    {
        return [
            'pretty',
            'human',
            'error_trace',
            'source',
            'filter_path'
        ];
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function setClusterName($cluster_name): static
    {
        if (is_null($cluster_name)) {
            return $this;
        }
        $this->cluster_name = $cluster_name;

        return $this;
    }
}
