<!doctype html>
<html ng-app>
    <head>
        <!-- Verificar versão, a versão a seguir é utilizada nos videos, vou deixar essa --> 
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>
    </head>
    <body>

        <div ng-controller="CtrlApp">
            <input type="text" ng-model="nome" ng-change="loggar()"/>
            <h1>{{nome}} - {{idade}}, {{cidade}}</h1>
        </div>
        <script>
            var CtrlApp = function ($scope) {
                $scope.nome = "Lucas";
                $scope.cidade = "Concórdia";
                $scope.idade = 30;
                $scope.loggar = function () {
                    alert($scope.nome);
                };
            };
        </script>
    </body>
</html>