<!doctype html>
<html ng-app>
<head>
<meta charset="utf-8">
<link href="css/style.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
<script src="js/jquery.js"></script> 
<script src="js/ajax.js"></script>
<script src="js/script.js"></script> 
 
<title>SailPlay</title>
</head>
<body>
<div class="wrapper"   ng-controller="ExampleCtrl">
<p class="editor"><span>Editor</span></p>
<textarea ng-model="name" name="name" ng-click="hide()"></textarea>
<input type="button" class="render" value="Render" ng-click="hide()">
<input type="button" class="save" value="Save" ng-click="view()">
<div id="good">
<p>Успех!</p> 
<p>Html отправлен на сервер.</p>
</div>
<div id="bad">
<p>Неудача!</p> 
<p>Html не отправлен на сервер.</p>
</div>
<ol class="num">
<li>Введите HTML код</li>
<li>Нажмите Render</li>
</ol>
<p class="editor"><span>Preview</span></p>
<div class="preview" ng-bind-html-unsafe="html"></div>
<p id="response"></p>
</div>

</body>
</html>
