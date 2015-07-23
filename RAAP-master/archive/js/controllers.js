'use strict';

/* Controllers */

var RAPPControllers = angular.module('RAPPControllers', []);

/* Archived projects Controller */

RAPPControllers.controller('ProjectListCtrl', ['$scope', '$http',
  function($scope, $http) {
    $http.get('apiArchived.php').success(function(data) {
            // here the data from the api is assigned to a variable named projects
            $scope.projects = data;
        });

    $scope.orderProp = 'Title';
  }]);

RAPPControllers.controller('ProjectDetailCtrl', ['$scope', '$routeParams', '$http', 'Project',
  function($scope, $routeParams, $http, Project) {
    $http.get('apiArchived.php').success(function(data) {
      $scope.projects = data;
    });
    $scope.ProjectID = $routeParams.ProjectID;
  }]);

RAPPControllers.controller('ProjectEditCtrl', ['$scope', '$routeParams', '$http', 'Project',
  function($scope, $routeParams, $http, Project) {
    $http.get('apiArchived.php').success(function(data) {
      $scope.projects = data;
    });
    $scope.ProjectID = $routeParams.ProjectID;
  }]);