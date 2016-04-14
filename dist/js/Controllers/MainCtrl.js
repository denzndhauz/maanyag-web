angular.module("app")

	.controller("MainCtrl",['$scope',"$filter","dataService",function($scope,$filter,dataService) {

		dataService.get("/main/temp_books.json").then(function(res) {
			$scope.rooms = res;
			$scope.selected_data = res[0];
			$scope.room_name = res[0].room_name;
			console.log(res);
		});

		$scope.selectedRoom = function(room_name) {
			$scope.selected_data = $filter('filter')($scope.rooms, {room_name: room_name})[0];
		}
	}]);

	