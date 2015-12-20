<!doctype html>
<html ng-app>
    <head>
        <!-- Verificar versão, a versão a seguir é utilizada nos videos, vou deixar essa --> 
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>
    </head>
    <body>

        Busque aqui:<input type="search" ng-model="busca">

        <div ng-controller="controller">
            <div>total:<b> {{pessoas.length}}</b></div>
            <ul>
                <li ng-repeat="pessoa in pessoas| filter:busca">
                    {{pessoa.nome}}, <b>{{pessoa.cidade}};</b> <button ng-click="remove($index)">Remover</button>
                </li>
            </ul>



            <div>
                Nome: <input type="text" ng-model="var_nome"> <br>
                Cidade: <input type="text" ng-model="var_cidade">
                <br>
                <button ng-click="adicionar()">Adicionar a lista</button>
            </div>
        </div>

        <script>
            var controller = function ($scope) {
                $scope.pessoas = [
                    {nome: "Mauricio", cidade: "São Paulo"},
                    {nome: "João", cidade: "Rio"},
                    {nome: "Tico", cidade: "SC"},
                    {nome: "Marta", cidade: "Floripa"}
                ];
                $scope.adicionar = function () {
                    $scope.pessoas.push({
                        nome: $scope.var_nome,
                        cidade: $scope.var_cidade
                    });
                };

                $scope.var_nome = "";
                $scope.var_cidade = "";

                $scope.remove = function (index) {
                    $scope.pessoas.splice(index, 1);
                };
            };

        </script>




    </body>
</html>