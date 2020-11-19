Use services and configure them
================================

This sample shows various ways to setup and use services within the framework and how these services can be loaded into $di and configured from configuration files.

A controller uses a model class `G1Service` as a service and injects $di into it. The model class uses the same di-injection boilerplat code as the controller does.

The controller uses the same class, but it is then a part of $di and it has a $di configuration filen i `config/di/g1service.php`.

Controller uses $di service `G2Service` which is a plain service without dependencies and is loaded from `config/di/g2servce.php`.

Controller uses $di service `G3Service` which is a service `config/di/g3service.php` that loads its configuration from a configuration file `config/g3service.php`

Controller uses $di service `G4Service` which is a service `config/di/g4service.php` that loads its configuration from several files in a directory `config/g4service/`.



How to
--------------------------------

Start by inspecting the files in the sample.

Then get the files into your me/redovisa.

```
# Move to the root of the course repo
rsync -av --exclude README.md example/sample/g/ me/redovisa/
```

Open a webbrowser and try the following urls.

* g or g/index (use G1service to show a message)
* g/g1service (use G1service to show a message)
* g/g2service (use G2service to show a message)
* g/g3service (use G3service to show a message)
* g/g4service (use G4service to show a message)
