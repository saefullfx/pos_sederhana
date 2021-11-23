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

<section class="content">
    <?php 
    //$this->view('messages');?>

    <div id="flash" data-flash="<?= $this->session->flashdata('success');?>"></div>
            <div class="box">
            <div class="box-header">   
                        <h3 class="box-title">Data Category</h3> 
                        <div class="pull-right">
                            <a href="<?=site_url('category/add')?>" class="btn btn-primary btn-square">
                                <i class="fa fa-plus"> </i> Create
                            </a>
                        </div>  
                    </div>              
                    <div class="box-body table-responsive">
                        
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>                                   
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
                                        <td class="text-center" width="160px">  
                                        <a href="<?=site_url('category/edit/'.$data->category_id)?>" class="btn btn-primary btn-xs">
                                                <i class="fa fa-pencil"> </i> Update
                                        </a>         

                                            <a href="<?=site_url('category/del/'.$data->category_id)?>" id="btn-hapus" class="btn btn-danger btn-xs">
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

<script>
    var flash = $('#flash').data('flash');
    if(flash) {
        Swal.fire({
            icon : 'success',
            title : 'Success',
            text : flash
        })
    }
</script>