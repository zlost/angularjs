<!doctype html>
<html ng-app>
    <head>
        <!-- Verificar versão, a versão a seguir é utilizada nos videos, vou deixar essa --> 
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>
    </head>
    <body>
        <input type="text" ng-model="valor">
        <input type="checkbox" ng-model="checado">show
        
        <div ng-show="checado">
            Olá {{valor}}
        </div>
        
    </body>
</html>