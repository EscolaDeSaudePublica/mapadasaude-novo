#!/bin/bash

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
CDIR=$( pwd )
cd $DIR

MAPAS_CONTAINER_NAME=mapas-run

sudo docker exec -i $MAPAS_CONTAINER_NAME "/var/www/scripts/compile-sass.sh"

cd $CDIR
