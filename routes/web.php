<?php

use Illuminate\Support\Facades\Route;

use Livewire\Volt\Volt;
use App\Http\Middleware\PreventRequestsDuringMaintenance;





// added the middleware but only to this group, the Filament routes are unaffected
Route::middleware([PreventRequestsDuringMaintenance::class])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
});


Volt::route('/', 'home.home');

Volt::route('/contact', 'contact.contact-page')->name('contact');
Volt::route('/apropos-de-nous', 'about.about-page')->name('about');


Volt::route('/blog/{category}/{slug}', 'blog.blog-detail')->name('blog.detail');

Volt::route('/blog/{category}', 'blog.blog-category')->name('blog.category');


Volt::route('/blog', 'blog.blog-page')->name('blog');


Volt::route('/project/details', 'project.project-detail')->name('project.detail');

Volt::route('/project', 'project.project-all')->name('project');

Volt::route('/service/details', 'service.service-details')->name('service.details');

Volt::route('/service', 'service.service-all-page')->name('services');
