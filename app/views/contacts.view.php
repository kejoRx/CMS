

 <!-- head -->
      <?php require 'app/views/partials/head.php'; ?>
  <!-- / head -->

<body>
  <div class="app app-header-fixed ">
  

 <header id="header" class="app-header navbar" role="menu">
      <!-- navbar header -->
      <div class="navbar-header bg-dark">
        <button class="pull-right visible-xs dk" ui-toggle-class="show" target=".navbar-collapse">
          <i class="glyphicon glyphicon-cog"></i>
        </button>
        <button class="pull-right visible-xs" ui-toggle-class="off-screen" target=".app-aside" ui-scroll="app">
          <i class="glyphicon glyphicon-align-justify"></i>
        </button>
        <!-- brand -->
        <a href="#/" class="navbar-brand text-lt">
          <i class=""></i>
          <img src="img/logo.png" alt="." class="hide">
          <span class="hidden-folded m-l-xs"></span>
        </a>
        <!-- / brand -->
      </div>
      <!-- / navbar header -->


      <!-- navbar collapse -->
      <div class="collapse pos-rlt navbar-collapse box-shadow bg-white-only">
       <ul class="nav navbar-nav pull-left">
        <li><a href="contacts/create">
          <span>Add a contact</span></a></li>
        </ul>
        <ul class="nav navbar-nav pull-right">
          <li class="dropdown pos-stc">
            <li><span class="block m-t-sm">
              
              <li><strong class="font-bold text-lt"><?php  //echo $row['name_user'] . ' ' . $row['surname_user']; ?></strong></span>
              
              <span class="text-muted text-xs block"><?php //echo $row['group_name']; ?></span></li>
             
             <?php require 'app/views/partials/logout.php'; ?>
            </a>                   
          </li>
        </ul>
        

        
      </div>
      <!-- / navbar collapse -->
  </header>

  <!-- nav -->
    <?php require 'app/views/partials/nav.php'; ?>
  <!-- / nav -->
    
  <!-- content -->
   
<div class="col-sm-10">
<div class="panel panel-default">
    <div class="panel-heading">
      <h1>Conacts</h1>
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


      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>ID</th>
            <th>Company Name</th>
            <th>Name and surname</th>
            <th>Questionnaire</th>
            <th>Phone</th>
            <th>Date of registration</th>
            <th>Sales representative</th>
            <th>Scan</th>
            <th style="width:30px;"></th>
          </tr>
            
          <?php foreach ($contactDate as $val) : ?>
       
            <tr>

              <td><?= $val->id; ?></td>
             <td><?= $val->company_name; ?></td>
              <td><?= $val->name_and_surname; ?></td>
              <td><?= $val->questionnaire; ?></td>
              <td><?= $val->phone; ?></td>
              <td><?= $val->registration_date; ?></td>
              <td><?= $val->sales_representative; ?></td>
              <td><?= $val->scan; ?></td> 
              <th style="width:30px;"></th>
            </tr>
           
       <?php endforeach; ?>
       
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
  <!-- /content -->
  
  <!-- footer -->
    <?php require 'app/views/partials/footer.php'; ?>
  <!-- / footer -->
</div>
</body>
</html>
</div>
</body>
</html>