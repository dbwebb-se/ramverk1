#!/usr/bin/env bash
#
# Update me/redovisa with an updated example/redovisa.
#

#
# Error message and exit.
#
function die
{
    echo "$1"
    exit 2
}



#
# Main
#
function main
{
    local from="example/redovisa/"
    local to="me/redovisa/"

    echo "Migrate '$from' to '$to'."

    [ -d $from ] || die "Missing directory '$to'"
    [ -d $to ] || die "Missing directory '$to'"

    # content/verktyg
    rsync -av $from/content/verktyg $to/content/

    # dev files
    rsync -av $from/.phpmd.xml $to/

    # src files
    rsync -av $from/src/Controller/SampleController.php $to/src/Controller/
    rsync -av $from/src/Navigation $to/src/
    rsync -av $from/src/StyleChooser $to/src/

    # view files
    rsync -av $from/view/anax/v2/columns/multiple_columns.php $to/view/anax/v2/columns/
    rsync -av $from/view/anax/v2/layout/dbwebb_se.php $to/view/anax/v2/layout/
    rsync -av $from/view/anax/v2/toc-list/default.php $to/view/anax/v2/toc-list/
}

main
