<section class="content-header">
        <h1>
            Items
            <small>Item Barang</small>
        </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
                <li class="active">Items</li>
            </ol>
</section>
        <!-- Main content -->
        <section class="content">
        <?php $this->view('messages');?>
        <div class="box">
                    <div class="box-header">   
                        <h3 class="box-title"><?=ucfirst($page)?></h3> 
                        <div class="pull-right">
                            <a href="<?=site_url('item')?>" class="btn btn-warning btn-square">
                                <i class="fa fa-reply"> </i> Back
                            </a>
                        </div>  
                    </div> 
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4">
                                
                                <?php echo form_open_multipart('item/process') ?>
                               
                                <div class="form-group">
                                    <label>Barcode *</label>
                                    <input type="text" name="id" value="<?=$row->item_id?>">
                                    <input type="text" name="barcode" value="<?=$row->barcode?>" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="product_name">Product Name *</label>
                                    <input type="text" name="product_name" id="product_name" value="<?=$row->name?>" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Category *</label>
                                    <select name="category" id="" class="form-control" required>
                                        <option value="">- Pilih -</option>
                                       <?php foreach($category->result() as $key => $data) { ?>
                                        <option value="<?= $data->category_id?>" <?=$data->category_id == $row->category_id ? "selected" : null?>>  <?= $data->name?></option>
                                       <?php } ?>
                                    </select>
                                    
                                </div>

                                <div class="form-group">
                                    <label>Unit *</label>
                                   <?php echo form_dropdown('unit', $unit, $selectedunit,
                                   ['class' => 'form-control', 'required' => 'required']) ?>
                                </div>

                                <div class="form-group">
                                    <label>Price *</label>
                                    <input type="number" name="price" value="<?=$row->price?>" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Image</label>
                                    <?php if($page == 'edit') {
                                        if($row->image != null) { ?>
                                            <div style="margin-bottom: 5px">
                                                <img src="<?=base_url('uploads/product/'.$row->image)?>" style="witdh: 20%;"></td>
                                            </div>
                                    <?php
                                        }
                                    } ?>
                                    <input type="file" name="image" value="" class="form-control">
                                    <small style="color:red;">(Biarkan kosong jika tidak <?= $page == 'edit' ? 'diganti' : 'ada'?>)</small>
                                </div>

                                <div>
                                    <button type="submit" name="<?=$page?>" class="btn btn-success btn-square">Save</button>
                                    <button type="Reset" class="btn btn-square">Reset</button>
                                </div>
                                <?php echo form_close() ?>
                            </div>
                        </div>
                    </div>
        </div>             
        
    </section>

