#########################################################
1. How to install this project
#########################################################
1.
2.
3.
#########################################################
2. How this project was created
#########################################################
1. Create brand new folder and open with comand-line terminal
2. Check, if old project has been already run.
docker ps -a
...
docker stop <id>
docker rm <id>

3. delete all images
docker images
docker rmi <image-id>

4. Install Laravel
docker run --rm --interactive --tty --volume "%cd%":/app composer create-project --prefer-dist laravel/laravel ./

5. repeat step 3 (delete all images)

6. copy .docker-compose and .docker directory

7. Edit environment-config (/.env)
and pay attention database configuration, for example

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=secret

8. Run containers
docker-compose up -d

9. install frontend
npm install
npm run dev

#########################################################
3. Create project
#########################################################
1/ Create models & migrations
php artisan make:model Continent -m
php artisan make:model Country -m

rename this migrations and put them before migration 'create_table_User'

php artisan make:model Project -m
php artisan make:migration project_user
php artisan make:model Label -m
php artisan make:migration label_project

2/ Create faktories
php artisan make:factory ContinentFactory
php artisan make:factory CountryFactory
php artisan make:factory ProjectFactory
php artisan make:factory LabelFactory


3/ Create seeders
php artisan make:seeder ContinentSeeder
php artisan make:seeder CountrySeeder
php artisan make:seeder UserSeeder
php artisan make:seeder ProjectSeeder
php artisan make:seeder LabelSeeder

Apply seeder one by one
php artisan db:seed --class=ContinentSeeder
php artisan db:seed --class=UserSeeder
php artisan db:seed --class=ProjectSeeder
php artisan db:seed --class=LabelSeeder

==========================================
Apply all seeders
php artisan migrate:fresh --seed

=================================================
#npm install --save bootstrap
#npm install --save @fortawesome/fontawesome-free
#npm install font-awesome --save
