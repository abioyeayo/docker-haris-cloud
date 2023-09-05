# docker/apache/Dockerfile
FROM ubuntu/apache2:2.4-22.04_beta

# COPY helloworld.apache.conf /usr/local/apache2/conf/helloworld.apache.conf

# RUN echo "Include /usr/local/apache2/conf/helloworld.apache.conf" \
#     >> /usr/local/apache2/conf/httpd.conf

# RUN apt-get update -y
# RUN apt-get install -y findutils

RUN apt-get update -y
# RUN apt-get upgrade
RUN apt-get install gnupg2 software-properties-common -y
RUN add-apt-repository ppa:linuxuprising/java -y
# RUN apt install openjdk-17-jdk openjdk-17-jre
ENV DEBIAN_FRONTEND noninteractive
ENV DEBIAN_FRONTEND teletype
RUN yes | apt-get install oracle-java17-installer oracle-java17-set-default -y

# WORKDIR usr/local/apache2/htdocs/verification_study/libs/prism-4.8/
# RUN cd usr/local/apache2/htdocs/verification_study/libs/prism-4.8/ && chmod +x install.sh && ./install.sh
# RUN echo bin/prism
# RUN chmod +x install.sh
# RUN ./install.sh

RUN apt install php libapache2-mod-php php-mysql -y


# installing mysql
# RUN apt install mysql-server
# RUN mysql
# RUN echo "ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY '<password>';"
# RUN echo "exit"
# RUN apt install phpmyadmin php-mbstring php-zip php-gd php-json php-curl -y

RUN apt install screen -y

# RUN apt install certbot python3-certbot-apache -y

RUN apt install zip unzip -y
