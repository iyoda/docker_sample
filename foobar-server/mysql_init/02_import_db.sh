#!/bin/sh
cd /docker-entrypoint-initdb.d/
echo "import fuga..."
gzip -dc ./fuga.dump.gz | mysql --socket=/tmp/mysql.sock -u root -ppassword fuga

echo "import fuga2..."
gzip -dc ./fuga2.dump.gz | mysql --socket=/tmp/mysql.sock -u root -ppassword fuga2

echo "done."
