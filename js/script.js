(function(){

var app = angular.module("ToDo", []);    

todocontroller = function($scope){
    $scope.todos = [
    {'title': 'Build a todo App', 'done':false}
    ]
    
    $scope.addtodo = function(){
        $scope.todos.push({'title': $scope.newtodo, 'done': false})
        $scope.newtodo = '';
    }
    $scope.clearCompleted = function(){
        $scope.todos = $scope.todos.filter(function(item){
            return !item.done;
        })
    }
  //  $scope.newtodo = {
//            text : 'guest'
//        };
    
};

app.controller('todocontroller', ['$scope', todocontroller]);

}());