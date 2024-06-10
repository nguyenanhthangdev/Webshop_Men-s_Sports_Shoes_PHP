<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li><a href="/admin.php">Quản Trị</a></li>
        <li><a href="/admin/dashboard.php">Dashboard</a></li>
      </ul>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6"><div class="tile">
      <div class="tile-heading">Số đơn hàng trong ngày<span class="pull-right"><i class="fa fa-caret-up"></i>...%</span></div>
      <div class="tile-body"><i class="fa fa-shopping-cart"></i>
        <h3 class="pull-right"><?php echo orderGetTotalForTheDay();?></h3>
      </div>
      <div class="tile-footer"><a href="/admin/order.php">Xem thêm ...</a></div>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-6"><div class="tile">
    <div class="tile-heading">Tổng doanh số trong ngày<span class="pull-right">
        <i class="fa fa-caret-up"></i>...% </span></div>
        <div class="tile-body"><i class="fa fa-credit-card"></i>
          <h3 class="pull-right"><?php echo orderGetTotalSalesWithFormatForTheDay();?></h3>
        </div>
    <div class="tile-footer"><a href="/admin/order.php">Xem thêm ...</a></div>
  </div>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-6"><div class="tile">
    <div class="tile-heading">Tổng số khách hàng trong ngày<span class="pull-right">
      <i class="fa fa-caret-down"></i>-...%</span></div>
        <div class="tile-body"><i class="fa fa-user"></i>
        <h3 class="pull-right">Đang xử lý</h3>
    </div>
    <div class="tile-footer"><a href="/admin/customer.php">Xem thêm ...</a></div>
  </div>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-6"><div class="tile">
    <div class="tile-heading">Khách hàng Online</div>
    <div class="tile-body"><i class="fa fa-eye"></i>
      <h3 class="pull-right">Đang xử lý</h3>
    </div>
    <div class="tile-footer"><a href="#link-to-report-customer-online">Xem thêm ...</a></div>
  </div>
  </div>
</div>

<canvas id="myChart" style="width:100%;max-width:1000px"></canvas>

<script>
var xValues = ['Tháng 1','Tháng 2','Tháng 3','Tháng 4','Tháng 5','Tháng 6','Tháng 7','Tháng 8','Tháng 9','Tháng 10','Tháng 11','Tháng 12'];

var yValues = <?php
  date_default_timezone_set("Asia/Ho_Chi_Minh");
  $time = date('Y');
  $arrayPrice = ''; 

  for($i = 12; $i > 0; $i--){
    if($i<10){$i = "0" . $i;}
    $yearsMonths = $time ."-". $i;
    $total = totalNumberOfCustomersForTheMonth($yearsMonths);
    $arrayPrice = $total . "," . $arrayPrice;
  }

  $arrayPrice = "[" . $arrayPrice . "]";

  echo $arrayPrice;
?>;
console.log(yValues);
var barColors = ["red", "green","blue","orange","brown","violet","red", "green","blue","orange","brown","violet"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Doanh thu từng tháng năm <?php date_default_timezone_set("Asia/Ho_Chi_Minh"); echo date('Y');?>"
    }
  }
});
</script>

<div style="width:100%;">
  <canvas id="canvas"></canvas>
</div>

<script>
  var chartColors = {
  red: 'rgb(255, 99, 132)',
  orange: 'rgb(255, 159, 64)',
  yellow: 'rgb(255, 205, 86)',
  green: 'rgb(75, 192, 192)',
  blue: 'rgb(54, 162, 235)',
  purple: 'rgb(153, 102, 255)',
  grey: 'rgb(231,233,237)'
};

// used to generate random data point values
var randomScalingFactor = function() {
  return (Math.random() > 0.5 ? 1.0 : 1.0) * Math.round(Math.random() * 100);
};

// decimal rounding algorithm
// see: https://plnkr.co/edit/uau8BlS1cqbvWPCHJeOy?p=preview
var roundNumber = function (num, scale) {
  var number = Math.round(num * Math.pow(10, scale)) / Math.pow(10, scale);
  if(num - number > 0) {
    return (number + Math.floor(2 * Math.round((num - number) * Math.pow(10, (scale + 1))) / 10) / Math.pow(10, scale));
  } else {
    return number;
  }
};

// save the original line element so we can still call it's 
// draw method after we build the linear gradient
var origLineElement = Chart.elements.Line;

// define a new line draw method so that we can build a linear gradient
// based on the position of each point
Chart.elements.Line = Chart.Element.extend({
  draw: function() {
    var vm = this._view;
    var backgroundColors = this._chart.controller.data.datasets[this._datasetIndex].backgroundColor;
    var points = this._children;
    var ctx = this._chart.ctx;
    var minX = points[0]._model.x;
    var maxX = points[points.length - 1]._model.x;
    var linearGradient = ctx.createLinearGradient(minX, 0, maxX, 0);

    // iterate over each point to build the gradient
    points.forEach(function(point, i) {
      // `addColorStop` expects a number between 0 and 1, so we
      // have to normalize the x position of each point between 0 and 1
      // and round to make sure the positioning isn't too percise 
      // (otherwise it won't line up with the point position)
      var colorStopPosition = roundNumber((point._model.x - minX) / (maxX - minX), 2);

      // special case for the first color stop
      if (i === 0) {
        linearGradient.addColorStop(0, backgroundColors[i]);
      } else {
        // only add a color stop if the color is different
        if (backgroundColors[i] !== backgroundColors[i-1]) {
          // add a color stop for the prev color and for the new color at the same location
          // this gives a solid color gradient instead of a gradient that fades to the next color
          linearGradient.addColorStop(colorStopPosition, backgroundColors[i - 1]);
          linearGradient.addColorStop(colorStopPosition, backgroundColors[i]);
        }
      }
    });

    // save the linear gradient in background color property
    // since this is what is used for ctx.fillStyle when the fill is rendered
    vm.backgroundColor = linearGradient;

    // now draw the lines (using the original draw method)
    origLineElement.prototype.draw.apply(this);
  }               
});

// we have to overwrite the datasetElementType property in the line controller
// because it is set before we can extend the line element (this ensures that 
// the line element used by the chart is the one that we extended above)
Chart.controllers.line = Chart.controllers.line.extend({
  datasetElementType: Chart.elements.Line,
});

// the labels used by the chart
var labels = <?php
  date_default_timezone_set("Asia/Ho_Chi_Minh");
  $time = date('Y-m-d');
  $arrayDate = "'" . $time . "'";

  for($i = 1; $i < 5; $i++){
    $time = explode("-", $time);
    $time = dayMonthYear($time[2], $time[1], $time[0]);
    $arrayDate = "'" . $time . "'," . $arrayDate;
  }

  $time = explode("-", $time);
  $time = dayMonthYear($time[2], $time[1], $time[0]);
  $arrayDate = "['" . $time . "'," . $arrayDate . "]";

  echo $arrayDate;
?>;
// the line chart point data
var lineData = <?php
  date_default_timezone_set("Asia/Ho_Chi_Minh");
  $time = date('Y-m-d');

  $total = orderGetTotalWithTime($time);
  $arrayPrice = $total;

  for($i = 1; $i < 6; $i++){
    $time = explode("-", $time);
    $time = dayMonthYear($time[2], $time[1], $time[0]);
    $total = orderGetTotalWithTime($time);
    $arrayPrice = $total . "," . $arrayPrice;
  }

  $arrayPrice = "[" . $arrayPrice . "]";

  echo $arrayPrice;
?>;
// colors used as the point background colors as well as the fill colors
var fillColors = [chartColors.green,  chartColors.green, chartColors.red, chartColors.red, chartColors.red, chartColors.red, chartColors.blue, chartColors.blue, chartColors.blue, chartColors.purple, chartColors.purple, chartColors.purple,];

// get the canvas context and draw the chart
var ctx = document.getElementById("canvas").getContext("2d");
var myLine = new Chart(ctx, {
  type: 'line',
  data: {
    labels: labels,
    datasets: [{
      label: "My Dataset",
      backgroundColor: fillColors, // now we can pass in an array of colors (before it was only 1 color)
      borderColor: chartColors.yellow,
      pointBackgroundColor: fillColors,
      fill: true,
      data: lineData,
    }]
  },
  options: {
    responsive: true,
    title: {
      display: true,
      text:'Chart.js - Line Chart With Colored Fill Regions'
    },
    legend: {
      display: false,
    },
    scales: {
      xAxes: [{
        gridLines: {
          offsetGridLines: true
        },
      }]
    }
  }
});
</script>

<script type="text/javascript" src="/Templates/OpenCartAdmin_files//jquery_004.js"></script> 
<script type="text/javascript" src="/Templates/OpenCartAdmin_files//jquery_003.js"></script>
<script type="text/javascript"><!--
//$('#range a').on('click', function(e) {
//	e.preventDefault();
//	
//	$(this).parent().parent().find('li').removeClass('active');
//	
//	$(this).parent().addClass('active');
//	
//	$.ajax({
//		type: 'get',
//		url: 'index.php?route=dashboard/chart/chart&token=c8e9256a500ecc7df571605f7be89958&range=' + $(this).attr('href'),
//		dataType: 'json',
//		success: function(json) {
//			var option = {	
//				shadowSize: 0,
//				colors: ['#9FD5F1', '#1065D2'],
//				bars: { 
//					show: true,
//					fill: true,
//					lineWidth: 1
//				},
//				grid: {
//					backgroundColor: '#FFFFFF',
//					hoverable: true
//				},
//				points: {
//					show: false
//				},
//				xaxis: {
//					show: true,
//            		ticks: json['xaxis']
//				}
//			}
//			
//			$.plot('#chart-sale', [json['order'], json['customer']], option);	
//					
//			$('#chart-sale').bind('plothover', function(event, pos, item) {
//				$('.tooltip').remove();
//			  
//				if (item) {
//					$('<div id="tooltip" class="tooltip top in"><div class="tooltip-arrow"></div><div class="tooltip-inner">' + item.datapoint[1].toFixed(2) + '</div></div>').prependTo('body');
//					
//					$('#tooltip').css({
//						position: 'absolute',
//						left: item.pageX - ($('#tooltip').outerWidth() / 2),
//						top: item.pageY - $('#tooltip').outerHeight(),
//						pointer: 'cusror'
//					}).fadeIn('slow');	
//					
//					$('#chart-sale').css('cursor', 'pointer');		
//			  	} else {
//					$('#chart-sale').css('cursor', 'auto');
//				}
//			});
//		},
//        error: function(xhr, ajaxOptions, thrownError) {
//           alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
//        }
//	});
//});
//
//$('#range .active a').trigger('click');
//--></script> </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-12 col-sm-12 col-sx-12"><div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><i class="fa fa-calendar"></i> Recent Activity</h3>
  </div>
  <ul class="list-group">
            <li class="list-group-item"><a href="http://demo.opencart.com/admin/index.php?route=sale/customer/edit&amp;token=c8e9256a500ecc7df571605f7be89958&amp;customer_id=543">Performance p</a> logged in.<br>
      <small class="text-muted"><i class="fa fa-clock-o"></i> 23/01/2015 04:01:15</small></li>
        <li class="list-group-item"><a href="http://demo.opencart.com/admin/index.php?route=sale/customer/edit&amp;token=c8e9256a500ecc7df571605f7be89958&amp;customer_id=543">Performance p</a> logged in.<br>
      <small class="text-muted"><i class="fa fa-clock-o"></i> 23/01/2015 04:00:18</small></li>
        <li class="list-group-item"><a href="http://demo.opencart.com/admin/index.php?route=sale/customer/edit&amp;token=c8e9256a500ecc7df571605f7be89958&amp;customer_id=543">Performance p</a> logged in.<br>
      <small class="text-muted"><i class="fa fa-clock-o"></i> 23/01/2015 03:58:58</small></li>
        <li class="list-group-item"><a href="http://demo.opencart.com/admin/index.php?route=sale/customer/edit&amp;token=c8e9256a500ecc7df571605f7be89958&amp;customer_id=543">Performance p</a> logged in.<br>
      <small class="text-muted"><i class="fa fa-clock-o"></i> 23/01/2015 03:57:48</small></li>
        <li class="list-group-item"><a href="http://demo.opencart.com/admin/index.php?route=sale/customer/edit&amp;token=c8e9256a500ecc7df571605f7be89958&amp;customer_id=543">Performance p</a> logged in.<br>
      <small class="text-muted"><i class="fa fa-clock-o"></i> 23/01/2015 03:56:14</small></li>
          </ul>
</div></div>
      <div class="col-lg-8 col-md-12 col-sm-12 col-sx-12"> <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><i class="fa fa-shopping-cart"></i> Đơn hàng mới nhất</h3>
  </div>
  <div class="table-responsive">
  <?php if(orderGetLatestForDashboard()) { ?>
    <table class="table">
      <thead>
        <tr>
          <td class="text-right">ID</td>
          <td>Khách Hàng</td>
          <td>Trạng Thái</td>
          <td>Ngày Tạo</td>
          <td class="text-right">Tổng Giá Trị</td>
          <td class="text-right">Hành Động</td>
        </tr>
      </thead>
      <tbody>
      
      <?php foreach(orderGetLatestForDashboard() as $order_detail) { ?>
      <tr>
          <td class="text-right"><?php echo $order_detail['order_id'] ;?></td>
          <td><?php echo $order_detail['customer'] ;?></td>
          <td><?php echo $order_detail['status'] ;?></td>
          <td><?php echo $order_detail['date_added'] ;?></td>
          <td class="text-right"><?php echo $order_detail['total'] ;?></td>
          <td class="text-right"><a data-original-title="View" href="<?php echo $order_detail['view'];?>" data-toggle="tooltip" title="" class="btn btn-info"><i class="fa fa-eye"></i></a></td>
        </tr>
      <?php } ?>
      
      </tbody>
    </table>
   <?php } else { ?>
   <h3>Không có đơn hàng mới nào</h3>   	
   <?php } ?> 
  </div>
</div>
 </div>
    </div>
  </div>
</div>