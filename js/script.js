function ExampleCtrl($scope){
empty = " "


    function get_cookie ( cookie_name ){
        var results = document.cookie.match ( '(^|;) ?' + cookie_name + '=([^;]*)(;|$)' );
        if ( results )
            return ( unescape ( results[2] ) );
        else
            return null;
    }
    if(get_cookie("text") == 'undefined'){
            document.cookie = "text="+empty;
        }
     $scope.html = get_cookie ( "text" );
        

    
    $scope.hide = function(){
        $("#good").hide(300);
        $("#bad").hide(300);
        $scope.html = $scope.name;
        document.cookie = "text="+$scope.name;
        if(get_cookie("text") == 'undefined'){
            document.cookie = "text="+empty;
        }
        $('iframe').attr('src', $('iframe').attr('src'));
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








