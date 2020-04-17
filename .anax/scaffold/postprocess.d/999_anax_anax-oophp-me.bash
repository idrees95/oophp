#!/usr/bin/env bash
#
# anax/anax-oophp-me
#

# Include functions.bash
source .anax/scaffold/functions.bash

# Get items from config/.
rsync -a vendor/anax/anax-oophp-me/config ./

# Get items from content/.
rsync -a vendor/anax/anax-oophp-me/content ./

# Remove items from content/.
#rm -f content/{about,test}.md

# Get items from htdocs/.
rsync -a vendor/anax/anax-oophp-me/htdocs ./
rm htdocs/css/style.css

# # Get/remove items from src/.
# rsync -a vendor/anax/anax-oophp-me/src ./

# Copy the source for Controllers.
#rsync -a vendor/anax/controller/src/Controller/{Development,ErrorHandler,FlatFileContent,Sample}Controller.php ./src/Controller/

# Get the Makefile.
rsync -a vendor/anax/anax-oophp-me/Makefile ./

# Copy the source for Page.
rsync -a vendor/anax/page/src/Page/Page.php ./src/Page/

# Get items from router/.
rsync -a vendor/anax/anax-oophp-me/router ./

# Remove unused routes
rm -f config/router/000_application.php

# Get own copy of view files.
rsync -a vendor/anax/view/view/anax/v2 ./view/anax/

# Change baseTitle
sedi "s/ | Anax/ | oophp/g" config/page.php

# Remove htdocs/cimage/index.html to ease debugging
rm -f htdocs/cimage/index.html
