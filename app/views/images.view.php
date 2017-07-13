

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
        <li><a href="images/create">
          <span>Add a image</span></a></li>
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
    <?php require 'app/views/partials/templates/images_table.php'; ?>
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