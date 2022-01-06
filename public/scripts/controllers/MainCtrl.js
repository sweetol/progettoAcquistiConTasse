(function(){
angular.module('app-vito-arcidiacono').controller('MainCtrl', MainCtrl);

MainCtrl.inject = ['$scope', '$q', '$timeout', '$location', '$window', 'CookieService'];

function MainCtrl($scope, $q, $timeout, $location, $window, CookieService){

	var vm = this;

	vm.loading;

	vm.emptyCart = emptyCart;
	vm.addToCart = addToCart;
	vm.quantity = _.sumBy(_.toArray(CookieService.getAllCookies()), function(val){ return parseInt(val)});
	
	function emptyCart(){
		CookieService.deleteAllCookies();
		window.location = "/cart";
	}
	
	function addToCart(id, quantity){
		var prodotto = CookieService.getCookie(id);
		if(prodotto){
			CookieService.setCookie(id, parseInt(prodotto)+1);
		}else{
			CookieService.setCookie(id, 1);
		}
		vm.quantity = _.sumBy(_.toArray(CookieService.getAllCookies()), function(val){ return parseInt(val)});
		
	}

}
}
)();