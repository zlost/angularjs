<!doctype html>
<html ng-app>
    <head>
        <!-- Verificar versão, a versão a seguir é utilizada nos videos, vou deixar essa --> 
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>
    </head>
    <body>
        <div ng-controller="controller">
            <ul>
                <li ng-repeat="pessoa in pessoas">
                    {{pessoa.nome}}, {{pessoa.cidade}};
                </li>
            </ul>
        </div>

        <script>
            var controller = function($scope){
                $scope.pessoas = [
                    {nome: "Mauricio", cidade: "São Paulo"},
                    {nome: "João", cidade: "Rio"},
                    {nome: "Tico", cidade: "SC"},
                    {nome: "Marta", cidade: "Floripa"}  
                ];
            };
        </script>
    </body>
</html>