<h1>laravel Progression</h1>

24/10/25 started on working on my end project started working
on de navigation used the laracast tutorial 

27-10- started making a form to collect data had some problems
with the before tutorials my Norton was blocking scripting why it took 
so long to go further 
did the day 7 tuto from laracast write data and it was hardcoded 

28/10/25 database is made and isn't hardcoded on web.php
started to learn how to add a new row in database with "php artisan tinker"
met php artisan tinker learned about eloquent 

with the function 
App\Models\Brand::create(['title' =>' cfmoto','category_id' => 'sport']);

and if ive want to delete all row ive do App\Models\Brand::query()->delete();
or if you want to specify $brand = App\Models\Brand::find(4);
$brand->delete();





