---
author: mos
revision:
    "2019-03-19": "(A, mos) Kopierad från ramverk1 och genomgången."
---
Markdown
===========================

Denna filen är tänkt som en exempelfil för att visa olika Markdown-konstruktioner som stöds i ramverket.



Allmänt
---------------------------

Markdown är ett filformat som krediteras John Gruber som har skrivit [en introduktion till Markdown](https://daringfireball.net/projects/markdown/basics).

I ramverket används en PHP-parser för Markdown som heter [PHP Markdown](https://packagist.org/packages/michelf/php-markdown) Av Michel Fortin.

Som ett extra tillägg till Markdown Har Michel utvecklat stöd för [PHP Markdown Extra](https://michelf.ca/projects/php-markdown/extra/).

Du kan vända dig till dessa resurser för att få allmän kunskap om hur man skriver Markdown.

<!-- Lägg till allmän kunskap om hur man skriver markdown -->



Skriv HTML i Markdown
---------------------------

Du kan skriva ren HTML i Markdown, det kan vara bra när man vill göra något extra utan att känna sig hämmad av de begränsningar som Markdown har.

Här är ett par divar med bakgrundsfärg.

<div style="overflow: auto;">
    <div style=" background-color: #f00; width: 100px; height: 100px; float: left; margin: 8px; border: 1px solid #ccc;"></div>
    <div style=" background-color: #0f0; width: 100px; height: 100px; float: left; margin: 8px; border: 1px solid #ccc;"></div>
    <div style=" background-color: #00f; width: 100px; height: 100px; float: left; margin: 8px; border: 1px solid #ccc;"></div>
    <div style=" background-color: #333; width: 100px; height: 100px; float: left; margin: 8px; border: 1px solid #ccc;"></div>
    <div style=" background-color: #999; width: 100px; height: 100px; float: left; margin: 8px; border: 1px solid #ccc;"></div>
    <div style=" background-color: #fff; width: 100px; height: 100px; float: left; margin: 8px; border: 1px solid #ccc;"></div>
</div>
