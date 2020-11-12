Sample test and example programs
=====================================

Here are some small test programs showing off Anax example code.

You can copy the each sample code into your `me/redovisa` like this.

```
# Move to the root of the course repo
rsync -av --exclude README.md example/sample/a/ me/redovisa/
```

Each sample has a set of files and an explanation i the corresponding `[sample]/README.md`.

These are the sample programs.

| Sample | Description | Kmom |
|:------:|-------------|------|
| [a](a) | A controller doing redirect, with test cases showing off how to test a redirect. | kmom01 |
| [b](b) | A controller using a model to retrieve information from an external REST server using `file_get_contents()`, `curl()` and `multi_curl()`. A test class for the controller. | kmom02, kmom03 |
| [c](c) | Use a class as a service in $di from a controller. Test the controller and the class. Use a mock class to hide the class when testing the controller. | kmom02, kmom03 |
| [d](d) | A sample controller with helper `getDetailsOnRequest()` which is useful for development and troubleshooting and might aid in the understanding of how the controller works. | kmom01 |
| [e](e) | A sample JSON controller with helper `getDetailsOnRequestData()` which is useful for development and troubleshooting and might aid in the understanding of how the controller works. | kmom01 |
| [f](f) | Unit test controller and model which uses an external server and using mock classes. | kmom02, kmom03, kmom04 |

<!--
* Model class that reads from a configuration file, including private API keys.
    * Use to test towards testserver instead of real server.

Nästa vecka?
* Controller/model/di som läser inställningar från konfigurationsfil?

* Hur testa controller/modell-klass som går mot extern server?
    * Inklusive server på travis? Starta upp egen dummy testserver

    * Hur ladda en model-klass med en alternativ konfigurationsfil?

    * How to add special mocked configuration for test into di? how to setup the service to be loaded in di? (kmom04)

    * Fler exmepl på hur man jobbar med configfil, controller, model, di-tjänst.

* Vilka exempel kan stödja kmom04 med modul?

* Vilka exempel kan stödja travis/scutinizer tester i kmom05

* Hur stödja när det kommer till tester rörande databasen i kmom06?

-->
