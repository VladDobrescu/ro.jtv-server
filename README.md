### Deployment

_This instruction set is geard towards ubuntu 14.04_

We'll need two servers, one for basic http stuff and one for rtmp/hls. Since we are going to
compile nginx with the rtmp plugin ourserlves, we're going to make nginx the media streaming server and apache2 the http server.

Because the default rtmp port is 1935 and we won't be using any http blocks in nginx, there will be no conflicts
between nginx and apache.

##### Updates
``sudo apt-get update &amp; sudo apt-get upgrade -y``

##### Laravel enviroment
######MYSQL-SERVER

``sudo apt-get install mysql-server``

The MySQL database software is now installed, but its configuration is not yet complete.

To secure the installation, MySQL comes with a script that will ask whether we want to modify some insecure defaults. Initiate the script by typing:

``sudo mysql_secure_installation``


To create the database, run ``sudo mysql`` and ``CREATE DATABASE <dbname>;``

######PHP

``sudo apt-get install software-properties-common python-software-properties``

``sudo add-apt-repository -y ppa:ondrej/php``

``sudo apt-get update``

``sudo apt-get install php7.2 php7.2-cli php7.2-common``

``sudo apt-get install php7.2-curl php7.2-gd php7.2-json php7.2-mbstring php7.2-intl php7.2-mysql php7.2-xml php7.2-zip`` 

If the server had an older version of php, let's say 7.0, disable it with ``a2dismod php7.0`` and enable
7.2 with ``a2enmod php7.2``

Restart apache with ``sudo service apache2 restart``