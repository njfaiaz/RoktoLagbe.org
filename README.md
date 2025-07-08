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
