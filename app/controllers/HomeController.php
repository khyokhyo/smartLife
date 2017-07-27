<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getHome()
	{
		return View::make('home');		
	}

	public function getLogin()
	{
		return View::make('login');
	}

	public function getHealth()
	{
		return View::make('health');
	}

	public function getAbout()
	{
		return View::make('about');
	}

	public function getAppointment()
	{
		return View::make('health.appointment');
	}

	public function getBlood()
	{
		return View::make('health.blood');
	}

	public function getAdvice()
	{
		return View::make('health.advice');
	}

	public function getSquare()
	{
		return Redirect::to('http://appt.squarehospital.com');		
	}

	public function getAppollo()
	{
		return Redirect::to('http://www.apollodhaka.com/make-appointment');
	}

	public function getUnited()
	{
		return Redirect::to('http://uhlbd.com');
	}

	public function getLabaid()
	{
		return Redirect::to('http://labaidgroup.com/specialized/appointment');
	}

	public function getEclinic()
	{
		return Redirect::to('http://www.eclinic.com.bd');
	}

	public function getDoctorola()
	{
		return Redirect::to('https://doctorola.com/search/Gastroenterology-doctors/Dhaka/all');
	}

	public function getPrior21()
	{
		return Redirect::to('http://www.healthprior21.com/e-Appointment');
	}

	public function getbohudur()
	{
		return Redirect::to('http://bohudur.com');
	}

	public function getClub()
	{
		return Redirect::to('http://www.blooddonorsbd.com');
	}

	public function getDonate()
	{
		return Redirect::to('http://www.donatebloodbd.com');
	}

	public function getRokto()
	{
		return Redirect::to('http://rokto.org');
	}

	public function getFood()
	{
		return View::make('food');		
	}
	public function getOrder()
	{
		return View::make('food.order');		
	}

	public function getFoodmart()
	{
		return Redirect::to('https://www.foodmart.com.bd/');
	}
	public function getFoodpanda()
	{
		return Redirect::to('https://www.foodpanda.com.bd/');
	}
	public function getHungrynaki()
	{
		return Redirect::to('http://www.hungrynaki.com/');
	}

	public function getRating()
	{
		return View::make('food.rating');		
	}

	public function getShopping()
	{
		return View::make('shopping');
	}

	public function getSuggest()
	{
		return View::make('shopping.rating');		
	}

	public function getShop()
	{
		return View::make('shopping.order');
	}

	public function getEkhanei()
	{
		return Redirect::to('https://www.ekhanei.com');
	}
	public function getAjkerdeal()
	{
		return Redirect::to('https://ajkerdeal.com');
	}
	public function getChaldal()
	{
		return Redirect::to('https://chaldal.com/');
	}
	public function getRokomari()
	{
		return Redirect::to('https://www.rokomari.com/book');
	}
	public function getOthoba()
	{
		return Redirect::to('https://www.othoba.com/');
	}
	public function getBuymobile()
	{
		return Redirect::to('https://www.buymobile.com.bd/');
	}
	public function getCoxbazarshop()
	{
		return Redirect::to('');
	}
	public function getEmergency()
	{
		return View::make('emergency');
	}
	public function getBdpolice()
	{
		return Redirect::to('http://abohomanbangla.com/bd_police_contact_number.php');
	}
	public function getRab()
	{
		return Redirect::to('http://www.rab.gov.bd/');
	}
	public function getAmbulance()
	{
		return Redirect::to('http://bdtransportinfo.com/ambulance.php');
	}
	public function getFire()
	{
		return Redirect::to('http://www.bohudur.com/bd/list-of-bangladesh-fire-services-contact-numbers');
	}

	public function getTravel()
	{
		return View::make('travelling');
	}

	public function getRecommendation()
	{
		return View::make('travelling.recommendation');
	}

	public function getTicket()
	{
		return View::make('travelling.ticket');
	}

	public function getHotel()
	{
		return View::make('travelling.hotel');
	}

	public function getBdtickets()
	{
		return Redirect::to('https://www.bdtickets.com');
	}

	public function getShohoz()
	{
		return Redirect::to('https://www.shohoz.com');
	}

	public function getShermans()
	{
		return Redirect::to('http://www.shermanstravel.com/travel_search/flights');
	}

	public function getBusbd()
	{
		return Redirect::to('http://busbd.com.bd');
	}

	public function getRailway()
	{
		return Redirect::to('https://www.esheba.cnsbd.com');
	}

	public function getBooking()
	{
		return Redirect::to('https://www.booking.com');
	}

	public function getShohozHotel()
	{
		return Redirect::to('https://www.shohoz.com/hotels');
	}

	public function getShermansHotel()
	{
		return Redirect::to('http://www.shermanstravel.com/travel_search/hotels');
	}

	public function getExpedia()
	{
		return Redirect::to('https://www.expedia.co.in');
	}

}
