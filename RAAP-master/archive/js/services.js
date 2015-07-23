'use strict';

/* Services */

var RAPPServices = angular.module('RAPPServices', ['ngResource']);

RAPPServices.factory('Project', ['$resource',
  function($resource){
    return $resource('projects/:ProjectID.json', {}, {
      query: {method:'GET', params:{ProjectID:'projects'}, isArray:true}
    });
  }]);