#!/bin/bash

DEST_DIR="/www"

echo $(date) "# deploy start"

echo "# go to project root folder"
cd ..

echo "# pull latest version"
git pull origin master

# echo "compiling less to css"

echo "# remove old version"
rm -rf $DEST_DIR/*

echo $(date) "# deploy end"
echo