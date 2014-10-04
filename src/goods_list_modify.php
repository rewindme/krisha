{*** 분류화면 | goods/goods_list.php ***}
{ # header }

<!-- 상단 HTML -->
<div style="position:absolute;">{=stripslashes(_lstcfg.body)}</div>
<div class="container">

	<form name=frmList>
		<input type=hidden name=category value="{_category}">
		<input type=hidden name=sort value="{_GET['sort']}">
		<input type=hidden name=page_num value="{_GET['page_num']}">
		
		<!-- 상단 카테고리 메뉴 -->
		<div class="location">
			<a href="#" class="ico_home"><i class="blind">KRISHA HOME</i></a>
			<span class="slash">/</span>
			<span class="current">{=currPosition(_category)}</span>
		</div>
		<div class="category_detail">
		
		
			<!-- 추천상품 -->
			<!--{ = this->assign( 'loop', dataDisplayGoods( _category , lstcfg.rimg, lstcfg.rpage_num ) ) // 데이타 호출 }-->
			<!--{ = this->assign( 'dpCfg', _dpCfg.rtpl ) // 설정 }-->
			<!--{ = this->assign( 'cols', lstcfg.rcols ) // 행당 컬럼수 }-->
			<!--{ = this->assign( 'size', lstcfg.rsize ) // 이미지 크기 }-->
			<!--{ ? loop }-->
			<div class="best_item recmd_item">
				<div class="section_head">
					<h2 class="tit_best_item"><i>Best Item</i></h2>			
				</div>		
			
			<!--{ / }-->
			<!--{ = include_file( "goods/list/" + lstcfg.rtpl + ".htm" ) }-->
			</div>
			<div class="goods_list">
				<ul class="tab">
					<!--{ @ dataCategory( _category, true ) }-->					
					<!--{ ? substr(_category,0,3) == .category} -->
						<!--{ ? _category == .category }-->
						<li class="all"><a href="?category={=substr(_category,0,3)}">{.catnm} <span class="cnt">({pg->recode['total']})</span></a></li>
						<!--{ : }-->
						<li><a href="?category={=substr(_category,0,3)}">{.catnm} <span class="cnt">전체보기</span></a></li>
						<!--{ / }-->
					<!--{ / }-->
					<!--{ / }-->
					
					<!--{ @ dataSubCategory( _category, true ) }-->
					<li <!--{ ? _category == .category }-->class="all"<!--{ / }-->><a href="?category={.category}">{.catnm} <span class="cnt">({.gcnt+0})</span></a></li>
					<!--{ ? .index_!=.size_-1 }--> <!--{ / }-->
					<!--{ / }-->

				</ul>
				<p class="sorting_option">
					<!-- capture_start("list_top") -->
					<a href="javascript:sort('regdt desc')" <!--{ ? _GET['sort'] == 'regdt desc' }-->class="selected"<!--{ / }--> >신상품</a> <span class="bar">|</span>
<!-- 					<a href="javascript:sort('regdt')" <!--{ ? _GET['sort'] == 'regdt' }-->class="selected"<!--{ / }--> >인기상품</a> <span class="bar">|</span> -->
					<a href="javascript:sort('price')" <!--{ ? _GET['sort'] == 'goods_price' }-->class="selected"<!--{ / }-->>낮은가격</a> <span class="bar">|</span>
					<a href="javascript:sort('price desc')" <!--{ ? _GET['sort'] == 'goods_price desc' }-->class="selected"<!--{ / }-->>높은가격</a> <span class="bar">|</span>
					<a href="javascript:sort('goodsnm')" <!--{ ? _GET['sort'] == 'goodsnm' }-->class="selected"<!--{ / }-->>상품명</a>
					<!-- capture_end ("list_top") -->
				</p>
				<!--{ = this->assign( 'loop', loopM ) // 데이타 호출 }-->
				<!--{ = this->assign( 'slevel', slevel ) // 권한관련 }-->
				<!--{ = this->assign( 'clevel', clevel ) // 권한관련 }-->
				<!--{ = this->assign( 'clevel_auth', clevel_auth ) // 권한관련 }-->
				<!--{ = this->assign( 'auth_step', auth_step ) // 권한관련 }-->
				<!--{ = this->assign( 'dpCfg', _dpCfg.tpl ) // 설정 }-->
				<!--{ = this->assign( 'cols', lstcfg.cols ) // 행당 컬럼수 }-->
				<!--{ = this->assign( 'size', lstcfg.size ) // 이미지 크기 }-->
				<!--{ = include_file( "goods/list/" + lstcfg.tpl + ".htm" ) }-->
				
				<div class="navigation">
					{pg->page['navi']}
				</div>
			</div>
		</div>
	</form>
	<form name=frmCharge method=post>
	<input type=hidden name=mode value="">
	<input type=hidden name=goodsno value="">
	<input type=hidden name=ea value="1">
	<input type=hidden name=opt[] id=opt value="">
	</form>



<script>
function act(target,goodsno,opt1,opt2)
{
var form = document.frmCharge;

form.mode.value = "addItem";
form.goodsno.value = goodsno;

if(opt2) opt1 += opt2;
document.getElementById("opt").value=opt1;

form.action = target + ".php";
form.submit();
}
function sort(sort)
{
var fm = document.frmList;
if(typeof(document.sSearch) != "undefined") fm = document.sSearch;
fm.sort.value = sort;
fm.submit();
}
function sort_chk(sort)
{
if (!sort) return;
sort = sort.replace(" ","_");
var obj = document.getElementsByName('sort_'+sort);
if (obj.length){
div = obj[0].src.split('list_');
for (i=0;i<obj.length;i++){
chg = (div[1]=="\up_off.gif") ? "\up_on.gif" : "\down_on.gif";
obj[i].src = div[0] + "list_" + chg;
}
}
}
<!--{ ? _GET['sort'] }-->
sort_chk('{_GET['sort']}');
console.log('{_GET['sort']}');
<!--{ / }-->
</script>

{ # footer }
