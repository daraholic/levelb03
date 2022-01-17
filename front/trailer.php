<style>
    .lists *,
    .controls * {
        box-sizing: border-box;
    }

    .lists {
        width: 210px;
        height: 260px;
        margin: auto;
        overflow: hidden;
    }

</style>

<div class="half" style="vertical-align:top;">
    <h1>預告片介紹</h1>
    <div class="rb tab" style="width:95%;">
        <div>
            <div class="lists">
            <?php
                $pos=$Poster->all(" where `sh`=1 Order By `rank`");
                foreach($pos as $key => $po){
                    echo "<div class='po'>";
                    echo "<img src'img/{$po['path']}'>";
                    echo $po['name'];
                    echo "</div>";
                }
            ?>

            </div>

        </div>
        <div class="controls">
            <div class="left"></div>
            <div class="icons"></div>
        </div>
    </div>
</div>
<script>
    $(".po").eq(0).show();
    let i=0;
    let all=$('.po').length;
    console.log(all)
    let slides=
    
</script>