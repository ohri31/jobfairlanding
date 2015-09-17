var root      = "http://localhost/jobfair/jobfair/";
var landing      = "http://localhost/jobfair/landing/";

var jflanding = angular.module('jfApp', ['ngRoute']);
$(document).ready(function(){ $("a.grouped-elements").fancybox(); });

function reload_naslovna(){
	window.location = landing;
}

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
					templateUrl: 'partials/gallery-full.php'
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
	$scope.page = 1;

	$http.get(root + "jfapi.php?stream=items").success(function(res){
		$scope.ukupno = res;
	});

	$http.get(root + "jfapi.php?stream=naslovna&strana=" + $scope.page).success(function(res){
		$scope.ns = res;
	});

	$scope.loadMore = function() {
    $scope.page++;
		$http.get(root + "jfapi.php?stream=naslovna&strana=" + $scope.page).success(function(res){
			$scope.ns = $scope.ns.concat(res);
		});
  };

	$scope.nextPageDisabledClass = function() {
    return $scope.page === $scope.ukupno ? "disabled" : "";
  };
});
