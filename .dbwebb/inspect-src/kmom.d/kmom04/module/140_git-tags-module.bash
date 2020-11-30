#!/usr/bin/env bash
. ".dbwebb/inspect-src/kmom.d/functions.bash"

cd me/module || exit

num=$( git tag | wc -l )
echo "[$ACRONYM] tags=$num"
git tag

req=1
(( $num >= $req ))
doLog $? "me/module: Number of tags = $num (>$req)"
