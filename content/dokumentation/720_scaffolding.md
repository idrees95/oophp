---
author: mos
revision:
    "2019-03-21": "(A, mos) Första utgåvan."
---
Scaffolding
==========================

Scaffolding handlar om att generera källkod, moduler och/eller kompletta installationer av en programvara. Det handlar om att automatisera sånt man gör ofta.

Exempelkatalogen `example/redovisa` är scaffoldad, här kan du se hur du kan scaffolda fram en egen variant.



Scaffolda ramverk1-me-v2
--------------------------

Så här kan du själv scaffolda en version av den webbplats som ligger på `example/redovisa`. Du kan göra det för att testa hur det fungerar och bekanta dig med processen för scaffolding.

Först kollar vi detaljer om den template som används för att scaffolda webbplatsen.

```text
anax list 
anax list oophp-me 
```

Sedan kan vi scaffolda en webbplats baserat på templaten "oophp-me" till katalogen `me/kmom10/proj`.

```text
# Gå till katalogen me/kmom10
anax create proj oophp-me 
```

Du får fel om katalogen `proj` redan finns, då kan du lägga till ett `--force` eller `-f` för att skriva över det sm ligger i katalogen. Eller så väljer du ett annat katalognamn.

När processen är klar kan du öppna webbläsaren mot `me/kmom10/proj/htdocs`.
