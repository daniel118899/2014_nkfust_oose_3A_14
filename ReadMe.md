#小組名稱:肉燥飯_No.14

##小組成員

- 0124077陳　安
- 0124029劉育男
- 0124031蕭任軒
- 0124041張惟智
- 0124045曾祥銘


---

#專題題目:"摳哭哩租"點餐系統

##<a name="Contents"/>目錄

* [壹、系統敘述](#1)
* [貳、利害關係人目標表](#2)
* [參、事件與使用案例對照表](#3)
* [肆、系統使用案例圖](#4)
* [伍、個別使用案例的描述](#5)
* [陸、個別使用案例活動圖](#6)
* [柒、每個使用案例的名詞與概念類別列舉表](#7)
* [捌、每個使用案例的初步類別圖](#8)
* [玖、系統的初步類別圖](#9)
* [拾、使用案例主要成功情節之英文名稱事件對應](#9)
* [十一、名稱事件之合約](#9)
* [十二、使用案例之系統循序圖](#9)



##<a name="1"/>壹、系統敘述

　　對於一間餐廳，除了美味的美食，店員的氣氛以及店內舒適之外，對於業者最重要的，就是在於餐點的管控。於是我們著重於餐點系統上，藉由這個系統，希望可以有助於業者在餐點系統，帶來更佳的管控。


##<a name ="2"/>貳、利害關係人目標表

<table border="0">
  <tr>
    <th>利害關係人（參與者）</th>
    <th>目標</th>
  </tr>
  <tr>
    <td>顧客</td>
    <td>
      1.減少點餐時間</td>
  </tr>
  <tr>
    <td>員工</td>
    <td>
      
	  1.加快送餐速度<br>
	  2.減少點餐錯誤率<br>
  </tr>
  <tr>
    <td>老闆</td>
    <td>
      1.方便空管營收
	  2.方便庫存管理<br>
	</td>
  </tr>
</table>


##<a name ="3"/>參、事件與使用案例對照表
<table border="0">
  <tr>
    <th>事件名稱</th>
    <th>使用案例名稱</th>
  </tr>
  <tr>
    <td>新增.刪除.修改員工基本資料</td>
    <td>員工基本資料編輯</td>
  </tr>
  <tr>
    <td>管理現有貨物庫存量<br>
	<td>庫存管理<br>
  </tr>
  <tr>
    <td>能夠讓顧客訂位</td>
    <td>顧客訂位系統<br>
  </tr>

<tr>
	<td>能夠查詢成本.營收利益</td>
	<td>營收管理系統</td>
</tr>

<tr>
	<td>可以讓員工點餐</td>
	<td>點餐系統</td>
</tr>
</table>


##<a name ="4"/>肆、系統使用案例圖

<p><img src="https://cloud.githubusercontent.com/assets/7005967/4719811/891ff884-592c-11e4-984b-3f9fa12fde53.png" title="使用案例描述_學生基本資料作業" /></p>


##<a name ="5"/>伍、個別使用案例的描述
##1.員工基本資料
<table border="0">
  <tr>
    <th>案例名稱</th>
    <th>員工基本資料編輯</th>
	<td></td>
  </tr>
  <tr>
    <td>使用案例敘述</td>
    <td>老闆管理員工資料</td>
	<td></td>
  </tr>
  <tr>
    <td>主要參與者<br>
	<td>老闆<br>
	<td></td>
  </tr>
  <tr>
    <td>利害關係人</td>
    <td>老闆管理及編修基本資料與權限<br>
	<td></td>
  </tr>

<tr>
	<td>前置條件</td>
	<td>繳交員工履歷</td>
	<td></td>
</tr>

<tr>
	<td>後置條件</td>
	<td>無</td>
	<td></td>
</tr>

<tr>
	<td>主要成功情節</td>
	<td>參與者</td>
	<td>系統</td>
	
</tr>
<tr>
	<td></td>
	<td>
	1填寫帳號密碼進入系統<br>
	2查看員工資料<br>
	3編修基本資料<br>
	4結束編輯
	</td>

	<td>
	1系統開啓登入介面<br>
	2列出基本資料列表<br>
	3.0點選想要編輯的員工<br>
	3.1進入個人畫面點選修改or刪除<br>
	3.2完成後返回頁面<br>
	4退出畫面返回主目錄<br>
	</td>

</tr>
<tr>
	<td>例外情節</td>
	<td>輸入錯誤資料、系統重導回原頁面</td>
	<td></td>
</tr>

<tr>
	<td>其他需求</td>
	<td></td>
	<td></td>
<tr>
</table>

##2.庫存管理系統
<table border="0">
  <tr>
    <th>案例名稱</th>
    <th>庫存管理</th>
	<td></td>
  </tr>
  <tr>
    <td>使用案例敘述</td>
    <td>員工、老闆查詢庫存系統，決定是否進貨</td>
	<td></td>
  </tr>
  <tr>
    <td>主要參與者<br>
	<td>員工、老闆<br>
	<td></td>
  </tr>
  <tr>
    <td>利害關係人</td>
    <td>員工、老闆:查看系統進行相關動作<br>
	<td></td>
  </tr>

<tr>
	<td>前置條件</td>
	<td>需有管理的權限</td>
	<td></td>
</tr>

<tr>
	<td>後置條件</td>
	<td>無</td>
	<td></td>
</tr>

<tr>
	<td>主要成功情節</td>
	<td>參與者</td>
	<td>系統</td>
	
</tr>
<tr>
	<td></td>
	<td>
	1登入庫存系統<br>
	2查看現有庫存<br>
	3對庫存進行增減修改<br>
	4結束查詢<br>

	</td>

	<td>
	1出現登入畫面<br>
	2列出現有庫存列表<br>
	3.1修改欲修改項目的庫存量<br>
	3.2判斷是否修改成功<br>
	3.3返回列表畫面<br>
	4登出並返回主目錄<br>
	</td>

</tr>
<tr>
	<td>例外情節</td>
	<td>輸入資料不符合規定，出現錯誤訊息並重新倒回前頁</td>
	<td></td>
</tr>

<tr>
	<td>其他需求</td>
	<td></td>
	<td></td>
<tr>
</table>

##3.顧客訂位系統
<table border="0">
  <tr>
    <th>案例名稱</th>
    <th>顧客訂位</th>
	<td></td>
  </tr>
  <tr>
    <td>使用案例敘述</td>
    <td>員工接到顧客定位，保留其座位</td>
	<td></td>
  </tr>
  <tr>
    <td>主要參與者<br>
	<td>員工<br>
	<td></td>
  </tr>
  <tr>
    <td>利害關係人</td>
    <td>員工:保留預定之座位<br>
	<td></td>
  </tr>

<tr>
	<td>前置條件</td>
	<td>顧客提出定位要求</td>
	<td></td>
</tr>

<tr>
	<td>後置條件</td>
	<td>無</td>
	<td></td>
</tr>

<tr>
	<td>主要成功情節</td>
	<td>參與者</td>
	<td>系統</td>
	
</tr>
<tr>
	<td></td>
	<td>
	1進入系統<br>
	2根據顧客要求的時間、人數查詢當天情況<br>
	3訂位成功並回報顧客<br>
	4結束訂位<br>
	</td>

	<td>
	1進入系統畫面<br>
	2鍵入資料查詢，查看能否訂位<br>
	3當天空位將訂位資料記錄到資料庫<br>
	4返回目錄<br>
	</td>

</tr>
<tr>
	<td>例外情節</td>
	<td>客滿無法定位，出現相關資訊或者能來客的時間</td>
	<td></td>
</tr>

<tr>
	<td>其他需求</td>
	<td></td>
	<td></td>
<tr>
</table>

##4.營收管理系統
<table border="0">
  <tr>
    <th>案例名稱</th>
    <th>營收管理</th>
	<td></td>
  </tr>
  <tr>
    <td>使用案例敘述</td>
    <td>查詢成本與利潤</td>
	<td></td>
  </tr>
  <tr>
    <td>主要參與者<br>
	<td>老闆<br>
	<td></td>
  </tr>
  <tr>
    <td>利害關係人</td>
    <td>老闆方便管控成本、查詢利潤<br>
	<td></td>
  </tr>

<tr>
	<td>前置條件</td>
	<td>需有管理的權限</td>
	<td></td>
</tr>

<tr>
	<td>後置條件</td>
	<td>無</td>
	<td></td>
</tr>

<tr>
	<td>主要成功情節</td>
	<td>參與者</td>
	<td>系統</td>
	
</tr>
<tr>
	<td></td>
	<td>
	1登入系統<br>
	2查詢各項商品成本<br>
	3計算利潤<br>
	4登出系統<br>
	</td>

	<td>
	1呈現登入畫面<br>
	2顯示各項商品成本<br>
	3顯示當其利潤<br>
	4返回登入畫面<br>
	</td>

</tr>
<tr>
	<td>例外情節</td>
	<td>無</td>
	<td></td>
</tr>

<tr>
	<td>其他需求</td>
	<td>無</td>
	<td></td>
<tr>
</table>


##5.點餐系統
<table border="0">
  <tr>
    <th>案例名稱</th>
    <th>點餐系統</th>
	<td></td>
  </tr>
  <tr>
    <td>使用案例敘述</td>
    <td>讓顧客透過此系統點，使商家節省人力成本</td>
	<td></td>
  </tr>
  <tr>
    <td>主要參與者<br>
	<td>顧客、員工<br>
	<td></td>
  </tr>
  <tr>
    <td>利害關係人</td>
    <td>顧客:減少等待時間<br
	>員工:縮短點餐時間、降低人力成本、提升效率、降低出錯率<br>
	<td></td>
  </tr>

<tr>
	<td>前置條件</td>
	<td>顧客須使用系統進行點餐</td>
	<td></td>
</tr>

<tr>
	<td>後置條件</td>
	<td>無</td>
	<td></td>
</tr>

<tr>
	<td>主要成功情節</td>
	<td>參與者</td>
	<td>系統</td>
	
</tr>
<tr>
	<td></td>
	<td>
	1進入舔餐系統<br>
	2點餐、結帳<br>
	3送單<br>
	4返回主目錄<br>
	</td>

	<td>
	1進入點餐畫面<br>
	2將菜單送進資料庫<br>
	3回到初始畫面<br>
	</td>

</tr>
<tr>
	<td>例外情節</td>
	<td>某項餐點數量不足，並無法點選該產品</td>
	<td></td>
</tr>

<tr>
	<td>其他需求</td>
	<td>無</td>
	<td></td>
<tr>
</table>
[Top](#Contents)

##<a name ="6"/>六、個別使用案例活動圖

<p><img src="https://cloud.githubusercontent.com/assets/7005967/4720361/9de51ad4-5930-11e4-9736-6f56510431d4.jpg" title="員工基本資料" /></p>

<p><img src="https://cloud.githubusercontent.com/assets/7005967/4720363/9ded10d6-5930-11e4-80c7-20f608661565.jpg" title="庫存管理系統" /></p>

<p><img src="https://cloud.githubusercontent.com/assets/7005967/4720365/9dfb58a8-5930-11e4-94af-bf2af591ad5b.jpg" title="顧客定位系統" /></p>


<p><img src="https://cloud.githubusercontent.com/assets/7005967/4720364/9df6a2a4-5930-11e4-8c37-2875df0ee43c.jpg" title="營收管理系統" /></p>

<p><img src="https://cloud.githubusercontent.com/assets/7005967/4720362/9debc2da-5930-11e4-99aa-a93ded7f3dcc.jpg" title="點餐系統" /></p>


##<a name ="7"/>七、每個使用案例的名詞與概念類別列舉表

<p><img src="https://cloud.githubusercontent.com/assets/7005967/4720559/faa37850-5931-11e4-9696-dd4c4a4dfe66.jpg" title="概念類別列舉表-1" /></p>


<p><img src="https://cloud.githubusercontent.com/assets/7005967/4720560/faa89574-5931-11e4-9718-af9e2bd03050.jpg" title="概念類別列舉表-2" /></p>


##<a name ="8"/>八、每個使用案例的初步類別圖

##1.員工資料基本編輯之初步流程圖
<p><img src="https://cloud.githubusercontent.com/assets/7005967/4720706/fe222e4e-5932-11e4-9aa1-5cbb3b869a18.jpg" title="員工資料基本編輯之初步流程圖" /></p>

##2.庫存系統作業之初步流程圖
<p><img src="https://cloud.githubusercontent.com/assets/7005967/4720702/fe1d7502-5932-11e4-9bf7-464379a08886.jpg" title="庫存系統作業之初步流程圖" /></p>

##3.訂位系統之初步流程圖
<p><img src="https://cloud.githubusercontent.com/assets/7005967/4720705/fe21f474-5932-11e4-937d-e3e04ee70099.jpg" title="訂位系統之初步流程圖" /></p>

##4.營收系統之初步流程圖
<p><img src="https://cloud.githubusercontent.com/assets/7005967/4720704/fe212b48-5932-11e4-973f-f290b8ac0b1b.jpg" title="營收系統之初步流程圖" /></p>

##5.點餐系統之初步流程圖
<p><img src="https://cloud.githubusercontent.com/assets/7005967/4720763/7317e84c-5933-11e4-8f0c-6e70a4a14bd0.jpg" title="點餐系統之初步流程圖" /></p>




##<a name ="9"/>玖、系統的初步類別圖
<p><img src="https://cloud.githubusercontent.com/assets/7005967/4721027/7366332e-5935-11e4-9565-653784351556.jpg" title="系統的初步類別圖" /></p>


##<a name ="10"/>拾、使用案例主要成功情節之英文名稱事件對應


修改中





##<a name ="11"/>十一、名稱事件之合約

##1.庫存管理系統-合約
<p><img src="https://cloud.githubusercontent.com/assets/7005967/4721529/5a7ae4e6-5939-11e4-8f28-eb26fd091fb8.jpg" title="庫存管理系統-合約-1" /></p>

<p><img src="https://cloud.githubusercontent.com/assets/7005967/4721528/5a74ca2a-5939-11e4-8504-130445593c08.jpg" title="庫存管理系統-合約-2" /></p>

##2.員工管理系統-合約
<p><img src="https://cloud.githubusercontent.com/assets/7005967/4721540/6424f810-5939-11e4-8b0b-13edd6a22c0a.jpg" title="員工管理系統-合約-1" /></p>

<p><img src="https://cloud.githubusercontent.com/assets/7005967/4721539/641d680c-5939-11e4-964c-836da486d41e.jpg" title="員工管理系統-合約-2" /></p>
##3.定位系統-合約
<p><img src="https://cloud.githubusercontent.com/assets/7005967/4721548/71c78212-5939-11e4-9c80-a98d4be56d1b.jpg" title="定位系統-合約" /></p>
##4.營收系統-合約
<p><img src="https://cloud.githubusercontent.com/assets/7005967/4721549/76ee604e-5939-11e4-9ed0-781a09531b13.jpg" title="營收系統-合約" /></p>
##5.點餐系統-合約
<p><img src="https://cloud.githubusercontent.com/assets/7005967/4721553/7abaf0ca-5939-11e4-96ca-1b67b16da32d.jpg" title="點餐系統-合約" /></p>




##<a name ="12"/>十二、使用案例之系統循序圖

修改中

[TOP回到目錄](#Contents)

