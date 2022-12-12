<?php
    include "header.php";
    require_once ('getData.php');
    
    $offset = (int)($_GET["offest"] ?? 0);
    $dataOnly = (int)($_GET["dataOnly"] ?? 0);

    $limit = 3;

    $rows = getData($offset, $limit, $db);
    $offset+= $limit;

    $data = [
        'rows' => $rows,
        'offset' => $offset,
    ];
    $data = json_encode($data);

    if ($dataOnly) {
        echo $data;
        exit;
    }
    
    $sql = "SELECT * FROM `posts`";
    $totalCount = $db->query($sql)->fetchColumn(); 


?>

<div class="post-wall">
    <div id="post-list">
        hello
        <input type="hidden" name="total_count" id="total_count" value="<?= $total_count ?>" />
        <input type="hidden" name="offset" id="offset" value="<?= $offset ?>" />
    </div>
    <!-- <div class="ajax-loader text-center">
        <img src="LoaderIcon.gif"> Loading more posts...
    </div> -->
</div>

<script type="text/javascript">
    $(document).ready(function(){
// load the initial rows on page load
        let initialData = <?= $data ?? '' ?>;
        if (initialData) {
            if (initialData.rows) {
                addrows(initialData.rows);
                $('.ajax-loader').hide();
            }
        }
        windowOnScroll();

    });
    function windowOnScroll() {
        $(window).on("scroll", function(e){
            if ($(window).scrollTop() == $(document).height() - $(window).height()){
                console.log('test');
                if($(".post-item").length < $("#total_count").val()) {
                    let offset = $('#offset').val();
                    getMoreData(offset)
                }
            }
        });
    }

    function getMoreData(offset) {
        $('.ajax-loader').show();
        $(window).off("scroll");
        let pageUrl = window.location.href.split('?')[0];
        $.ajax({
            url: pageUrl + '?dataOnly=1&offset=' + offset,
            type: "get",
            success: function (response) {
                response = JSON.parse(response);
                if (response.rows) {
                    addrows(response.rows);
                    if (response.offset) {
                        $('#offset').val(response.offset);
                    }
                    $('.ajax-loader').hide();
                }
                windowOnScroll();
            }
        });
    }

    function addrows(rows) {
        let postList = $("#post-list");
        $.each(rows, function (i, row) {
            let rowHtml = '<div class="post-item" id="'+row.id+'"><p class="post-title">'+row.title+'</p><p>'+'hello'+'</p></div>';
            postList.append(rowHtml);
        });
    }
</script>