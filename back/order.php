<h3 class="ct">訂單清單</h3>
<style>
    .field {
        display: flex;
    }

    .field span,
    .row span {
        flex: 1;
        background: #eee;
        margin: 0 1px;


    }


    .list {
        height: 400px;
        overflow: auto;
    }
</style>
<div>
    快速刪除:
    <input type="radio" name="type" value="date">
    <input type="text" name="date" id="date">
    <input type="radio" name="type" value="movie">
    <select name="movie" id="movie"></select>
    <button>刪除</button>
</div>
<div class="field">
    <span>訂單編號</span>
    <span>電影名稱</span>
    <span>日期</span>
    <span>場次日期</span>
    <span>訂購數量</span>
    <span>訂購位置</span>
    <span>操作</span>
</div>
<div class="list">
    <?php
    $rows = $Ord->all(" Order by `no` DESC");
    // DESC 由大到小
    foreach ($rows as $row) {
        echo "<div class='row'>";
        echo "<span>{$row['no']}</span>";
        echo "<span>{$row['movie']}</span>";
        echo "<span>{$row['date']}</span>";
        echo "<span>{$row['session']}</span>";
        echo "<span>{$row['qt']}</span>";
        echo "<span>";
        $seats = unserialize($row['seat']);
        foreach ($seats as $seat) {
            echo (floor($seat / 5) + 1) . "排" . ($seat % 5 + 1) . "號";
            echo "<br>";
        }
        echo "</span>";
        echo "  <span><button onclick='del(&#39;ord&#39;,{$row['id']})'>刪除</button></span>";

        echo "</div>";
        echo "<hr>";
    }


    ?>


</div>
<script>
    $("#movie").
</script>