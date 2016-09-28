


var miAplicacion= angular.module('procesoAdmin',['ngRoute'])


miAplicacion.config(['$routeProvider',function($routerProvider) {
    $routerProvider.when('/', {  templateUrl: '../view/templates/inicio.html'
    }).when('/generar-pin', {  templateUrl: '../view/templates/Pines/generar-pin.php'
    }).otherwise({
        redirectTo:'/',
        templateUrl:'../view/templates/inicio.html'
    });

}]);


