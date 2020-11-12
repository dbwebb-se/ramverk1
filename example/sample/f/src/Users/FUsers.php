<?php

namespace Anax\Users;

/**
 * A model class retrievieng data from an external server.
 *
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
class FUsers
{
    private $url = "https://rem.dbwebb.se/api/users";



    public function setApiUrl(string $url) : void
    {
        $this->url = rtrim($url, "/");
    }



    protected function doCurl(string $url) : string
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }



    public function getUser(int $userId) : array
    {
        $url = $this->url . "/$userId";
        $data = $this->doCurl($url);
        $user = json_decode($data, true);
        return $user;
    }
}
