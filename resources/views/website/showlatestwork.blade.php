 <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
                <?php echo $latestwork['latestwork_title']; ?>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
            </div>
        <div class="modal-body ">
            <div class="row">
                <div class="col-sm-4">
                    <img src='{{ URL::asset('public/custom_image/latestwork_images/'.$latestwork['latestwork_image']) }}' class="img-rounded" width="300" height="230" >
                </div>
                <div class="col-sm-8">
                    <?php echo $latestwork['latestwork_content']; ?>
                </div>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col-sm-4">&nbsp;</div>
                <div class="col-sm-8"><b>Technology</b></div>
            </div>
            <div class="row">
                <div class="col-sm-4">&nbsp;</div>
                <div class="col-sm-8">
                    <?php
                        $tec_array = explode(',', $latestwork['latestwork_technology']);
                        foreach ($tec_array as $value) {
                            echo $value.'<br>';
                        }
                    ?>
                </div>
            </div>
            <?php if($latestwork['latestwork_url'] != ''){ ?>
                <div class="row" style="margin-top: 20px;">
                    <div class="col-sm-4">&nbsp;</div>
                    <div class="col-sm-8"><a target="_blnk" href="{{$latestwork['latestwork_url']}}" class="btn btn-primary">View Site</a></div>
                </div>
            <?php } ?>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>