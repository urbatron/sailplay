function ExampleCtrl($scope) {


    $scope.hide = function(){
        $("#good").hide(300);
        $("#bad").hide(300);
        $scope.html = $scope.name;
    }

    $scope.view = function(){
       
        data = "data="+ $scope.name
        
   $.ajax({
       type: "POST",
       url: "send.php",
       data: data,
       success: function(response){
        if(response == "good"){
        $("#bad").hide(300);
        $("#good").show("slow");
    }else{
        $("#good").hide(300);
        $("#bad").show("slow");
    }
       
       }
    });

}
}








