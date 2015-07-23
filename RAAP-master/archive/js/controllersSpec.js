'use strict';

/* jasmine specs for controllers go here */
describe('PhoneCat controllers', function() {

  describe('ProjectListCtrl', function(){

    beforeEach(module('RAPPApp'));

    it('should create "project" model with 3 projects', inject(function($controller) {
      var scope = {},
          ctrl = $controller('ProjectListCtrl', {$scope:scope});

      expect(scope.projects.length).toBe(3);
    }));

  });
});