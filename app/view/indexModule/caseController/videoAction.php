<?php

echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">' . "\r\n" . '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">' . "\r\n" . '<head>' . "\r\n" . '	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">' . "\r\n" . '	<title>添加相关视频</title>' . "\r\n" . '	<script type="text/javascript" src="';
echo Zhimin::g('assets_uri');
echo 'js/jquery.min.js"></script>' . "\r\n" . '	<script type="text/javascript" src="';
echo Zhimin::g('assets_uri');
echo 'js/laydate/laydate.js"></script>' . "\r\n" . '	<script type="text/javascript" src="';
echo Zhimin::g('assets_uri');
echo 'js/layer/layer.js"></script>' . "\r\n" . '	<script type="text/javascript" src="';
echo Zhimin::g('assets_uri');
echo 'js/global.js"></script>' . "\r\n" . '	<link rel="stylesheet" type="text/css" href="';
echo Zhimin::g('assets_uri');
echo 'style/reset.css" />' . "\r\n" . '	<link rel="stylesheet" type="text/css" href="';
echo Zhimin::g('assets_uri');
echo 'style/global.css" />' . "\r\n" . '<body style="width:946px;">' . "\r\n" . '	<div class="layer_iframe">' . "\r\n" . '		<div class="iframe_top">添加相关视频<span class="close close_btn"><img src="./images/close.png" alt="" /></span></div>' . "\r\n" . '		<div class="iframe_body iframe_body01">' . "\r\n" . '			<div class="addCase_wrap">' . "\r\n" . '				<form>' . "\r\n" . '				<div class="condition_top">' . "\r\n" . '					<div class="condition_357 condition_s case_conditon">' . "\r\n" . '						<span class="condition_title">单位：</span>' . "\r\n" . '						<font></font>' . "\r\n" . '						<div class="select_280 select_div">' . "\r\n" . '							<div class="select_258 sele_c">' . "\r\n" . '								<p>｛单位总称｝</p>' . "\r\n" . '								<input type="hidden" name="company" value="1" />' . "\r\n" . '								<ul class="ul_band">' . "\r\n" . '									<li date="1" class="li_child">' . "\r\n" . '										<span></span><font>｛单位总称｝</font>' . "\r\n" . '										<ul>' . "\r\n" . '											<li date="2"><span></span><font>｛单位总称-支｝1</font></li>' . "\r\n" . '											<li date="3"><span></span><font>｛单位总称-支｝2</font></li>' . "\r\n" . '											<li date="1" class="li_child">' . "\r\n" . '												<span></span><font>｛单位总称｝</font>' . "\r\n" . '												<ul>' . "\r\n" . '													<li date="2"><span></span><font>｛单位总称-支｝1</font></li>' . "\r\n" . '													<li date="3"><span></span><font>｛单位总称-支｝2</font></li>' . "\r\n" . '													<li date="4"><span></span><font>｛单位总称-支｝3</font></li>									' . "\r\n" . '												</ul>' . "\r\n" . '											</li>' . "\r\n" . '										</ul>' . "\r\n" . '									</li>' . "\r\n" . '									<li date="1" class="li_child">' . "\r\n" . '										<span></span><font>｛单位总称｝</font>' . "\r\n" . '										<ul>' . "\r\n" . '											<li date="2"><span></span><font>｛单位总称-支｝1</font></li>' . "\r\n" . '											<li date="3"><span></span><font>｛单位总称-支｝2</font></li>' . "\r\n" . '											<li date="4"><span></span><font>｛单位总称-支｝3</font></li>									' . "\r\n" . '										</ul>' . "\r\n" . '									</li>' . "\r\n" . '									<li date="3"><span></span><font>｛单位总称-支｝2</font></li>' . "\r\n" . '									<li date="4"><span></span><font>｛单位总称-支｝3</font></li>' . "\r\n" . '									<li date="4"><span></span><font>｛单位总称-支｝3</font></li>' . "\r\n" . '								</ul>' . "\r\n" . '							</div>' . "\r\n" . '							<div class="select_button"></div>' . "\r\n" . '						</div>' . "\r\n" . '					</div>' . "\r\n" . '					<div class="condition_s">' . "\r\n" . '						<span class="condition_title">时间：</span>' . "\r\n" . '					</div>' . "\r\n" . '					<div class="condition_144 condition_s condition_t">' . "\r\n" . '						<span>至</span>' . "\r\n" . '						<div class="select_130 select_div">' . "\r\n" . '							<div class="select_105 sele_c select_in">' . "\r\n" . '								<input type="text" id="start" name="username" value="2016.07.26"  />' . "\r\n" . '							</div>' . "\r\n" . '							<div class="select_time condition_start" onclick="laydate({elem: \'#start\',format: \'YYYY.MM.DD\'});"></div>' . "\r\n" . '						</div>							' . "\r\n" . '					</div>						' . "\r\n" . '					<div class="condition_130 condition_s">							' . "\r\n" . '						<div class="select_130 select_div">' . "\r\n" . '							<div class="select_105 sele_c select_in">' . "\r\n" . '								<input id="end" type="text" name="username" value="2016.07.26" />' . "\r\n" . '							</div>' . "\r\n" . '							<div class="select_time condition_end" onclick="laydate({elem: \'#end\',format: \'YYYY.MM.DD\'});"></div>' . "\r\n" . '						</div>' . "\r\n" . '					</div>' . "\r\n" . '					<div class="button_wrap sub">							' . "\r\n" . '						<input type="submit" value="">' . "\r\n" . '					</div>' . "\r\n" . '					<div class="clear"></div>' . "\r\n" . '				</div>' . "\r\n" . '				<div class="table_height case_table_add">			' . "\r\n" . '					<table class="table_detail">' . "\r\n" . '						<thead>' . "\r\n" . '							<tr>' . "\r\n" . '								<th class="t_back" width="6%">序号</th>' . "\r\n" . '								<th width="11%">操作</th>' . "\r\n" . '								<th class="t_back" width="14%">发布' . $_SESSION['zfz_type'] . '（' . $_SESSION['zfz_type'] . '编号）</th>' . "\r\n" . '								<th width="19%">单位</th>' . "\r\n" . '								<th class="t_back" width="12%">记录仪编号</th>' . "\r\n" . '								<th width="24%">摄录时间（摄录时长）</th>								' . "\r\n" . '							</tr>' . "\r\n" . '						</thead>' . "\r\n" . '						<tbody>' . "\r\n" . '							<!-- 这里有两个效果，一个隔行换色td_back和紧急状态的颜色标注td_red -->' . "\r\n" . '							<tr>' . "\r\n" . '								<td>' . "\r\n" . '									<span class="check_span">' . "\r\n" . '								    	<input type="checkbox"  class="ipt-hide" value="01">' . "\r\n" . '								        <label class="checkbox"></label>01' . "\r\n" . '								    </span>' . "\r\n" . '								</td>' . "\r\n" . '								<td>' . "\r\n" . '									<span class="action_span">' . "\r\n" . '										<a target="_blank" href="case_detail_page.php">查看</a>' . "\r\n" . '									</span>' . "\r\n" . '								</td>' . "\r\n" . '								<td>1111201222</td>' . "\r\n" . '								<td>｛单位总称｝</td>' . "\r\n" . '								<td>12321215</td>' . "\r\n" . '								<td>2016.07.12  15:48:00（16小时31分21秒）</td>' . "\r\n" . '								' . "\r\n" . '							</tr>' . "\r\n" . '							<tr class="td_back td_red">' . "\r\n" . '								<td>' . "\r\n" . '									<span class="check_span">' . "\r\n" . '								    	<input type="checkbox"  class="ipt-hide" value="01">' . "\r\n" . '								        <label class="checkbox"></label>01' . "\r\n" . '								    </span>' . "\r\n" . '								</td>' . "\r\n" . '								<td>' . "\r\n" . '									<span class="action_span">' . "\r\n" . '										<a target="_blank" href="case_detail_page.php">查看</a>' . "\r\n" . '									</span>' . "\r\n" . '								</td>' . "\r\n" . '								<td>1111201222</td>' . "\r\n" . '								<td>｛单位总称｝</td>' . "\r\n" . '								<td>12321215</td>' . "\r\n" . '								<td>2016.07.12  15:48:00（16小时31分21秒）</td>' . "\r\n" . '								' . "\r\n" . '							</tr>' . "\r\n" . '							<tr>' . "\r\n" . '								<td>' . "\r\n" . '									<span class="check_span">' . "\r\n" . '								    	<input type="checkbox"  class="ipt-hide" value="01">' . "\r\n" . '								        <label class="checkbox"></label>01' . "\r\n" . '								    </span>' . "\r\n" . '								</td>' . "\r\n" . '								<td>' . "\r\n" . '									<span class="action_span">' . "\r\n" . '										<a target="_blank" href="case_detail_page.php">查看</a>' . "\r\n" . '									</span>' . "\r\n" . '								</td>' . "\r\n" . '								<td>1111201222</td>' . "\r\n" . '								<td>｛单位总称｝</td>' . "\r\n" . '								<td>12321215</td>' . "\r\n" . '								<td>2016.07.12  15:48:00（16小时31分21秒）</td>' . "\r\n" . '								' . "\r\n" . '							</tr>' . "\r\n" . '							<tr class="td_back">' . "\r\n" . '								<td>' . "\r\n" . '									<span class="check_span">' . "\r\n" . '								    	<input type="checkbox"  class="ipt-hide" value="01">' . "\r\n" . '								        <label class="checkbox"></label>01' . "\r\n" . '								    </span>' . "\r\n" . '								</td>' . "\r\n" . '								<td>' . "\r\n" . '									<span class="action_span">' . "\r\n" . '										<a target="_blank" href="case_detail_page.php">查看</a>' . "\r\n" . '									</span>' . "\r\n" . '								</td>' . "\r\n" . '								<td>1111201222</td>' . "\r\n" . '								<td>｛单位总称｝</td>' . "\r\n" . '								<td>12321215</td>' . "\r\n" . '								<td>2016.07.12  15:48:00（16小时31分21秒）</td>' . "\r\n" . '								' . "\r\n" . '							</tr>' . "\r\n" . '							<tr>' . "\r\n" . '								<td>' . "\r\n" . '									<span class="check_span">' . "\r\n" . '								    	<input type="checkbox"  class="ipt-hide" value="01">' . "\r\n" . '								        <label class="checkbox"></label>01' . "\r\n" . '								    </span>' . "\r\n" . '								</td>' . "\r\n" . '								<td>' . "\r\n" . '									<span class="action_span">' . "\r\n" . '										<a target="_blank" href="case_detail_page.php">查看</a>' . "\r\n" . '									</span>' . "\r\n" . '								</td>' . "\r\n" . '								<td>1111201222</td>' . "\r\n" . '								<td>｛单位总称｝</td>' . "\r\n" . '								<td>12321215</td>' . "\r\n" . '								<td>2016.07.12  15:48:00（16小时31分21秒）</td>' . "\r\n" . '								' . "\r\n" . '							</tr>' . "\r\n" . '							<tr class="td_back">' . "\r\n" . '								<td>' . "\r\n" . '									<span class="check_span">' . "\r\n" . '								    	<input type="checkbox"  class="ipt-hide" value="01">' . "\r\n" . '								        <label class="checkbox"></label>01' . "\r\n" . '								    </span>' . "\r\n" . '								</td>' . "\r\n" . '								<td>' . "\r\n" . '									<span class="action_span">' . "\r\n" . '										<a target="_blank" href="case_detail_page.php">查看</a>' . "\r\n" . '									</span>' . "\r\n" . '								</td>' . "\r\n" . '								<td>1111201222</td>' . "\r\n" . '								<td>｛单位总称｝</td>' . "\r\n" . '								<td>12321215</td>' . "\r\n" . '								<td>2016.07.12  15:48:00（16小时31分21秒）</td>' . "\r\n" . '								' . "\r\n" . '							</tr>' . "\r\n" . '							<tr class="td_red">' . "\r\n" . '								<td>' . "\r\n" . '									<span class="check_span">' . "\r\n" . '								    	<input type="checkbox"  class="ipt-hide" value="01">' . "\r\n" . '								        <label class="checkbox"></label>01' . "\r\n" . '								    </span>' . "\r\n" . '								</td>' . "\r\n" . '								<td>' . "\r\n" . '									<span class="action_span">' . "\r\n" . '										<a target="_blank" href="case_detail_page.php">查看</a>' . "\r\n" . '									</span>' . "\r\n" . '								</td>' . "\r\n" . '								<td>1111201222</td>' . "\r\n" . '								<td>｛单位总称｝</td>' . "\r\n" . '								<td>12321215</td>' . "\r\n" . '								<td>2016.07.12  15:48:00（16小时31分21秒）</td>' . "\r\n" . '								' . "\r\n" . '							</tr>' . "\r\n" . '							<tr class="td_back">' . "\r\n" . '								<td>' . "\r\n" . '									<span class="check_span">' . "\r\n" . '								    	<input type="checkbox"  class="ipt-hide" value="01">' . "\r\n" . '								        <label class="checkbox"></label>01' . "\r\n" . '								    </span>' . "\r\n" . '								</td>' . "\r\n" . '								<td>' . "\r\n" . '									<span class="action_span">' . "\r\n" . '										<a target="_blank" href="case_detail_page.php">查看</a>' . "\r\n" . '									</span>' . "\r\n" . '								</td>' . "\r\n" . '								<td>1111201222</td>' . "\r\n" . '								<td>｛单位总称｝</td>' . "\r\n" . '								<td>12321215</td>' . "\r\n" . '								<td>2016.07.12  15:48:00（16小时31分21秒）</td>								' . "\r\n" . '							</tr>' . "\r\n" . '							<!-- 没有记录时输出 -->' . "\r\n" . '							<tr class="td_back">' . "\r\n" . '								<td colspan="6">暂无记录</td>' . "\r\n" . '							</tr>						' . "\r\n" . '						</tbody>' . "\r\n" . '					</table>' . "\r\n" . '				</div>' . "\r\n" . '				<div class="page_link">' . "\r\n" . '					<a href="#" class="prev">&nbsp;</a>' . "\r\n" . '					<a href="#" class="a_num on">1</a>' . "\r\n" . '					<span>...</span>' . "\r\n" . '					<a href="#" class="a_num">2</a>' . "\r\n" . '					<a href="#" class="a_num">3</a>' . "\r\n" . '					<a href="#" class="a_num">4</a>' . "\r\n" . '					<a href="#" class="next">&nbsp;</a>' . "\r\n" . '					<span>跳至</span>' . "\r\n" . '					<input type="text" name="" value="30">' . "\r\n" . '					<span>页</span>' . "\r\n" . '					<span> 共150页 </span>' . "\r\n" . '					<span>纪录数1221条</span>' . "\r\n" . '				</div>' . "\r\n" . '				<div class="button_case">' . "\r\n" . '					<span class="sure_add">确 定</span>' . "\r\n" . '					<span class="sure_cancle close_btn">取 消</span>' . "\r\n" . '				</div>' . "\r\n" . '				</form>' . "\r\n" . '			</div>' . "\r\n" . '		</div>' . "\r\n" . '		<div class="iframe_foot iframe_foot01"></div>' . "\r\n" . '	</div>' . "\r\n" . '	<!-- 警告提示框 -->' . "\r\n" . '	<div class="layer_notice lay_add">' . "\r\n" . '		<div class="notice_top"><span class="close close_btn">X</span></div>' . "\r\n" . '		<div class="notice_body">' . "\r\n" . '			<div class="n_left">' . "\r\n" . '				<img src="./images/notice_bg.png">' . "\r\n" . '			</div>' . "\r\n" . '			<div class="n_right">' . "\r\n" . '				<p>标注信息不能为空......<font>3</font>秒钟后返回页面！</p>' . "\r\n" . '				<div class="clear"></div>' . "\r\n" . '				<span class="cancle_span close_btn">确 定</span>' . "\r\n" . '			</div>' . "\r\n" . '		</div>' . "\r\n" . '		<div class="notice_foot"></div>' . "\r\n" . '	</div>' . "\r\n" . '	<!-- 成功提示框 -->' . "\r\n" . '	<div class="layer_notice lay_success">' . "\r\n" . '		<div class="notice_top"><span class="close close_btn">X</span></div>' . "\r\n" . '		<div class="notice_body">' . "\r\n" . '			<div class="n_left">' . "\r\n" . '				<img src="./images/success_bg.png">' . "\r\n" . '			</div>' . "\r\n" . '			<div class="n_right">' . "\r\n" . '				<p>删除成功......<font>3</font>秒钟后返回页面！</p>' . "\r\n" . '				<div class="clear"></div>' . "\r\n" . '				<span class="cancle_span close_btn">确 定</span>' . "\r\n" . '			</div>' . "\r\n" . '		</div>' . "\r\n" . '		<div class="notice_foot"></div>' . "\r\n" . '	</div>' . "\r\n" . '	<!-- 失败提示框 -->' . "\r\n" . '	<div class="layer_notice lay_wrong">' . "\r\n" . '		<div class="notice_top"><span class="close close_btn">X</span></div>' . "\r\n" . '		<div class="notice_body">' . "\r\n" . '			<div class="n_left">' . "\r\n" . '				<img src="./images/notice_bg.png">' . "\r\n" . '			</div>' . "\r\n" . '			<div class="n_right">' . "\r\n" . '				<p>删除失败......<font>3</font>秒钟后返回页面！</p>' . "\r\n" . '				<div class="clear"></div>' . "\r\n" . '				<span class="cancle_span close_btn">确 定</span>' . "\r\n" . '			</div>' . "\r\n" . '		</div>' . "\r\n" . '		<div class="notice_foot"></div>' . "\r\n" . '	</div>' . "\r\n" . '</body>' . "\r\n" . '</html>';

?>