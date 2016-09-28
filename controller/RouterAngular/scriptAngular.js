


var miAplicacion= angular.module('procesoAdmin',['ngRoute'])

miAplicacion.controller('controlador1', ['$scope', function($scope){


}])

miAplicacion.config(['$routeProvider',function($routerProvider) {
    $routerProvider.when('/', {
        templateUrl: '../index.php'
    }).otherwise({
        redirectTo:'/admin',
        templateUrl:'../plantillas/inicio.php'
    });

}]);