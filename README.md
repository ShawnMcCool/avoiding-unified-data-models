This repo is functional source code for the talk on Avoiding Unified Data Models. 

[Find the talk here.](https://www.youtube.com/watch?v=jPnhTxRfOVk)

# Source Examples 

These are the files referenced in the slides in the order that they appear in the talk.

- https://github.com/ShawnMcCool/avoiding-unified-data-models/blob/master/database/migrations/2014_10_12_000000_create_user_authentication_and_password_reset_tables.php
- https://github.com/ShawnMcCool/avoiding-unified-data-models/blob/master/app/UserAuthentication.php
- https://github.com/ShawnMcCool/avoiding-unified-data-models/blob/master/app/Http/Controllers/TalkSubmission/Welcome.php
- https://github.com/ShawnMcCool/avoiding-unified-data-models/blob/master/app/TalkSubmission/Speaker.php
- https://github.com/ShawnMcCool/avoiding-unified-data-models/blob/master/database/migrations/2018_03_09_124503_talk_approval_organizers.php
- https://github.com/ShawnMcCool/avoiding-unified-data-models/blob/master/database/migrations/2018_03_09_124722_talk_approval_talks.php
- https://github.com/ShawnMcCool/avoiding-unified-data-models/blob/master/app/Http/Controllers/TalkApproval/ApproveTalks.php
- https://github.com/ShawnMcCool/avoiding-unified-data-models/blob/master/app/Events/TalkWasSubmitted.php
- https://github.com/ShawnMcCool/avoiding-unified-data-models/blob/master/app/TalkSubmission/Talk.php
- https://github.com/ShawnMcCool/avoiding-unified-data-models/blob/master/app/TalkApproval/RegisterSubmittedTalk.php

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
vm$ cp .env.example .env
vm$ php artisan key:generate
vm$ php artisan migrate
```

Then, you can access the page in your browser at [http://localhost:8080](http://localhost:8080)
