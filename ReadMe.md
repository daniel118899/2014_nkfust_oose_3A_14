#小組名稱:肉燥飯_No.14

##小組成員

- 0124077陳　安
- 0124029劉育男
- 0124031蕭任軒
- 0124041張惟智
- 0124045曾祥銘


---

#專題題目:餐廳管理系統

##<a name="Contents"/>目錄

* [壹、系統敘述](#1)
* [貳、利害關係人目標表](#2)
* [參、事件與使用案例對照表](#3)
* [肆、系統使用案例圖](#4)
* [伍、個別使用案例的描述](#5)
* [陸、個別使用案例活動圖](#6)
* [柒、每個使用案例的名詞與概念類別列舉表](#7)
* [捌、系統的初步類別圖](#8)
* [玖、使用案例主要成功情節之英文名稱事件對應](#9)
* [拾、名稱事件之合約](#10)
* [十一、使用案例之系統循序圖](#11)

---

##<a name="1"/>壹、系統敘述

對於一間餐廳而言，除了店內的美食、店員的服務品質以及店內舒適度之外，對於餐廳管理者而言最重要的事，就是在於餐點的控管、服務的品質以及餐廳內部的管理。

於是我們以餐點系統作為出發點，設計了一套餐廳管理系統，希望可以有助於管理者方便控管以及提升顧客的用餐品質．一方面也可以讓顧客透過個人的行動裝置，並依循自己的喜好來來點餐。

其中包含員工管理系統、點餐系統、庫存管理系統、營收管理系統、訂位管理系統以及登入系統等六大子系統。




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
      1.方便控管營收
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
    <td>Login</td>
    <td>登入系統</td>
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
	<td>可以讓顧客點餐</td>
	<td>點餐系統</td>
</tr>
</table>


##<a name ="4"/>肆、系統使用案例圖

<p><img src="https://cloud.githubusercontent.com/assets/7005967/4719811/891ff884-592c-11e4-984b-3f9fa12fde53.png" title="使用案例描述_學生基本資料作業" /></p>


##<a name ="5"/>伍、個別使用案例的描述

##1.登入系統
<table border="0">
  <tr>
    <th>案例名稱</th>
    <th>登入系統</th>
	<td></td>
  </tr>
  <tr>
    <td>使用案例敘述</td>
    <td>老闆、員工、顧客</td>
	<td></td>
  </tr>
  <tr>
    <td>主要參與者<br>
	<td>老闆、員工<br>
	<td></td>
  </tr>
  <tr>
    <td>利害關係人</td>
    <td>老闆、員工<br>
	<td></td>
  </tr>

<tr>
	<td>前置條件</td>
	<td>開啟系統</td>
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
	1老闆、員工需填寫帳號密碼查看系統<br>
	2顧客則填寫授權碼方可進入點餐系統<br>
	</td>

	<td>
	1出現登入畫面<br>
	2.1對內部人員列出現子系統<br>
	2.2對顧客列出點餐系統<br>
	3返回登入畫面<br>
	4進入系統<br>
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




##2.員工基本資料
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

##3.庫存管理系統
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

##4.顧客訂位系統
<table border="0">
  <tr>
    <th>案例名稱</th>
    <th>顧客訂位</th>
	<td></td>
  </tr>
  <tr>
    <td>使用案例敘述</td>
    <td>員工接到顧客訂位，保留其座位</td>
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
	<td>顧客提出訂位要求</td>
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
	<td>客滿無法訂位，出現相關資訊或者能來客的時間</td>
	<td></td>
</tr>

<tr>
	<td>其他需求</td>
	<td></td>
	<td></td>
<tr>
</table>

##5.營收管理系統
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


##6.點餐系統
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

##<a name ="6"/>陸、個別使用案例活動圖

###登入系統###

<p><img src="https://cloud.githubusercontent.com/assets/9345359/4730713/1f282cf4-599e-11e4-8f83-ed022dcffb36.PNG" title="登入系統" /></p>

###員工基本資料###
<p><img src="https://cloud.githubusercontent.com/assets/7005967/4731741/b6faf86a-59b0-11e4-94d6-2fb68d4ee73f.jpg" title="員工基本資料" /></p>

###庫存管理系統###
<p><img src="https://cloud.githubusercontent.com/assets/7005967/4731742/b7016470-59b0-11e4-8132-54b97b341532.jpg" title="庫存管理系統" /></p>

###顧客訂位系統###
<p><img src="https://cloud.githubusercontent.com/assets/7005967/4731745/b70c91e2-59b0-11e4-9885-dfc78c62e874.jpg" title="顧客訂位系統" /></p>

###營收管理系統###
<p><img src="https://cloud.githubusercontent.com/assets/7005967/4731743/b7029f8e-59b0-11e4-8d6c-27264270020e.jpg" title="營收管理系統" /></p>

###點餐系統###
<p><img src="https://cloud.githubusercontent.com/assets/7005967/4731744/b7064512-59b0-11e4-9ea3-ab3120caa400.jpg" title="點餐系統" /></p>


##<a name ="7"/>柒、每個使用案例的名詞與概念類別列舉表

<p><img src="https://cloud.githubusercontent.com/assets/7005980/4764222/906b142a-5b20-11e4-88a8-74b288688520.png" title="概念類別列舉表-1" /></p>


<p><img src="https://cloud.githubusercontent.com/assets/7005980/4764221/90623c24-5b20-11e4-86cf-112d3f04bf6a.png" title="概念類別列舉表-2" /></p>



##<a name ="8"/>捌、系統的初步類別圖
<p><img src="https://cloud.githubusercontent.com/assets/7005980/4756587/97590eb0-5ace-11e4-9e7e-4a16527acf32.jpg" title="系統的初步類別圖" /></p>


##<a name ="9"/>玖、使用案例主要成功情節之英文名稱事件類別圖


###1.登入系統之初步類別圖
<p><img src="https://cloud.githubusercontent.com/assets/7005980/4756583/975561a2-5ace-11e4-8d24-df54b12aa438.jpg" title="登入系統之初步類別圖" /></p>

###2.員工資料基本編輯之初步類別圖
<p><img src="https://cloud.githubusercontent.com/assets/7005980/4756585/97577564-5ace-11e4-96cd-4aded258bedd.jpg" title="員工資料基本編輯之初步流程圖" /></p>

###3.庫存系統作業之初步類別圖
<p><img src="https://cloud.githubusercontent.com/assets/7005980/4756584/975585d8-5ace-11e4-9e86-324d506f87b0.jpg" title="庫存系統作業之初步流程圖" /></p>

###4.訂位系統之初步類別圖
<p><img src="https://cloud.githubusercontent.com/assets/7005980/4756588/97831c14-5ace-11e4-9cb1-329d2c288315.jpg" title="訂位系統之初步流程圖" /></p>

###5.營收系統之初步類別圖
<p><img src="https://cloud.githubusercontent.com/assets/7005980/4756586/9757ee18-5ace-11e4-9f63-699642826ea5.jpg" title="營收系統之初步流程圖" /></p>

###6.點餐系統之初步類別圖
<p><img src="https://cloud.githubusercontent.com/assets/7005980/4756589/978482de-5ace-11e4-8ebe-88748e0d2704.jpg" title="點餐系統之初步流程圖" /></p>





##<a name ="10"/>拾、名稱事件之合約

##1.庫存管理系統-合約
<p><img src="https://cloud.githubusercontent.com/assets/7005967/4721529/5a7ae4e6-5939-11e4-8f28-eb26fd091fb8.jpg" title="庫存管理系統-合約-1" /></p>

<p><img src="https://cloud.githubusercontent.com/assets/7005967/4721528/5a74ca2a-5939-11e4-8504-130445593c08.jpg" title="庫存管理系統-合約-2" /></p>

##2.員工管理系統-合約
<p><img src="https://cloud.githubusercontent.com/assets/7005967/4721540/6424f810-5939-11e4-8b0b-13edd6a22c0a.jpg" title="員工管理系統-合約-1" /></p>

<p><img src="https://cloud.githubusercontent.com/assets/7005967/4721539/641d680c-5939-11e4-964c-836da486d41e.jpg" title="員工管理系統-合約-2" /></p>
##3.訂位系統-合約
<p><img src="https://cloud.githubusercontent.com/assets/7005967/4721548/71c78212-5939-11e4-9c80-a98d4be56d1b.jpg" title="訂位系統-合約" /></p>
##4.營收系統-合約
<p><img src="https://cloud.githubusercontent.com/assets/7005967/4721549/76ee604e-5939-11e4-9ed0-781a09531b13.jpg" title="營收系統-合約" /></p>
##5.點餐系統-合約
<p><img src="https://cloud.githubusercontent.com/assets/7005967/4721553/7abaf0ca-5939-11e4-96ca-1b67b16da32d.jpg" title="點餐系統-合約" /></p>




##<a name ="11"/>拾一、使用案例之系統循序圖


###1.登入系統-循序圖
<p><img src="https://cloud.githubusercontent.com/assets/7005980/4756590/97879208-5ace-11e4-8f0a-d5df3e8e4713.jpg" title="登入系統-循序圖" /></p>

###2.庫存管理系統-循序圖
<p><img src="https://cloud.githubusercontent.com/assets/7005967/4722302/fbe7081e-593e-11e4-9962-f47a8a55eeb7.jpg" title="庫存管理系統-循序圖" /></p>


###3.員工管理系統-循序圖
<p><img src="https://cloud.githubusercontent.com/assets/7005967/4722301/fbdda29c-593e-11e4-8452-80bf810a7d1d.jpg" title="庫存管理系統-循序圖" /></p>


###4.訂位系統-循序圖
<p><img src="https://cloud.githubusercontent.com/assets/7005967/4722300/fbd6e01a-593e-11e4-8daf-9d00e1353b5c.jpg" title="庫存管理系統-循序圖" /></p>


###5.營收系統-循序圖
<p><img src="https://cloud.githubusercontent.com/assets/7005967/4722298/fbd4c186-593e-11e4-99cc-ac4c4d42f5fc.jpg" title="庫存管理系統-循序圖" /></p>


###6.點餐系統-循序圖
<p><img src="https://cloud.githubusercontent.com/assets/7005967/4722299/fbd579aa-593e-11e4-8ab9-91ae132e838f.jpg" title="庫存管理系統-循序圖" /></p>


[TOP回到目錄](#Contents)

