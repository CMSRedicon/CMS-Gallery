# Redicon CMS Gallery
Module for cmsr allowing for galleries management
## Getting Started
Install CMS Redicon first
### Installing
Add to the composer.json file
```
"redicon/cms_gallery" : "dev-master"
```
Run
```
composer update
```
After successful installation, we launch from the command line
```
php artisan migrate --path=vendor\redicon\cms_gallery\src\database\migrations
php artisan db:seed --class=Redicon\CMS_Gallery\Database\Seeds\DatabaseSeeder
php artisan vendor:publish --provider=Redicon\CMS_Gallery\CmsServiceProvider
```



