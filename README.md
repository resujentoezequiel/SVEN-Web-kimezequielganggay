## Procedure to run this application

- Clone this project
    - git clone --branch master https://github.com/resujentoezequiel/SVEN-Web-kimezequielganggay.git appointment_booking
- Create a new .env file and paste this (Do not change anything in order to run this application properly, especially the host and database):
```
APP_NAME="Appointment Booking System"
APP_ENV=local
APP_KEY=base64:ov5/UVdCRRO4XPy9+j92B0c932W/HbWaez5npMkmHfs=
APP_DEBUG=true
APP_URL=http://localhost:8051
ASSET_URL=http://localhost:8051

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=appointment_booking
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_APP_NAME="${APP_NAME}"
VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

GOOGLE_CLIENT_ID="601910159194-0l5nmvks084l240p76bn3ig61hob0fv0.apps.googleusercontent.com"
GOOGLE_CLIENT_SECRET="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"
GOOGLE_REDIRECT="http://localhost:8051/auth/google/callback"

```
- Create a new database and name it 'appointment_models'
- Run all of these commands:
    - composer install
    - composer update
    - npm install
    - npm update
    - php artisan migrate
    - php artisan key:generate
    - npm run dev
    - php artisan serve --port=8051 (Run this command in another tab alongside 'npm run dev')
- The final step is to go to the browser and enter 'http://localhost:8051/'

## If there’s anything else you need from me, please feel free to let me know.
