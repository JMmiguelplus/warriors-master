#!/bin/bash

sudo -u postgres -- psql -d registros -c $hola=('select * from datos');


SUBJECT="Prueba de script"
RECEIVER="dsoporte3@warriorslabs.com"
TEXT=$hola

SERVER_PORT="linx4.dscorp.com.mx:26"
SENDER="desarrollo6@warriorslabs.com"
USER="desarrollo6@warriorslabs.com"
PASSWORD="D3s@rr01106WL2018"

swaks --to $RECEIVER --from $SENDER --server $SERVER_PORT --auth LOGIN --auth-user $USER --auth-password $PASSWORD -tls --data "Date: %DATE%\nTo: %TO_ADDRESS%\nFrom: %FROM_ADDRESS%\nSubject: $SUBJECT %DATE%\nX-Mailer: swaks v$p_versionjetmore.org/john/code/swaks/\n%NEW_HEADERS%\n $TEXT \n"
