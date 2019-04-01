#!/bin/bash

# retro="-u postgres -- psql -d  registros"
#
# echo $retro
#
# while read -a row
# do
#     echo "( `date -u --date={row[12]} +%s` )"
# done < <(echo "SELECT * FROM datos" | sudo $retro)
qw="26-03-2019"
nf=${qw:6:4}-${qw:3:2}-${qw:0:2}

#Ff=`date --date=26-03-2019 +%m-%d-%Y`

echo $nf
