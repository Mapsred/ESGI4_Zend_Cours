# Zend Development

## Using docker-compose

copy ``docker-compose.yml.dist`` to ``docker-compose.yml``

Replace what you want to

Run ``docker-compose up`` to build the network

copy ``.env.dist`` to ``.env``

Fill the parameters

Run ``docker-compose exec php-fpm composer install``

### References 

https://github.com/engineor/esgi-zf3-december-2017