<!DOCTYPE html>
<html lang="en">


       <head>
              <meta charset="UTF-8">


              <meta name="keywords"  content="HTML,CSS,JAVASCRIPT,BOOSTRAP,W3CSS,
              SASS,JQUERY,ANGULAR JS, REACT JS, PHP, MYSQL, NODE.JS, ASP.NET">


              <meta name="description"   content="THIS IS TEMPLATE FASHION BLOG">


              <meta name="autdor"   content="PHUONG.TRIEU">



              <meta name="viewport"  content="width=device-width, initial-scale=1.0">




              <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
       
              <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script> 


              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
              
              
              <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular-route.js"></script>
              

              <script src="https://cdn.plot.ly/plotly-2.8.3.min.js"></script>


              <script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script>

<script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>

<script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>




              <link rel="shortcut icon" href="image/html_logo.png" type="image/x-icon">


              <title>PHUONG WEBSITE</title>



             <link rel="stylesheet" type="text/css" href="test1.css">





              <style>
     
    
              </style>
       </head>




       <body>
       

       
     
            
   

         <header>
       
      

          </header>


         
     <main ng-app="app1" ng-controller="app1_controller1">


   <test1  data1="car_list1" 
   style="width:500px;height:500px;"></test1>


<script>
 
 var app1 = angular.module("app1",[]);
 app1.controller("app1_controller1",function($scope,$http){
      $http({
             method:"POST",
             url:"car_list.json",

      }).then(
             function successs(response){
             $scope.car_list1 = response.data;
             },
             function error(response){
                    $scope.error_message = "There was an error loading data from your file!!!";
                    console.log(response.status);
                    console.log(response.statusText);
             }
      
      );
       
                          
      
 });


 app1.directive("test1",function(){
      return {
             restrict:"E",
             scope:{
                  data1: "=",
                  data2: "="
             },
             templateUrl:"test2.php"
      }
 });

  
</script>

   
          </main>



       
       </body>





       <footer>

       </footer>



</html>
