<!DOCTYPE html>
<html>
<head>
<title>info</title>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css"/>
<link rel="stylesheet" href="css/custom.css"/>
<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<script src="js/config.js"></script>
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
<script src="js/custom.js"></script>
</head>
<body>
  <div data-role="page" id="main">
    <div data-role="header" data-position="fixed">
      <div data-role="navbar" data-iconpos="top">
        <ul>

          <li data role="page" id="main">
            <a href="main.php" data-icon="home" data-ajax="false">主頁面</a>
          </li>

          <li data role="page" id="calories">
            <a href="calories.php" data-icon="gear" data-ajax="false" >食物熱量計算器</a>
          </li>

          <li data role="page" id="weight">
            <a href="weight.php" data-icon="star" data-ajax="false">孕後體重曲線圖</a>
          </li>

          <li data role="page" id="info">
            <a href="info.php" data-icon="info" data-ajax="false" class="ui-btn-active">更多資料</a>
          </li>
        </ul>
      </div>
    </div>		
	<div data-role="content">
		<ul data-role="listview">
			<li><a href ="#diet">飲食指南</a></li>
			<li><a href ="#exercise">建議運動</a></li>
			<li><a href ="#sick">不適症狀及處理方式</a></li>
		</ul>
	</div>
 </div>
  <div data-role="page" id="diet">
    <div data-role="header" data-position="fixed">
      <div data-role="navbar" data-iconpos="top">
        <ul>

          <li data role="page" id="main">
            <a href="main.php" data-icon="home" data-ajax="false">主頁面</a>
          </li>

          <li data role="page" id="calories">
            <a href="calories.php" data-icon="gear" data-ajax="false" >食物熱量計算器</a>
          </li>

          <li data role="page" id="weight">
            <a href="weight.php" data-icon="star" data-ajax="false">孕後體重曲線圖</a>
          </li>

          <li data role="page" id="info">
            <a href="info.php" data-icon="info" data-ajax="false" class="ui-btn-active">更多資料</a>
          </li>
        </ul>
      </div>
    </div>
	<div data-role="content">
      <div data-role="collapsible-set">
        <div data-role="collapsible" data-content-theme="b" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
			<h3>孕乳婦飲食一般飲食原則</h3>
				<p>
					1.準備懷孕之女性，應將身體調整至健康狀態，並維持理想
					體重，以作為懷孕之準備。如對孕乳期飲食有疑問者，請洽
					詢醫師或營養師提供諮詢協助。
				</p>
				<p>
					2.體重:懷孕期間，孕婦體重應依懷孕前體重做適當調整，
					以增加10-14公斤為宜，且須注意體重增加的速度，懷孕期間
					不適於減重，孕期體重增加指引請參考表一。
				</p>
				<p>
						<img src="form1.jpg">
				</p>
				<p>
					3.熱量:
				</p>
				<p>
					(1).懷孕期的熱量攝取，依據第7版國人膳食營養素參考攝取
					量(DRIs)建議，自懷孕第二期起，每日需增加300大卡的熱量。
					但每個人每天的總熱量，需視孕婦的年齡、活動量、懷孕前的
					健康狀況及體重增加情形，而加以調整。
				</p>
				<p>
					(2).哺乳婦熱量的需要依據第7版國人膳食營養素參考攝取量
					(DRIs)建議，每日以增加500大卡為宜。
				</p>
				<p>
					4.蛋白質:
				</p>
				<p>
					(1).依據第7版國人膳食營養素參考攝取量(DRIs)建議自懷孕
					第一期起，因胎兒開始發育，母體胎盤、子宮、乳房增大,羊
					水及血液量增加，每日需額外增加10公克的蛋白質。蛋白質來
					源中一半以上來自高生物價(High Biological Value,HBV)的
					蛋白質，如:蛋、奶類製品、肉、魚及豆漿、豆腐、豆干等黃豆
					製品。
				</p>
				<p>
					(2).哺乳期間每日母乳的分泌量平均約達850毫升，因乳汁含有
					1.1%的蛋白質，母乳提供幼兒的蛋白質約10公克,所以建議哺乳
					婦每日應增加15公克蛋白質的攝取，蛋白質來源中一半以上應來
					自高生物價蛋白質。
				</p>
		</div>
		<div data-role="collapsible" data-content-theme="b" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
			<h3>礦物質</h3>
				<p>
					(1)鈣:懷孕/哺乳期應攝取充足的鈣質，以滿足胎兒/嬰兒
					的生長和母體的需要。鈣質豐富的食物，如:乳製品、小魚
					乾等。
				</p>
				<p>
					(2)鐵:懷孕時鐵質的需要量增加，除了供應孕婦本身及胎兒
					所需外，並大量貯存在胎兒體內，以供嬰兒出生後四個月內
					使用。鐵質豐富的食物。如:蛋黃、肝、紅肉、腰子、豬血
					、鴨血及雞血等。國人日常膳食中之鐵質攝取量，常不足以
					彌補婦女懷孕、分娩失血及泌乳時的所需。建議自懷孕第三
					期起至分娩後兩個月內，每日另以鐵鹽供給30毫克的鐵質。
				</p>
				<p>
					(3)碘:因胎兒迅速的生長發育，使得孕婦的基礎代謝率隨之
					升高，同時甲狀腺分泌量亦增高，而碘是甲狀腺素的組成物
					質，故應增加碘的攝取量，含碘豐富的食物。如:海帶、紫菜
					等。
				</p>
				<p>
					(4)鈉:懷孕期間若有高血壓或水腫等症狀，則應限制鈉的攝取
					量。
				</p>
				<p>
					(5)鎂:懷孕期間鎂攝取增加，可減少子癲癇前症與胎兒子宮內
					發育不全的發生率。美國醫學研究所(10M)訂定的懷孕期間除食
					物與飲料來源外，補充劑的上限為350毫克/天。
				</p>
				<p>
					(6)鋅:孕乳婦飲食中鋅缺乏，並不會引發骨骼內鋅量移動，因
					而容易造成鋅營養狀況過低情形，且鐵劑的補充亦會抑制鋅的
					吸收，因此鋅的攝取量應加以注意。應鼓勵孕乳婦多攝取含鋅
					量高的食物。
				</p>
				<p>
					(7)其他:礦物質攝取量應達到國人膳食營養素參考攝取量，並
					且不超過其上限攝取量。
				</p>
		</div>
		<div data-role="collapsible" data-content-theme="b" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
			<h3>維生素</h3>
				<p>
					維生素:懷孕及哺乳期間大部分維生素的需要量均增加。
				</p>
				<p>
					(1)維生素B1、B2、B6和菸鹼素的需要量是伴隨熱量及蛋白質的
					增加而升高。
				</p>
				<p>
					(2)維生素B12:對於全素食者，應特別注意維生素B12的補充。維
					生素B12豐富的食物，如:發酵豆類或維生素B12補充劑。
				</p>
				<p>
					(3)其他:維生素攝取量應達到國人膳食營養素參考攝取量，並且
					不超過其上限攝取量。
				</p>
		</div>
		<div data-role="collapsible" data-content-theme="b" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
			<h3>葉酸的重要性</h3>
				<p>
					(1)國內嬰幼兒神經導管缺陷發生率，以1993年至2002年通報
					神經管缺陷之出生人口調查發現，十年來神經管缺陷發生率介
					於0.4-1%，平均發生率約為萬分之7。依據美國實證研究顯示
					，孕期攝取足夠的葉酸可以預防胎兒腦及脊髓的先天性神經
					管缺陷的比例，可減少50-70%胎兒的腦及脊髓的先天性神經
					管缺陷的發生，美國醫學界建議所有計劃生育或育齡婦女至
					少於懷孕前12週，每日攝取量400微克。
				</p>
					(2)我國建議準備懷孕前至少一個月，就要開始注意葉酸的攝
					取，達到每日建議量400微克;而在懷孕期間，不分孕期，每日
					都需額外補充200微克的葉酸，以提供自身與胎兒所需。
				<p>
					(3)葉酸廣泛存在於許多食物中，如:瘦肉、肝臟、酵母、綠色
					蔬菜及黃豆製品，都是豐富的來源，葉酸攝取建議應優先由天
					然食物中多樣攝取。如果在日常飲食中攝取不足，建議在醫師
					處方指導下，補充葉酸錠劑。
				</p>
		</div>
		<div data-role="collapsible" data-content-theme="b" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
			<h3>食物的選擇要均衡，孕、乳婦應減少或避免攝取下列食物</h3>
				<p>
					(1)菸、酒、咖啡與濃茶。
				</p>
				<p>
					(2)脂肪含量多的食物，如:肥肉、油炸食物等。
				</p>
				<p>
					(3)煙燻加工食物，如:醃肉、鹹蛋、鹹魚、火腿、豆腐乳等。
				</p>
				<p>
					(4)空熱量食物，如:糖果、可樂、汽水等。
				</p>
		</div>
		<div data-role="collapsible" data-content-theme="b" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
			<h3>中藥</h3>
				<p>
					不明來源的中藥非經合格中醫師確認用藥用量及用法者，應
					避免食用之。
				</p>
		</div>
	</div>
  </div>
 </div>
	
  <div data-role="page" id="exercise">
    <div data-role="header" data-position="fixed">
      <div data-role="navbar" data-iconpos="top">
        <ul>

          <li data role="page" id="main">
            <a href="main.php" data-icon="home" data-ajax="false">主頁面</a>
          </li>

          <li data role="page" id="calories">
            <a href="calories.php" data-icon="gear" data-ajax="false" >食物熱量計算器</a>
          </li>

          <li data role="page" id="weight">
            <a href="weight.php" data-icon="star" data-ajax="false">孕後體重曲線圖</a>
          </li>

          <li data role="page" id="info">
            <a href="info.php" data-icon="info" data-ajax="false" class="ui-btn-active">更多資料</a>
          </li>
        </ul>
      </div>
    </div>
	<div data-role="content">
      <div data-role="collapsible-set">
			<div data-role="collapsible" data-content-theme="b" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
				<h3>運動注意事項</h3>
					<p>
					<img src="notice.jpg">
					</p>
			</div>
			<div data-role="collapsible" data-content-theme="b" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
				<h3>腿部運動(早期開始做)</h3>
					<p>
					<img src="before1.jpg">
					</p>
			</div>
			<div data-role="collapsible" data-content-theme="b" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
				<h3>腳部運動(早期開始做)</h3>
					<p>
					<img src="before2.jpg">
					</p>
			</div>
			<div data-role="collapsible" data-content-theme="b" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
				<h3>盤腳坐式(三個月後)</h3>
					<p>
					<img src="3months.jpg">
					</p>
			</div>
			<div data-role="collapsible" data-content-theme="b" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
				<h3>腰部運動(六個月後)</h3>
					<p>
					<img src="6months.jpg">
					</p>
			</div>
			<div data-role="collapsible" data-content-theme="b" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
				<h3>腰部深呼吸(懷孕末期)</h3>
					<p>
					<img src="final1.jpg">
					</p>
			</div>
			<div data-role="collapsible" data-content-theme="b" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
				<h3>胸式呼吸(懷孕末期)</h3>
					<p>
					<img src="final2.jpg">
					</p>
			</div>
    </div>
  </div>
 </div>	
 <div data-role="page" id="sick">
    <div data-role="header" data-position="fixed">
      <div data-role="navbar" data-iconpos="top">
        <ul>

          <li data role="page" id="main">
            <a href="main.php" data-icon="home" data-ajax="false">主頁面</a>
          </li>

          <li data role="page" id="calories">
            <a href="calories.php" data-icon="gear" data-ajax="false" >食物熱量計算器</a>
          </li>

          <li data role="page" id="weight">
            <a href="weight.php" data-icon="star" data-ajax="false">孕後體重曲線圖</a>
          </li>

          <li data role="page" id="info">
            <a href="info.php" data-icon="info" data-ajax="false" class="ui-btn-active">更多資料</a>
          </li>
        </ul>
      </div>
    </div>
    <div data-role="content">
      <div data-role="collapsible-set">
        <div data-role="collapsible" data-content-theme="b" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">		
			<h3>腰酸背痛</h3>
				<p>
					原因:姿勢不良，子宮擴大使腰薦椎的曲度增加，懷孕期荷
					爾蒙改變使關節軟化、鬆弛而導致。
				</p>
				<p>
					處理方法:
				</p>
				<p>
					1.保持正確姿勢，背部保持平直，勿彎腰駝背。
				</p>
				<p>
					2.避免拿重物、久站、久坐或太勞累。
				</p>
				<p>
					3.坐時腰背應有支托。
				</p>
				<p>
					4.使用拖腰帶支持腹部，減輕背部過度用力。
				</p>
				<p>
					5.按摩腰或背部以促進血液循環。
				</p>
		</div>
		<div data-role="collapsible" data-content-theme="b" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
			<h3>胃灼熱、心口灼熱</h3>
				<p>
					處理方法:
				</p>
				<p>
					1.少量多餐，避免一次進食太快或過多。
				</p>
				<p>
					2.避免油膩、不易消化或油炸的食物。
				</p>
				<p>
					3.進食後宜半坐臥，不要馬上躺下。
				</p>
		</div>
		<div data-role="collapsible" data-content-theme="b" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
			<h3>噁心、嘔吐現象</h3>
				<p>
					懷孕初期若心噁心、嘔吐等現象，應少量多餐及選擇低脂肪
					且無刺激性的食物，早晨醒來時，可吃些五穀類食物，如餅
					乾、饅頭等改善孕吐。在懷孕末期，避免碳水化合物及脂肪
					攝食過多，造成體脂肪增加。
				</p>
		</div>
       
    </div>
  </div>
 </div>
  </body>
</html>
