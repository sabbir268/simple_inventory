
### 01 - clone "Simple_inventory" from github
```
git clone https://github.com/sabbir268/simple_inventory.git
```
### 02 - Create database 

### 03 - Rename .env.example to .env
### 04 - Put database credentials on .env file
```sh
DB_DATABASE= your_db_name
DB_USERNAME=your_db_user_name
DB_PASSWORD=your_db_password
```
### 05 - Migrate all table
```sh
run> php artisan migrate
```
### 06 - Insert demo data (seed data)
```sh
run> php artisan db:seed
```
### 07 - run laravel project
```sh
run> php artisan serve
```

### 8 - open your browser and go to ``` http://127.0.0.1:8000 ```

### 9 - Demo Login credentials 
```sh
For Admin: 
email: admin@gmail.com
password: 12345678


For Supplier: 
email: supplier@gmail.com
password: 12345678
```


## Thank you

