<section class="content-header">
        <h1>
            Category
            <small>Jenis Barang</small>
        </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-truck"></i></a></li>
                <li class="active">Categorys</li>
            </ol>
</section>
        <!-- Main content -->
        <section class="content">
        <div class="box">
                    <div class="box-header">   
                    <h3 class="box-title"><?=ucfirst($page)?></h3>
                        <div class="pull-right">
                            <a href="<?=site_url('category')?>" class="btn btn-warning btn-square">
                                <i class="fa fa-reply"> </i> Back
                            </a>
                        </div>  
                    </div> 
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4">
                                
                                <form action="<?=site_url('category/process')?>" method="post">
                                <div class="form-group">
                                    <label>Name *</label>
                                    <input type="hidden" name="id" value="<?=$row->category_id?>">
                                    <input type="text" name="category_name" value="<?=$row->name?>" class="form-control" required>
                                </div>
                                
                                <div>
                                    <button type="submit" name="<?=$page?>" class="btn btn-success btn-square">Save</button>
                                    <button type="reset" class="btn btn-square">Reset</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
        </div>             
        
    </section>

