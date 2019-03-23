
#!/bin/bash

retro="-u postgres -- psql -d  registros"

echo $retro

while read -a row
do
    echo "..${row[12]}.."
done < <(echo "SELECT * FROM datos" | sudo $retro)

#xdg-open http://localhost/warriors-one/warriors-master-master/Active%20licenses/?id=Modal
