<section class="content-header">
        <h1>
            Stock In
            <small>Barang Masuk</small>
        </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-truck"></i></a></li>
                <li class="active">Transaction</li>
            </ol>
</section>

<section class="content">
    <?php $this->view('messages');?>
            <div class="box">
            <div class="box-header">   
                        <h3 class="box-title">Data Stock In</h3> 
                        <div class="pull-right">
                            <a href="<?=site_url('stock/in/add')?>" class="btn btn-primary btn-square">
                                <i class="fa fa-plus"> </i> Create
                            </a>
                        </div>  
                    </div>              
                    <div class="box-body table-responsive">
                        
                        <table class="table table-bordered table-striped" id="example1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Barcode</th>                                   
                                    <th>Product Item</th>                                   
                                    <th>Qty</th>                                   
                                    <th>Date</th>                                   
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>                                
                                <?php 
                                $no = 1;
                                foreach($row as $key => $data) { ?>
                                    <tr>
                                        <td style="width:5%;"><?=$no++?></td>
                                        <td><?=$data->barcode?></td>  
                                        <td><?=$data->item_name?></td>                                         
                                        <td><?=$data->qty?></td>  
                                        <td><?=indo_date($data->tanggal)?></td>
                                        <td class="text-center" width="160px">  
                                            <a id="set_detail" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-detail"
                                                data-barcode="<?=$data->barcode?>"
                                                data-item_name="<?=$data->item_name?>"
                                                data-detail="<?=$data->detail?>"
                                                data-suppliername="<?=$data->supplier?>"
                                                data-qty="<?=$data->qty?>"
                                                data-date="<?=indo_date($data->tanggal)?>">
                                                    <i class="fa fa-eye"> </i> Detail
                                            </a>         

                                            <a href="<?=site_url('stock/in/del/'.$data->stock_id.'/'.$data->item_id)?>" onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-danger btn-xs">
                                                    <i class="fa fa-trash"> </i> Delete
                                            </a>                                        
                                        </td>
                                    </tr>
                                <?php } ?>                            
                            </tbody>
                        </table>
                    </div>               
            </div>
</section>

<div class="modal" id="modal-detail">
              <div class="modal-dialog modal-sm">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Stock In Detail</h4>
                  </div>
                  <div class="modal-body table-responsive">
                   <table class="table table-bordered no-margin" style="width:100%">
                           <tbody>
                               <tr>
                                   <th>Barcode</th>
                                   <td><span id="barcode"></span></td>
                                </tr>
                                <tr> <th>Item Name</th>
                                   <td><span id="item_name"></span></td></tr>
                                <tr><th>Detail</th>
                                   <td><span id="detail"></span></td></tr>
                                <tr><th>Supplier</th>
                                   <td><span id="supplier_name"></span></td></tr>
                                <tr><th>Qty</th>
                                   <td><span id="qty"></span></td></tr>
                                <tr> 
                                   <th>Date</th>
                                   <td><span id="tanggal"></span></td>
                                </tr>                               
                           </tbody>
                       </thead>
                   </table>
                  </div>
                 
                </div>
              </div>
            </div>


            <script>
    $(document).ready(function() {
        $(document).on('click', '#set_detail', function() {
            
            var barcode = $(this).data('barcode');
            var item_name = $(this).data('item_name');
            var detail = $(this).data('detail');
            var suppliername = $(this).data('suppliername');
            var qty = $(this).data('qty');
            var date = $(this).data('date');
           
            $('#barcode').text(barcode);
            $('#item_name').text(item_name);
            $('#detail').text(detail);
            $('#supplier_name').text(suppliername);
            $('#qty').text(qty);
            $('#tanggal').text(date);
            $('#modal-item').modal('hide');
        })
    })
</script>
