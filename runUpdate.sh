#!/bin/sh
sudo rm -R /var/www/zepomart_website
sudo git clone https://github.com/devmitulpatel/zepomart /var/www/zepomart_website
sudo cp /var/www/zepomart_website/.env.dev /var/www/zepomart_website/.env
sudo chown www-data:www-data -R /var/www/zepomart_website
sudo chmod -R 755 /var/www/zepomart_website
sudo chmod -R 777 /var/www/zepomart_website/storage
sudo chmod -R 777 /var/www/zepomart_website/bootstrap/cache
sudo chmod -R 777 /var/www/zepomart_website/database/sqlite/zepomart
sudo chmod -R 777 /var/www/zepomart_website/database/sqlite/crowdtize


