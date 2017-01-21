#!/bin/bash
# Dieser Skript zieht einen Dump aus der Datenbank und legt diesen
# im Wordpress-Verzeichnis ab. Anschließend wird das komplette
# Wordpress-Verzeichnis als Archiv gepackt und im Verzeichnis
# ~/wp_backup hinterlegt.
#
# Als Eingabe erwartet der Skript ein Stichwort zur Kennzeichnung
# des Archivs, z.B. ./wpbackup erstinstallation
#
# Standardmäßig wird die wp-config.php nicht mitgespeichert im Backup,
# da hier Passwörter hinterlegt sind. Mit dem Schalter "wp-config" kann
# diese in das Backup eingeschlossen werden, z.B.
# ./wpbackup erstinstallation wp-config
#


# Variablen für Dateinamen und Pfade anlegen
# $1 enthält eine Kurzbezeichnung zur Charakterisierung des Backups
NOW=$(date +"%Y-%m-%d-%H%M")
FILE="$NOW.$1.tar.gz"

BACKUP_DIR="/home/$USER/wp_backup"
WP_DIR="html/wordpress"
WWW_DIR="/var/www/virtual/$USER/$WP_DIR"

DB_USER=$USER
DB_NAME=$USER
DB_FILE="$NOW.$1.sql"


# Überprüfen, ob Backup-Verzeichnis vorhanden ist und ggf. anlegen
test -d $BACKUP_DIR || mkdir $BACKUP_DIR

# Verzeichnis für temporäre Zwischenspeicherung des Backups anlegen
mkdir $WWW_DIR/database_backup

# Kopie der Datenbank im Wordpress-Verzeichnis anlegen
mysqldump -u $DB_USER $DB_NAME > /var/www/virtual/$USER/$WP_DIR/database_backup/$DB_FILE

# Prüfen, ob die wp-config mitgespeichert werden soll
if [ "$2" == "wp-config" ]
	then
		tar -C $WWW_DIR -vczf $BACKUP_DIR/$FILE .
	else
		tar -C $WWW_DIR -vczf $BACKUP_DIR/$FILE . --exclude="wp-config.php"
fi

# Temporäres Verzeichnis wieder löschen
rm -r $WWW_DIR/database_backup

