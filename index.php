<?php include 'header.php' ?>
<!-- Begin Here --> 
<div id="page-wrapper">
    <div class="container-fluid">
            <div ng-app="customerApp" ng-controller="customerController" class="container">

            <table datatable="ng" dt-options="vm.dtOptions" dt-columns="vm.dtColumns" class="table table-striped table-bordered">
                <thead>
                    <tr><th>ID</th>
                                <th>ID</th>
                                <th>CODE</th>
                                <th>CLASS</th>
                                <th>ITEM TYPE</th>
                                <th>MATERIAL DESCRIPTION</th>
                                <th>QTY</th>
                                <th>UNIT</th>
                                <th>RESV</th>
                                <th>WRH</th>
                    </tr>
                </thead>
                <tbody  ng-init="getall()">
                    <tr ng-repeat="d in names">
                        <td>{{ $index + 1 }}</td>
                       <td>{{ d.id }}</td>
                                <td>{{ d.code }}</td>
                                <td>{{ d.class }}</td>
                                <td>{{ d.item_type }}</td>
                                <td>{{ d.material_desc }}</td>
                                <td>{{ d.quantity }}</td>
                                <td>{{ d.unit }}</td>
                                <td>{{ d.resv }}</td>
                                <td>{{ d.wrh }}</td>
                      
                            </tr>
                </tbody>
            </table>
            <br />
            <br />
        </div>





        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<script src="angular.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-datatables/0.6.4/angular-datatables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="http://l-lin.github.io/angular-datatables/archives/vendor/datatables-light-columnfilter/dist/dataTables.lightColumnFilter.min.js"></script> <script src="http://l-lin.github.io/angular-datatables/archives/dist/plugins/light-columnfilter/angular-datatables.light-columnfilter.js"></script>
<script type="text/javascript">
    var app = angular.module('customerApp', ['datatables']);

app.controller('customerController', function($scope, $http){
    $scope.getall = function(){
            $http.get("getresult.php")
            .success(function (response) {$scope.names = response.records;});
        }


   
});


function customerController(DTOptionsBuilder, DTColumnBuilder) {
    var vm = this;
    vm.dtOptions = DTOptionsBuilder.fromSource('getresult.php')
        .withPaginationType('full_numbers')
        .withLightColumnFilter({
            '0' : {
                type : 'text'
            },
            '1' : {
                type : 'text'
            },
            '2' : {
                type : 'text'
            },
            '3' : {
                type : 'text'
            },
            '4' : {
                type : 'text'
            },
            '5' : {
                type : 'text'
            },
            '6' : {
                type : 'text'
            },
            '7' : {
                type : 'text'
            },
            '8' : {
                type : 'text'
            },
            '9' : {
                type : 'text'
            }
        });
    vm.dtColumns = [
        DTColumnBuilder.newColumn('id').withTitle('id'),
        DTColumnBuilder.newColumn('class').withTitle('class'),
        DTColumnBuilder.newColumn('item_type').withTitle('Last name'),
        DTColumnBuilder.newColumn('material_desc').withTitle('ID'),
        DTColumnBuilder.newColumn('quantity').withTitle('First name'),
        DTColumnBuilder.newColumn('unit').withTitle('Last name'),
        DTColumnBuilder.newColumn('resv').withTitle('ID'),
        DTColumnBuilder.newColumn('wrh').withTitle('First name'),
        DTColumnBuilder.newColumn('lastName').withTitle('Last name')
    ];
}

                      

</script>

<script type="text/javascript">
    


</script>
</body>
</html>



<!-- <script type="text/javascript">$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script>

    var app = angular.module('myApp', ['datatables']);
    app.controller('usersCtrl', function($scope, $http) {

        $scope.getall = function(){
            $http.get("getresult.php")
            .success(function (response) {$scope.names = response.records;});
        }

        $scope.addnew = function() {
            $http.post('addtodb.php',{'code' : $scope.code, 'class' : $scope.class}
                ).success(function (data, status, headers, config) {
                    $scope.getall();
                });
            }

            $scope.deleteuser = function(id) {  
                var x = confirm("Are you sure to delete this record");
                if(x){
                    $http.post('delete.php',{'id' : id}).success(function (data, status, headers, config)
                    {               
                        $scope.getall();    
                    });
                }else{

                }
            } //end deleteuserfunction

        
        $scope.queryBy = '$'






});
</script> -->