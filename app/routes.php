<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@getHome');

Route::get('about', 'HomeController@getAbout');

Route::get('health', 'HomeController@getHealth');

Route::get('appointment', 'HomeController@getAppointment');

Route::get('blood', 'HomeController@getBlood');

Route::get('advice', 'HomeController@getAdvice');

Route::get('square', 'HomeController@getSquare');

Route::get('appollo', 'HomeController@getAppollo');

Route::get('united', 'HomeController@getUnited');

Route::get('labaid', 'HomeController@getLabaid');

Route::get('eclinic', 'HomeController@getEclinic');

Route::get('doctorola', 'HomeController@getDoctorola');

Route::get('healthprior21', 'HomeController@getPrior21');

Route::get('bohudur', 'HomeController@getBohudur');

Route::get('club', 'HomeController@getClub');

Route::get('donate', 'HomeController@getDonate');

Route::get('rokto', 'HomeController@getRokto');

Route::get('order', 'HomeController@getOrder');
Route::get('foodpanda', 'HomeController@getFoodpanda');
Route::get('foodmart', 'HomeController@getFoodmart');
Route::get('hungrynaki', 'HomeController@getHungrynaki');

Route::get('shopping', 'HomeController@getShopping');
Route::get('ekhanei', 'HomeController@getEkhanei');
Route::get('ajkerdeal', 'HomeController@getAjkerdeal');
Route::get('chaldal', 'HomeController@getChaldal');
Route::get('rokomari', 'HomeController@getrokomari');
Route::get('othoba', 'HomeController@getOthoba');
Route::get('buymobile', 'HomeController@getBuymobile');
Route::get('coxsbazarshop', 'HomeController@getCoxsbazarshop');

Route::get('emergency', 'HomeController@getEmergency');
Route::get('bdpolice', 'HomeController@getBdpolice');
Route::get('rab', 'HomeController@getRab');
Route::get('ambulance', 'HomeController@getAmbulance');
Route::get('fire', 'HomeController@getFire');

Route::get('rating', 'HomeController@getRating');

Route::get('food', 'HomeController@getFood');

Route::get('expedia', 'HomeController@getExpedia');

Route::get('shohozHotel', 'HomeController@getShohozHotel');

Route::get('shermansHotel', 'HomeController@getShermansHotel');

Route::get('booking', 'HomeController@getBooking');

Route::get('bdtickets', 'HomeController@getBdtickets');

Route::get('shohoz', 'HomeController@getShohoz');

Route::get('shermans', 'HomeController@getShermans');

Route::get('busbd', 'HomeController@getBusbd');

Route::get('railway', 'HomeController@getRailway');

Route::get('travelling', 'HomeController@getTravel');

Route::get('ticket', 'HomeController@getTicket');

Route::get('hotel', 'HomeController@getHotel');

Route::get('suggest', 'HomeController@getSuggest');

Route::get('shop', 'HomeController@getShop');

/*


Route::get('register', 'HomeController@getRegister');

Route::post('register', 'HomeController@postRegister');

Route::get('login', 'HomeController@getLogin');

Route::post('login', 'HomeController@postLogin');

Route::get('logout', 'HomeController@logout');

Route::group(array('before' => 'auth'), function(){

	Route::get('admin', 'AdminController@getIndex');

	Route::get('index', 'HomeController@getIndex');

	Route::get('home', array('uses' => 'HomeController@getHome', 'as' => 'home'));
	Route::get('slams', array('uses' => 'HomeController@getSlams', 'as' => 'slams'));
	Route::get('postSlams/{id}', array('uses' => 'HomeController@postSlams', 'as' => 'postSlams'));

	Route::get('pages/{id}', array('uses' => 'HomeController@getPages', 'as' => 'pages'));
	Route::get('editPages/{id}', array('uses' => 'HomeController@postPages', 'as' => 'editPages'));
	Route::get('deletePages/{id}', array('uses' => 'HomeController@deletePages', 'as' => 'deletePages'));

	Route::get('editProfile', 'HomeController@getEditProfile');
	Route::put('editProfile', 'HomeController@putEditProfile');

	Route::get('search', array('uses' => 'HomeController@getSearch', 'as' => 'search'));
	Route::post('search-results',  array('uses' => 'HomeController@postSearch', 'as' => 'search-results'));

	Route::get('setQuestions', array('uses' => 'HomeController@getSetQuestions', 'as' => 'set-questions'));
	Route::post('setQuestions', array('uses' => 'HomeController@postSetQuestions', 'as' => 'set-questions'));
	Route::delete('setQuestions/{id}',array('uses' => 'HomeController@deleteQuestions', 'as' => 'set-questions'));

	Route::get('profile', array('uses' => 'HomeController@getProfile', 'as' => 'profile'));
	Route::post('profile/{id}', array('uses' => 'HomeController@postProfile', 'as' => 'profile'));

	Route::get('requests', array('uses' => 'HomeController@getRequests', 'as' => 'requests'));
	Route::get('requestProfile/{sender_id}', array('uses' => 'HomeController@getRequestProfile', 'as' => 'requestProfile'));
	Route::get('requestProfileDelete/{id}', array('uses' => 'HomeController@deleteRequests', 'as' => 'requestProfileDelete'));

	Route::get('accept/{id}/{sender_id}', array('uses' => 'HomeController@acceptRequest', 'as' => 'accept'));
	Route::get('questions/{sender_id}', array('uses' => 'HomeController@getQuestions', 'as' => 'questions'));
	Route::post('answered/{id}/{user_id}', array('uses' => 'HomeController@postAnswer', 'as' => 'answered'));
	Route::put('answerEdit/{id}/{user_id}', array('uses' => 'HomeController@putAnswer', 'as' => 'answerEdit'));

	Route::get('write/{ques_id}', array('uses' => 'HomeController@getWrite', 'as' => 'write'));
});
*/