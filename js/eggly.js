(function(){
   var app =  angular.module('eggly',[])
    .controller('MainController', function($scope){
        $scope.hello = 'World';  
        $scope.categories = [
            {"id": 0, "name": "Development1"},
            {"id": 1, "name": "Football"},
            {"id": 2, "name": "cricket"},
            {"id": 3, "name": "Development2"}
        ]
        
        $scope.bookmarks = [
            {"id": 0, "title": "Angular JS", "url": "http://Angularjs.org", "category": "Development1"},
            {"id": 1, "title": "goal", "url": "http://goal.com", "category": "Football"},
            {"id": 2, "title": "cricket", "url": "http://cricinfo.com", "category": "cricket"},
            {"id": 3, "title": "development2", "url": "http://stackoverflow.com", "category": "Development2"},
        ]
        
        $scope.currentCategory = null;
        
        function setCurrentCategory(category){
            $scope.currentCategory = category;
            cancelCreating();
            cancelEditing();
        }
        
        function isCurrentCategory(category){
            return $scope.currentCategory !== NULL && category.name === $scope.currentCategory.name; 
        }
        
        $scope.setCurrentCategory = setCurrentCategory;
        $scope.isCurrentCategory = isCurrentCategory;
        
        //CRUD
        
        function resetCreateForm(){
            $scope.newBookmark = {
                title: '',
                url: '',
                category: $scope.currentCategory
            }
        }
        
        function createBookmark(bookmark){
            bookmark.id = $scope.bookmarks.length;
            bookmark.category = $scope.currentCategory.name;
            $scope.bookmarks.push(bookmark);
            
            resetCreateForm();
        }
        
        $scope.createBookmark = createBookmark;
        
        $scope.isCreating = false;
        $scope.isEditing = false;
        
        function startCreating(){
            $scope.isCreating = true;
            $scope.isEditing = false;
            
            resetCreateForm();
        }
        
        function cancelCreating(){
            $scope.isCreating = false;
        }
        
        function startEditing(){
            $scope.isEditing = true;
            $scope.isCreating = false;
        }
        
        function cancelEditing(){
            $scope.isEditing = false;
        }
        
        function shouldShowCreating(){
            return $scope.currentCategory && !$scope.isEditing;
        }
        
        function shouldShowEditing(){
            return $scope.isEditing && !$scope.isCreating;
        }
        
        $scope.startCreating = startCreating;
        $scope.cancelCreating = cancelCreating;
        $scope.startEditing = startEditing;
        $scope.cancelEditing = cancelEditing;
        $scope.shouldShowCreating = shouldShowCreating;
        $scope.shouldShowEditing = shouldShowEditing;
        
    });
    
}());