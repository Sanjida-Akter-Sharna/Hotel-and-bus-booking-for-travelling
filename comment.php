<!DOCTYPE html>
<html ng-app>
    <head>
        <title>AngularJs Simple Comment box Example: DevZone.co.in </title>
        <script type="text/javascript" src="js/angularedit min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/navigation.css">
        
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
    <body>
          <div class="preloader">
   <div class="preloder-wrap">
   <div class="preloder-inner">
	<div class="loader"></div>
    </div>
    </div>
    </div>
    <!--/.preloader-->




       
    
        <div id='dv1' style="margin-top:5%; margin-left:5%;">
            <form ng-controller="FrmController">
               <h2 style="font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; text-align:center"> Post your Comment</h2>
                <form ng-controller="FrmController">
                    <textarea ng-model="txtcomment" placeholder="Your Comment" style='width:550px'></textarea><br>
                    <button  ng-click='btn_add();' style='margin-top:10px;'>Post Comment</button>
 
                    <h4>Your name with Comments</h4>
                    <ul>
                        <li ng-repeat="comnt in comment"> {{ comnt }} <a  style="float: right;" href="" ng-click="remItem($index)">x</a></li>
                    </ul>
                </form> 
        </div>
 
        <script type="text/javascript">
            function FrmController($scope) {
                $scope.comment = [];
                $scope.btn_add = function() {
                    if($scope.txtcomment !=''){
                    $scope.comment.push($scope.txtcomment);
                    $scope.txtcomment = "";
                    }
                }
 
                $scope.remItem = function($index) {
                    $scope.comment.splice($index, 1);
                }
            }
        </script>
        
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>