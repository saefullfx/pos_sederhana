<section class="content-header">
        <h1>
            Report
            <small>Penjualan</small>
        </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-truck"></i></a></li>
                <li class="active">Sale</li>
            </ol>
</section>

<section class="content">
            <div class="box">
                <div class="box-header">   
                            <h3 class="box-title">Data Penjualan</h3> 
                </div> 
                    <div class="box-body table-responsive">
                        <table class="table table-bordered table-stripped" id="table1">
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Invoice</th>
                                <th>Date</th>
                                <th>Customer</th>
                                <th>Total</th>
                                <th>Discount</th>
                                <th>Grand Total</th>
                                <th>Actions</th>      
                                </tr>
                            </thead>

                            <tbody>
                                <?php $no = $this->uri->segment(3) ? $this->uri->segment(3) + 1 :1;
                                    foreach($row->result() as $key => $data) { ?>
                                    <tr>
                                        <td style="width:5%"><?=$no++ ?>.</td>
                                        <td><?= $data->invoice?></td>
                                        <td><?=indo_date($data->date)?></td>
                                        <td><?=$data->customer_id == null ? "Umum" : $data->customer_name?></td>
                                        <td class="text-right"><?= indo_currency($data->total_price) ?></td>
                                        <td class="text-right"><?= indo_currency($data->discount) ?></td>
                                        <td class="text-right"><?= indo_currency($data->final_price) ?></td>
                                        <td class="text-center" width="200px">
                                            <button id="detail" data-target="#modal-detail" data-toggle="modal" class="btn btn-xs btn-default"
                                            data-invoice="<?=$data->invoice?>"
                                            data-date="<?=indo_date($data->date)?>"
                                            data-time="<?=substr($data->sale_created, 11, 5)?>"
                                            data-customer="<?=$data->customer_id == null ? "Umum" : $data->customer_name?>"
                                            data-total="<?=indo_currency($data->total_price)?>"
                                            data-discount="<?=indo_currency($data->discount)?>"
                                            data-grandtotal="<?=indo_currency($data->final_price)?>"
                                            data-cash="<?=indo_currency($data->cash)?>"
                                            data-remaining="<?=indo_currency($data->remaining)?>"
                                            data-note="<?=$data->note?>"
                                            data-cashier="<?=ucfirst($data->user_name)?>"
                                            data-saleid="<?=$data->sale_id?>">Detail</button>

                                            <a href="<?=site_url('sale/cetak/'.$data->sale_id)?>" target="_blank" class="btn btn-xs btn-info">
                                                <i class="fa fa-print"></i>Print
                                            </a>

                                            <a href="<?=site_url('sale/del/'.$data->sale_id)?>" onclick="return confirm('Yakin hapus data')" class="btn btn-xs btn-danger">
                                                <i class="fa fa-trash"></i>Delete
                                            </a>                                        
                                        </td>
                                    </tr>
                                  <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <?=$pagination?>
                        </ul>
                    </div>
                </div>  
</section>

<!-- <div class="modal fade" id="modal-detail">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Sales reporrt Detail</h4>
            </div>
        </div>
        

    </div>

</div> -->