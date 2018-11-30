<?php
Route::group(['middleware' => ['web','auth', 'language']], function () {    
    /* Artykuły */
    Route::get('/admin/galleries', 'Redicon\CMS_Gallery\App\Http\Controllers\Admin\GalleriesController@index')->name('admin.galleries.index');
});