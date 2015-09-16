
var Novost  = angular.module('novost_jf', []);
Novost.controller('view_novost', ['$scope','$routeParams', function($scope, $routeParams) {
  var param1 = $location.search().target
  $http.get(root + "jfapi.php?stream=novost&id=" + param1).success(function(res){
		$scope.clanak = res;
	});
}]);
