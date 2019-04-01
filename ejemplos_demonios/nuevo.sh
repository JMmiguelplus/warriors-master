#!/bin/bash

SUBJECT="Licencia warriors"

SERVER_PORT="linx4.dscorp.com.mx:26"
SENDER="desarrollo6@warriorslabs.com"
USER="desarrollo6@warriorslabs.com"
PASSWORD="D3s@rr01106WL2018"

retro="-u postgres -- psql -d registros -t -b"

while read -a row
do
    #echo "( `date --date=2019-04-21 +%s`-`date -u --date=2019-03-31 +%s`)/86400" | bc
    FF=$(date --date=${row[2]:6:4}-${row[2]:3:2}-${row[2]:0:2} +%s)
    FH=$(date +%s)
    RECEIVER=${row[4]}
    #TR="(`date -u --date=$FF +%s`-`date -u --date=$FH +%s`)/86400" | bc
    TR=$(( (FF - FH) / 86400 ))
    if [ $TR -lt '30' ]
    then
      TEXT="Te quedan menos de 30 dias de tu licencia."
      swaks --to $RECEIVER --from $SENDER --server $SERVER_PORT --auth LOGIN --auth-user $USER --auth-password $PASSWORD -tls --data "Date: %DATE%\nTo: %TO_ADDRESS%\nFrom: %FROM_ADDRESS%\nSubject: $SUBJECT %DATE%\nX-Mailer: swaks v$p_versionjetmore.org/john/code/swaks/\n%NEW_HEADERS%\n $TEXT \n"
    fi
done < <(echo "SELECT fecha_inicio,fecha_final,email FROM datos where not fecha_inicio is null" | sudo $retro)

#xdg-open http://localhost/warriors-one/warriors-master-master/Active%20licenses/?id=Modal
