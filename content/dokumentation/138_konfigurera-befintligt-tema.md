---
author: mos
revision:
    "2019-03-21": "(A, mos) Första utgåvan."
---
Konfigurera befintligt tema
==========================

Det finns ett par saker som du kan göra för att enkelt anpassa nuvarande tema via konfigurationer eller genom att addera mer style.



Konfigurera temat via config/page.php {#page}
--------------------------

Filen `config/page.php` innehåller den standardlayout som används till webbplatsen tillsammans med ett antal vyer som alltid renderas tillsammans med varje sida. Det är vyer för header, footer, navbar och liknade.

Du kan redigera sidans baslayout, vilka vyer som används för webbsidornas standardutseende och vissa av bilderna som visas.



Lägg till en ny stylesheet {#ny}
--------------------------

Via filen `config/page.php` kan du lägga till fler stylesheets och i dem redigera nuvaranade stylesheet genom att tillföra regler och eventuellt skriva över regler som redan finns. Det är ett enkelt sätt at tgöra små justeringar med liten insats.
