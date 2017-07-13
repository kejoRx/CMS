<div id="content" class="app-content" role="main">
  	<div class="app-content-body ">
	    

<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Dashboard</h1>
</div>
<div class="wrapper-md">
  <div ng-controller="FlotChartDemoCtrl">
    
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading font-bold">Number of clients</div>
          <div class="panel-body bg-dark">
            <div ui-jq="plot" ui-options="
              [
                { data: [ [1,6.5],[2,6.5],[3,7],[4,8],[5,7.5],[6,7],[7,6.8],[8,7],[9,7.2],[10,7],[11,6.8],[12,7] ], points: { show: true, radius: 6}, splines: { show: true, tension: 0.45, lineWidth: 5, fill: 0 } }
              ], 
              {
                colors: ['#23b7e5'],
                series: { shadowSize: 3 },
                xaxis:{ 
                  font: { color: '#ccc' },
                  position: 'bottom',
                  ticks: [
                    [ 1, 'Jan' ], [ 2, 'Feb' ], [ 3, 'Mar' ], [ 4, 'Apr' ], [ 5, 'May' ], [ 6, 'Jun' ], [ 7, 'Jul' ], [ 8, 'Aug' ], [ 9, 'Sep' ], [ 10, 'Oct' ], [ 11, 'Nov' ], [ 12, 'Dec' ]
                  ]
                },
                yaxis:{ font: { color: '#ccc' } },
                grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#ccc' },
                tooltip: true,
                tooltipOpts: { content: '%x.1 is %y.4',  defaultTheme: false, shifts: { x: 0, y: 20 } }
              }
            " style="height:240px" >
            </div>
          </div>
        </div>
      </div>
	</div>
  </div> 