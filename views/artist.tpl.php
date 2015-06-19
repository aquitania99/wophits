<div class="container">
    <h3 class="text-capitalize"><?= $title ?> <small> Top Tracks in <strong><?= $country ?></strong>!</small></h3>
    <p><a class="btn btn-default" href="country" role="button"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back to <?= $country;?> results</a></p>
    <div class="row">
        <div class="col-xs-12 col-md-12">
        <?php
        $arr = $artistData['toptracks']['track'];
        $records_per_page = 5;
        $records = count($arr);
        $thisPage = filter_input_array(INPUT_SERVER['PHP_SELF']);
        //Calculate number of $lastPage
        $lastPage = ceil($records/$records_per_page);
        //Condition inputs/set default
        if (isset($_GET['page_number'])) 
        {
            $page_number = $_GET['page_number'];
        }
        else 
        {
            $page_number = 1;
        }
        // validate/limit reuqested $page_number
        $page_number = (int)$page_number;
        if ($page_number > $lastPage)
        {
            $page_number = $lastPage;
        }
        if ($page_number < 1)
        {
            $page_number = 1;
        }
        // Find start and end array index that corresponds to the requested page_number
        $start = ($page_number -1) * $records_per_page;
        $end = $start + $records_per_page -1;
        
        // Limit $end to highest array index
        if($end > $records - 1)
        {
            $end = $records - 1;
        }
        // Display Array from $start to $end
        for ( $i = 0; $i <= $end; $i++ )
        {
//            echo '<div class="col-sm-2 pull-left" style="margin:1px solid #BEBEBE;margin:1em;">';
            echo '<div class="col-sm-2 pull-left" style="margin:1em;">';
            echo '<table class="table table-bordered table-condensed">';
            echo '<tr><td>';
            echo '<h4>'.$arr[$i]['name'].'</h4>';
            echo '<p>Playcount: <strong>'.$arr[$i]['playcount'].'</strong>';
            echo '<p><small><a href="'.$arr[$i]['url'].'" target="_blank">Go to URL</a></small></p>';
//            echo '</div>';
            echo '</td></tr></table></div>';
        }
        ?>
        </div>
        <div class="clearfix pull-left" style="width:100%;">
        <!--first/prev pagination hyperlinks-->
        <?php
        if ($page_number == 1) 
        {
           echo " FIRST PREV ";
        } 
        else 
        {
           echo " <a href='?name=".$title."&page_number=1'>FIRST</a> ";
           $prevpage = $page_number-1;
           echo " <a href='?name=".$title."&page_number=$prevpage'>PREV</a> ";
        }
        // Display current page or pages
        echo " ( Page $page_number of $lastPage ) ";

        // next/last pagination hyperlinks
        if ($page_number == $lastPage) 
        {
           echo " NEXT LAST ";
        } 
        else 
        {
           $nextpage = $page_number+1;
           echo " <a href='?name=".$title."&page_number=$nextpage'>NEXT</a> ";
           echo " <a href='?name=".$title."&page_number=$lastPage>LAST</a> ";
        }
        ?>
        </div>
    </div>
</div>