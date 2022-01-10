<div>
    <h4 class="ct">預告片清單</h4>
    <div style="display: flex;justify-content:space-between">
        <div style="width: 25%;background:#eee">預告片海報</div>
        <div style="width: 25%;background:#eee">預告片片名</div>
        <div style="width: 25%;background:#eee">預告片排序</div>
        <div style="width: 25%;background:#eee">操作</div>
    </div>
    <div style="display: flex;justify-content:space-between" class="ct">
        <div style="width: 25%;background:#eee">預告片海報</div>
        <div style="width: 25%;background:#eee">預告片片名</div>
        <div style="width: 25%;background:#eee">預告片排序</div>
        <div style="width: 25%;background:#eee">操作</div>
        <div style="width: 25%;">
            <input type="checkbox" name="sh[]" value="">顯示
            <input type="checkbox" name="del[]" value="">刪除
            <select name="ani[]" id="">
                <option value="">淡入淡出</option>
                <option value="">縮放</option>
                <option value="">滑入滑出</option>
            </select>
        </div>
    </div>
    <div class="ct">
        <input type="submit" value="確定修改">
        <input type="reset" value="重置">
    </div>
</div>
<hr>
<div>
    <h4 class="ct">新增預告片海報</h4>
    <form action="api/add_poster.php" method="post" enctype="multipart/form-data">
        <div class="ct">
            <label>
                預告片海報:
                <input type="file" name="path">
            </label>
            <label>
                預告片名:
                <input type="text" name="name">
            </label>
        </div>
        <div class="ct">
            <input type="submit" value="新增">
            <input type="reset" value="重置">
        </div>
    </form>
</div>