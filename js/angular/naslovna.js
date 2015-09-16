var root      = "http://localhost/jobfair/jobfair/";
var Naslovna  = angular.module('naslovnaJF', []);
Naslovna.controller('naslovnaControler', function($scope, $http){
	$http.get(root + "jfapi.php?stream=naslovna").success(function(res){
		$scope.ns = res;
	});
});
