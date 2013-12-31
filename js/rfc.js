var rfc = angular.module('Rfc',[]);


rfc.factory("Lib", function () {
	// Library fuctions
	return {
		shuffle : function (array) {
			var counter = array.length, temp, index;
			// While there are elements in the array
			while (counter--) {
				// Pick a random index
				index = (Math.random() * counter) | 0;
				// And swap the last element with it
				temp = array[counter];
				array[counter] = array[index];
				array[index] = temp;
			}
			return array;
		},
		getImageUrl: function (text, size) {
			if (! text) return "";
			/*
			_s = square
			_t = thumbnail
			_m = 240
			_n = 320
			_c = 800
			_b = 1024
			*/
			var match = text.match(/http:\/\/[\w\./]+\.jpg/);
			return (match)? match[0].replace(/\.jpg/,size + ".jpg") : '';
			//return text.split("src=\"")[1].split("jpg")[0]+"jpg";
		}
	}
});

rfc.factory('_', function() {
		return window._; // assumes underscore has already been loaded on the page
}); 



rfc.filter("ImageUrl",function (Lib)
{
	// Filter the flickr img urls out of the blog posts
	return Lib.getImageUrl
});

rfc.filter("removeNumber",function()
{
	return function (text) {
		return text.replace(/^[0-9]+\.\W/,"");
	};

});

rfc.filter("strip", function (_){
	return function(html){
		return _.unescape(html).replace(/<[^>]+>/g,'');
	}
});

rfc.factory("Items", function ($http, $q, Lib){
	var getItems = function (num) {
		var url = 'http://runningfromcamera.blogspot.com/feeds/posts/default?max-results=' + num + '&alt=json-in-script&callback=JSON_CALLBACK';
		var deferred = $q.defer();				
		$http.jsonp(url)
			.success(function (data) {
				deferred.resolve(Lib.shuffle(data.feed.entry));
				//console.log('Success', data);
			})
			.error(function (data) {
				deferred.reject("An error occured while fetching items");
				//console.log('Error', data);
			});
		return deferred.promise;
	};
	var getComments = function (url) {
		var deferred = $q.defer();	
		$http.jsonp(url + '?alt=json-in-script&callback=JSON_CALLBACK')
		.success(function (data) {
				deferred.resolve(data.feed.entry);
				//console.log('Success', data);
			})
			.error(function (data) {
				deferred.reject("An error occured while fetching comments");
				//console.log('Error', data);
			});
		return deferred.promise;
	};
	return {
		getAll: function () {				
				return getItems(1000);
		},
		getN: getItems,
		getComments: getComments
	}

	
});

rfc.controller('RfcCtrl',
	function ($scope, Items) {
		//$scope.current = {item: { content: { $t: ''}}};
		$scope.current = {item: null, comments: null };

		$scope.getDetails = function(){
			//console.log("getDetails", $scope.current.item.link[0].href);
		Items.getComments($scope.current.item.link[0].href).then( 
			function (data) {
				
				$scope.current.comments = data;
				console.log(data);	
			},
			function (errorMessage) {
				$scope.error=errorMessage;
			});
		};

		Items.getN(50).then( 
			function (data) {
				$scope.rfc = data;	
			},
			function (errorMessage) {
				$scope.error=errorMessage;
			}
		);	 
});

