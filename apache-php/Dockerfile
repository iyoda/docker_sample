FROM iyoda/apache-php53
# author
MAINTAINER IYODA Atsushi
# extra metadata
LABEL version="1.0"
LABEL description="apache-php Dockerfile."

COPY httpd.conf.tmpl /etc/httpd/conf/httpd.conf.tmpl
ARG HTDOCS
ENV HTDOCS ${HTDOCS:-\\/var\\/www\\/html}
RUN echo $HTDOCS
RUN cat /etc/httpd/conf/httpd.conf.tmpl | sed -e s/HTDOCS_REPLACE_STRING/$HTDOCS/g > /etc/httpd/conf/httpd.conf

EXPOSE 80
CMD ["httpd-foreground"]
