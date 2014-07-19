// 啟用外掛程式
$.jqplot.config.enablePlugins = true;

// 定義函數，以便透過Ajax取得資料
var ajaxDataRenderer = function(url, plot, options) {
  var ret = null;
  $.ajax({
    async: false,
    url: url,
    dataType:"json",
    success: function(data) {
      ret = data;
    },
    error: function(XMLHttpRequest, textStatus, errorThrown){
      alert("載入失敗:"+errorThrown);
    }
  });
  return ret;
};


var opts = {
  title: '圖表標題',
  dataRenderer: ajaxDataRenderer, // 利用Ajax取得資料的設定
  series: [
    {
      label:'資料1',
      showMarker:false
    },
    {
      label:'資料2',
      showMarker:true
    },
  ],

  legend: {
    show:true,
    location:'ne',
  },

  axes: {
    xaxis: {
      label:'x軸標籤',
      labelRenderer:$.jqplot.CanvasAxisLabelRenderer,
      tickRenderer: $.jqplot.CanvasAxisTickRenderer,
      tickOptions:{angle:-30}
    },
    yaxis: {
      label:'y軸標籤',
      labelRenderer:$.jqplot.CanvasAxisLabelRenderer,
      tickRenderer: $.jqplot.CanvasAxisTickRenderer,
    }
  },
  cursor:{zoom:true}
};

$(document).on("pageshow", "#p-ajaxchart", function(e){
  // 載入ajaxdata.json檔案再顯示
  plot = $.jqplot("linechart-ajax", "./ajaxdata.json", opts);
});

$(window).on("orientationchange", function(e){
  plot.replot();
});

$(document).on("pagehide", "#p-ajaxchart", function(e){
  plot.destroy();
});
