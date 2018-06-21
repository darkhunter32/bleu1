<?php
if(empty($pm1) && empty($pms1) && empty($pmp1) && empty($pmp2) && empty($pms2) && empty($pm2) && empty($pmp3) && empty($pages) && empty($services))
{
echo $constants[58]->constant;

}
else{?>
    @include('content.v_search')
<?php }
?>
