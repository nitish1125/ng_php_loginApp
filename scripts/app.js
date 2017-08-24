var application=angular.module('angular_app', ['ngRoute']);


application.controller('angular_controller', function($scope,$location,$timeout) {
    
    $scope.form={
        email:"",
        password:"",
        keepmein:false,
    };

    $scope.login=function(){
        //$location.path('/dashboard');
        $scope.showAlert();
    }

    $scope.logout=function(){
        $location.path('/login');
    }

    $scope.showAlert=function(){
        $('#modal').fadeIn(100);      
        $timeout(function() {
            $('#modal').fadeOut(100);    
        }, 5000);      

    }
});
