angular.module("app")

	.service('dataService',['$http', '$q', '$log', function($http, $q, $log) {
	return {
		get: function(url) {
			var q = $q.defer();

			$http.get(url)
			.success(function(data) {
				q.resolve(data);
			}).error(function(msg, code) {
				q.reject(msg);
				$log.error(msg, code);
			});

			return q.promise;
		},
		post: function(url,data) {
			var q = $q.defer();

			$http.post(url,data)
			.then(function(data) {
				q.resolve(data);
			},function(msg, code) {
				q.reject(msg);
				$log.error(msg, code);
			});

			return q.promise;
		}
	}
}])