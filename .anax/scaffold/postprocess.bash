#!/usr/bin/env bash
#
# Postprocess scaffold
#

# Include ./functions.bash
source .anax/scaffold/functions.bash

# Install using composer
composer install --no-dev

# Get scaffolding scripts from Anax oophp me
rsync -a vendor/anax/anax-oophp-me/.anax/scaffold/postprocess.d .anax/scaffold/

# Run scaffolding scripts
echo -n "Processing scaffolding scripts: "
for file in .anax/scaffold/postprocess.d/*.bash; do
    echo -n "."
    #echo "$file"
    bash "$file"
done
echo " done."
