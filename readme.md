# Getting started
- Run composer install to generate depedencies in vendor folder
- Change/copy .env.example to .env
- Run php artisan key:generate
- Configure .env
- Update Composer Command:
	```
	composer update
	```
- Migrate DB Command:
	```
	php artisan migrate:fresh --seed
	```
- Running:
	```
	http://localhost:8000
	```
- Login AUTH:
	```
	email : admin@example.com
    password : admin 
	```
## ENV Laravel my local

```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:uLKbR7UzagcZnZsYkF6YyQpF++UcfMHjsS1SYe7v0f4=
APP_DEBUG=true
APP_URL=http://localhost
SERVER_PORT=8080

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_sipekom
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```
