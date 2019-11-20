<?php
/**
 * Configuration file for DI container.
 */
return [

    // Services to add to the container.
    "services" => [
        "mumincfg" => [
            // Is the service shared, true or false
            // Optional, default is true
            "shared" => true,

            // Is the service activated by default, true or false
            // Optional, default is false
            "active" => false,

            // Callback executed when service is activated
            // Create the service, load its configuration (if any)
            // and set it up.
            "callback" => function () {
                $mumin = new \Anax\Mumin\Mumin();

                // Load the configuration files
                $cfg = $this->get("configuration");
                $config = $cfg->load("mumin.php");
                $settings = $config["config"] ?? null;

                if ($settings["message"] ?? null) {
                    $mumin->setMessage($settings["message"]);
                }

                return $mumin;
            }
        ],
    ],
];
