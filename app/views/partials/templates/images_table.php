
<div class="col-sm-10">
<div class="panel panel-default">
    <div class="panel-heading">
      <h1>Images</h1>
    </div>
    <div class="row wrapper">
      <div class="col-xs-3 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Choose action</option>
          <option value="1">Disable selected</option>
          <option value="2">Enable selected</option>
          <option value="3">Removed selected</option>
        </select>
        <button class="btn btn-sm btn-default">Accept</button>                
      </div>
    </div>
    <div class="table-responsive">

      <?php 


      //require '../core/databases/QueryBuilder.php'

      //   $table = new QueryBuilder;
      //   $table->getUsers('users');
      //   die(var_dump($table));


       ?>


      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>ID</th>
            <th>Preview</th>
            <th>File Name</th>
            <th>File</th>
            <th>Sales representative</th>
            <th>Date added</th>
            <th>Status</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>

       
          
       </table>
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        
        <div class="col-sm-12 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href><i class="fa fa-chevron-left"></i></a></li>
            <li><a href>1</a></li>
            <li><a href>2</a></li>
            <li><a href>3</a></li>
            <li><a href>4</a></li>
            <li><a href>5</a></li>
            <li><a href><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
  </div>