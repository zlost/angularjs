<!doctype html>
<html ng-app>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    </head>
    <body>
        <div style="">
            <label>Primeiro Nome:</label>
            <input type="text" ng-model="nome_1" placeholder="Enter a name here">
            <label>Segundo Nome:</label>
            <input type="text" ng-model="nome_2" placeholder="Enter a name here">
            <hr>
            <md-button class="btn1" ng-click="acceptOffer();"> Accept </md-button>
            <h1>Hello {{nome_1}} {{nome_2}}!</h1>
        </div>
    </body>
</html>