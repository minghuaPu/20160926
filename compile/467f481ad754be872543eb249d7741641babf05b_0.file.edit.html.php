<?php
/* Smarty version 3.1.30, created on 2016-12-16 15:04:48
  from "D:\wamp\www\20160926\dream_upgrade\template\job\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58539210299434_61321090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '467f481ad754be872543eb249d7741641babf05b' => 
    array (
      0 => 'D:\\wamp\\www\\20160926\\dream_upgrade\\template\\job\\edit.html',
      1 => 1481871885,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
    'file:public/footer.html' => 1,
  ),
),false)) {
function content_58539210299434_61321090 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style>
  #allmap { width: 100%;height: 100%;margin:10px  0!important;overflow: hidden;margin:0;font-family:"微软雅黑"; }
</style>
<?php echo '<script'; ?>
 type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=ugoCVFLWrP4jOeIKSC8x0xGDntHVEYux"><?php echo '</script'; ?>
>

<div class="container">

  <form action="<?php echo URL_PATH;?>
/job/update" method="post">
    <div class="form-group">
      <label for="">岗位名称：</label>
      <input type="text"  class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['info_arr']->value['job_name'];?>
"  name="job_name" required></div>
    <div class="form-group">
      工资：
      <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['info_arr']->value['money'];?>
" name="money" required></div>
    <div class="form-group" style="height:380px;padding:20px 0;">
      <div class="fl">
        经度：
        <input type="text" name="lng" value="<?php echo $_smarty_tpl->tpl_vars['info_arr']->value['lng'];?>
">
        纬度：
        <input type="text" name="lat" value="<?php echo $_smarty_tpl->tpl_vars['info_arr']->value['lat'];?>
"></div>

      <div class="fr">
        <input type="text" id="key_box" >
        <a  onclick="serach_map()" class="btn">搜索</a>
      </div>

      <!-- 这个是百度地图的盒子 -->
      <div id="allmap"></div>
    </div>
    <div class="form-group" style="margin-top:30px">
      岗位要求：
      <textarea class="form-control"   name="job_require" id="" cols="30" rows="10"><?php echo $_smarty_tpl->tpl_vars['info_arr']->value['job_require'];?>
</textarea>
    </div>

    <div class="form-group" >

      <input type="submit" class="btn btn-success" value="修改招聘">
      <!-- 这个是编辑的条件 -->
      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">

      <a  href="javascript:history.go(-1);" class="btn">返回</a>

    </div>
  </form>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
  // 百度地图API功能
  var map = new BMap.Map("allmap"); 
  var lng = $("input[name='lng']").val();
  var lat  = $("input[name='lat']").val();   
  var marker;   
  if (lng!='') {
    var point = new BMap.Point(lng,lat);//是显示具体的坐标位置
    map.centerAndZoom(point,16);  

     marker = new BMap.Marker(point);  // 创建标注
    map.addOverlay(marker);               // 将标注添加到地图中
    marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画

  }else{
    map.centerAndZoom("广州",12); 

  }      
 
  map.enableScrollWheelZoom();   //启用滚轮放大缩小，默认禁用
  map.enableContinuousZoom();    //启用地图惯性拖拽，默认禁用

  //单击获取点击的经纬度
  map.addEventListener("click",function(e){
      $("input[name='lng']").val(e.point.lng);
      $("input[name='lat']").val(e.point.lat);
  
      map.clearOverlays();     //清除覆盖物

         var point = new BMap.Point(e.point.lng,e.point.lat);//是显示具体的坐标位置
    
     marker = new BMap.Marker(point);  // 创建标注
      map.addOverlay(marker);               // 将标注添加到地图中
      marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画

  });

  // 搜索功能
  var local = new BMap.LocalSearch(map, {
    renderOptions:{ map: map }
  });

  function serach_map () {
   
    local.search($("#key_box").val());
  }
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
