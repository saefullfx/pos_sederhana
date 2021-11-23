<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>POS | Seven Tech</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme style -->
    <link href="<?=base_url()?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/plugins/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/plugins/sweetalert2/animate.min.css" rel="stylesheet" type="text/css" />
    
    <style>
      .swal2-popup {
        font-size: 1.6rem ! important;
      }
    </style>
  </head>
  <body class="skin-blue">
    <!-- Site wrapper -->
    <div class="wrapper">      
        <header class="main-header">
          <a href="<?=base_url()?>assets/index2.html" class="logo">
            <span class="logo-mini">Adm<b>LTE</b></span>
            
          </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">          
               <!-- <li class="header">You have 3 tasks</li>
               <li>
                 <ul class="menu">
                    <li>
                      <a href="#">
                        <h3>designed some button
                            <small class="pull-right">20%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-aqua" style="width : 20%" role="progressbar">
                            <span class="sr-only">20% Complete</span>
                          </div>
                        </div>
                      </a>  
                    </li>
                  </ul>
               
                <li class="fooetr">
                  <a href="#">View all task</a> 
                </li>
                </li>
              </ul> -->
                           
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?=$this->fungsi->user_login()->username?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                    <?=ucfirst($this->fungsi->user_login()->name)?>
                      <small><?=$this->fungsi->user_login()->address?></small>
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-square">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?=site_url('auth/logout')?>" class="btn btn-danger btn-square">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?=ucfirst($this->fungsi->user_login()->username)?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li <?=$this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
              <a href="<?=site_url('dashboard')?>">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
              </a>
            </li>

            <li <?=$this->uri->segment(1) == 'supplier' ? 'class="active"' : '' ?>>
              <a href="<?=site_url('supplier')?>">
                <i class="fa fa-truck"></i> <span>Suppliers</span></i>
              </a>
            </li>

            <li <?=$this->uri->segment(1) == 'customer' ? 'class="active"' : '' ?>>
              <a href="<?=site_url('customer')?>">
                <i class="fa fa-user"></i> <span>Customers</span></i>
              </a>
            </li>
                      
            <li class="treeview <?=$this->uri->segment(1) == 'category' || $this->uri->segment(1) == 'unit' || $this->uri->segment(1) == 'item' ? 'active' : '' ?>" >
              <a href="#">
                <i class="fa fa-archive"></i>
                <span>Products</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li <?=$this->uri->segment(1) == 'category' ? 'class="active"' : '' ?>><a href="<?=site_url('category')?>"><i class="fa fa-circle-o"></i> Categoris</a></li>
                <li <?=$this->uri->segment(1) == 'unit' ? 'class="active"' : '' ?>><a href="<?=site_url('unit')?>"><i class="fa fa-circle-o"></i> Units</a></li>
                <li <?=$this->uri->segment(1) == 'item' ? 'class="active"' : '' ?>><a href="<?=site_url('item')?>"><i class="fa fa-circle-o"></i> Items</a></li>
              </ul>
            </li>            
            
            <li class="treeview <?=$this->uri->segment(1) == 'stock' ? 'active' : '' ?>">
              <a href="#">
                <i class="fa fa-table"></i> <span>Transaction</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu ">
                <li <?=$this->uri->segment(1) == 'sale' ? 'class="active"' : '' ?>><a href="<?=site_url('sale')?>"><i class="fa fa-circle-o"></i> Sales</a></li>
                <li <?=$this->uri->segment(1) == 'stock' && $this->uri->segment(2) == 'in' ? 'class="active"' : '' ?>><a href="<?=site_url('stock/in')?>"><i class="fa fa-circle-o"></i> Stock In</a></li>
                <li <?=$this->uri->segment(1) == 'stock' && $this->uri->segment(2) == 'out' ? 'class="active"' : '' ?>><a href="<?=site_url('stock/out')?>"><i class="fa fa-circle-o"></i> Stock Out</a></li>
              </ul>
            </li>

            <li class="treeview <?=$this->uri->segment(1) == 'report' ? 'active' : '' ?>">

              <a href="#">
                <i class="fa fa-table"></i> <span>Reports</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li <?=$this->uri->segment(1) == 'report' ? 'class="active"' : '' ?>><a href=""><i class="fa fa-circle-o"></i> Sales</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i> Stocks</a></li>
              </ul>
            </li>
           
            <?php if($this->fungsi->user_login()->level == 1) { ?>
               <li class="header">Setting</li>
               <li><a href="<?=base_url('user')?>"><i class="fa fa-book"></i> Users</a></li>
           <?php } ?>
           
           
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- jQuery 2.1.3 -->
    <!-- <script src="<?=base_url()?>assets/plugins/jQuery/jQuery-2.1.3.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <?php echo $content ?>
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2021 <a href="#">Seven Tech</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

   <!-- Bootstrap 3.3.2 JS -->
    <script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?=base_url()?>assets/plugins/slimScroll/jquery.slimScroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?=base_url()?>assets/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?=base_url()?>assets/dist/js/app.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>assets/plugins/sweetalert2/sweetalert2.min.js" type="text/javascript"></script>
    <script>
    var flash = $('#flash').data('flash');
    if(flash) {
        Swal.fire({
            icon : 'success',
            title : 'Success',
            text : flash
        })
    }

    $(document).on('click', '#btn-hapus', function(e) {
      e.preventDefault();
      var link = $(this).attr('href');

      Swal.fire({
                title: 'Apakah and yakin?',
                text: "Data akan dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!',
                showClass: {
                  popup: 'animate__animated animate__bounce'
                },
                hideClass: {
                  popup: 'animate__animated animate__fadeOutUp'
                }
              }).then((result) => {
                if (result.isConfirmed) {
                    window.location = link;                 
                  }
                  })
    })
</script>

    <script>
      // Swal.fire('Any fool can use a computer')
    </script>

    <!-- <script src="<?=base_url()?>assets/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script> -->
    <!-- <script src="<?=base_url()?>assets/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script> -->

    <script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js" type="text/javascript"></script>
    
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>

    
  
  </body>
</html>