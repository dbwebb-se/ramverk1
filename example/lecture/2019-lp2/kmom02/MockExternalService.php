<?php

namespace Anax\GetTag;

/**
 * A sample mock class
 */
class MockGeoTagService extends GeoTagService
{
    public function mapIpToGeoTag($ip)
    {
        return [
            "ip" => $ip,
            "valid" => true,
        ];
    }
}
