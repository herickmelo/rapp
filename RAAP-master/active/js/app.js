'use strict';

/* App Module */

var RAPPApp = angular.module('RAPPApp', [
  'ngRoute',
  'RAPPAnimations',
  'RAPPControllers',
  'RAPPServices'
]);

RAPPApp.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/projects', {
        templateUrl: 'partials/project-list.html',
        controller: 'ProjectListCtrl'
      }).
      when('/projects/:ProjectID', {
        templateUrl: 'partials/project-detail.html',
        controller: 'ProjectDetailCtrl'
      }).
      when('/edit/:ProjectID', {
        templateUrl: 'partials/edit.html',
        controller: 'ProjectEditCtrl'
      }).
      otherwise({
        redirectTo: '/projects'
      });
  }]);
