#!/bin/bash

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
CDIR=$( pwd )
cd $DIR

MAPAS_CONTAINER_NAME=mapas-run

docker exec -it $MAPAS_CONTAINER_NAME sh /var/www/scripts/shell.sh

cd $CDIR