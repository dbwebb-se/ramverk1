<?php

namespace Anax\GetTag;

/**
 * A sample mock class
 */
class MockGeoTagService extends GeoTagService
{
    public function mapIpToGeoTag($ipAddress)
    {
        return [
            "ip" => $ipAddress,
            "valid" => true,
        ];
    }
}
