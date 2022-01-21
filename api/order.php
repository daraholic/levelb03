<style>
    #order {
        width: 50%;
        margin: auto;
    }

    .row {
        display: flex;
        width: 100%;
    }

    .row .first {
        width: 15%;
        text-align: right;
    }

    .row .sec {
        width: 85%;
        text-align: left;
    }

    .sec select {
        width: 100%;
    }
</style>
<!-- div#order -->
<div id="order">

    <div class="row">
        <div class="first">感謝您的訂購，您的訂單編號是:<?=$;?></div>
        <div class="sec"><select name="movie" id="movie"></select></div>
    </div>
    <div class="row">
        <div class="first">日期:</div>
        <div class="sec"><select name="date" id="date"></select></div>
    </div>
    <div class="row">
        <div class="first">場次:</div>
        <div class="sec"><select name="session" id="session"></select></div>
    </div>
    <div class="row">
        <div class="ct" style="width: 100%">
            <button onclick="booking()">確定</button>
            <button onclick="reset()">重置</button>
        </div>
    </div>
</div>

<? include_once "../base.php";

$movie=$Movie->find($_POST['id']);
$date=$_POST['date'];
$session=$ss[$_POST['session']];

sort($_POST['seats']);
$seats=$_POST['seats'];
$id=$Ord->math("max","id")+1
$no=date("Ymd").sprintf("%04d",$id);

$Ord->save([
    'no'=>$no,
    'movie'=>$movie['name'],
    'date'=>$date,
    'session'=>$session,
    'seat'=>serialize($seats),
    'qt'=>count($seats)
]);
