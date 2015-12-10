<!doctype html>
<html ng-app>
    <head>
        <!-- Verificar versão, a versão a seguir é utilizada nos videos, vou deixar essa --> 
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>
    </head>
    <body>

        <div ng-controller="c_aula2">
            <input type="text" ng-model="nome" />
            <h1>
                {{nome}}
                {{ano_nascimento * 5}}
            </h1>
        </div>
        <script>
            var c_aula2 = function ($scope) {
                $scope.nome = "Lucas";
                $scope.ano_nascimento = (1 * 4);
                $scope.$watch('nome', function () {
                    alert('Olá' + $scope.nome);
                });
            };
        </script>
    </body>
</html>