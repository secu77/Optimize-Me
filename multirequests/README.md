# Antes de nada ...

## Instalación:

Para correr este programa, que esta bajo el proyecto de [**ReactPHP**](https://github.com/reactphp/), a los cuales quiero agradecer enormemente el esfuerzo
y dedicación aportado a la comunidad en sus Librerias para PHP, se requiere tener instalado [**composer**](https://getcomposer.org/doc/03-cli.md), que se
puede instalar de las siguientes formas:

- `sudo apt-get install composer` [Debian y derivados](https://packages.debian.org/stretch/php/composer)
- `sudo pacman -S composer` [Arch Linux](https://www.archlinux.org/packages/extra/any/composer/) 
- `https://getcomposer.org/download/` -> generando el composer.phar.

Composer es un gestor de dependencias muy potente que nos permitirá importar las librerias de las que hagamos uso en nuestro proyecto. Puedes leerte
esta explicación detallada de la importancia y uso de [**Composer**](https://styde.net/que-es-composer-y-como-usarlo/) 


Una vez tengas composer, este proyecto necesitará dos dependencias de ReactPHP. Para importarlas, te situas en la carpeta donde **multirequests** de este
repositorio y ejecutas el siguiente comando:

`composer install`

Entonces composer se encargará de crearte una carpeta muy chula que se llama **vendor** donde figuran todas las librerías que se van a utilizar. Dichas,
librerías no las importa composer mágicamente, sino que estan especificadas en el archivo `composer.json`, que como puedes comprobar, tenemos en este
proyecto. Tiene que tener un aspecto como este:




## Manos a la obra!

Y cuando tengamos las librerías importadas y nuestra carpeta vendor generada, simplemente corremos el pequeño script para asegurarnos de su funcionamiento:

`php falcon.php`


Y a disfrutar! Cualquier problema no olvides abrir un Issue!


## Referencias:

- https://github.com/reactphp/
- https://github.com/reactphp/http
- https://reactphp.org/http/
- https://sergeyzhuk.me/2017/07/26/reactphp-http-client/
- https://styde.net/que-es-composer-y-como-usarlo/
