## create laravel project
```
composer create-project laravel/laravel (your project)
cd (your project)
php artisan serve
```

## laravel breeze
```

```

## directory archtectrure

the web framework is follow the MVC rules

route: `routes\web.php`

model: `app\`

define a controller:
`php artisan make:controller xxxController`
controller: `app\Http\Controllers`



```php
<?php
namespace App\Http\Controllers;
class BlogListController extends Controller{
    private $post_list=[
       [
           'title' => 'python tutorial for beginning',
           'content' => 'this is a python first tutorial',
           'type' => ['python', 'programming']
       ],
       [
           'title' => 'java spring tutorial for beginning',
           'content' => 'spring MVC building',
           'type' => ['java', 'MVC web page', 'programming']
       ],
       [
           'title' => 'php laravel tutorial for beginning',
           'content' => 'how to use php laravel to build web page fastly',
           'type' => ['php', 'MVC web page', 'fastly', 'programming']
       ]
   ];
    public function get_bloglist(){
        return view('bloglist', $this->post_list);
    }
    
    public function get_onepost($id){
        return view('bloc', $this->post_list[$id]);
    }
}
?>

```

include a controller to route `web.php`:
```php
<?php
    use App\Http\Controllers\BlogListController;
    Route::get('/blog_list', [BlogListController::class, 'get_list']);
    Route::get('/blog', [BlogListController::class, 'get_list'])
?>
```


