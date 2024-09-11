<?php
/**
 * skin file : /theme/THEME_NAME/skin/board/basic/list.skin.html.php
 */
if (!defined('_EYOOM_')) exit;

add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/plugins/sly/tab_scroll_category.css" type="text/css" media="screen">',0);
add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/plugins/sweetalert2/sweetalert2.min.css" type="text/css" media="screen">',0);
?>

<style>
.board-list {font-size:.9375rem}
.board-list .board-setup {position:relative;border:1px solid #d5d5d5;height:38px;margin-bottom:20px}
.board-list .board-setup .select {position:absolute;top:-1px;left:-1px;display:inline-block;width:200px}
.board-list .board-setup-btn-box {position:absolute;top:-1px;right:-1px;display:inline-block;width:420px}
.board-list .board-setup-btn {float:left;width:25%;height:38px;line-height:38px;color:#fff;text-align:center;font-size:.8125rem}
.board-list .board-setup-btn:nth-child(odd) {background-color:#000}
.board-list .board-setup-btn:nth-child(even) {background-color:#3c3c3e}
.board-list .board-setup-btn:hover {opacity:0.8}
.board-list .favorite-setup {display:inline-block;width:125px;margin-left:15px}
.board-list .favorite-setup .toggle {padding-right:45px}
.board-list .bl-wrap {position:relative;border-top:2px solid #757575;border-bottom:1px solid #757575}
.board-list .bl-wrap > div:nth-last-child(1), .board-list .bl-wrap > div:nth-last-child(2) {border-bottom:0}
.board-list .bl-head {position:relative;display:table;width:100%;height:50px;border-bottom:1px solid #757575;background-color:#f2f2f2}
.board-list .bl-head > div {position:relative}
.board-list .bl-head > div:before {content:"";position:absolute;top:50%;right:0;width:1px;height:13px;background-color:#cacaca;transform:translateY(-50%)}
.board-list .bl-head > div:last-child:before {display:none}
.board-list .bl-head .bl-item {display:table-cell;vertical-align:middle;width:120px;text-align:center}
.board-list .bl-head .bl-num {width:90px}
.board-list .bl-head .bl-num-short {width:80px}
.board-list .bl-head .bl-num-checkbox {width:110px}
.board-list .bl-head .bl-author {width:150px;padding:0 10}
.board-list .bl-head .bl-subj {display:table-cell;vertical-align:middle;text-align:center}
.board-list .bl-list {position:relative;display:table;table-layout:fixed;;width:100%;height:46px;border-bottom:1px solid #eaeaea;padding:8px 0}
.board-list .bl-list .checkbox i {top:5px}
.board-list .bl-list.bl-notice {background-color:#FFF8EC}
.board-list .bl-list > div {position:relative}
.board-list .bl-list > div:before {content:"";position:absolute;top:50%;right:0;width:1px;height:13px;background-color:#dadada;transform:translateY(-50%)}
.board-list .bl-list > div:last-child:before {display:none}
.board-list .bl-list .bl-item {display:table-cell;vertical-align:middle;width:120px;text-align:center}
.board-list .bl-list .bl-num {width:90px}
.board-list .bl-list .bl-num-short {width:80px}
.board-list .bl-list .bl-num-checkbox {width:110px}
.board-list .bl-list .bl-author {width:150px;padding:0 10px;text-align:left}
.board-list .bl-list .bl-subj {display:table-cell;vertical-align:middle}
.board-list .bl-list .bl-subj a {position:relative;display:inline-block;padding:0 10px}
.board-list .bl-list .bl-subj a:hover {color:#000;text-decoration:underline}
.board-list .bl-list .bl-subj .reply-indication {display:inline-block;width:7px;height:10px;border-left:1px dotted #b5b5b5;border-bottom:1px dotted #b5b5b5}
.board-list .bl-list .bl-subj .bl-label {display:inline-block;width:70px;height:20px;line-height:20px;font-size:.8125rem;text-align:center;color:#fff;background-color:#a5a5a5;margin-left:10px;margin-top:3px;margin-bottom:3px}
.board-list .bl-list .bl-subj .bl-new-icon {position:relative;display:inline-block;width:18px;height:14px;background-color:#cc2300;margin-right:2px}
.board-list .bl-list .bl-subj .bl-new-icon:before {content:"";position:absolute;top:4px;left:5px;width:2px;height:6px;background-color:#fff}
.board-list .bl-list .bl-subj .bl-new-icon:after {content:"";position:absolute;top:4px;right:5px;width:2px;height:6px;background-color:#fff}
.board-list .bl-list .bl-subj .bl-new-icon b {position:absolute;top:3px;left:8px;width:2px;height:8px;background-color:#fff;transform:rotate(-60deg)}
.board-list .bl-list .bl-comment {color:#f4511e}
.board-list .bl-list .blind-subject {color:#b5b5b5;cursor:not-allowed}
.board-list .bl-photo {display:inline-block;margin-right:2px}
.board-list .bl-photo img {width:17px;height:17px;border-radius:50%}
.board-list .bl-photo .bl-user-icon {font-size:.9375rem}
.board-list .bl-mobile {display:none}
.board-list .bl-mobile.bl-notice {background-color:#FFF8EC}
.board-list .star-ratings-list {width:75px;margin:0 auto}
.board-list .star-ratings-list li {padding:0;float:left;margin-right:0}
.board-list .star-ratings-list li .rating {color:#a5a5a5;font-size:.8125rem;line-height:normal}
.board-list .star-ratings-list li .rating-selected {color:#cc2300;font-size:.8125rem}
.board-list .bl-no-list {text-align:center;color:#959595;padding:70px 0}
@media (max-width:991px) {
    .board-list .bl-head {display:none}
    .board-list .bl-head-checkbox {display:table}
    .board-list .bl-head > div:before, .board-list .bl-list > div:before, .board-list .bl-head .bl-item, .board-list .bl-list .bl-item {display:none}
    .board-list .bl-head .bl-num-checkbox, .board-list .bl-list .bl-num-checkbox {display:table-cell;width:20px}
    .board-list .bl-head .bl-num-checkbox .bl-txt, .board-list .bl-list .bl-num-checkbox .bl-txt {visibility:visible;opacity:0}
    .board-list .bl-head .checkbox, .board-list .bl-list .checkbox {z-index:1}
    .board-list .bl-list {border-bottom:0}
    .board-list .bl-list .bl-subj a {padding:0}
    .board-list .bl-mobile {position:relative;display:block;border-bottom:1px solid #eaeaea;padding:0 0 8px;color:#959595}
    .board-list .bl-mobile-right {position:absolute;top:0;right:0}
}
</style>
<?php if ($side_layout['use'] == 'yes') { ?>
<style>
@media (max-width:1399px) {
    .board-list .bl-head {display:none}
    .board-list .bl-head-checkbox {display:table}
    .board-list .bl-head > div:before, .board-list .bl-list > div:before, .board-list .bl-head .bl-item, .board-list .bl-list .bl-item {display:none}
    .board-list .bl-head .bl-num-checkbox, .board-list .bl-list .bl-num-checkbox {display:table-cell;width:20px}
    .board-list .bl-head .bl-num-checkbox .bl-txt, .board-list .bl-list .bl-num-checkbox .bl-txt {visibility:visible;opacity:0}
    .board-list .bl-head .checkbox, .board-list .bl-list .checkbox {z-index:1}
    .board-list .bl-list {border-bottom:0}
    .board-list .bl-list .bl-subj a {padding:0}
    .board-list .bl-mobile {position:relative;display:block;border-bottom:1px solid #eaeaea;padding:0 0 8px;color:#959595}
    .board-list .bl-mobile-right {position:absolute;top:0;right:0}
}
</style>
<?php } ?>

<div class="board-list">
    <?php if ($is_admin && !G5_IS_MOBILE && !$wmode) { ?>
    <div class="board-setup btn-edit-mode hidden-xs hidden-sm">
        <span class="eyoom-form">
            <label class="select">
                <select name="set_bo_skin" class="set_bo_skin">
                    <option value="">::스킨선택::</option>
                    <?php foreach ($bo_skin as $skin) { ?>
                    <option value="<?php echo $skin; ?>" <?php echo $skin == $eyoom_board['bo_skin'] ? 'selected': ''; ?>><?php echo $skin; ?></option>
                    <?php }?>
                </select><i></i>
            </label>
        </span>
        <span class="board-setup-btn-box">
            <?php if( $config['cf_eyoom_admin_theme'] != 'basic' ) { ?>
            <a href="<?php echo $bbs->board_config_url('copy'); ?>"  onclick="eb_admset_modal(this.href); return false;" class="board-setup-btn"><i class="far fa-clone"></i> 복제하기</a>
            <a href="<?php echo $bbs->board_config_url('basic'); ?>"  onclick="eb_admset_modal(this.href); return false;" class="board-setup-btn"><i class="fas fa-list-alt"></i> 기본설정</a>
            <a href="<?php echo $bbs->board_config_url('addon'); ?>"  onclick="eb_admset_modal(this.href); return false;" class="board-setup-btn"><i class="far fa-list-alt"></i> <?php echo $eyoom_board['cf_eyoom_admin_theme'] == 'basic' ? '추가기능': '확장기능'; ?></a>
            <a href="<?php echo $bbs->board_config_url('extend'); ?>"  onclick="eb_admset_modal(this.href); return false;" class="board-setup-btn"><i class="far fa-plus-square"></i> 확장필드 (<?php echo number_format($board['bo_ex_cnt']); ?>)</a>
            <?php } else { ?>
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=board&amp;pid=board_copy&amp;bo_table=<?php echo $bo_table; ?>&amp;wmode=1"  onclick="eb_admset_modal(this.href); return false;" class="board-setup-btn"><i class="far fa-clone"></i> 복제하기</a>
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=board&amp;pid=board_form&amp;w=u&amp;bo_table=<?php echo $bo_table; ?>&amp;wmode=1"  onclick="eb_admset_modal(this.href); return false;" class="board-setup-btn"><i class="fas fa-list-alt"></i> 기본설정</a>
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=board_form&amp;w=u&amp;bo_table=<?php echo $bo_table; ?>&amp;wmode=1"  onclick="eb_admset_modal(this.href); return false;" class="board-setup-btn"><i class="far fa-list-alt"></i> 추가기능</a>
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=board&amp;pid=board_extend&amp;w=u&amp;bo_table=<?php echo $bo_table; ?>&amp;wmode=1"  onclick="eb_admset_modal(this.href); return false;" class="board-setup-btn"><i class="far fa-plus-square"></i> 확장필드 (<?php echo number_format($board['bo_ex_cnt']); ?>)</a>
            <?php } ?>
        </span>
    </div>
    <?php } ?>

    <div class="board-info m-b-20">
        <div class="text-gray">
            <?php if ($is_member && $eyoom['is_community_theme'] == 'y') { ?>
            <span class="favorite-setup eyoom-form">
                <label class="toggle small-toggle green-toggle">
                    <input type="hidden" name="favorite_board" id="favorite_board" value="<?php echo !$is_bo_favorite ? 'n': 'y'; ?>">
                    <input type="checkbox" class="btn_favorite_toggle" value="favorite_board" <?php echo $is_bo_favorite ? 'checked':''; ?>><i></i><span class="text-gray">관심게시판</span>
                </label>
            </span>
            <?php } ?>
        </div>
    </div>

    <div>
        <?php /* 게시판 카테고리 시작 */ ?>
        <?php if ($is_category) { ?>
        <div class="float-start float-start-br bunsport-floar">
            <ul class="board-right-ul">
                <li>
                    <a href="<?php echo $category_href; ?>"<?php if (!$decode_sca) { ?> class="board-lion"<?php } ?>>전체(<?php echo number_format($ca_total); ?>)</a>
                </li>
                <?php for ($i = 0; $i < count((array)$bocate); $i++) { ?>
                <li>
                    <a href="<?php echo get_eyoom_pretty_url($bo_table, '', 'sca=' . $bocate[$i]['ca_sca']); ?>"<?php if ($decode_sca == $bocate[$i]['ca_name']) { ?> class="board-lion"<?php } ?>><?php echo $bocate[$i]['ca_name']; ?>(<?php echo $bocate[$i]['ca_count']; ?>)</a>
                </li>
                <?php } ?>
            </ul>
        </div>
        <?php } ?>
        <?php /* 게시판 카테고리 끝 */ ?>
        
        <div class="float-end anal-float-end">
            <?php /* 게시판 검색 시작 */ ?>
                <fieldset id="bo_sch" class="eyoom-form">
                    <form name="fsearch" method="get">
                    <input type="hidden" name="bo_table" value="<?php echo $bo_table; ?>">
                    <input type="hidden" name="sca" value="<?php echo $sca; ?>">
                    <input type="hidden" name="sop" value="and">
                    <label for="sfl" class="sound_only">검색대상</label>
                    <section>
                        <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
                        <div class="input input-button newssearchdiv">
                            <input class="newssearch" type="text" name="stx" value="<?php echo stripslashes($stx); ?>" required id="stx" placeholder="검색어를 입력해주세요.">
                            <div class="button newssearch-submit-div">
                                <input class="newssearch-submit" type="submit" value="검색">
                                <iconify-icon class="newssearchicon" icon="ion:search"></iconify-icon>
                            </div>
                        </div>
                    </section>
                    </form>
                </fieldset>
            <?php /* 게시판 검색 끝 */ ?>
        </div>

        <?php if ($write_href) { ?>
        <div class="clearfix m-t-10">
            <a href="<?php echo $write_href; ?>" class="btn-e btn-e-lg btn-indigo" type="button">글쓰기</a>
        </div>
        <?php } ?>

        <div class="clearfix"></div>
    </div>

    <?php if ($is_admin) { ?>
    <form name="fboardlist" id="fboardlist" action="<?php echo G5_BBS_URL; ?>/board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post" class="eyoom-form">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table; ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl; ?>">
    <input type="hidden" name="stx" value="<?php echo $stx; ?>">
    <input type="hidden" name="spt" value="<?php echo $spt; ?>">
    <input type="hidden" name="sca" value="<?php echo $sca; ?>">
    <input type="hidden" name="page" value="<?php echo $page; ?>">
    <input type="hidden" name="sw" value="">
    <?php } ?>

    
    <div class="bl-wrap board-sport-wrap">
        <div class="<?php if ($list[$i]['is_notice']) { ?>bl-notice<?php } ?>">
            <div class="newscontent">
                <div class="newscontent02">
                    <div class="maincontitle">
                        <p class="maincontitle-p">뉴스 <?php echo number_format($ca_total);?>건</p>
                    </div>
                    <ul class="newscontent02-ul">
                    <?php
                    for ($i=0; $i<count((array)$list); $i++) {
                        $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);
                    ?>
                        <li>
                            <div class="newscontent02-top">
                                <p class="newscontent02-top-kind">스포츠</p>
                                <div class="newscontent02-li-right-bottom">
                                    <div class="newscontent01-num">
                                        <span>조회수</span>
                                        <?php echo number_format($list[$i]['wr_hit']); ?>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="newscontent02-li-box">
                                <div class="newscontent02-li-right">
                                    <a href="<?php echo $list[$i]['href']; ?>" class="newscontent02-li-right-title">
                                        <?php echo $list[$i]['wr_subject']; ?>
                                    </a>
                                    <a href="<?php echo $list[$i]['href']; ?>" class="newscontent02-li-right-title02">
                                        <?php echo $list[$i]['content']; ?>
                                    </a>
                                </div>
                                <div class="newscontent02-li-right-imgbox">
                                    <a href="<?php echo $list[$i]['href']; ?>">
                                        <div class="newscontent02img-div">
                                            <?php
                                            $img_content = "";
                                            if($thumb['src']) {
                                                $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" class="newscontent02img">';
                                            }
                                            
                                            echo $img_content;
                                            ?>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>



        <div class="bl-mobile <?php if ($list[$i]['is_notice']) { ?>bl-notice<?php } ?>"><?php /* 991px 이하에서만 보임 */ ?>
            <?php if ($list[$i]['gnu_icon']) { ?>
            <span class="bl-lv-icon"><img src="<?php echo $list[$i]['gnu_icon']; ?>" align="absmiddle" alt="레벨"></span>
            <?php } ?>
            <?php if ($list[$i]['eyoom_icon']) { ?>
            <span class="bl-lv-icon"><img src="<?php echo $list[$i]['eyoom_icon']; ?>" align="absmiddle" alt="레벨"></span>
            <?php } ?>
            <span class="bl-name-in"><?php echo eb_nameview($list[$i]['mb_id'], $list[$i]['wr_name'], $list[$i]['wr_email'], $list[$i]['homepage'], $list[$i]['mb_id2']); ?></span>
            <div class="bl-mobile-right">
                <?php if(0) { // 숨김처리 시작 (조회수, 추천수, 비추천수 모바일에서는 숨김처리) ?>
                <span class="m-l-5"><i class="far fa-eye"></i> <?php echo number_format($list[$i]['wr_hit']); ?></span>
                <?php if ($is_good) { ?>
                <span class="m-l-5"><i class="far fa-thumbs-up"></i> <span class="text-green"><?php echo number_format($list[$i]['wr_good']); ?></span></span>
                <?php } ?>
                <?php if ($is_nogood) { ?>
                <span class="m-l-5"><i class="far fa-thumbs-down"></i> <span class="text-pink"><?php echo number_format($list[$i]['wr_nogood']); ?></span></span>
                <?php } ?>
                <?php } // 숨김처리 끝 ?>
                <?php if ($eyoom_board['bo_sel_date_type'] == '1') { ?>
                <span class="m-l-5"><i class="far fa-clock"></i> <?php echo $eb->date_time('Y-m-d', $list[$i]['wr_datetime']); ?></span>
                <?php } else if ($eyoom_board['bo_sel_date_type'] == '2') { ?>
                <span class="m-l-5"><i class="far fa-clock"></i> <?php echo $eb->date_format('Y-m-d', $list[$i]['wr_datetime']); ?></span>
                <?php } ?>
            </div>
        </div>

        <?php if (count((array)$list) == 0) { ?>
        <div class="bl-no-list">
            <i class="fas fa-exclamation-circle"></i> 게시물이 없습니다.
        </div>
        <?php } ?>
    </div>
    <?php if ($is_checkbox) { ?>
    <div class="m-t-10">
        <button class="btn-e btn-e-sm btn-gray" type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value">선택삭제</button>
        <button class="btn-e btn-e-sm btn-gray" type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value">선택복사</button>
        <button class="btn-e btn-e-sm btn-gray" type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value">선택이동</button>
    </div>
    <?php } ?>

    <?php if ($is_admin) { ?>
    </form>
    <?php } ?>
</div>

<?php /* 페이지 */ ?>
<?php echo eb_paging($eyoom['paging_skin']);?>

<?php /* 게시판 검색 모달 시작 */ ?>
<div class="modal fade search-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title f-s-20r"><i class="fas fa-search text-gray m-r-7"></i><strong><?php echo $board['bo_subject']; ?> 검색</strong></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php /* 게시판 검색 시작 */ ?>
                <fieldset id="bo_sch" class="eyoom-form">
                    <form name="fsearch" method="get">
                    <input type="hidden" name="bo_table" value="<?php echo $bo_table; ?>">
                    <input type="hidden" name="sca" value="<?php echo $sca; ?>">
                    <input type="hidden" name="sop" value="and">
                    <label for="sfl" class="sound_only">검색대상</label>
             
                    <section>
                        <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
                        <div class="input input-button">
                            <input type="text" name="stx" value="<?php echo stripslashes($stx); ?>" required id="stx">
                            <div class="button"><input type="submit" value="검색">검색</div>
                        </div>
                    </section>
                    </form>
                </fieldset>
                <?php /* 게시판 검색 끝 */ ?>
            </div>
        </div>
    </div>
</div>
<?php /* 게시판 검색 모달 끝 */ ?>

<?php if ($is_checkbox) { ?>
<noscript>
<p class="text-gray f-s-12r m-t-20"><i class="fas fa-exclamation-circle"></i> 자바스크립트를 사용하지 않는 경우 별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>

<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
<?php if ($is_category) { ?>
<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/sly/vendor_plugins.min.js"></script>
<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/sly/sly.min.js"></script>
<script>
$(function() {
    var $frame = $('#tab-category');
    var $wrap  = $frame.parent();
    $frame.sly({
        horizontal: 1,
        itemNav: 'centered',
        smart: 1,
        activateOn: 'click',
        mouseDragging: 1,
        touchDragging: 1,
        releaseSwing: 1,
        scrollBar: $wrap.find('.scrollbar'),
        scrollBy: 1,
        startAt: $frame.find('.active'),
        speed: 300,
        elasticBounds: 1,
        easing: 'easeOutExpo',
        dragHandle: 1,
        dynamicHandle: 1,
        clickBar: 1,
        prevPage: $wrap.find('.prev'),
        nextPage: $wrap.find('.next')
    });
    var tabWidth = $('#tab-category').width();
    var categoryWidth = $('.category-list').width();
    if (tabWidth < categoryWidth) {
        $('.controls').show();
    }
});
</script>
<?php } ?>

<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;
    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;
    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }
    if (!chk_count) {
        Swal.fire({
            title: '중요!',
            html: "<span class='text-crimson'>" + document.pressed + "</span> 할 게시물을 하나 이상 선택하세요.",
            icon: 'error',
            confirmButtonColor: '#e53935',
            confirmButtonText: '확인'
        });
        return false;
    }
    if (document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }
    if (document.pressed == "선택이동") {
        select_copy("move");
        return;
    }
    if (document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;
        f.removeAttribute("target");
        f.action = g5_bbs_url+"/board_list_update.php";
    }
    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;
    if (sw == "copy")
        str = "복사";
    else
        str = "이동";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");
    f.sw.value = sw;
    f.target = "move";
    f.action = g5_bbs_url+"/move.php";
    f.submit();
}
</script>
<?php } ?>

<?php if ($is_admin) { ?>
<script>
$(function() {
    $(".set_bo_skin").change(function() {
        var skin = $(this).val();
        if (!skin) {
            Swal.fire({
                title: '알림',
                html: '스킨을 선택해 주세요.',
                icon: 'warning',
                confirmButtonColor: "#e53935",
                confirmButtonText: "확인"
            });
        } else {
            var bo_table = '<?php echo $bo_table; ?>';
            var url = '<?php echo EYOOM_CORE_URL; ?>/board/set_bo_skin.php';
            $.post(url, { bo_table: bo_table, skin: skin }, function() {
                document.location.href = '<?php echo str_replace('&amp;','&', get_pretty_url($bo_table));?>';
            });
        }
    });
});
</script>
<?php } ?>

<?php if ($is_member) { ?>
<script>
$(function() {
    $(".btn_favorite_toggle").change(function() {
        var favorite = $("#favorite_board").val();

        $.post('<?php echo EYOOM_CORE_URL; ?>/board/favorite_board.php', { bo_table: "<?php echo $bo_table; ?>", favorite: favorite });
        if (favorite == 'y') {
            $("#favorite_board").val('n');
            Swal.fire({
                title: '알림',
                html: '관심게시판에서 <span class="text-crimson">해제</span>하였습니다.',
                icon: 'success',
                confirmButtonColor: '#e53935',
                confirmButtonText: '확인'
            });
        } else if (favorite == 'n') {
            $("#favorite_board").val('y');
            Swal.fire({
                title: '알림',
                html: '관심게시판으로 <span class="text-crimson">등록</span>하였습니다.',
                icon: 'success',
                confirmButtonColor: '#e53935',
                confirmButtonText: '확인'
            });
        }
    });
});
</script>
<?php } ?>