<?php

Route::group(['middleware' => ['web']], function(){
    Route::get('/', [
        'uses' => 'PostController@getBlogIndex',
        'as' => 'blog/index'
    ]);
    
    Route::get('/blog', [
        'uses' => 'PostController@getBlogIndex2',
        'as' => 'blog/index'
    ]);
    
    Route::get('/blog/{post_id}&{end}', [
        'uses' => 'PostController@getSinglePost',
        'as' => 'blog/single'
    ]);
    
    /* other routes*/
    
    Route::get('/about', function(){
       return view('frontend/other/about')->renderSections()['content']; 
    })->name('about');
    
     Route::get('/contact', [
       'uses' => 'contactMessageController@getContactIndex',
       'as' => 'contact' 
    ]);
    
    
    Route::group([
        'prefix' => '/admin'
    ], function(){
        Route::get('/',[
            'uses' => 'AdminController@getIndex',
            'as' => 'admin/index'
        ]);
        
        Route::get('/blog/',[
            'uses' => 'AdminController@getAllPosts',
            'as' => 'admin/blog/index'
        ]);
        
        Route::get('/blog/post/create', [
            'uses' => 'postController@getCreatePost',
            'as' => 'admin/blog/post/create'
        ]);
        
        Route::post('/blog/post/create',[
            'uses' => 'postController@postCreatePost',
            'as' => 'admin/blog/post/create'
        ]);
       
        Route::get('blog/post/{post_id}&{end}',[
            'uses' => 'postController@getSinglePost',
            'as' => 'admin/blog/post/'
        ]);
        
        Route::get('blog/post/{post_id}/edit',[
            'uses' => 'postController@editPost',
            'as' => 'admin/blog/post/edit'
        ]);
        
        Route::get('blog/post/{post_id}',[
            'uses' => 'postController@deletePost',
            'as' => 'admin/blog/post/delete'
        ]);
        
         Route::post('blog/post/update',[
            'uses' => 'postController@submitPost',
            'as' => 'admin/blog/post/update'
        ]);
       
    });
    
});
?>