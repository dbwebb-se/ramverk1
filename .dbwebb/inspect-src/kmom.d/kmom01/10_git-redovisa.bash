#!/usr/bin/env bash
. ".dbwebb/inspect-src/kmom.d/functions.bash"

cd me/redovisa || exit

echo "[$ACRONYM]"

lowtag="1.0.0"
hightag="2.0.0"
echo "[tag >= $lowtag and < $hightag ] --------------"
echo $( hasGitTagBetween . $lowtag $hightag )

num=$( git tag | wc -l )
echo "[tags    (#$num) ] --------------------------"
git tag

num=$( git rev-list --all --count )
echo "[commits (#$num) ] --------------------------"
git log --pretty=format:"%h - %an, %ar : %s" | head -5
