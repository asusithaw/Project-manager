<?php 
require_once("../PhpProject2/db.php");
require_once("../PhpProject2/dbworks.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Project Manager</title>
        <script src="https://kit.fontawesome.com/659cea9ef1.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel ="stylesheet" href="style.css">
    </head>
    <body>
        <main>
        <div class="container text-center" justify content-center>
            <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook" ></i> PROJECT MANAGER</h1>
            <div class="d-flex justify-content-center">
                <form action="" method="post" class="w-50">
                    <div class="py-2"></div>
                         <div class="col-auto">
                           <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
                             <div class="input-group">
                                 <div class="input-group-text bg-warning"><i class="fas fa-id-badge"></i></div>
                                  <input type="text" autocomplete="off" class="form-control" id="autoSizingInputGroup" placeholder="Project ID">
                            </div>
                    </div> 
                        <div class="pt-2"></div>
                        <div class= "col-auto">
                           <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
                              <div class="input-group">
                                 <div class="input-group-text bg-warning"><i class="fas fa-book"></i></div>
                                  <input type="text" autocomplete="off" class="form-control" id="autoSizingInputGroup" placeholder="Project NAME">
                            </div>
                            </div>
                        <div class="pt-2"></div>
                        <div class="row">
  <div class="col">
    <input type="text" class="form-control" placeholder="Project Owner" aria-label="First name">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Allocate days" aria-label="Last name">
  </div>
</div>  
                        <div class="pt-4"></div>
                        <div class="d-flex justify-content-center">
                           <div class="btn-group" role="group" aria-label="Basic mixed styles example">
  <button type="button" name="create" class="btn btn-danger"><i class="fas fa-plus"></i></button>
  <button type="button" name="read" class="btn btn-info"><i class="fas fa-sync"></i></button>
  <button type="button" name="update" class="btn btn-success"><i class="fas fa-pen-alt"></i></button>
  <button type="button" name="delete" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
</div>  
                </form> 
            </div>
            </div> 
            <div class="d-flex table-data">
                     <table class="table table-striped" >
                         <thead >
                                <tr>
                                    <th> Project ID    </th>
                                    <th>Project NAME</th>
                                    <th>Project Owner</th>
                                    <th>Allocate Dates</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                            <td>1</td>
                            <td>Laravel</td>
                            <td>Kamal</td>
                            <td>23</td>
                            <td><i class="fas fa-edit btnedit"></i><td>
                            </tbody>
                        </table>
  ...
</table>
        </div>              
        </div>
        
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
        
    </body>
</html>
