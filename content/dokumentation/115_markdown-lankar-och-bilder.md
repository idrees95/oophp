---
author: mos
revision:
    "2019-03-19": "(A, mos) Kopierad från ramverk1 och genomgången."
---
Markdown, länkar och bilder
===========================

Här ser du hur du länkar till andra resurser, via Markdown och hur länkarna tolkas av ramverket.



Länkar {#lank}
---------------------------

Man lägger till länkar i Markdown med konstruktionen `[text som visas](länken)`.

> En absolut länk till [oophp-kursens hemsida](https://dbwebb.se/kurser/oophp), länken är komplett inklusive starten med `http://`.

När man länkar inom ramverket så anger man länken som relativ htdocs-katalogen vilket är rooten av installationen.

* Här är en länk som leder till [bild-katalogen img/](img) som ligger i `htdocs/img`.
* Här är en liknande länk som leder till [style-katalogen css/](css) som ligger i `htdocs/css`.

Man kan länka i stort sett till allt som ligger under katalogen `htdocs`, tänk på att alltid ange den absoluta länken, som utgår från katalogen htdocs.



Länkar till flat file content {#flat}
---------------------------

Du kan också länka direkt till de markdown-filer som ligger under katalogen `content/`. Där döps filerna till `katalog/fil.md`. Du länkar då till `katalog/fil` utan filändelsen. Varje fil blir normalt en egen länk.

Här är en länk som leder till filen `content/om.md`, länken blir [`om`](om).

Här är en länk som leder till [redovisningssidan för kmom01](redovisning/kmom01) som matchas av Markdown-filen `content/redovisning/01_kmom01.md`.

<!-- länka relativt med ./../ -->

<!-- beskriv mer om flat file content och placera i en egen fil -->



Bilder med Markdown {#bilder}
---------------------------

Du kan länka till en bild med Markdown genom att lägga till ett utropstecken framför länken, så här `![Bildtext om vilken inte visas](bildlänk)`.

Du kan länka till bilder med en absolut sökväg såsom `http://` som leder till godtycklig resurs på nätet, eller med `/` som leder till roten av webbserverns installation (vilket _inte är samma_ som katalogen `htdocs`).

Här är en bild som hämtas från webbplatsen dbwebb.se.

![Bild på gammal dbwebb-server](https://dbwebb.se/image/fsync-giving-up-on-dirty.jpg?width=740)

Här är en bild som ligger lokalt i `img/`

![Bild på eld](img/eld.jpg)



Bilder med Cimage {#cimage}
---------------------------

Du kan använda [Cimage](https://cimage.se) för att hantera bilder. Alla bilder ligger normalt under katalogen `img/`, till exempel eld-bilden som du ser ovan, den har länken [`img/eld.jpg`](img/eld.jpg). Du kan processa den bilden med Cimage genom att byta ut `img/` mot `image/` så att länken blir `image/eld.jpg`.

Här är en bild processad med Cimage, en svartvit variant av eld-bilden.

![Bild på svartvit eld](image/eld.jpg?filter=grayscale)
