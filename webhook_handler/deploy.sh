#!/bin/bash

echo $(date) "# deploy start"

echo "# go to project root folder"
cd ..

#SRC_DIR="website.git"
#DEST_DIR="/www"
#BACKUP_DIR="backups"

#echo "backup old version ..."
#TIMESTAMP=$(date "+%Y-%m-%d_%H-%M")
#NEW_BACKUP_DIR=$BACKUP_DIR/backup_$TIMESTAMP
#mkdir $NEW_BACKUP_DIR
#cp -r $DEST_DIR/* $NEW_BACKUP_DIR

echo "# pull latest version"
git pull origin master

# echo "compiling less to css"

#echo "remove old version"
#rm -rf $DEST_DIR/*

#echo "deploy new version"
#git --work-tree=$DEST_DIR/ --git-dir=$SRC_DIR checkout -f

echo $(date) "# deploy end"
echo