var app = angular.module('angularTable', ['angularUtils.directives.dirPagination']);

app.controller('listdata',function($scope, $http){

	$scope.news = []; //declare an empty array
	
	$http({
	      method: "GET",
	      url: "phpScripts/loadNews.php",
	    }).then(function (response) {


	    	$scope.news = response.data;
	    
	     	console.log($scope.news);

	    }, function(response) {
	      
	    });



	
	

});


	
