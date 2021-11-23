<section class="content-header">
        <h1>
            Customer
            <small>Pembeli Barang</small>
        </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-truck"></i></a></li>
                <li class="active">Customers</li>
            </ol>
</section>

<section class="content">
            <div class="box">
            <div class="box-header">   
                        <h3 class="box-title">Data Customer</h3> 
                        <div class="pull-right">
                            <a href="<?=site_url('customer/add')?>" class="btn btn-primary btn-square">
                                <i class="fa fa-plus"> </i> Create
                            </a>
                        </div>  
                    </div>              
                    <div class="box-body table-responsive">
                        
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>                                
                                <?php 
                                $no = 1;
                                foreach($row->result() as $key => $data) { ?>
                                    <tr>
                                        <td style="width:5%;"><?=$no++?></td>
                                        <td><?=$data->name?></td>
                                        <td><?=$data->phone?></td>
                                        <td><?=$data->address?></td>
                                        <td><?=$data->description?></td>                        
                                        <td class="text-center" width="160px">  
                                        <a href="<?=site_url('customer/edit/'.$data->customer_id)?>" class="btn btn-primary btn-xs">
                                                <i class="fa fa-pencil"> </i> Update
                                        </a>         

                                            <a href="<?=site_url('customer/del/'.$data->customer_id)?>" onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-danger btn-xs">
                                                <i class="fa fa-trash"> </i> Delete
                                        </a>                                        
                                        </td>
                                    </tr>
                                <?php  } ?>                            
                            </tbody>
                        </table>
                    </div>               
            </div>
</section>