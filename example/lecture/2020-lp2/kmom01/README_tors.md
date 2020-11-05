Notes to lecture
======================

* Kolla REM server
    * https://rem.dbwebb.se/

* Advanced REST client:
    * https://chrome.google.com/webstore/detail/advanced-rest-client/hgmloofddffdnphfgcellkdfbfbjeloo?hl=sv

* make clean-all
* make install
* make test

* docker-compose up -d web
    * http://localhost:10099/htdocs

* Städa bland koden
    * .anax/
    * src/{Navigation, Page, Stylechooser}
    * test/Example
    * view/anax
    * (Man kan även städa bort src/Controller/\*.php man inte använder)
    * (Man kan även städa i config/router för de routes som inte används)

* Kopiera example/sample/{a,d}.
    * https://github.com/dbwebb-se/ramverk1/tree/master/example/sample

* make test, kolla kodtäckningen

    * Titta kort på controller D
    * Titta kort på controller A
    * Titta kort på controller SampleController
    * Titta kort på controller SampleJSONController
    * Se hur de monteras och var
    * Titta på deras enhetstester

* Visa hur inject fungerar till controller.

* Bygg en mer felsäker JSON controller.



Ta inte upp
-------------------

* Visa hur man kan kasta exception.
* Visa hur man kan ignorera en request och fortsätta i kedjan.
