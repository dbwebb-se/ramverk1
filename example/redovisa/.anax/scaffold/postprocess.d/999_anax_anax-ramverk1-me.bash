#!/usr/bin/env bash
#
# anax/anax-ramverk1-me
#

# Include functions.bash
source .anax/scaffold/functions.bash

# Get/remove items from config/.
rsync -a vendor/anax/anax-ramverk1-me/config ./
rm -f config/navbar.php

# Get items from content/.
rsync -a vendor/anax/anax-ramverk1-me/content ./

# Remove items from content/.
rm -f content/{about,test}.md

# Get items from htdocs/.
rsync -a vendor/anax/anax-ramverk1-me/htdocs ./
rm htdocs/css/style.css

# Get/remove items from src/.
rsync -a vendor/anax/anax-ramverk1-me/src ./

# Get the Makefile.
rsync -a vendor/anax/anax-ramverk1-me/Makefile ./

# Get own copy of view files.
rsync -a vendor/anax/view/view/anax/v2 ./view/anax/
rsync -a vendor/anax/anax-ramverk1-me/view ./

# Change baseTitle
sedi "s/ | Anax/ | ramverk1/g" config/page.php

# Remove htdocs/cimage/index.html to ease debugging
rm -f htdocs/cimage/index.html

# Get configuration for the cache.
# @TODO Move this to Anax Flat.
rsync -a vendor/anax/cache/config ./

# Get configuration for the flat file content.
# @TODO Move this to Anax Flat.
rsync -a vendor/anax/content/config ./
