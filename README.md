This is the readme for a talk on Avoiding Unified Data Models. 

# Installation

```
git clone --recursive git@github.com:ShawnMcCool/avoiding-unified-data-models.git
```

Then, make sure that you have modern versions of Virtualbox, Ansible, and Vagrant set up. Don't worry. If you're running Windows or don't want to use the virtual machine then it's not a problem. Just, set up a regular PHP development environment including a MySQL database.

Then, install the composer dependencies.

```
host$ vagrant up
vm$ vagrant ssh
vm$ composer install
```

Set up the framework.

```
host$ vagrant ssh
vm$ cp laravel/.env.example laravel/.env
vm$ php artisan key:generate
vm$ php artisan migrate
```

Then, you can access the page in your browser at [http://localhost:8080](http://localhost:8080)