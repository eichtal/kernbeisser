#!/bin/bash
# Dieser Skript zieht einen Dump aus der Datenbank und legt diesen
# im Wordpress-Verzeichnis ab. Anschließend wird  das komplette
# Wordpress-Verzeichnis als Archiv gepackt und im Verzeichnis
# ~/wp_backup hinterlegt.
#
# Als Eingabe erwartet der Skript ein Stichwort zur Kennzeichnung
# des Archivs, z.B. ./wpbackup erstinstallation

NOW=$(date +"%Y-%m-%d-%H%M")
FILE="$NOW.$1.tar.gz"

BACKUP_DIR="/home/$USER/wp_backup"
WP_DIR="html/wordpress"
WWW_DIR="/var/www/virtual/$USER/$WP_DIR"

DB_USER=$USER
DB_NAME=$USER
DB_FILE="$NOW.$1.sql"

test -d $BACKUP_DIR || mkdir $BACKUP_DIR
mkdir $WWW_DIR/database_backup
mysqldump -u$DB_USER $DB_NAME > /var/www/virtual/$USER/$WP_DIR/database_backup/$DB_FILE
tar -C $WWW_DIR -vczf $BACKUP_DIR/$FILE .
rm -r $WWW_DIR/database_backup
