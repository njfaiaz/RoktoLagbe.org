# Project Requirements Document Link

[Document Link](https://docs.google.com/document/d/1D3g6qL5jJyEPYCOIxoovg6YcYKbPsdcz_mpztRxzCSg/edit?tab=t.0)

# RoktoLagbe.com.bd ইনস্টল করার নিয়ম

```bash
git clone https://github.com/njfaiaz/RoktoLagbe.git
```

```bash
cd RoktoLagbe.com.bd
```

```bash
composer install
```

```bash
npm install
```

```bash
cp .env.example .env
```

Generate a new application key:

```bash
php artisan key:generate
```

```bash
php artisan migrate:fresh --seed
```

```bash
php artisan serve
```

```bash
npm run dev
```

You can now access the server at [http://127.0.0.1:8000](http://127.0.0.1:8000).

# Admin :

username:admin@gmail.com
Pass: Abc@1234

# User :

user@gmail.com
pass:Abc@1234

Step-by-step: আগের কমিটে ফিরে যাওয়া এবং বাকি কমিটগুলো মুছে ফেলা
➊ আগের কমিটে ফিরে যান:
bash
Copy
Edit
git reset --hard ffa19144ad259cb4475010f6b1deb7bf026a9ae9
এটা আপনার লোকাল রেপোকে ঐ কমিটে নিয়ে যাবে এবং তার পরের সব পরিবর্তন মুছে দেবে (hard reset মানে file change-ও মুছে যাবে)।

➋ GitHub এ force push করুন:
bash
Copy
Edit
git push origin branch-name --force
🔁 যদি আপনি production ব্রাঞ্চে কাজ করেন, তাহলে লিখুন:

bash
Copy
Edit
git push origin production --force
⚠️ সতর্কতা
এই কমান্ড ব্যবহার করলে ffa19144 এর পরের সব কমিট GitHub থেকেও মুছে যাবে।

যদি অন্য কেউ এই ব্রাঞ্চে কাজ করে থাকেন, তাহলে তাদের Git history mismatch হবে।

🔒 পরামর্শ (Backup রাখতে চাইলে)
এই কাজের আগে ব্রাঞ্চ ব্যাকআপ করে রাখতে পারেন:

bash
Copy
Edit
git branch backup-before-reset
আপনি চাইলে আমি exact command সাজিয়ে দিতে পারি, শুধু বলুন:

কোন ব্রাঞ্চে কাজ করছেন? (production, main, না অন্য কিছু?)

আপনি চাইছেন সব কিছু hard reset হোক, নাকি ফাইলের পরিবর্তন রয়ে যাক?

APP_NAME=RoktoLagbe.org
APP_ENV=production
APP_KEY=base64:r1s6qKd5yMRqMva924HsXUhNDNmGftZidyV0aIopX2A=
APP_DEBUG=false
APP_URL=https://roktolagbe.org/

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=roktolag**db
DB_USERNAME=roktolag**db
DB_PASSWORD=YFE8PcwV}aD]OJP&

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
MAIL_HOST=mail.roktolagbe.org
MAIL_PORT=465
MAIL_USERNAME=support@roktolagbe.org
MAIL_PASSWORD=Faiaz@1234Rokto
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS=support@roktolagbe.org
MAIL_FROM_NAME="RoktoLagbe.org"

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

FILESYSTEM_DISK=google
GOOGLE_DRIVE_CLIENT_ID=806054580537-fangbk6ncgjt3t2mvdehakupbkf5rmf6.apps.googleusercontent.com
GOOGLE_DRIVE_CLIENT_SECRET=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
GOOGLE_DRIVE_REFRESH_TOKEN=1//048jam0uvDkISCgYIARAAGAQSNwF-L9IrB1h-EM9zdjD4LfQPeW88-PmrK0-FvB65JeAhqlhDVTy1RtheNSjUjIhw1Y_Y12Fwwb0
GOOGLE_DRIVE_FOLDER=Backups

APP_NAME=RoktoLagbe.org
APP_ENV=production
APP_KEY=base64:r1s6qKd5yMRqMva924HsXUhNDNmGftZidyV0aIopX2A=
APP_DEBUG=false
APP_URL=https://roktolagbe.org/

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=roktolag**db
DB_USERNAME=roktolag**db
DB_PASSWORD=YFE8PcwV}aD]OJP&

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
MAIL_HOST=mail.roktolagbe.org
MAIL_PORT=465
MAIL_USERNAME=support@roktolagbe.org
MAIL_PASSWORD=Faiaz@1234Rokto
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS=support@roktolagbe.org
MAIL_FROM_NAME="RoktoLagbe.org"

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

FILESYSTEM_DISK=google
GOOGLE_DRIVE_CLIENT_ID=806054580537-fangbk6ncgjt3t2mvdehakupbkf5rmf6.apps.googleusercontent.com
GOOGLE_DRIVE_CLIENT_SECRET=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
GOOGLE_DRIVE_REFRESH_TOKEN=1//048jam0uvDkISCgYIARAAGAQSNwF-L9IrB1h-EM9zdjD4LfQPeW88-PmrK0-FvB65JeAhqlhDVTy1RtheNSjUjIhw1Y_Y12Fwwb0
GOOGLE_DRIVE_FOLDER=Backups
