<?php
/**
 * Configuration file for DI container.
 */
return [

    // Services to add to the container.
    "services" => [
        "d" => [
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
                $obj = new \Anax\D\D();

                // Load the configuration files
                $cfg = $this->get("configuration");
                $config = $cfg->load("d.php");
                $settings = $config["config"] ?? null;

                // Setup the object state
                if ($settings["message"] ?? null) {
                    $obj->setMessage($settings["message"]);
                }

                return $obj;
            }
        ],
    ],
];
