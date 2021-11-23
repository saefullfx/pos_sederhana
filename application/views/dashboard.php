<!-- Content Header (Page header) -->
<section class="content-header">
          <h1>
            Dashboard
            <small>Control Panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

        <div class="row">

          <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-bullhorn"></i></span>
                <div class="info-box-content">
                <span class="info-box-text">Total Stock Saat Ini</span>
                <?php foreach($row->result() as $key => $data) {  ?>
                <span class="info-box-number"><?= $data->stock_all ?> </span>
                <?php } ?>
                </div>
              </div>  
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-th"></i></span>
                <div class="info-box-content">
                <span class="info-box-text">Items</span>
                <span class="info-box-number"><?=$this->fungsi->count_item()?></span>
                </div>
             </div>  
            </div>  

           

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>
                <div class="info-box-content">
                <span class="info-box-text">Customers</span>
                <span class="info-box-number"><?=$this->fungsi->count_customer()?></span>
                </div>
             </div>  
            </div>  

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                  <span class="info-box-icon bg-yellow"><i class="fa fa-user-plus"></i></span>
                  <div class="info-box-content">
                    <span class="info-box-text">Users</span>
                    <span class="info-box-number"><?=$this->fungsi->count_user()?></span>
                  </div>
              </div>  
            </div>

          </div> 

          <div class="row">
            <div class="col-md-8">
              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Top 5 Stok Tertinggi</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr>
                          <th>Barcode</th>
                          <th>Name</th>
                          <th>Category</th>
                          <th>Unit</th>
                          <th>Stock</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                               
                                foreach($top->result() as $key => $data) { ?>
                                    <tr>
                                       
                                        <td><?=$data->barcode?></td>
                                        <td><?=$data->name?></td>
                                        <td><?=$data->category_name?></td>
                                        <td><?=$data->unit_name?></td>                        
                                        <td><div class="sparkbar" data-color="#00a65a"><?=$data->stock?></div></td>                        
                                        
                                    </tr>
                                <?php  } ?>                 
                      </tbody>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  
                  <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All Stock</a>
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div>
            

        </section><!-- /.content -->