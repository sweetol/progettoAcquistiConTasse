(function(){

angular.module('app-vito-arcidiacono').service('CookieService', CookieService);



CookieService.inject = ['$http', '$q', '$cookies'];



function CookieService($http, $q, $cookies){



	return {

		hasCookies: _hasCookies,
		setCookie: _setCookie,
		getAllCookies: _getAllCookies,
		getCookie: _getCookie,
	   deleteAllCookies: _deleteAllCookies

	}
	
	function _getAllCookies(){
		return $cookies.getAll();
	}
	function _deleteAllCookies(){
		angular.forEach($cookies.getAll(), function (v, k) {
    		$cookies.remove(k);
		});		
	}
	
	function _setCookie(key,value){
		$cookies.put(key, value);
	}

	function _getCookie(key){
		return $cookies.get(key);
	}

	function _hasCookies(){
	    console.log(Object.keys($cookies.getAll()).length);
		return Object.keys($cookies.getAll()).length>0 ? true : false;
	}

}



})();