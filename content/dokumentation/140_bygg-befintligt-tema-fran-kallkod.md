---
author: mos
revision:
    "2019-03-21": "(A, mos) Första utgåvan."
---
Bygg befintligt tema från källkod
==========================

Nuvarande tema är bifogat som filen `css/dbwebb-se.min.css`, det är in princip samma tema som används till webbplatsen dbwebb.se. Du kan hämta källkoden till det temat, modifiera och anpassa och därefter generera en ny stylesheet. Här beskrivs hur du gör.



Tema till dbwebb-se {#tema}
--------------------------

Källkoden till `css/dbwebb-se.min.css` finns i repot [`desinax/theme-dbwebb.se`](https://github.com/desinax/theme-dbwebb.se), du kan klona det repot och göra det till en del av ditt eget repo.

Ställ dig i katalogen `me/redovisa` och klona repot till katalogen `theme` och ta bort dess katalog `.git`.

```text
# Du står i katalogen me/redovisa
git clone https://github.com/desinax/theme-dbwebb.se theme
rm -rf theme/.git
```

Du kan nu lägga till katalogen `theme` till ditt eget repo.



Installera utvecklingsmiljön för temat {#install}
-------------------------

För att kompilera temat behöver du installera en utvecklingsmiljö i katalogen, du gör så här.

```text
cd theme
make install
```

Stöd för att jobba med temat finns via Makefilen och make. Skriv kommandot `make` för att se vad du kan göra.

```text
make
```



Bygg temat i theme/ {#buildtheme}
-------------------------

I katalogen `theme/` kan du bygga (kompilera) temat med följande kommando.

```text
# Stå i katalogen theme/
make build
```

Utifrån källkoden i `src/` genereras stylesheets som byggs i katalogen `build/` och slutligen, när kompileringen gått igenom, så placeras resultatet i `htdocs/css/`.

Det genereras en fil `.css` och en minifierad variant som döps till `.min.css`.



Bygg temat i redovisa/ {#buildredovisa}
-------------------------

Din makefile i `redovisa/` har ett target som bygger ditt tema och kopierar de kompilerade stylesheeten till `redovisa/htdocs/css` så att de genererade stylesheeten kan användas direkt.

Så här bygger du temat direkt i din redovisa och löser så att filerna kopieras.

```text
# Stå i katalogen redovisa/
make theme
```

Makefilen går in i katalogen `theme/` och kör `make build` och om det går bra så kopieras filerna från `theme/htdocs/css` till `htdocs/css`.

Du kan aktivera stylen via [styleväljaren](style).



Skapa och bygg eget tema
-------------------------

Temats huvudsakliga stylesheet(s) finns i `theme/src/[temafil].less`. Du kan lägga till egna stylesheets genom att lägga till nya filer överst i katalogen `theme/src`.

Katalogen `theme/src` innehåller underkataloger där det finns less-moduler som kan inkluderas i temat.

Du kan skapa nya tema-filer, till exempel `src/temafil1.less` och `src/temafil2.less`.



Välj standard stylesheet i webbplatsen
-------------------------

Du kan välja ditt eget tema som standard style i din webbplats genom att redigera `config/page.php`.
