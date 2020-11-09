Notes to lecture
========================



Uppgift kmom02
------------------------

* "En webbtjänst för att geotagga ip-adresser"
> "Skapa en sida där du kan mata in en ip-adress. Man kan posta formuläret och få ett svar på ip-adressens geografiska position, förutsatt att ip-adressen är giltig."



Externa tjänster
------------------------

* https://ipstack.com/
* https://www.openstreetmap.org/



Tips
------------------------

* Wrappa cURL i en egen klass.
    * Se exmpel på CURL
    * Lättare att testa, mocka?
* Separera i egna modell-klasser.
    * Separata controllers
    * Dumma vyer (hämta inte info från ramverket)
* Varje klass skall var testbar (100% kodtäckning?)
* Injecta de ramverkstjänster som behövs från kontroller-lagret.
* Hur spara API-nyckel?



Uppgift kmom03
------------------------

* Make an application that allows the user to view the observed (in the past 30 days) or forecasted (in the future) daily weather conditions for a given location
* [Dark Sky API](https://darksky.net/dev/docs)
* Send multiple requests concurrently



REM server
----------------------

Visa remservern online och som klonad modul.
Prata om enhetstestning av REM servern.
Visa 100% kodtäckning.
Kör REM servern i docker.



Slides
----------------------

Prata om MVC.
Prata om SOLID.
Prata om Cohesion/Coupling.



TODO (torsdag?)
------------------

Visa hur man integrerar anax/remserver i sin egen Anax installation.

Visa cURL med PHP (mot REM servern?)

Exempelprogram som startar separat testserver för enhetstester?



### Tester

Prata Scrutinizer?

Hur simulera GET, POST i testerna?
https://github.com/canax/request/blob/master/test/Request/RequestTest.php#L19-L39
https://github.com/canax/request/blob/master/src/Request/Request.php#L66-L86

Data provider i phpunit

Hur funkar Mock
Mock för rest tjänst
Mock för avancerad klass
Strukturera negativa tester

* Testa echo?
    * `ob_start()`
    * `ob_get_contents()`
    * `ob_end_clean()`
