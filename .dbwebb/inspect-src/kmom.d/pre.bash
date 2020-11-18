#!/usr/bin/env bash
#
# Script run BEFORE kmom specific scripts.
# Put tests here that applies to all kmoms.
#
# Available (and usable) data:
#   $COURSE
#   $KMOM
#   $ACRONYM
#   $REDOVISA_HTTP_PREFIX
#   $REDOVISA_HTTP_POSTFIX
#   eval "$BROWSER" "$url" &
#
printf ">>> -------------- Pre (all kmoms) ----------------------\n"

# # Open localhost:1337 in browser
# printf "Open localhost:1337/eshop/index in browser\n"
# eval "$BROWSER" "http://127.0.0.1:1337/eshop/index" &

# Open me/redovisa
url="$REDOVISA_HTTP_PREFIX/~$ACRONYM/dbwebb-kurser/$COURSE/$REDOVISA_HTTP_POSTFIX/htdocs"
openUrl "$url"

# Code coverage
url="$url/../build/coverage/index.html"
openUrl "$url"

# Open github
url=$( cd me/redovisa && git config --get remote.origin.url )
openUrl "$url"

# Do different things depending on kmom
case $KMOM in
    kmom01)
    ;;
    kmom03)
    ;;
    kmom10)
    ;;
esac

echo
