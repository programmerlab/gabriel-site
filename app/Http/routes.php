<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.





*/
Route::get('',[
          'as' => 'home',
          'uses'  => 'HomeController@index'
        ]);
// Route::get('/', function () {
// 		return view('home');
// });
Route::get('about',[
          'as' => 'about',
          'uses'  => 'AboutController@index'
        ]);
Route::get('/services',function () {
	return view('services');
});

Route::get('/portfolio',function () {
	return view('portfolio');
});

Route::get('/contact',function () {
	return view('contact');
});

Route::get('/service-details',function () {
	return view('service-details');
});

// Route::match(['post','get'],'cat','HomeController@index');



// Route::get('product-details',[
//           'as' => 'productDetails',
//           'uses'  => 'HomeController@productDetail'
//         ]); 

// Route::get('product-category',[
//           'as' => 'productDetails',
//           'uses'  => 'HomeController@productCategory'
//         ]); 

// Route::get('product-category/{category}/{name}/{id}',[
//           'as' => 'productDetails', 
//           'uses'  => 'HomeController@productCategory'
//         ]); 

// Route::get('checkout',[
//           'as' => 'checkout',
//           'uses'  => 'HomeController@checkout'
//         ]); 

// Route::get('home',[
//           'as' => 'home',
//           'uses'  => 'HomeController@home'
//         ]);
// Route::get('category',[
//           'as' => 'category-front',
//           'uses'  => 'HomeController@category'
//         ]); 
//  Route::get('order',[
//           'as' => 'order',
//           'uses'  => 'HomeController@order'
//         ]); 
//   Route::get('faq',[
//           'as' => 'faq',
//           'uses'  => 'HomeController@faq'
//         ]); 
	

//    Route::get('track-orders',[
//           'as' => 'trackOrder',
//           'uses'  => 'HomeController@trackOrder'
//         ]); 
//    Route::get('terms-conditions',[
//           'as' => 'trackOrder',
//           'uses'  => 'HomeController@tNc'
//         ]); 
 





// Route::group(['middleware' => ['web']], function(){



//   Route::get('/',[
//           'as' => '/',
//           'uses'  => 'ProductController@showProduct'
//         ]); 
	 
//   Route::get('/cart', [ 
//         'as' => '',
//        'uses' =>   'ProductController@index'
//        ]);

//   Route::get('/updateCart', [ 
//         'as' => '',
//        'uses' =>   'ProductController@updateCart'
//        ]);

//   Route::get('/product', [  
//         'as' => '',
//        'uses' =>   'ProductController@showProduct'
//        ]);

//   Route::get('/clear-cart',[  
//         'as' => '',
//        'uses' =>  'ProductController@clearCart'
//        ]);

//   Route::get('/getProduct',[  
//         'as' => '',
//        'uses' =>  'ProductController@getProduct'
//        ]);

//   Route::get('/addToCart/{id}', [ 
//         'as' => '',
//        'uses' =>   'ProductController@addToCart'
//        ]);

//   Route::get('/removeItem/{id}',[ 
//         'as' => '',
//        'uses' =>  'ProductController@removeItem'
//        ]);
//   Route::get('auth/logout', 'Auth\AuthController@getLogout');

//   Route::get('register',[
//           'as' => 'register',
//           'uses'  => 'UserController@register'
//         ]);    
//   Route::post('register',[
//           'as' => 'register',
//           'uses'  => 'UserController@signup'
//         ]);   

//   Route::get('login',[
//           'as' => 'login',
//           'uses'  => 'UserController@showLoginForm'
//         ]); 
// Route::post('login',function(App\User $user , Illuminate\Http\Request $request){ 
//       $credentials = ['email' => Input::get('email'), 'password' => Input::get('password')];  
			 
//           if (Auth::attempt($credentials)) {
//              $request->session()->put('current_user',Auth::user());
						 
//                 return redirect()->intended('/'); 
//           }else{  
//               return redirect()
//                           ->back()
//                           ->withInput()  
//                           ->withErrors(['message'=>'Invalid email or password. Try again!']);
//               } 
//       }); 
						 

//  });



			