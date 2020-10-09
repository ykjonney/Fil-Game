<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:30:"./template/pc/index/index.html";i:1601316162;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $seo['title']; ?></title>
    <meta name="keywords" content="<?php echo $seo['keywords']; ?>">
    <meta name="description" content="<?php echo $seo['description']; ?>">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <?php echo $settings['head_html']; ?>
    <link rel="stylesheet" type="text/css" href="__TEMPLATE__static/css/common.css">
    <link rel="stylesheet" type="text/css" href="__TEMPLATE__static/css/style.css?r=1">
    <link rel="stylesheet" type="text/css" href="__TEMPLATE__static/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="__TEMPLATE__static/css/aos.css" />
    <script src="//apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="__TEMPLATE__static/js/swiper.min.js?v=2"></script>
    <script src="__TEMPLATE__static/js/aos.js"></script>
    <script src="__TEMPLATE__static/js/qrcode.js"></script>
    <?php echo $settings['site_statistice']; ?>
    <?php echo $settings['company_kefu_global']; ?>
</head>
<body>

    <div class="header">
        <a href="/"><img src="<?php echo $settings['logo']; ?>" alt="" style="height:55px;margin-left:43px;margin-top:28px;display:block"></a>
    </div>
    <div class="banner">
        <div class="container_1200" style="color:#fff;position: relative">
            <div class="banner_h1">欢迎使用 <?php echo $settings['site_name']; ?></div>
            <div class="banner_text">全球专业、安全、可靠的手机游戏下载平台助力休闲游戏生态健康发展</div>
            <video id="v1" autoplay loop muted style="position: absolute;top:0;right: 0">
                <source src="__TEMPLATE__static/images/index_video.mp4" type="video/mp4"  />
            </video>
        </div>
    </div>

    <div class="game-matrix__data-bar gm-databar">
        <div class="gm-databar__item">
            <span class="gm-databar__item-name">发行游戏数</span>
            <span class="gm-databar__item-value">150</span></div>
        <span class="gm-databar__sperator"></span>
        <div class="gm-databar__item">
            <span class="gm-databar__item-name">月活跃用户数</span>
            <span class="gm-databar__item-value">8000万</span></div>
        <span class="gm-databar__sperator"></span>
        <div class="gm-databar__item">
            <span class="gm-databar__item-name">累计下载量</span>
            <span class="gm-databar__item-value">6亿</span></div>
    </div>
    <?php $category_id =  input('param.category_id') ? input('param.category_id') : 0; ?>
    <div class="index_category">
        <div class="container_1200 index_category_con">
            <div class="title">类型：</div>
            <div class="option_container">
                <a href="/?category_id=0" class="option trans_0_2 <?php if($vo==$category_id){ echo 'on';} ?>">全部</a>
                <?php if(is_array($categorys[0][0]) || $categorys[0][0] instanceof \think\Collection || $categorys[0][0] instanceof \think\Paginator): $i = 0; $__LIST__ = $categorys[0][0];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($categorys[$vo]['is_menu'] == 1): ?>
                <a href="/?category_id=<?php echo $vo; ?>" class="option trans_0_2 <?php if($vo==$category_id){ echo 'on';} ?>"><?php echo $categorys[$vo]['name']; ?></a>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                <div class="clear"></div>
            </div>
        </div>
    </div>

    <div class="fill_50"></div>

    <div class="game-matrix__game-list ajax_lists_container">

        <!--<div class="game-item gm-game-item">
            <img class="gm-game-bg" src="https://sf1.ohayoo.cn/obj/developer-platform/91284946631363030323432333339373_e5a4a7e4beae59bbe.jpg" alt="展示图">
            <div class="gm-game-hover">
                <div class="gm-game-package">
                    <div class="ant-dropdown-trigger gm-game-package-icon">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAMUSURBVHgB7ZvtcdNAEIZfM/zHVIBcQUwHggrSQUwFCRVYQwMkFdhUYNIANhUkaQCLBrBpgGWXO0/IjGXdhz5Wip6ZHc3Y1lm7t3e3t7cCBgYGBpRCRGOWS5Y1y45lhop5CYWI4ny5ZLliGaNG1BmAlZ/yZcWSHPl6h4pRZQCr/BrFvf4bfYWVT+w4L6Ly3hdeQA+nel74ir7CvTunchL0Eev62xLlF+grsraXKL/tbe8LrNzq2SovsIJ3z1Z5oUD5azLRYP+hx7VfejxrWvERKsQ+fMryhuW1/VgCmIfRaLQpuCfhy56/3x9pSyLDM3sVfrLci/Dvc2iBHzYls2Mrm80XZePatrWg01Hhob1ranOeILOGr8mfNcvF4eFtO3MqjweK+ExNzxlkeqqsl5pkSwHeELQX4D+6QHns3jQJiyypU5+bvCdB+wd30ItMpm9dJ0kvD7AutoJuxADOnuk7BDIcz9RoQZbId9z79643OA8B2/tb6CWHcf29z00+HpBBLzlMz3spL/h4gER0WuPzGSv/BQE4GYCVT2GWPY3krPwEgbgOgXPoJUMErgY4g15uEYGrAbSO/U3IxPc/rgZIoJPog5Kue0COSDQdjLSCqwGixlmNvEIkXTeA19b3GF03gGSSouYnVwM8QCeHxGkwrgZw3l62wBwR9MEAqd2rBOG6GRJXq6VAoSJymO1wDk+cPMCGmxvoJWFZ1Z0V/g7d/KsvInPG4HyTjwGW0E8Ck7H+yEZwGt5eaXFuVJIiKbrBLQ/d0jyG714gau/dME7pe18PkNVAMsNdOLufuKwKXh5gV4Mb6GfpuiSGHI11wQsmtRyNCR3wgqVPQBRUIWK9QJabBLrI4RkRBmWErBd8gD5uGi2dIVOiooWgatKoIikyQ0GCo+jMTCQyKb9vpXCKysvcm6Ddkysy9UJtkSGCyuoEybzQ5DMOZSLN8TTfmMId2fJ9YrfPoAU2wpTKS93WZDxmXNDGOZkC6j8n2vjFcgWNkHnVbUaPRdA7q7RXGSyZuUXq/75ZhcUgP+xnCQYGBgYq4C86hlWuEhqz+QAAAABJRU5ErkJggg==" alt="ios"></div>
                    <div class="gm-game-package-name">iOS下载</div></div>
                <div class="gm-game-package">
                    <div class="ant-dropdown-trigger gm-game-package-icon">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAKsSURBVHgB7ZvxddMwEMa/8PgfRvAGLRu4G7gTUCagTJAwAdmAdILCAtSZoOkCxCxAkgU47pAA48q2GkmxjPV7757z5HMsfZaik3UBEolEIgBEdMuWwQP8PVu2lwjAM4RjzfYRjnDD53y4mc1me4wN3QuucSR8bS5PHwGZISC6296xXfITrKRB/PmM7Zwta7g/sElj1+y70cNHrr2QazFWuCGFHsM7skf879gWGDPcgLdPbLhJiNcYG9J99RP0xQeMBd34ba3y0gOWbCuy6w1t/vcUaCr0hqHxQlE7n1M/Xf73iBn9lP7B4NOJhX+cw4HUD56JvOZTUD82/jk84SUOIDU2pXtmhtMSwX1iO7DJL3rfOLbxLzk2uEAssABXdHpyeMDXWmCIubqAB5yHgO7+O5yeDQ+DV3DkOdwRAVZIjBPrIcBdXVZw8rSr+uqM1KrtCsOwatRF6pex7b2uIOlxXD+vnbOJ7kKR1+rRXHj5CZj4i+ZdN6cIBCAVgptY9LXPZhosnlg+BG1vnXqnZxsBzlvKM8TDWUt5hh5cAqEX+A8I+VZ4FCQBMHGSAJg4SQBMnCQAJk4SABPHRoC2xIQD4uEbjsRGgE1L+S3ioWopL9GDjQDvYb7hGvGwhFmEFXroFYDfrZV8uIRSs9LHqLI2dP6Q7BSVUHUUe8flNwgNRfJO8FjSLICJkwSAO0MmMDrf21kAyemDxXwbgErf2wlfQ+ANTitCCTXtOeM1U5TU3tzvjA7ZOGnbnpJzD42yDCoz1MRn/N382PvMG/axPf4HXbFflWMxuip5aAZS9Dg/qs4uVOCVZgFMnCQAJk4SAPEwSEQZUoCuKK1qFtSnUAMlxgiZ/zOw7PC/Nvh/JU//Pjs5EhmSyvvfaltYXLNg+872g+0Lqey0RCKRCMJPs7RRQ8wwbp4AAAAASUVORK5CYII=" alt="android"></div>
                    <div class="gm-game-package-name">安卓下载</div></div>
            </div>
            <div class="gm-game-info">
                <div class="gm-game-info__left">
                    <img class="gm-game-icon" src="https://sf1.ohayoo.cn/obj/developer-platform/63632138031363030323432333333333_31323069636f6e.png" alt="图标"></div>
                <div class="gm-game-info__right">
                    <h2 class="gm-game-name" title="游戏名称">我也是大侠</h2>
                    <p class="gm-game-download">2000万+下载量</p></div>
            </div>
        </div>-->


    </div>

    <div class="list_more"><span>加载更多</span></div>

    <div class="fill_50"></div>

    <div class="footer">
        <div class="container_1200">
            <a href="/"><img src="<?php echo $settings['logo']; ?>" alt="" style="height:55px;margin-top:75px;display:block;float: left"></a>
            <div style="position: absolute;left:0;top:0;width: 100%;text-align: center"><?php echo $settings['icp']; ?></div>
            <div style="float: right;">
                联系电话：<?php echo $settings['company_tel']; ?> &nbsp; &nbsp; &nbsp;
                联系邮箱：<?php echo $settings['company_email']; ?>
            </div>
            <div class="clear"></div>
        </div>

    </div>


    <div style="position: absolute; top: 0px; left: 0px; width: 100%;">
        <div>
            <div class="ant-dropdown ant-dropdown-show-arrow ant-dropdown-placement-topCenter qrcode_mask_block" style="min-width: 50px; left: -1000px; top: -1000px;">
                <div class="ant-dropdown-arrow"></div>
                <div class="gm-game-package-qrcode-box">
                    <div class="gm-game-package-qrcode">
                        <div class="gm-game-package-qrcode-inner" id="qrcode_con">
                        </div>
                        <img class="gm-game-qrcode-icon" src="" alt="图标"></div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>

<script>
    var page = 0;
    function get_ajax_lists(){
        $(this).find('span').addClass('loading').text('加载中...');
        page ++;
        var param = {
            category_id : "<?php echo $category_id; ?>",
            sort : "create_time",
            limit : 24,
            page : page,
            //thumb: '280,170,3'
        };
        $.get('<?php echo url("get_ajax_lists"); ?>',param,function(ret){
            if(ret && ret.length > 0){
                var html = '';
                $.each(ret,function(i,item){
                    html += '<div class="game-item gm-game-item">'
                        +    '<img class="gm-game-bg" src="'+ item.image_url +'" alt="展示图">'
                        +    '<div class="gm-game-hover" logo="'+ item.logo +'">'
                        +        '<div class="gm-game-package" down_url="'+ item.ios_url +'">'
                        +            '<div class="ant-dropdown-trigger gm-game-package-icon">'
                        +                '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAMUSURBVHgB7ZvtcdNAEIZfM/zHVIBcQUwHggrSQUwFCRVYQwMkFdhUYNIANhUkaQCLBrBpgGWXO0/IjGXdhz5Wip6ZHc3Y1lm7t3e3t7cCBgYGBpRCRGOWS5Y1y45lhop5CYWI4ny5ZLliGaNG1BmAlZ/yZcWSHPl6h4pRZQCr/BrFvf4bfYWVT+w4L6Ly3hdeQA+nel74ir7CvTunchL0Eev62xLlF+grsraXKL/tbe8LrNzq2SovsIJ3z1Z5oUD5azLRYP+hx7VfejxrWvERKsQ+fMryhuW1/VgCmIfRaLQpuCfhy56/3x9pSyLDM3sVfrLci/Dvc2iBHzYls2Mrm80XZePatrWg01Hhob1ranOeILOGr8mfNcvF4eFtO3MqjweK+ExNzxlkeqqsl5pkSwHeELQX4D+6QHns3jQJiyypU5+bvCdB+wd30ItMpm9dJ0kvD7AutoJuxADOnuk7BDIcz9RoQZbId9z79643OA8B2/tb6CWHcf29z00+HpBBLzlMz3spL/h4gER0WuPzGSv/BQE4GYCVT2GWPY3krPwEgbgOgXPoJUMErgY4g15uEYGrAbSO/U3IxPc/rgZIoJPog5Kue0COSDQdjLSCqwGixlmNvEIkXTeA19b3GF03gGSSouYnVwM8QCeHxGkwrgZw3l62wBwR9MEAqd2rBOG6GRJXq6VAoSJymO1wDk+cPMCGmxvoJWFZ1Z0V/g7d/KsvInPG4HyTjwGW0E8Ck7H+yEZwGt5eaXFuVJIiKbrBLQ/d0jyG714gau/dME7pe18PkNVAMsNdOLufuKwKXh5gV4Mb6GfpuiSGHI11wQsmtRyNCR3wgqVPQBRUIWK9QJabBLrI4RkRBmWErBd8gD5uGi2dIVOiooWgatKoIikyQ0GCo+jMTCQyKb9vpXCKysvcm6Ddkysy9UJtkSGCyuoEybzQ5DMOZSLN8TTfmMId2fJ9YrfPoAU2wpTKS93WZDxmXNDGOZkC6j8n2vjFcgWNkHnVbUaPRdA7q7RXGSyZuUXq/75ZhcUgP+xnCQYGBgYq4C86hlWuEhqz+QAAAABJRU5ErkJggg==" alt="ios"></div>'
                        +            '<div class="gm-game-package-name">iOS下载</div></div>'
                        +        '<div class="gm-game-package" down_url="'+ item.android_url +'">'
                        +            '<div class="ant-dropdown-trigger gm-game-package-icon">'
                        +               '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAKsSURBVHgB7ZvxddMwEMa/8PgfRvAGLRu4G7gTUCagTJAwAdmAdILCAtSZoOkCxCxAkgU47pAA48q2GkmxjPV7757z5HMsfZaik3UBEolEIgBEdMuWwQP8PVu2lwjAM4RjzfYRjnDD53y4mc1me4wN3QuucSR8bS5PHwGZISC6296xXfITrKRB/PmM7Zwta7g/sElj1+y70cNHrr2QazFWuCGFHsM7skf879gWGDPcgLdPbLhJiNcYG9J99RP0xQeMBd34ba3y0gOWbCuy6w1t/vcUaCr0hqHxQlE7n1M/Xf73iBn9lP7B4NOJhX+cw4HUD56JvOZTUD82/jk84SUOIDU2pXtmhtMSwX1iO7DJL3rfOLbxLzk2uEAssABXdHpyeMDXWmCIubqAB5yHgO7+O5yeDQ+DV3DkOdwRAVZIjBPrIcBdXVZw8rSr+uqM1KrtCsOwatRF6pex7b2uIOlxXD+vnbOJ7kKR1+rRXHj5CZj4i+ZdN6cIBCAVgptY9LXPZhosnlg+BG1vnXqnZxsBzlvKM8TDWUt5hh5cAqEX+A8I+VZ4FCQBMHGSAJg4SQBMnCQAJk4SABPHRoC2xIQD4uEbjsRGgE1L+S3ioWopL9GDjQDvYb7hGvGwhFmEFXroFYDfrZV8uIRSs9LHqLI2dP6Q7BSVUHUUe8flNwgNRfJO8FjSLICJkwSAO0MmMDrf21kAyemDxXwbgErf2wlfQ+ANTitCCTXtOeM1U5TU3tzvjA7ZOGnbnpJzD42yDCoz1MRn/N382PvMG/axPf4HXbFflWMxuip5aAZS9Dg/qs4uVOCVZgFMnCQAJk4SAPEwSEQZUoCuKK1qFtSnUAMlxgiZ/zOw7PC/Nvh/JU//Pjs5EhmSyvvfaltYXLNg+872g+0Lqey0RCKRCMJPs7RRQ8wwbp4AAAAASUVORK5CYII=" alt="android"></div>'
                        +            '<div class="gm-game-package-name">安卓下载</div></div>'
                        +   '</div>'
                        +   ' <div class="gm-game-info">'
                        +        '<div class="gm-game-info__left">'
                        +            '<img class="gm-game-icon" src="'+ item.logo +'" alt="图标"></div>'
                        +        '<div class="gm-game-info__right">'
                        +            '<h2 class="gm-game-name" title="'+ item.title +'">'+ item.title +'</h2>'
                        +            '<p class="gm-game-download">'+ item.hits +'万+下载量</p></div>'
                        +    '</div>'
                        +'</div>';
                    /*html += '<li><a href="'+ item.url +'">'
                        +		'<div class="pic"><img src="'+ item.thumb +'" alt="'+ item.title +'"></div>'
                        +		'<div class="text">'
                        +			'<p class="title">'+ item.title +'</p>'
                        +			'<p class="date">'+ item.create_time.substr(5,2) +' / '+ item.create_time.substr(8,2) +'</p>'
                        +		'</div>'
                        +	'</a></li>'*/
                })
                $('.ajax_lists_container').append(html);
                $('.list_more').find('span').removeClass('loading').text('加载更多');

                $('.gm-game-package').hover(function () {
                    $('#qrcode_con').empty();
                    $('.qrcode_mask_block').find('.gm-game-qrcode-icon').attr('src','');
                    var text = $(this).attr('down_url');
                    var logo = $(this).parents('.gm-game-hover').attr('logo');
                    $('.qrcode_mask_block').find('.gm-game-qrcode-icon').attr('src',logo);
                    new QRCode("qrcode_con", {
                        text: text,
                        width: 134,
                        height: 134,
                        colorDark : "#000000",
                        colorLight : "#ffffff",
                        correctLevel : QRCode.CorrectLevel.H
                    });
                   // new QRCode(document.getElementById("qrcode_con"), "http://www.runoob.com");
                    var X = $(this).offset().top;//元素在当前视窗距离顶部的位置
                    var Y = $(this).offset().left;
                    $('.qrcode_mask_block').css({'left':Y-67,'top':X-200});
                },function(){
                    $('.qrcode_mask_block').css({'left':"-1000px",'top':"-1000px"});
                    $('#qrcode_con').empty();
                    $('.qrcode_mask_block').find('.gm-game-qrcode-icon').attr('src','');
                })

            }else{
                $('.list_more').find('span').removeClass('loading').text('没有更多了');
            }
        })
    };

    $(this).find('span').addClass('loading').text('加载中...');
    get_ajax_lists();

    $('.list_more').click(function(){
        $(this).find('span').addClass('loading').text('加载中...');
        get_ajax_lists();
    });



</script>