var application=angular.module('angular_app', ['ngRoute']);


application.controller('angular_controller', function($scope,$location,$timeout,Http) {
    
    $scope.form={
        email:"",
        password:"",
        keepmein:false,
    };

    $scope.login=function(){
        //$location.path('/dashboard');
        //$scope.showAlert();
        var email=$scope.form.email;
        var password=$scope.form.password;

        var data={
            "what_to_do":"authenticate_user",
            "email":email,
            "password":password
        }

        var request=Http.post(data);
        Http.send(request,function(response){
            alert(response.data);
        });
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