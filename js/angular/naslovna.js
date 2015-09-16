var root      = "http://localhost/jobfair/jobfair/";

var jflanding = angular.module('jfApp', ['ngRoute']);


jflanding.config(function($routeProvider){
		$routeProvider
			.when('/',{
					templateUrl: 'partials/home.php'
			})
			.when('/oeestecu',{
					templateUrl: 'partials/oeestecu-full.php'
			})
			.when('/ojobfairu',{
					templateUrl: 'partials/ojobfairu-full.php'
			})
			.when('/ucesnici',{
					templateUrl: 'partials/ucesnici-full.php'
			})
			.when('/postani-partner',{
					templateUrl: 'partials/postani-partner.php'
			})
			.when('/galerije',{
					templateUrl: 'partials/gallery.php'
			})
			.when('/login',{
					templateUrl: 'partials/login-full.php'
			})
			.when('/kontakt',{
					templateUrl: 'partials/contact-full.php'
			})
			.when('/novost/:param1', {
					templateUrl	: 'partials/news-full.php',
					controller	: 'ucitajNovost'
			})
			 .otherwise({redirectTo:'/'});


});

jflanding.controller('ucitajNovost', function($scope, $routeParams, $http){
	$scope.novost_id = $routeParams.param1;
	var id =  $scope.novost_id;
	$http.get(root + "jfapi.php?stream=novost&"+id).success(function(res){
		$scope.novost = res[0];
	});
});

jflanding.controller('naslovnaControler', function($scope, $http){
	$http.get(root + "jfapi.php?stream=naslovna").success(function(res){
		$scope.ns = res;
	});
});
