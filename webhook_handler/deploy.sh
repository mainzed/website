#!/bin/bash

DEST_DIR="/www"

echo $(date) "# deploy start"

echo "# discard changes, if any"
git reset --hard HEAD

echo "# pull latest version"
git pull origin master

# echo "compiling less to css"

echo $(date) "# deploy end"
echo
