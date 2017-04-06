FROM amazonlinux
# author
MAINTAINER IYODA Atsushi
# extra metadata
LABEL version="1.0"
LABEL description="apache-php Dockerfile."

RUN yum install -y \
 cowsay \
 lolcat \
 php \
 mysql \
 php-mysql \
 less \
 telnet \
 vim \
 diffutils \
 php-pear \
 php-mbstring

RUN pear install DB
RUN pear install DB_DataObject
RUN pear install Pager

RUN touch /etc/sysconfig/network

COPY php.ini /etc/php.ini
COPY httpd-foreground /usr/local/bin/
COPY my.cnf /etc/my.cnf
COPY mysql.php /usr/share/pear/DB/

COPY httpd.conf.tmpl /etc/httpd/conf/httpd.conf.tmpl
ARG HTDOCS
ENV HTDOCS ${HTDOCS:-\\/var\\/www\\/html}
RUN echo $HTDOCS
RUN cat /etc/httpd/conf/httpd.conf.tmpl | sed -e s/HTDOCS_REPLACE_STRING/$HTDOCS/g > /etc/httpd/conf/httpd.conf

EXPOSE 80
CMD ["httpd-foreground"]
