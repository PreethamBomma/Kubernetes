
FROM nimmis/apache-php5

ADD ./www /var/www/html

EXPOSE 80

CMD exec /bin/bash -c "service apache2 start"

CMD exec /bin/bash -c "trap : TERM INT; sleep infinity & wait"
