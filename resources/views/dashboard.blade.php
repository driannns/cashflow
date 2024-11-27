<x-app-layout>
    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8 min-h-screen flex flex-col gap-y-10">
        <div>
            <div class="overflow-hidden sm:rounded-lg">
                <div class="p-6 text-2xl font-black text-[#212C5F]">
                    Selamat Datang di Dashboard Rumahku Kost!
                </div>
            </div>
        </div>
        <div class="flex items-center justify-between gap-10 mt-5">
            <div class="border w-2/5 h-fit bg-[#FAEC22] rounded-md border-black">
                <div class="flex justify-around border-b border-black rounded-t-md p-2">
                    <p class="text-lg font-semibold">Penyewa</p>
                    <p>Detail</p>
                </div>
                <div class="flex items-center justify-around px-2 py-5">
                    <div>
                        <p class="text-2xl font-bold">298</p>
                        <p>Total Penyewa Kamar</p>
                    </div>
                    <div>
                        >
                    </div>
                </div>
            </div>
            <div class="border w-2/5 h-fit bg-[#8BDF80] rounded-md border-black">
                <div class="flex justify-around border-b border-black rounded-t-md p-2">
                    <p class="text-lg font-semibold">Penyewa</p>
                    <p>Detail</p>
                </div>
                <div class="flex items-center justify-around px-2 py-5">
                    <div>
                        <p class="text-2xl font-bold">298</p>
                        <p>Total Penyewa Kamar</p>
                    </div>
                    <div>
                        >
                    </div>
                </div>
            </div>
            <div class="border w-2/5 h-fit bg-[#F55D5D] rounded-md border-black">
                <div class="flex justify-around border-b border-black rounded-t-md p-2">
                    <p class="text-lg font-semibold">Penyewa</p>
                    <p>Detail</p>
                </div>
                <div class="flex items-center justify-around px-2 py-5">
                    <div>
                        <p class="text-2xl font-bold">298</p>
                        <p>Total Penyewa Kamar</p>
                    </div>
                    <div>
                        >
                    </div>
                </div>
            </div>
        </div>
        <div class="rounded-md bg-white p-5">
            <h1 class="text-2xl font-bold">Perkiraan pembayaran pajak</h1>
        </div>
        <div class="rounded-md bg-white p-5">
            <h1 class="text-2xl font-bold">Grafik Keuangan Tahunan 2024</h1>
            <div class="flex gap-5">
                <div>Pemasukan</div>
                <div>Pengeluaran</div>
                </div>
                <div class="max-w-sm w-full bg-white rounded-lg shadow p-4 md:p-6">
                <div class="flex justify-between border-gray-200 border-b pb-3">
                    <dl>
                    <dt class="text-base font-normal text-gray-500 pb-1">Profit</dt>
                    <dd class="leading-none text-3xl font-bold text-gray-900">$5,405</dd>
                    </dl>
                    <div>
                    <span class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-1 rounded-md">
                        <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
                        </svg>
                        Profit rate 23.5%
                    </span>
                    </div>
                </div>

                <div class="grid grid-cols-2 py-3">
                    <dl>
                    <dt class="text-base font-normal text-gray-500 pb-1">Income</dt>
                    <dd class="leading-none text-xl font-bold text-green-500">$23,635</dd>
                    </dl>
                    <dl>
                    <dt class="text-base font-normal text-gray-500 pb-1">Expense</dt>
                    <dd class="leading-none text-xl font-bold text-red-600">-$18,230</dd>
                    </dl>
                </div>

                <div id="bar-chart"></div>
                    <div class="grid grid-cols-1 items-center border-gray-200 border-t justify-between">
                    <div class="flex justify-between items-center pt-5">
                        <!-- Button -->
                        <button
                        id="dropdownDefaultButton"
                        data-dropdown-toggle="lastDaysdropdown"
                        data-dropdown-placement="bottom"
                        class="text-sm font-medium text-gray-500 hover:text-gray-900 text-center inline-flex items-center"
                        type="button">
                        Last 6 months
                        <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="lastDaysdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Yesterday</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Today</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Last 7 days</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Last 30 days</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Last 90 days</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Last 6 months</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Last year</a>
                            </li>
                            </ul>
                        </div>
                        <a
                        href="#"
                        class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700  hover:bg-gray-100 px-3 py-2">
                        Revenue Report
                        <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        </a>
                    </div>
                    </div>
                </div>
        </div>
        <div class="rounded-md bg-white p-5">
            <h1 class="text-2xl font-bold">Perbandingan Pemasukan Tahun Lalu dan Tahun ini</h1>
            <div class="flex gap-5">
                <div>Tahun Lalu</div>
                <div>Tahun Ini</div>
                </div>
                
<div class="max-w-sm w-full bg-white rounded-lg shadow p-4 md:p-6">
  
  <div class="flex justify-between mb-3">
      <div class="flex justify-center items-center">
          <h5 class="text-xl font-bold leading-none text-gray-900 pe-1">Website traffic</h5>
          <svg data-popover-target="chart-info" data-popover-placement="bottom" class="w-3.5 h-3.5 text-gray-500 hover:text-gray-900 cursor-pointer ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm0 16a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm1-5.034V12a1 1 0 0 1-2 0v-1.418a1 1 0 0 1 1.038-.999 1.436 1.436 0 0 0 1.488-1.441 1.501 1.501 0 1 0-3-.116.986.986 0 0 1-1.037.961 1 1 0 0 1-.96-1.037A3.5 3.5 0 1 1 11 11.466Z"/>
          </svg>
          <div data-popover id="chart-info" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
              <div class="p-3 space-y-2">
                  <h3 class="font-semibold text-gray-900">Activity growth - Incremental</h3>
                  <p>Report helps navigate cumulative growth of community activities. Ideally, the chart should have a growing trend, as stagnating chart signifies a significant decrease of community activity.</p>
                  <h3 class="font-semibold text-gray-900">Calculation</h3>
                  <p>For each date bucket, the all-time volume of activities is calculated. This means that activities in period n contain all activities up to period n, plus the activities generated by your community in period.</p>
                  <a href="#" class="flex items-center font-medium text-blue-600 hover:text-blue-700 hover:underline">Read more <svg class="w-2 h-2 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg></a>
              </div>
              <div data-popper-arrow></div>
          </div>
        </div>
      <div>
        <button type="button" data-tooltip-target="data-tooltip" data-tooltip-placement="bottom" class="hidden sm:inline-flex items-center justify-center text-gray-500 w-8 h-8 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 rounded-lg text-sm"><svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 18">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 1v11m0 0 4-4m-4 4L4 8m11 4v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3"/>
  </svg><span class="sr-only">Download data</span>
        </button>
        <div id="data-tooltip" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
            Download CSV
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
      </div>
  </div>

  <div>
    <div class="flex" id="devices">
      <div class="flex items-center me-4">
          <input id="desktop" type="checkbox" value="desktop" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
          <label for="desktop" class="ms-2 text-sm font-medium text-gray-900">Desktop</label>
      </div>
      <div class="flex items-center me-4">
          <input id="tablet" type="checkbox" value="tablet" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
          <label for="tablet" class="ms-2 text-sm font-medium text-gray-900">Tablet</label>
      </div>
      <div class="flex items-center me-4">
          <input id="mobile" type="checkbox" value="mobile" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
          <label for="mobile" class="ms-2 text-sm font-medium text-gray-900">Mobile</label>
      </div>
    </div>
  </div>

  <!-- Donut Chart -->
  <div class="py-6" id="donut-chart"></div>

  <div class="grid grid-cols-1 items-center border-gray-200 border-t justify-between">
    <div class="flex justify-between items-center pt-5">
      <!-- Button -->
      <button
        id="dropdownDefaultButton"
        data-dropdown-toggle="lastDaysdropdown"
        data-dropdown-placement="bottom"
        class="text-sm font-medium text-gray-500 hover:text-gray-900 text-center inline-flex items-center"
        type="button">
        Last 7 days
        <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
        </svg>
      </button>
      <div id="lastDaysdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
          <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100">Yesterday</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100">Today</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100">Last 7 days</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100">Last 30 days</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100">Last 90 days</a>
            </li>
          </ul>
      </div>
      <a
        href="#"
        class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700  hover:bg-gray-100 px-3 py-2">
        Traffic analysis
        <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>
      </a>
    </div>
  </div>
</div>

        </div>
    </div>

    <script>
    
const options = {
  series: [
    {
      name: "Income",
      color: "#31C48D",
      data: ["1420", "1620", "1820", "1420", "1650", "2120"],
    },
    {
      name: "Expense",
      data: ["788", "810", "866", "788", "1100", "1200"],
      color: "#F05252",
    }
  ],
  chart: {
    sparkline: {
      enabled: false,
    },
    type: "bar",
    width: "100%",
    height: 400,
    toolbar: {
      show: false,
    }
  },
  fill: {
    opacity: 1,
  },
  plotOptions: {
    bar: {
      horizontal: true,
      columnWidth: "100%",
      borderRadiusApplication: "end",
      borderRadius: 6,
      dataLabels: {
        position: "top",
      },
    },
  },
  legend: {
    show: true,
    position: "bottom",
  },
  dataLabels: {
    enabled: false,
  },
  tooltip: {
    shared: true,
    intersect: false,
    formatter: function (value) {
      return "$" + value
    }
  },
  xaxis: {
    labels: {
      show: true,
      style: {
        fontFamily: "Inter, sans-serif",
        cssClass: 'text-xs font-normal fill-gray-500'
      },
      formatter: function(value) {
        return "$" + value
      }
    },
    categories: ["Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    axisTicks: {
      show: false,
    },
    axisBorder: {
      show: false,
    },
  },
  yaxis: {
    labels: {
      show: true,
      style: {
        fontFamily: "Inter, sans-serif",
        cssClass: 'text-xs font-normal fill-gray-500'
      }
    }
  },
  grid: {
    show: true,
    strokeDashArray: 4,
    padding: {
      left: 2,
      right: 2,
      top: -20
    },
  },
  fill: {
    opacity: 1,
  }
}

const getChartOptions = () => {
  return {
    series: [35.1, 23.5, 2.4, 5.4],
    colors: ["#1C64F2", "#16BDCA", "#FDBA8C", "#E74694"],
    chart: {
      height: 320,
      width: "100%",
      type: "donut",
    },
    stroke: {
      colors: ["transparent"],
      lineCap: "",
    },
    plotOptions: {
      pie: {
        donut: {
          labels: {
            show: true,
            name: {
              show: true,
              fontFamily: "Inter, sans-serif",
              offsetY: 20,
            },
            total: {
              showAlways: true,
              show: true,
              label: "Unique visitors",
              fontFamily: "Inter, sans-serif",
              formatter: function (w) {
                const sum = w.globals.seriesTotals.reduce((a, b) => {
                  return a + b
                }, 0)
                return '$' + sum + 'k'
              },
            },
            value: {
              show: true,
              fontFamily: "Inter, sans-serif",
              offsetY: -20,
              formatter: function (value) {
                return value + "k"
              },
            },
          },
          size: "80%",
        },
      },
    },
    grid: {
      padding: {
        top: -2,
      },
    },
    labels: ["Direct", "Sponsor", "Affiliate", "Email marketing"],
    dataLabels: {
      enabled: false,
    },
    legend: {
      position: "bottom",
      fontFamily: "Inter, sans-serif",
    },
    yaxis: {
      labels: {
        formatter: function (value) {
          return value + "k"
        },
      },
    },
    xaxis: {
      labels: {
        formatter: function (value) {
          return value  + "k"
        },
      },
      axisTicks: {
        show: false,
      },
      axisBorder: {
        show: false,
      },
    },
  }
}

if (document.getElementById("donut-chart") && typeof ApexCharts !== 'undefined') {
  const chart = new ApexCharts(document.getElementById("donut-chart"), getChartOptions());
  chart.render();

  // Get all the checkboxes by their class name
  const checkboxes = document.querySelectorAll('#devices input[type="checkbox"]');

  // Function to handle the checkbox change event
  function handleCheckboxChange(event, chart) {
      const checkbox = event.target;
      if (checkbox.checked) {
          switch(checkbox.value) {
            case 'desktop':
              chart.updateSeries([15.1, 22.5, 4.4, 8.4]);
              break;
            case 'tablet':
              chart.updateSeries([25.1, 26.5, 1.4, 3.4]);
              break;
            case 'mobile':
              chart.updateSeries([45.1, 27.5, 8.4, 2.4]);
              break;
            default:
              chart.updateSeries([55.1, 28.5, 1.4, 5.4]);
          }

      } else {
          chart.updateSeries([35.1, 23.5, 2.4, 5.4]);
      }
  }

  // Attach the event listener to each checkbox
  checkboxes.forEach((checkbox) => {
      checkbox.addEventListener('change', (event) => handleCheckboxChange(event, chart));
  });
}

if(document.getElementById("bar-chart") && typeof ApexCharts !== 'undefined') {
  const chart = new ApexCharts(document.getElementById("bar-chart"), options);
  chart.render();
}


    </script>
</x-app-layout>
