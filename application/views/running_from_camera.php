<!doctype html>
<html lang="en" ng-app="Rfc">
<head>
	<meta charset="UTF-8">
	<title>running from camera</title>
	<link rel="stylesheet" href="/css/rfc.css">
</head>
<body ng-controller="RfcCtrl">
	<div id="screen" ng-show="current.item != null" ng-hide="current.item == null"></div>
	
	<div id="foto" ng-show="current.item != null" ng-hide="current.item == null">
		<img ng-src="{{ current.item.content.$t | ImageUrl:'' }}">
		<div class="onderschrift">{{ current.item.title.$t }} <span class="more" ng-click="getDetails()">+</span></div><div class="button close" ng-click="current.item = null; current.comments = null">x</div>
		<div class="comments" >
			<div ng-repeat="comment in current.comments" class="comment"><b>{{ comment.author[0].name.$t | strip }}:</b> {{ comment.content.$t | strip }}</div>
		</div>
	</div>

	<div  class="thumbs">
	
		{{ error }}
		<div ng-repeat="item in rfc" class="thumbnail">
		<div class="label"  ng-click="current.item = item;"> {{ item.title.$t | removeNumber }}</div>
			<img  ng-src="{{ item.content.$t | ImageUrl:'_m' }}" ng-click="current.item = item;">
		</div>
		

	</div>

	<script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.3/angular.min.js"></script>
    <script src="/js/rfc.js"></script>
</body>
</html>