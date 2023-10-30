let app = angular.module("app", []);
app.controller("listadecompra", ["$scope", function($scope)
{
    $scope.itens = [];
    $scope.item = "";
    $scope.adicionarAlista = function(){
        $scope.itens[$scope.itens.length] = $scope.item;
        $scope.item = "";
    }
    $scope.removerDaLista = function(item){
        $scope.itens.splice($scope.itens.indexOf(item), 1);
    }
}]);