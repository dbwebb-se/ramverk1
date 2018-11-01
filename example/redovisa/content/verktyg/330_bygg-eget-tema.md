Bygg eget tema
=========================

I din redovisa/ finns en katalog `theme/` som innehåller grunden för det tema som används på dbwebb.se. Du kan välja att jobba med det temat och anpassa det till din webbplats.

När vi säger tema så motsvarar det i sammanhanget namnet på en stylesheet.



Arbetsflöde
-------------------------

Temats huvudsakliga stylesheet(s) finns i `theme/src/[temafil].less`. Du kan lägga till egna stylesheets genom att lägga till nya filer överst i katalogen `theme/src`.

Katalogen `theme/src` innehåller underkataloger där det finns less-moduler som kan inkluderas i temat.

Du kan skapa nya tema-filer, till exempel `src/temafil1.less` och `src/temafil2.less`.

Du bygger temat, eller kompilerar, med kommandot `make theme` direkt i din katalog `me/redovisa/`.

När kompileringen är klar så placeras de resulterande stylesheets i `htdocs/css/{temafil,temafil.min}.css` där du kan använda dem via styleväljaren.

Du kan sätta ditt eget tema som default style i din webbplats genom att redigera `config/page.php`.
