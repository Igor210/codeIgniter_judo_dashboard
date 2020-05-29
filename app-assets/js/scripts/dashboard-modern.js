// Dashboard - Modern
//----------------------

(function (window, document, $) {

  // Donut chart
  // -----------
  var CurrentBalanceDonutChart = new Chartist.Pie(
    "#current-balance-donut-chart",
    {
      labels: [1, 2],
      series: [
        { meta: "Average Result", value: ((avgresult/170)*100).toPrecision(2) },
        { meta: "", value: 100-((avgresult/170)*100).toPrecision(2) }
      ]
    },

    {
      donut: true,
      donutWidth: 8,
      showLabel: false,
      plugins: [
        Chartist.plugins.tooltip({
          class: "current-balance-tooltip",
          appendToBody: true
        }),
        Chartist.plugins.fillDonut({
          items: [
            {
              content:
                '<p class="small">Average</p><h5 class="mt-0 mb-0">' + avgresult + '</h5>'
            }
          ]
        })
      ]
    }
  )

  // Total Transaction
  // -----------------
  var TotalTransactionLine = new Chartist.Line(
    "#total-transaction-line-chart",
    {
      series: [errorsAry]
    },
    {
      chartPadding: 0,
      axisX: {
        showLabel: true,
        showGrid: false
      },
      axisY: {
        showLabel: true,
        showGrid: true,
        low: 0,
        high: 50,
        scaleMinSpace: 40
      },
      lineSmooth: Chartist.Interpolation.simple({
        divisor: 2
      }),
      plugins: [
        Chartist.plugins.tooltip({
          class: "total-transaction-tooltip",
          appendToBody: true
        })
      ],
      fullWidth: true
    }
  )

  TotalTransactionLine.on("created", function (data) {
    var defs = data.svg.querySelector("defs") || data.svg.elem("defs")
    defs
      .elem("linearGradient", {
        id: "lineLinearStats",
        x1: 0,
        y1: 0,
        x2: 1,
        y2: 0
      })
      .elem("stop", {
        offset: "0%",
        "stop-color": "rgba(255, 82, 249, 0.1)"
      })
      .parent()
      .elem("stop", {
        offset: "10%",
        "stop-color": "rgba(255, 82, 249, 1)"
      })
      .parent()
      .elem("stop", {
        offset: "30%",
        "stop-color": "rgba(255, 82, 249, 1)"
      })
      .parent()
      .elem("stop", {
        offset: "95%",
        "stop-color": "rgba(133, 3, 168, 1)"
      })
      .parent()
      .elem("stop", {
        offset: "100%",
        "stop-color": "rgba(133, 3, 168, 0.1)"
      })

    return defs
  }).on("draw", function (data) {
    var circleRadius = 5
    if (data.type === "point") {
      var circle = new Chartist.Svg("circle", {
        cx: data.x,
        cy: data.y,
        "ct:value": data.value.y,
        r: circleRadius,
        class:"ct-point ct-point-circle-transperent"
      })
      data.element.replace(circle)
    }
  })

  // charts update on sidenav collapse
  $('.logo-wrapper .navbar-toggler').on('click', function () {
    setTimeout(function () {
      CurrentBalanceDonutChart.update();
      TotalTransactionLine.update();
    }, 200);
  })
})(window, document, jQuery)
