<section class="content-header">
        <h1>
            Sales
            <small>Penjualan</small>
        </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-truck"></i></a></li>
                <li>Transaction</li>
                <li class="active">Sales</li>
            </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-lg-4">
            <div class="box box-widget">
                <div class="box-body">
                    <table>
                        <tr>
                            <td>
                                <label for="date">Date</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="date" id="date" value="<?=date('Y-m-d')?>" class="form-control">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="vertical-align:top; width:30%">
                                <label for="user">User</label>
                            </td>
                            <td>
                                <div class="form-group">
                                <input readonly type="text" id="user" value="<?=$this->fungsi->user_login()->name?>" class="form-control">

                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="vertical-align:top">
                                <label for="customer">Customer</label>
                            </td>
                            <td>
                            <div>
                                <select class="form-control" name="" id="customer">
                                    <option value="">Umum</option>
                                    <?php foreach($customer as $cust => $value) { 
                                        echo '<option value="'.$value->customer_id.'">'.$value->name.'</option>';
                                     } ?>
                                </select>
                            </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="box box-widget">
                <div class="box-body">
                    <table width="100%">
                        <tr>
                            <td style="vertical-align-top; width:30%">
                                <label for="barcode">Barcode</label>
                            </td>
                            <td>
                                <div class="form-group input-group">
                                    <input type="hidden" id="item_id">
                                    <input type="hidden" id="price">
                                    <input type="hidden" id="stock">
                                    <input type="text" id="barcode" class="form-control" autofocus>
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-item">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="vertical-align:top">
                                <label for="qty">Quantity</label>
                            </td>
                            <td>
                                <div class="from-group">
                                    <input type="number" id="qty" value="1" min="1" class="form-control">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <div>
                                    <button type="button" id="add_cart" class="btn btn-primary">
                                        <i class="fa fa-cart-plus"></i> Add
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="box box-widget">
                <div class="box-body">
                    <div align="right">
                        <h4>Invoice <b><span id="invoice"><?= $invoice ?></span></b></h4>
                        <h1><b><span id="grand_total2" style="font: size 50pt;">0</span></b></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
                <div class="box box-widget">
                    <div class="box-body table-responsive table-striped">
                        <table class="table table-bordered table-stripped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Barcode</th>
                                    <th>Product Item</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th width="10%">Discount Item</th>
                                    <th width="15%">Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="cart_table">
                                <tr>
                                    <td colspan="9" class="text-center">
                                        Tidak ada item
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="box box-widget">
                <div class="box-body">
                    <table width="100%">
                        <tr>
                            <td style="vertical-align:top; width:30%">
                                <label for="sub-total">Sub Total</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="number" name="" id="sub_total" value="" class="form-control" readonly>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="vertical-align:top">
                                <label for="discount">Discount</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="number" name="" id="dsicount" value="0" min="0" class="form-control">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="vertical-align:top">
                                <label for="grand_total">Grand Total</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="number" name="" id="grand_total" class="form-control">
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="box box-widget">
                <div class="box-body">
                    <table width="100%">
                    <tr>
                            <td style="vertical-align:top">
                                <label for="cash">Cash</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="number" name="" id="cash" value="0" min="0" class="form-control">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="vertical-align:top">
                                <label for="cash">Change</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="number" name="" id="change" class="form-control" readonly>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="box box-widget">
                <div class="box-body">
                    <table width="100%">
                        <tr>
                            <td style="vertical-align:top">
                                <label for="cash">Note</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <textarea name="" rows="3" id="note" class="form-control"></textarea>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div col-lg-3>
            <div>
                <button id="cancel_payment" class="btn btn-flat btn-warning">
                    <i class="fa fa-refresh"></i> Cancel
                </button><br><br>

                <button id="process_payment" class="btn btn-flat btn-lg btn-success">
                    <i class="fa fa-paper-plane-o"></i> Process Payment
                </button>
            </div>
        </div>
    </div>
</section>


<div class="modal" id="modal-item">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Select Item</h4>
                  </div>
                  <div class="modal-body table-responsive">
                   <table class="table table-bordered table-striped" id="example1" style="width:100%">
                       <thead>
                           <tr>
                               <th>Barcode</th>
                               <th style="width:100px">Name</th>
                               <th>Unit</th>
                               <th style="width:100px">Price</th>
                               <th>Stock</th>
                               <th>Action</th>
                           </tr>
                           <tbody>
                                <?php
                                   foreach($item as $i => $data) { ?>
                                <tr>
                                    <td><?=$data->barcode?></td>
                                    <td><?=$data->name?></td>
                                    <td><?=$data->unit_name?></td>
                                    <td  class="text-right"><?=indo_currency($data->price)?></td>
                                    <td class="text-right"><?=$data->stock?></td>
                                    <td class="text-right">
                                        <button class="btn btn-xs btn-info" id="select" 
                                        data-id="<?=$data->item_id?>"
                                        data-barcode="<?=$data->barcode?>"
                                        data-name="<?=$data->name?>"
                                        data-price="<?=$data->price?>"
                                        data-unit_name="<?=$data->unit_name?>"
                                        data-stock="<?=$data->stock?>">
                                        <i class="fa fa-check"></i> Select
                                    </button></td>
                               </tr>

                               <?php } ?>
                           </tbody>
                       </thead>
                   </table>
                  </div>
                 
                </div>
              </div>
            </div>

<script>
    $(document).ready(function() {
        $(document).on('click', '#select', function() {
            var item_id = $(this).data('id');
            var barcode = $(this).data('barcode');
            var name = $(this).data('name');
            var unit_name = $(this).data('unit_name');
            var stock = $(this).data('stock');
            $('#item_id').val(item_id);
            $('#barcode').val(barcode);
            $('#item_name').val(name);
            $('#unit_name').val(unit_name);
            $('#stock').val(stock);
            $('#modal-item').modal('hide');
        })
    })
</script>