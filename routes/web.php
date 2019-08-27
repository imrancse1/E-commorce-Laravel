<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', 'StudentController@index' );
//<!--ai 3 vabe likha jai kaj same e sobar  Route::get('/', 'StudentController@index' ); mathod a views floder ar morde kaj korte hobe-->
/*{{--<a href="<?php echo URL::to('/');?>">Home</a>--}}*/
/*{{--<!--<a href="--><?php //echo URL('/');?><!--">Home</a>-->--}}*/
/*{{--<!--<a href="--><?php //echo route('/');?><!--">Home</a>-->--}}*/
/*{{--<!--<a href="--><?php //echo route('/about');?><!--">About</a>-->--}}*/
//Route::get('/', [
//    'uses' => 'StudentController@index',
//        'as'=>'/'
//    ]
//     );
//Route::get('/about', [
//        'uses' => 'StudentController@add',
//        'as'=>'/about'
//    ]
//);
//
//Route::get('/Bitm',function () {
//    return 'Hello Bitm';
//});
//
//Route::get('/Basic/Bitm',function () {
//    return 'Hello Bitm';
//});   Start Now........................................

Route::get('/',[
   'uses'=>'NewShopController@index',
   'as'=>'/'
]);

Route::get('/category-product/{id}',[
    'uses'=>'NewShopController@categoryProduct',
    'as'=>'category-product'
]);

Route::get('/product-details/{id}/{name}',[
    'uses'=>'NewShopController@productDetails',
    'as'=>'product-details'
]);

Route::get('/mail-us',[
    'uses'=>'NewShopController@mailUs',
    'as'=>'mail-us'
]);


Route::get('/category/add', [
    'uses'  =>  'CategoryController@index',
    'as'    =>  'add-category'
]);

Route::post('/category/save', [
    'uses'  =>  'CategoryController@saveCategoryInfo',
    'as'    =>  'new-category'
]);


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//category info
//Route::get('/category/add', 'CategoryController@addCategory')->name('add-category');

Route::get('/category/add',[
    'uses'=>'CategoryController@addCategory',
    'as'=>'add-category'
]);

Route::get('/category/manage',[
    'uses'=>'CategoryController@manageCategory',
    'as'=>'manage-category'
]);

Route::post('/category/save',[
    'uses'=>'CategoryController@saveCategory',
    'as'=>'new-category'
]);

Route::get('/category/unpublished/{id}',[
    'uses'=>'CategoryController@unpublishedCategory',
    'as'=>'unpublished-category'
]);

Route::get('/category/published/{id}',[
    'uses'=>'CategoryController@publishedCategory',
    'as'=>'published-category'
]);

Route::get('/category/edit/{id}',[
    'uses'=>'CategoryController@editCategory',
    'as'=>'edit-category'
]);

Route::post('/category/update',[
    'uses'=>'CategoryController@updateCategory',
    'as'=>'update-category'
]);

Route::get('/category/delete/{id}',[
    'uses'=>'CategoryController@deleteCategory',
    'as'=>'delete-category'
]);

Route::get('/brand/add',[
    'uses'=>'BrandController@index',
    'as'=>'add-brand'
]);

Route::post('/brand/save',[
    'uses'=>'BrandController@saveBrand',
    'as'=>'new-brand'
]);

Route::get('/brand/manage',[
    'uses'=>'BrandController@manageBrand',
    'as'=>'manage-brand'
]);

Route::get('/brand/delete/{id}',[
    'uses'=>'BrandController@deleteBrand',
    'as'=>'delete-brand'
]);

Route::get('/brand/edit/{id}',[
    'uses'=>'BrandController@editBrand',
    'as'=>'edit-brand'
]);

Route::post('/brand/update',[
    'uses'=>'BrandController@updateBrand',
    'as'=>'update-brand'
]);

Route::get('/brand/unpublished/{id}',[
    'uses'=>'BrandController@unpublishedBrand',
    'as'=>'unpublished-brand'
]);

Route::get('/brand/published/{id}',[
    'uses'=>'BrandController@publishedBrand',
    'as'=>'published-brand'
]);


Route::get('/product/add',[
    'uses'=>'ProductController@index',
    'as'=>'add-product'
]);

Route::post('/product/save',[
    'uses'=>'ProductController@saveProduct',
    'as'=>'new-product'
]);


Route::get('/product/manage',[
    'uses'=>'ProductController@manageProduct',
    'as'=>'manage-product'
]);

Route::get('/product/edit/{id}',[
    'uses'=>'ProductController@editProduct',
    'as'=>'eidt-product'
]);

Route::post('/product/update',[
    'uses'=>'ProductController@updateProduct',
    'as'=>'update-product'
]);

Route::post('/cart/add',[
    'uses'=>'CartController@addToCart',
    'as'=>'add-to-cart'
]);

Route::get('/cart/show ',[
    'uses'=>'CartController@showCart',
    'as'=>'show-cart'
]);



