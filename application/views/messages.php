    <?php if ($this->session->has_userdata('success')) { ?>
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <p><i class="fa fa-check" aria-hidden="true"></i> <?= $this->session->flashdata('success');?></p>
           
        </div>
   <?php } ?>

   <?php if ($this->session->has_userdata('error')) { ?>
        <div class="alert alert-error alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <i class="fa fa-ban" aria-hidden="true"></i> <?=strip_tags(str_replace('</p>', '', $this->session->flashdata('error')));?>
           
        </div>
   <?php } ?>
 