var application=angular.module('angular_app', ['ngRoute']);


application.controller('angular_controller', function($scope) {
    
    $scope.form={
        email:"",
        password:"",
        keepmein:false,
    };

    $scope.login=function(){
        alert(1212);
    }

    $scope.logout=function(){
        alert(1212);
    }
});
