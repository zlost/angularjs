<!doctype html>
<html ng-app>
    <head>
        <!-- Verificar versão, a versão a seguir é utilizada nos videos, vou deixar essa --> 
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>
    </head>
    <body>
        <!-- Change -->
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

        <!-- Change -->


        Busca: <input type="search" ng-model="busca">
        <div ng-controller="CtrlLista">
            <select ng-model="selected" ng-options="pessoa.nome for pessoa in pessoas | filter: busca">
                <option value="">Selecione</option>
            </select>

            <hr>
            <div>
                Nome: <input type="text" ng-model="selected.nome">
                Cidade: <input type="text" ng-model="selected.cidade">
            </div>


        </div>
        <script>
            var CtrlLista = function ($scope) {
                $scope.pessoas = [
                    {nome: "Lucas", cidade: "São Paulo"},
                    {nome: "Maria", cidade: "SP"},
                    {nome: "João", cidade: "FP"},
                    {nome: "Gabriel", cidade: "Minas"}
                ];
            };

        </script>

    </body>
</html>