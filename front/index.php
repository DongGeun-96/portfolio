<?php
    include_once('./head.php');

    if($is_admin_site){
        goto_url('/index.php');
    }

?>
<main>
    <div class="page-breadcrumb">
        <div class="top-banner">
            <div class="pallette-imgbox">
                <img class="pallette-img" src="/front/images/pallete.webp" alt="팔레트">
            </div>
            <div class="logocha-imgbox">
                <img class="logocha-img" src="/front/images/logocha.png" alt="로고 캐릭터">
            </div>
        </div>
        <div class="main_content">
            <!-- 게임영역 -->
            <div>
                <!-- 탭메뉴 -->
                <div class="contentbox-tabbox">
                    <ul class="nav nav-pills contentbox-tab-ul" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="tab-gamebut nav-link active" data-bs-toggle="pill" data-bs-target="#pills-slot" aria-selected="false" tabindex="-1" role="tab">
                                <img class="icon-img icon-img01" src="/front/images/slot.webp" alt="슬롯머신">
                                <div>
                                    <span class="gamename">슬롯머신</span>
                                    <span class="gamename02">SLOT MACHINE</span>
                                </div>
                            </button>
                        </li>
                    <?php /* ?>
                        <li class="nav-item centerli" role="presentation">
                            <button class="tab-gamebut nav-link active" data-bs-toggle="pill" data-bs-target="#pills-live" aria-selected="true" role="tab">
                                <img class="icon-img" src="/front/images/casino.webp" alt="라이브카지노">
                                <div>
                                    <span class="gamename">라이브 카지노</span>
                                    <span class="gamename02">LIVE CASINO</span>
                                </div>
                            </button>
                        </li>
                    <?php */ ?>
                    </ul>
                </div>
                <!-- 게임리스트 -->
                <div class="gamecontentbox w1518">
                    <div class="tab-content" id="pills-tabContent">
                        <!-- 슬롯머신 -->
                        <div class="tab-pane fade show active" id="pills-slot" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="gamebut-box">
                            <?php
                            $sql = " select * from g5_game_provider where is_used='Y' and category = 'Slots' order by order_by asc, gp_no asc ";
                            $result = sql_query($sql);
                            for ($i = 0; $row = sql_fetch_array($result); $i++) {
                                $thumbnail_bg = str_replace(".png",".webp",str_replace(".jpg",".png",$row['provider_thumbnail_bg']));
                                $thumbnail_title = str_replace(".png",".webp",str_replace(".jpg",".png",$row['provider_thumbnail_title']));
                                $thumbnail_desc = str_replace(".png",".webp",str_replace(".jpg",".png",$row['provider_thumbnail_desc']));
                            ?>
                                <a class="gamebut-a-par slot-a-par" href="javascript:doLobby('<?php echo $row['gc_name']; ?>','<?php echo $row['provider_id']; ?>','Slots');">
                                    <p class="game-kind">SLOT MACHINE</p>
                                    <p class="gametitle slot-gametitle"><?php echo $row['provider_title']; ?></p>
                                    <!-- 캐릭터 -->
                                    <div class="casino-cha">
                                        <img src="<?php echo $thumbnail_bg;?>" alt="<?php echo $row['provider_title']; ?>">
                                    </div>
                                    <!-- 로고 -->
                                    <div class="casino-gamelogo">
                                        <img src="<?php echo $thumbnail_title;?>" alt="<?php echo $row['provider_title']; ?>">
                                    </div>
                                    <!-- 게임버튼 -->
                                    <div class="casino-gama-a-span slot-gama-a-span">
                                        <span></span>
                                    </div>
                                </a>
                            <?php
                            }
                            ?>                      
                            </div>
                        </div>
                        <?php /* ?>
                        <!-- 라이브카지노 -->
                        <div class="tab-pane fade show active" id="pills-live" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            <div class="gamebut-box">
                            <?php
                            $sql = " select * from g5_game_lobby where game_non_active='N' order by order_by asc, gl_no asc ";
                            $result = sql_query($sql);
                            for ($i = 0; $row = sql_fetch_array($result); $i++) {
                                $thumbnail_bg = str_replace(".png",".webp",str_replace(".jpg",".png",$row['thumbnail_bg']));
                                $thumbnail_title = str_replace(".png",".webp",str_replace(".jpg",".png",$row['thumbnail_title']));
                                $thumbnail_desc = str_replace(".png",".webp",str_replace(".jpg",".png",$row['thumbnail_desc']));
                            ?>
                                <a class="gamebut-a-par" href="javascript:doGameLobby('<?php echo $row['vendor']; ?>','<?php echo $row['gc_name']; ?>','<?php echo $row['game_id']; ?>');">
                                    <p class="game-kind">LIVE CASINO</p>
                                    <p class="gametitle"><?php echo $row['title_ko']; ?></p>
                                    <!-- 캐릭터 -->
                                    <div class="casino-cha">
                                        <img src="<?php echo $thumbnail_bg;?>" alt="<?php echo $row['title']; ?>">
                                    </div>
                                    <!-- 로고 -->
                                    <div class="casino-gamelogo">
                                        <img src="<?php echo $thumbnail_title;?>" alt="<?php echo $row['title']; ?>">
                                    </div>
                                    <!-- 게임버튼 -->
                                    <div class="casino-gama-a-span">
                                        <span></span>
                                    </div>
                                </a>
                            <?php
                            }
                            ?>                                 
                            </div>
                        </div>
                        <?php */ ?>
                    </div>
                </div>
            </div>
            <!-- 푸터 -->
            <div>
                <!-- 공지 및 출금 -->
                <div class="content-alin w1518">
                    <!-- 공지사항 -->
                    <div id="first" class="picbox albox content-alin-box albox-borderright">
                        <div class="picbox-titleflex">
                            <p class="albox-title">공지사항</p>
                            <a href="javascript:doShowInfo('notice');">더보기</a>
                        </div>
                        <table class="alin-table">
                            <colgroup>
                                <col style="width: 70%;">
                                <col style="width: 30%;">
                            </colgroup>
                            <tbody>
                            <?php
                                $sql = "select
                                            wr_id,
                                            wr_subject,
                                            date_format(wr_datetime,'%Y-%m-%d') as wr_datetime,
                                            case when date_format(now(),'%Y-%m-%d') = date_format(wr_datetime,'%Y-%m-%d') then 'Y' else 'N' end as wr_new
                                        from 
                                            g5_write_notice 
                                        where 
                                            ca_name = 'notice' 
                                        order by wr_id 
                                        desc limit 5 ";
                                $result = sql_query($sql);
                                for($i=0; $row = sql_fetch_array($result); $i++){ 
                                    echo '<tr>';
                                    echo '  <td class="alin-table-th01">';
                                    echo '      <a href="javascript:doShowNoticeDetail('.$row['wr_id'].');">';
                                    if($row['wr_new'] == "Y") echo '          <span class="al-newbage">NEW</span>';
                                    echo '          <span class="alin-span">'.$row['wr_subject'].'</span>';
                                    echo '      </a>';
                                    echo '  </td>';
                                    echo '  <td class="alin-table-th02">'.$row['wr_datetime'].'</td>';
                                    echo '</tr>';
                                }

                            ?> 
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- 게임로고 -->
                <div class="footer-img-box w1036">
                    <div><img src="/front/images/ga01.webp" alt="ag"></div>
                    <div><img src="/front/images/ga02.webp" alt="ag"></div>
                    <div><img src="/front/images/ga03.webp" alt="ag"></div>
                    <div><img src="/front/images/ga04.webp" alt="ag"></div>
                    <div><img src="/front/images/ga05.webp" alt="ag"></div>
                    <div><img src="/front/images/ga06.webp" alt="ag"></div>
                    <div><img src="/front/images/ga07.webp" alt="ag"></div>
                    <div><img src="/front/images/ga08.webp" alt="ag"></div>
                    <div><img src="/front/images/ga09.webp" alt="ag"></div>
                    <div><img src="/front/images/ga10.webp" alt="ag"></div>
                    <div><img src="/front/images/ga11.webp" alt="ag"></div>
                    <div><img src="/front/images/ga12.webp" alt="ag"></div>
                    <div><img src="/front/images/ga13.webp" alt="ag"></div>
                    <div><img src="/front/images/ga14.webp" alt="ag"></div>
                    <div><img src="/front/images/ga15.webp" alt="ag"></div>
                </div>
            </div>

        </div>
    </div>
</main>
<!-- 메인 팝업 -->
<div class="mainpopupbox" id="hd_popup_field">
<script>
    jQuery(document).ready(function() {
        var _w = $(window).width();
        $.ajax({
            type: "POST",
            url: "./ajax/ajax.board.popup.list.php",
            data: {},
            dataType: "JSON",
            success: function(data) {
                if (data.result == "SUCC") {
                    var vHtml = "";
                    cookiedata = document.cookie;
                    var dataList = data.data;
                    for (var i = 0; i < dataList.length; i++) {
                        var pp_id = dataList[i].pp_id;
                        var popup_id = "popup_" + pp_id;

                        if (cookiedata.indexOf(popup_id + "=done") < 0) {
                            vHtml += '<div class="mainpopup" id="' + popup_id + '">';
                            vHtml += '    <div class="mainpopup-imgbox">';
                            vHtml += '  <div>';
                            if(dataList[i].pp_image) {
                                if (dataList[i].pp_link != '') {
                                    vHtml += '<a href="' + dataList[i].pp_link + '" target="' + dataList[i].pp_target + '">';
                                }
                                vHtml += '<img src="' + dataList[i].pp_image + '" style="width:100%;">';
                                if (dataList[i].pp_link != '') {
                                    vHtml += '</a>';
                                }
                            }
                            if (dataList[i].pp_content) {
                                vHtml += dataList[i].pp_content.replace(/(?:\r\n|\r|\n)/g, '<br />');
                            }
                            vHtml += '  </div>';
                            vHtml += '    </div>';
                            vHtml += '    <div class="mainpopup-butbox">';
                            vHtml += '      <button type="button" onClick="closePopupDay(\'' + popup_id + '\',\'' + dataList[i].pp_disable_hours + '\')" ><strong>' + dataList[i].pp_disable_hours + '</strong>시간 동안 다시 열람하지 않습니다.</button>';
                            vHtml += '    </div>';
                            vHtml += '    <button class="mainpopup-closebut" type="button" onClick="closePopup(\'' + popup_id + '\')">';
                            vHtml += '      <span style="color: #fff; font-size: 22px;" class="iconify" data-icon="mingcute:close-fill"></span>';
                            vHtml += '    </button>';
                            vHtml += '</div>';


                        }
                    }
                    $("#hd_popup_field").html(vHtml);
                }
            },
            error: function(event) {
                cfmAlert("잠시후 다시 시도 바랍니다.");
            }
        });
    });

function closePopup(v_poup_id) {
    $("#" + v_poup_id).remove();
}

function closePopupDay(v_poup_id, expirehours) {
    setCookie(v_poup_id, "done", expirehours);
    $("#" + v_poup_id).remove();
}  
function setCookie(name, value, expirehours) {
    // var todayDate = new Date();
    // todayDate.setDate(todayDate.getDate() + expiredays);
    // document.cookie = name + "=" + escape(value) + "; path=/; expires=" + todayDate.toGMTString() + ";"

    var today = new Date();
    today.setTime(today.getTime() + (60 * 60 * 1000 * expirehours));
    document.cookie = name + "=" + escape(value) + "; path=/; expires=" + today.toGMTString() + ";";
}  
// 롤링 입금
function ChargeRollingList(listName,listIndex) {
    let listHeight = 0;
    setInterval(function(){
        listHeight = $(listName).find(".rol02").outerHeight();
        $(listName).css("height", listHeight*listIndex);
        $(listName).find(".rol02-ul").delay(500).animate({"top":-listHeight},1000,function(){
            $(listName).find(".rol02-ul").append($(listName).find(".rol02").first().clone());
            $(listName).find(".rol02-ul").css("top","0px");
            $(listName).find(".rol02").first().remove();
        });
    },1500);
}
// 롤링 출금
function ExchangeRollingList(listName,listIndex) {
    let listHeight = 0;
    setInterval(function(){
        listHeight = $(listName).find(".rol01").outerHeight();
        $(listName).css("height", listHeight*listIndex);
        $(listName).find(".rol01-ul").delay(500).animate({"top":-listHeight},1000,function(){
            $(listName).find(".rol01-ul").append($(listName).find(".rol01").first().clone());
            $(listName).find(".rol01-ul").css("top","0px");
            $(listName).find(".rol01").first().remove();
        });
    },1500);
}

function doCloseGame(v_type)
{
    cfmAlert("준비중입니다.");
}
ChargeRollingList($(".rolling-list-right"),5);
ExchangeRollingList($(".rolling-list-left"),5);
</script>
<script>
    $('.counter').counterUp({
  delay: 200,
  time: 15000
});
</script>
<?php
include_once('./tail.php');
?>