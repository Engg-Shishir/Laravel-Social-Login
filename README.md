<h1 style="color:red;background-color:black;padding:10px;text-align:center;font-weight:bold;border:2px solid;">Laravel Socials Login</h1>
<br><br><br>


> ## (●'◡'●) --------- Working Proces --------- (●'◡'●)
<br><br>


+ Install Laravel : `composer create-project laravel/laravel SocialLogin`
+ Install Socialite Package : `composer require laravel/socialite`
+ Install Laravel Ui : `composer require laravel/ui`
+ Install Bootstrap Ui : `php artisan ui bootstrap`
+ Run : `npm install`
+ Run : `npm run dev`
+ Run Project : `php artisan serve`
<br><br>




+ Create Model,Migration,Controller 
 + `php artisan make:Model Social -m`
 ```php
    protected $fillable = [
        'user_id','name','nick_name','email','image',
    ];
 ```
 + `php artisan make:Controller SocialController`
 ```php
    public function up()
    {
        Schema::create('socials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('name');
            $table->string('nick_name');
            $table->string('email')->unique();
            $table->string('image');
        });
    }
 ```
+ `php artisan migrate`
<br><br>

