<?php



Route::get('/', [
    'uses'=>'PagesController@indexPage',
    'as'=>'welcome'
]);

Route::get('delivery', [
    'uses'=>'PagesController@deliveryPage',
    'as'=>'delivery'
]);


Route::get('about_us', [
    'uses'=>'PagesController@aboutUsPage',
    'as'=>'about_us'
]);

Route::get('book/{id}', [
    'uses'=>'PagesController@showBook',
    'as'=>'book'
]);


Route::group(['middleware'=>'web'], function (){

    Route::get('sign_in', [
        'uses'=>'PagesController@signInPage',
        'as'=>'sign_in_page'
    ]);
    Route::post('sign_in', [
        'uses'=>'UsersController@signIn',
        'as'=>'sign_in'
    ]);

    Route::get('sign_up', [
        'uses'=>'PagesController@signUpPage',
        'as'=>'sign_up_page'
    ]);
    Route::post('sign_up', [
        'uses'=>'UsersController@signUp',
        'as'=>'sign_up'
    ]);

    Route::get('logout', [
        'uses'=>'UsersController@logOut',
        'as'=>'logout'
    ]);

    Route::get('cart', [
        'uses'=>'UsersController@shoppingCart',
        'as'=>'cart',
    ]);

});


Route::group(['prefix'=>'admin'], function (){

    Route::get('/', [
        'uses'=>'PagesController@admin',
        'as'=>'admin'
    ]);

    Route::post('/', [
        'uses'=>'UsersController@adminAuth',
        'as'=>'admin_auth'
    ]);

    Route::get('panel', [
        'uses'=>'PagesController@adminPanel',
        'as'=>'admin_panel',
        'middleware'=>'admin'
    ]);

    Route::post('panel', [
        'uses'=>'BooksController@addNewBook',
        'as'=>'add_new_book'
    ]);

});