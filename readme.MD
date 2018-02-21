#Admissional Exam

Basic domain test of a PHP project connected to a MongoDB database.

* Clone this repository
* Inside the project run the following commands

```
composer install
npm install
npm run dev
```

* To start the server just run in separately terminal instances:

```
php artisan serve
npm run watch
```

####This project need 2 collections of data and a database instance running (MongoDB pre configured):

* cars ['name', 'owner', 'color', 'manufacturer']
* spaceships ['name', 'capacity', 'manufacturer']

####MongoDB local config:

DATABASE exam
USERNAME ''
PASSWORD ''

In resources folder has two json files with the needed data ready for insert in MongoDB

##**That's it. Have fun and may the Force be with you!**