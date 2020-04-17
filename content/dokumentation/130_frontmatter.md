---
author: mos
revision:
    "2018-10-23": "(A, mos) Första utgåvan."
---
Frontmatter
===========================

Frontmatter är en optionell del i de "flat file content" filer som ligger under `content/`. Frontmattern ger en möjlighet att tillföra extra information till den webbsida som skall renderas.

Informationen i frontmattern kallas också meta-information eller meta data, data om datat. Man kan se frontmattern som ett sätt att hantera data som annars hade legat i en databas.



YAML och JSON som frontmatter {#yaml}
---------------------------

I de exempelfiler som ligger under `content/` används [YAML](http://yaml.org/) som frontmatter. Ramverket stöder också JSON som frontmatter.

Oavsett hur frontmattern skrivs så kan man tänka att dess information lagras i en datastruktur som ramverket senare kan använda när webbsidan renderas.

Du kan alltså lägga godtycklig information i frontmattern, viss information  tar ramverket hänsyn till och annan information kan du lägga där för att senare använda när sidan renderas via templatefilerna.

<!-- någonstans behövs i detalj förklara hur frontmattern tolkas av ramverket -->



Revisionshistorik som frontmatter {#revision}
---------------------------

 Ett exempel på frontmatter kan vara att tillföra en revisionshistorik över dokumentet.
 
 Här är ett exempel på YAML frontmatter som ger (en författare och) en lista över de versioner som ett dokument har haft. Listan är en key/value lista som innehåller ett datum och en sträng som förklarar versionen.
 
 ```yaml
author: mos
revision:
    "2018-09-24": "(C, mos) Genomgång efter ny desktopapplikation av SQLite."
    "2015-10-13": "(B, mos) Stava rätt på filnamn till databasen."
    "2015-06-10": "(A, mos) Första utgåvan för htmlphp version 2 av kursen."
```

När den informationen senare renderas av en templatefil så kan den läggas i slutet av dokumentet och se ut så här.

[FIGURE src=https://dbwebb.se/image/snapht18/revision-history.png?w=w3 caption="Versionshistorik renderad i slutet av ett dokument."]

Även detta dokumentet har en versionshistorik, om du kikar i källkoden för detta dokumentet så kan du se hur frontmattern är definierad överst i dokumentet.
