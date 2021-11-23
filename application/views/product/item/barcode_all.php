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
                        <h3 class="box-title">Barcode Generator</h3> 
                        <div class="pull-right">
                        <a href="<?=site_url('item')?>" class="btn btn-warning btn-square">
                                <i class="fa fa-reply"> </i> Back
                            </a>
                        </div>  
                    </div> 
                    
                    <div class="box-body table-responsive">
                        
                        <table class="table table-bordered table-striped" id="example1">
                            <thead>
                                <tr>
                                                                       
                                    <th>Barcode</th>        
                                 
                                                               
                                </tr>
                                
                            </thead>
                            <tbody>
                            <?php            
                                             
                                foreach($row->result() as $key => $data) { ?>
                                   
                                    <tr>                                      
                                        <td>
                                        <?php 
                                            $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
                                            echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($data->barcode, $generator::TYPE_CODE_128)) . '">';
                                        ?><br>
                                        <?=$data->barcode?>    
                                        <br>
                                        <?=$data->name?>
                                       </td>
                                    </tr>
                                     
                                        <?php } ?> 
                            </tbody>  
                        </table>           
                        
                    </div>
        </div>                
    </section>

