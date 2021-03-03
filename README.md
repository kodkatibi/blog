# How can i use

### Get Clone
`git clone https://github.com/kodkatibi/blog.git`

##Configuration

make an .env file from .env.example and insert mysql credential. then run 

`composer install`

###DB Create

`php artisan migrate --seed`

##Run

`php artisan serve`

and go to [127.0.0.1:8000](http://127.0.0.1:8000)


#Features

Articles can only be deleted based on administrators. Apart from this, admins, moderators or the author who wrote the article will be allowed to delete the article.

###For admin

_user:admin@admin.com_

_pass:admin_


###For Writer

_user:writer@writer.com_

_pass:writer_



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
