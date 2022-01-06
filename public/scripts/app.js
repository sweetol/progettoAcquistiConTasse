(function(){

var app = angular.module('app-vito-arcidiacono', ['ngCookies','ngRoute', 'angular-ladda', 'ngAnimate', 'ngTouch', 'angularSuperGallery']).config(['$routeProvider','$locationProvider', '$compileProvider', 'laddaProvider', function($routeProvider,$locationProvider, $compileProvider, laddaProvider) {

laddaProvider.setOption({ /* optional */
      style: 'zoom-in',
      spinnerSize: 25,
      spinnerColor: '#ffffff'
    });

/*    $routeProvider.when("/", {templateUrl: 'views/partials/home.html'})
                  .when("/home", {templateUrl: 'views/partials/home.html'})
                  .when("/:lang/home/", {templateUrl: 'views/partials/homeEng.html'})
                  .otherwise({redirectTo: "/catalogo"});
*//*
				  $compileProvider.aHrefSanitizationWhitelist(/^\s*(https?|fb):/);*/
				/*  $locationProvider.html5Mode(true).hashPrefix('#!');*/
				  
	}]);				
				  
})();