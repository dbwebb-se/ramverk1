Notes to lecture
========================




Allmänt program (campus)
------------------------

Om val till vårterminen termin 4
    * Telecom versus Användbarhet och interaktionsdesign
    * Systemerifiering versus Programvarudesign

Förkunskaper till grupproj
    * Läs i kursplanen via https://dbwebb.se/kurser/grupproj




Allmänt program (distans)
------------------------

Förkunskaper till exjobb
    * Läs i kursplanen via https://dbwebb.se/kurser/exjobb

Fixa kontakt/uppdragsgivare i näringslivet




Kursen ramverk1
------------------------

Om kursen.

Tanken är att ge er insyn i ett större och mer avancerat projekt där man jobbar med moduler och designmönster.

* Ramverk och ramverkshantering
* Moduler och modulhantering
* Designmönster (ramverk)
* Enhetstestning, kodtäckning
* Automatiserad testning och continous integration (CI)
* (Docker)

eller

> "Allt meck runtomkring som hindrar/hjälper mig att koda och prata kod."




Kursmoment
------------------------

01: Ramverk
02: MVC
03: DI
04: Modul
05: CI
06: Databasdrivna modeller
07/10: Projekt och examination




Redovisa-sidan
------------------------

Skapa och visa redovisa-sidan.

Visa innehåll (grovt)
    * via katalogstrukturen
    * via "Verktyg"




Temat
------------------------

Visa hur man kan jobba med temat.

Egen templatemotor, "on request"




Sida med Markdown (content/)
------------------------

Visa även hur man lägger till en Markdown-sida som content.

Visa hur man lägger till i navbaren.
    * Se hur config/page.php bygger upp grundsidan och bestämmer vilka navbars som används.




Kontroller
------------------------

Titta hur en kontrollerklass är uppbyggd.

Visa hur man skapar en ny kontroller.
    * Utgå från SampleController.
    * Lägg till route som svarar med sträng.
    * Lägg till JSON route (SampleJsonController).
    * Lägg till en sida med vyer.




Enhetstester kontroller
------------------------

Visa hur enhetstesterna mot kontroller (inkl JSON) är gjorda.

```
make install
make test
make phpunit phpcs phpmd
make clean-cache
```

Visa coverage.

Skriv testkod för din nyskapade kontroller.





Städa i src/
-------------------------

Kommentera vilka delar som kan raderas från src/ för att förenkla/förtydliga kodtäckningen.





Tips om kodning
-------------------------

Prata om injecta beroenden.

Prata om dumma vyer
    * all info i $data
    * undvik hämta information från ramverket).

Prata om tunna kontroller-klasser
    * thin controllers
    * fat models

En kontroller för REST och en för webb.






Köra i Docker?
-------------------------

* docker-compose.yml i me/redovisa
* Docker-container anax/dev (:cli och :web)
* Imagen innehåller labbmiljön och monterar repot som en volym
* docker-compose run cli composer install
* docker-compose up web
    * localhost:10099




Tips om koden är svår
-------------------------

* Kursrepot under `example/sample` finns ett par testprogram.
    https://github.com/dbwebb-se/ramverk1/tree/master/example/sample

* Be om fler vid behov, eller ställ frågan i GitHub issues. Codesamples producerar "on request".




Tips från gamla studenter
-------------------------

* Sätt upp travis och scrutinizer redan i kmom01




Nästa kmom?
-------------------------

* Prata Model, View, Controller (MVC)
* Begreppet SOLID (design mönster)
* Titta på en REM server (JSON server)
    * https://rem.dbwebb.se/
* Bygg vidare på ip-valideringen.
    * Gör lookup av ip till geo position och ort.
* Bygg vidare på koden från kmom01.
