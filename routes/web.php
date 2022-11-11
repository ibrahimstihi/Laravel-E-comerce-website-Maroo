<?php

use Illuminate\Support\Facades\Route;
use App\Models\product;
use App\Models\category;
use App\Models\slide;
use App\Models\brand;
use App\Http\Controllers\ProductController;

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
// Auth::routes(['login' => false,'register'=>false]);

Route::get('/', function () {
    return view('welcome')->with([
        "products"=>Product::latest()->paginate(8),
        "categories"=>Category::has("products")->get(),
        "brands"=>brand::all(),
        "items"=>\Cart::getContent(),
        "slides"=>Slide::all()->where('is_offer','=',0),
        "offers"=>Slide::all()->where('is_offer','=',1),
    ]);
});

// Login Routes
Route::get('signin', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'] )->name('signin');
Route::get('sign up', [App\Http\Controllers\Auth\RegisterController::class, 'showSignUpForm'] )->name('signup');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'showContact'])->name('show.contact'); 

//Email Verifiv=cation
Route::get('/activate/{code}',[App\Http\Controllers\ActivationController::class, 'activateUserAccount'])->name('user.activate');
Route::get('/activate/{email}',[App\Http\Controllers\ActivationController::class, 'resendActivationCode'])->name('code.resend');
//displayProduct
Route::resource('products',ProductController::class);
Route::get('/products/category/{category}',[App\Http\Controllers\HomeController::class, 'getProductByCategory'])->name('category.products');
Route::get('/products/categorymm/{product}',[App\Http\Controllers\ProductController::class, 'show'])->name('product.show');
//Cart Routes
Route::get('/cart',[App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
Route::post('/add/cart/{product}',[App\Http\Controllers\CartController::class, 'addProductToCart'])->name('cart.add');
Route::put('/update/cart/{product}',[App\Http\Controllers\CartController::class, 'updateProductOnCart'])->name('cart.update');
Route::delete('/remove/cart/{product}',[App\Http\Controllers\CartController::class, 'removeProductOnCart'])->name('cart.remove');

//payment Route
Route::get('payment', [App\Http\Controllers\PaypalController::class, 'handlePayment'])->name('payment');
Route::get('cancel', [App\Http\Controllers\PaypalController::class, 'paymentCancel'])->name('cancel.payment');
Route::get('payment/sucess', [App\Http\Controllers\PaypalController::class, 'paymentSucess'])->name('success.payment');

//COD route
Route::get('COD',  [App\Http\Controllers\OrderController::class, 'createCodOrder'])->name('cod.order');
//admin Routes

//Auth :
Route::get('/admin', [App\Http\Controllers\AdminControler::class, 'index'])->name('admin.index');
Route::get('/admin/login', [App\Http\Controllers\AdminControler::class, 'showAdminLoginForm'])->name('admin.login');
Route::post('/admin/login', [App\Http\Controllers\AdminControler::class, 'adminLogin'])->name('admin.post.login');
Route::get('Logout', [App\Http\Controllers\AdminControler::class, 'adminLogout'])->name('admin.logout');

//Dashboard
Route::prefix('admin/dashboard')->group(function () {
    //Product Dashboard Route
    Route::get('Products', [App\Http\Controllers\AdminControler::class, 'editProduct'])->name('edit.product');
    Route::get('Add Product', [App\Http\Controllers\ProductController::class, 'create'])->name('add.product');
    Route::delete('Product/Delete/{product}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('delete.product');
    Route::get('Update Product/{product}', [App\Http\Controllers\ProductController::class, 'edit'])->name('update.product');
    Route::put('Post Update Product/{product}', [App\Http\Controllers\ProductController::class, 'update'])->name('post.update.product');
    Route::post('create Product/', [App\Http\Controllers\ProductController::class, 'store'])->name('store.product');


    Route::get('Paypal Order', [App\Http\Controllers\AdminControler::class, 'getPaypalOrder'])->name('paypal.order');
    Route::put('Paypal Order/Update/{order}', [App\Http\Controllers\OrderController::class, 'update'])->name('update.order');
    Route::delete('Paypal Order/Delete/{order}', [App\Http\Controllers\OrderController::class, 'destroy'])->name('delete.order');
    Route::get('COD Order', [App\Http\Controllers\AdminControler::class, 'getCodOrder'])->name('showCod.order');

    Route::get('Categories', [App\Http\Controllers\AdminControler::class, 'editCategory'])->name('edit.category');
    Route::get('Update Category/{category}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('update.category');
    Route::put('Post Update Categoory/{category}', [App\Http\Controllers\CategoryController::class, 'update'])->name('post.update.category');
    Route::get('Add Category', [App\Http\Controllers\CategoryController::class, 'create'])->name('add.category');
    Route::post('create Category/', [App\Http\Controllers\CategoryController::class, 'store'])->name('store.category');
    Route::delete('Delete Category/{category}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('delete.category');

    Route::get('Add New slide', [App\Http\Controllers\SlideController::class, 'addSlide'])->name('add.slide');
    Route::post('create slide', [App\Http\Controllers\SlideController::class, 'store'])->name('store.slide');
    Route::get('Add New offer', [App\Http\Controllers\SlideController::class, 'addOffer'])->name('add.offer');
    Route::post('create offer', [App\Http\Controllers\SlideController::class, 'storeOffer'])->name('store.offer');
    Route::get('All Slides', [App\Http\Controllers\SlideController::class, 'editSlide'])->name('edit.slide');
    Route::get('Update slide/{slide}', [App\Http\Controllers\SlideController::class, 'edit'])->name('update.slide');
    Route::put('Post Update slide/{slide}', [App\Http\Controllers\SlideController::class, 'update'])->name('post.update.slide');
    Route::delete('Delete Slide/{slide}', [App\Http\Controllers\SlideController::class, 'destroy'])->name('delete.slide');

    Route::get('All Brands', [App\Http\Controllers\brandController::class, 'index'])->name('index.brand');
    Route::get('Add Brand', [App\Http\Controllers\brandController::class, 'create'])->name('add.brand');
    Route::post('create Brand/', [App\Http\Controllers\brandController::class, 'store'])->name('store.brand');
    Route::delete('Delete Brnad/{brand}', [App\Http\Controllers\brandController::class, 'destroy'])->name('delete.brand');

});