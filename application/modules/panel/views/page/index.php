<section id="page">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><?php echo (isset($card_title)) ? $card_title : '' ?></h4>
        <h6 class="card-subtitle"><?php echo (isset($card_subTitle)) ? $card_subTitle : '' ?></h6>
    
        <div class="table-action">
            <div class="buttons">
                <a href="<?php echo base_url('panel/page/create/') ?>" class="btn btn--raised btn-primary btn--icon-text menu-action-add">
                    <i class="zmdi zmdi-plus"></i> Add New
                </a>
            </div>
        </div>
    
        <div class="table-responsive">
            <table id="table-page" class="table table-bordered">
                <thead class="thead-default">
                    <tr>
                        <th width="100">No</th>
                        <th>Title</th>
                        <th width="120">Visit Count</th>
                        <th width="120">Comments</th>
                        <th width="120">Is Comment</th>
                        <th width="200">Created</th>
                        <th width="100"></th>
                    </tr>
                </thead>
            </table>
        </div>
      </div>
    </div>
</section>
