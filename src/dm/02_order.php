<?php include '_header.php' ?>

<table width="100%" border="0" cellpadding="0" cellspacing="0" style="table-layout:fixed">
	<tr>
		<td style="padding:25px 27px;border-bottom:1px solid #e8e8e8">
			<span style="font-size:24px;font-weight:bold;color:#666;font-family:sans-serif">{nameOrder}님,</span>
			<p style="font-size:14px;color:#757575;line-height:20px;font-family:sans-serif;margin-bottom:0;">크리샤를 이용해주셔서 감사합니다.<br>
				고객님께서 주문하신 상품은 잘 접수되었습니다.
			</p>
		</td>
	</tr>
	<tr>
		<td style="padding:25px 27px;border-bottom:1px solid #e8e8e8">
			<p style="color:#666;font-size:16px;font-family:sans-serif;font-weight:bold;padding:0;margin:0 0 10px">주문번호 <span style="color:#f54500">{ordno}</span></p>
			<table width="100%" border="0" cellpadding="0" cellspacing="0" style="table-layout:fixed;border-collapse:collapse">
				<tr>
					<td width="144" height="28" style="color:#666;font-size:12px;font-family:sans-serif">주문하시는 분</td>
					<td style="color:#454545;font-size:12px;font-family:sans-serif">{nameOrder} {phoneOrder} / {mobileOrder}</td>
				</tr>
				<tr>
					<td width="144" height="28" style="color:#666;font-size:12px;font-family:sans-serif">받으시는 분</td>
					<td style="color:#999;font-size:12px;font-family:sans-serif">{nameReceiver}</td>
				</tr>
				<tr>
					<td width="144" height="28" style="color:#666;font-size:12px;font-family:sans-serif">주소</td>
					<td style="color:#999;font-size:12px;font-family:sans-serif">[{zipcode}] {address}</td>
				</tr>
				<tr>
					<td width="144" height="28" style="color:#666;font-size:12px;font-family:sans-serif">전화번호</td>
					<td style="color:#999;font-size:12px;font-family:sans-serif">{phoneReceiver}</td>
				</tr>
				<tr>
					<td width="144" height="28" style="color:#666;font-size:12px;font-family:sans-serif">휴대폰번호</td>
					<td style="color:#999;font-size:12px;font-family:sans-serif">{mobileReceiver}</td>
				</tr>
				<tr>
					<td width="144" height="28" style="color:#666;font-size:12px;font-family:sans-serif">배송메시지</td>
					<td style="color:#999;font-size:12px;font-family:sans-serif">{memo}</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td style="padding:25px 27px;border-bottom:1px solid #e8e8e8">
			<p style="color:#666;font-size:16px;font-family:sans-serif;font-weight:bold;padding:0;margin:0 0 10px">주문하신 상품</p>
			<table width="100%" border="0" cellpadding="0" cellspacing="0" style="table-layout:fixed;border-collapse:collapse">
				<tr>
					<td width="71" style="border-bottom:1px solid #5cc4b9;font-size:12px;font-family:sans-serif;color:#666;text-align:center;height:32px">&nbsp;</td>
					<td width="241" style="border-bottom:1px solid #5cc4b9;font-size:12px;font-family:sans-serif;color:#666;text-align:center">상품정보</td>
					<td width="144" style="border-bottom:1px solid #5cc4b9;font-size:12px;font-family:sans-serif;color:#666;text-align:center">판매가격</td>
					<td width="89" style="border-bottom:1px solid #5cc4b9;font-size:12px;font-family:sans-serif;color:#666;text-align:center">수량</td>
					<td width="135" style="border-bottom:1px solid #5cc4b9;font-size:12px;font-family:sans-serif;color:#666;text-align:center">주문금액</td>
				</tr>
				<!--{ @ cart->item }-->
				<tr>
					<td style="border-bottom:1px solid #e8e8e8;font-family:sans-serif;font-size:14px;color:#666;padding:10px 0">
						<span style="border:1px solid #e4e4e4;display:inline-block;">{=goodsimg(.img,40,'',3)}</span>
					</td>
					<td style="border-bottom:1px solid #e8e8e8;font-family:sans-serif;font-size:14px;color:#666;padding:10px 0">
						<p style="padding:0;margin:0 0 7px">{.goodsnm}</p>
						<p style="padding:0;margin:0;font-size:12px;color:#f54500"><!--{ ? .opt }-->[{=implode("/",.opt)}]<!--{ / }--> <!--{ @ .addopt }-->[{..optnm}:{..opt}]<!--{ / }-->
						</p>
					</td>
					<td style="border-bottom:1px solid #e8e8e8;font-family:sans-serif;font-size:12px;color:#666;padding:10px 0;text-align:center">
						<p style="padding:0;margin:0">{=number_format(.price + .addprice)}원</p>
						<p style="padding:0;margin:0;font-size:11px;color:#999">적립금 {=number_format(.reserve)}원</p>
					</td>
					<td style="border-bottom:1px solid #e8e8e8;font-family:sans-serif;font-size:12px;color:#666;padding:10px 0;text-align:center">{.ea}개</td>
					<td style="border-bottom:1px solid #e8e8e8;font-family:sans-serif;font-size:14px;color:#f54500;padding:10px 0;text-align:center">{=number_format((.price + .addprice)*.ea)}원</td>
				</tr>
				<!--{ / }-->
			</table>
		</td>
	</tr>
	<tr>
		<td style="padding:25px 27px">
			<p style="color:#666;font-size:16px;font-family:sans-serif;font-weight:bold;padding:0;margin:0 0 10px">주문/할인금액</p>
			<table width="100%" border="0" cellpadding="0" cellspacing="0" style="table-layout:fixed;border-collapse:collapse">
				<tr>
					<td style="font-family:sans-serif;font-size:14px;color:#666;border-top:1px solid #f54500;border-right:1px dashed #d8d8d8;text-align:left;padding:9px 0 3px 9px;vertical-align:top">주문금액</td>
					<td style="font-family:sans-serif;font-size:14px;color:#666;border-top:1px solid #f54500;border-right:1px dashed #d8d8d8;text-align:left;padding:9px 0 3px 9px;vertical-align:top">배송비</td>
					<td style="font-family:sans-serif;font-size:14px;color:#666;border-top:1px solid #f54500;text-align:left;padding:9px 0 3px 9px;vertical-align:top">
						총 결제금액
						<p style="padding:0;margin:0;color:#999;font-size:11px;">(신용카드)</p>
					</td>
				</tr>
				<tr>
					<td height="30" style="font-family:sans-serif;color:#666;font-size:16px;text-align:right;border-bottom:1px solid #e8e8e8;border-right:1px dashed #d8d8d8;padding:0 12px 0 0;vertical-align:top">{=number_format(cart-&gt;goodsprice)}원</td>
					<td style="font-family:sans-serif;color:#666;font-size:16px;text-align:right;border-bottom:1px solid #e8e8e8;border-right:1px dashed #d8d8d8;padding:0 12px 0 0;vertical-align:top"><!--{ ? deli_msg }-->{deli_msg}<!--{ : }-->
					택배 {=number_format(cart-&gt;delivery)} 원<!--{ / }--></td>
					<td style="font-family:sans-serif;color:#f54500;font-size:22px;font-weight:bold;text-align:right;border-bottom:1px solid #e8e8e8;padding:0 12px 0 0">{=number_format(cart-&gt;totalprice)}원</td>
				</tr>
			</table>
			<p style="color:#757575;font-size:12px;font-family:sans-serif;line-height:22px;padding:15px 0 0;margin:0">
				크리샤 쇼핑몰 <a href="http://krisha.co.kr/shop/mypage/mypage_orderlist.php" style="color:#f54500">주문/배송조회</a>에서 주문 처리 현황을 확인해 보실 수 있습니다.<br>
				단순변심 및 교환시 상품을 인도 받은 날로부터 7일 이내에 교환 및 반품이 가능합니다.(개봉 전 상품만 가능)
				
			</p>
		</td>
	</tr>
</table>

<?php include '_footer.php' ?>