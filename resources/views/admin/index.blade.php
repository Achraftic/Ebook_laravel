@extends('admin.layout.main')
@section('content')
    <style>
        .allchart * {
            border: none;
        }
    </style>

    <div class="card ">
        <div class="w-full    grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <a aria-label="card 1" href="javascript:void(0)"
                class="bg-white dark:bg-gray-800 rounded  focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none focus:bg-gray-100 hover:bg-gray-100">
                <div class="shadow px-8 py-6 flex items-center">
                    <div class="p-4 bg-slate-700 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-10 h-10 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>


                    </div>

                    <div class="ml-6">
                        <h3 class="mb-1 leading-5 text-gray-800 dark:text-gray-100 font-bold text-2xl">{{ $count }}
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm tracking-normal font-normal leading-5">
                            Books</p>
                    </div>

                </div>
            </a>
            <a aria-label="card 2" href="javascript:void(0)"
                class="bg-white dark:bg-gray-800 rounded  focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none focus:bg-gray-100 hover:bg-gray-100">
                <div class=" shadow px-8 py-6 flex items-center">
                    <div class="p-4 bg-slate-700 rounded text-white">

                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/medium_stat_cards_with_icon-svg3.svg"
                            alt="icon" class="w-10 h-10" />
                    </div>
                    <div class="ml-6">
                        <h3 class="mb-1 leading-5 text-gray-800 dark:text-gray-100 font-bold text-2xl"> {{ count($data) }}
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm tracking-normal font-normal leading-5">
                            Users</p>
                    </div>
                </div>
            </a>
            <a aria-label="card 3" href="javascript:void(0)"
                class="bg-white dark:bg-gray-800 rounded  focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none focus:bg-gray-100 hover:bg-gray-100">
                <div class=" shadow px-8 py-6 flex items-center">
                    <div class="p-4  bg-slate-700 rounded text-white">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/medium_stat_cards_with_icon-svg2.svg"
                            alt="icon" class="w-10 h-10" />

                    </div>
                    <div class="ml-6">
                        <h3 class="mb-1 leading-5 text-gray-800 dark:text-gray-100 font-bold text-2xl"> {{$countCategory}} </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm tracking-normal font-normal leading-5">
                            Subscribers</p>
                    </div>
                </div>
            </a>
            <a aria-label="card 4" href="javascript:void(0)"
                class="bg-white dark:bg-gray-800 rounded  focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none focus:bg-gray-100 hover:bg-gray-100">
                <div class="shadow px-8 py-6 flex items-center">
                    <div class="p-4 bg-slate-700 rounded text-white">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/medium_stat_cards_with_icon-svg4.svg"
                            alt="icon" class="w-10 h-10" />

                    </div>
                    <div class="ml-6">
                        <h3 class="mb-1 leading-5 text-gray-800 dark:text-gray-100 font-bold text-2xl">$1245
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm tracking-normal font-normal leading-5">
                            Profit Earned</p>
                    </div>
                </div>
            </a>
        </div>
    </div>



    <!-- Card code block end -->
    <div class="grid grid-cols-5 gap-3 allchart my-6">
        <div class=" flex flex-col col-span-full md:col-span-2  my-4  rounded-xl shadow-lg ">
            <header class="px-5 py-4">
                <h2 class="font-semibold text-lg text-slate-800">Gender</h2>
            </header>
            <!-- Chart built with Chart.js 3 -->
            <!-- Check out src/js/components/dashboard-card-06.js for config -->
            <div class="grow flex flex-col justify-center">
                <div>
                    <!-- Change the height attribute to adjust the chart height -->
                    <canvas id="dashboard-card-06" width="389" height="260"></canvas>
                </div>
                <div id="dashboard-card-06-legend" class="px-5 pt-2 pb-6">
                    <ul class="flex flex-wrap justify-center -m-1"></ul>
                </div>
            </div>
        </div>
        <div class="flex flex-col col-span-full md:col-span-3  rounded-xl shadow-lg ">
            <header class="px-5 py-4 border-b border-slate-100">
                <h2 class="font-semibold text-slate-800">Books Categories</h2>
            </header>
            <!-- Chart built with Chart.js 3 -->
            <!-- Check out src/js/components/dashboard-card-04.js for config -->
            <div id="dashboard-card-04-legend" class="px-5 py-3">
                <ul class="flex flex-wrap"></ul>
            </div>
            <div class="grow">
                <!-- Change the height attribute to adjust the chart height -->
                <canvas id="dashboard-card-04" width="595" height="248"></canvas>
            </div>
        </div>
        <div class="col-span-full  rounded-xl shadow-lg  border ">
            <header class="px-5 py-4 border-b border-slate-100">
                <h2 class="font-semibold text-slate-800">Top  Rated Book</h2>
            </header>
            <div class="p-3">

                <!-- Table -->
                <div class="overflow-x-scroll  md:overflow-x-auto ">
                    <table class="table-auto  w-full min-w-[700px]">
                        <!-- Table header -->
                        <thead class="text-xs uppercase text-left text-slate-400 bg-slate-50 rounded-sm">
                            <tr>
                                <th class="p-4">
                                    <div class="font-semibold ">Name</div>
                                </th>
                                <th class="p-4">
                                    <div class="font-semibold  ">Author</div>
                                </th>
                                <th class="p-4">
                                    <div class="font-semibold ">category</div>
                                </th>
                                <th class="p-4">
                                    <div class="font-semibold ">Rate</div>
                                </th>

                            </tr>
                        </thead>
                        <!-- Table body -->
                        <tbody class="text-sm font-medium divide-y divide-slate-100 text-slate-800">
                            <!-- Row -->
                            @foreach ($topReated as $book )
                           <tr>
                                <td class="p-3">
                                    <div class="flex  items-center space-x-3">
                                       <img src="{{asset('img/'.$book->image)}}" alt="" class="w-10 h-10">
                                        <div class="text-slate-800 font-semibold">{{$book->name}} </div>
                                    </div>
                                </td>
                                <td class="p-3">
                                    <div class="">{{$book->author}}</div>
                                </td>
                                <td class="p-3">
                                    <div class=" "> {{$book->category}} </div>
                                </td>

                                <td class="p-3 flex-nowrap">
                                    <div class=" ">
                                        @for ($i = 0; $i < 5; $i++)
                                        @if ($i >= $book->rate)
                                            <span class="fa fa-star fa-sm "></span>
                                        @else
                                            <span class="fa fa-star fa-sm checked   "></span>
                                        @endif
                                    @endfor
                                    </div>
                                </td>
                            </tr>
                            @endforeach



                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>




    <script defer type="module"  >



    const dashboardCard06 = () => {
      const ctx = document.getElementById('dashboard-card-06');
      if (!ctx) return;
      // eslint-disable-next-line no-unused-vars
      const chart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          labels: ['Male','Female'],
          datasets: [
            {
              label: 'Gender',
              data: [
                {{$countMale}},{{$countFemale}}
              ],
              backgroundColor: [
                  '#0E3EDA',
                  '#FF55BB',

              ],
              hoverBackgroundColor: [
                '#342EAD',
                '#FB2576',

              ],
              hoverBorderColor: '#ffffff',
            },
          ],
        },
        options: {
          cutout: '80%',
          layout: {
            padding: 24,
          },
          plugins: {
            legend: {
              display: false,
            },
            htmlLegend: {
              // ID of the container to put the legend in
              containerID: 'dashboard-card-06-legend',
            },
          },
          interaction: {
            intersect: false,
            mode: 'nearest',
          },
          animation: {
            duration: 200,
          },
          maintainAspectRatio: false,
        },
        plugins: [{
          id: 'htmlLegend',
          afterUpdate(c, args, options) {
            const legendContainer = document.getElementById(options.containerID);
            const ul = legendContainer.querySelector('ul');
            if (!ul) return;
            // Remove old legend items
            while (ul.firstChild) {
              ul.firstChild.remove();
            }
            // Reuse the built-in legendItems generator
            const items = c.options.plugins.legend.labels.generateLabels(c);
            items.forEach((item) => {
              const li = document.createElement('li');
              li.style.margin = '4px';
              // Button element
              const button = document.createElement('button');
              button.classList.add('btn-xs');
              button.style.backgroundColor = '#ffffff';
              button.style.borderWidth = '1px';
              button.style.borderColor = '#e2e8f0';
              button.style.color = '#64748b';
              button.style.boxShadow = '0 4px 6px -1px rgba(0, 0, 0, 0.08), 0 2px 4px -1px rgba(0, 0, 0, 0.02)';
              button.style.opacity = item.hidden ? '.3' : '';
              button.onclick = () => {
                c.toggleDataVisibility(item.index, !item.index);
                c.update();
              };
              // Color box
              const box = document.createElement('span');
              box.style.display = 'block';
              box.style.width = '8px';
              box.style.height = '8px';
              box.style.backgroundColor = item.fillStyle;
              box.style.borderRadius = '2px';
              box.style.marginRight = '4px';
              box.style.pointerEvents = 'none';
              // Label
              const label = document.createElement('span');
              label.style.display = 'flex';
              label.style.alignItems = 'center';
              const labelText = document.createTextNode(item.text);
              label.appendChild(labelText);
              li.appendChild(button);
              button.appendChild(box);
              button.appendChild(label);
              ul.appendChild(li);
            });
          },
        }],
      });
    };

    dashboardCard06();

    const dashboardCard04 = () => {
    const ctx = document.getElementById("dashboard-card-04");
    if (!ctx) return;
    // eslint-disable-next-line no-unused-vars
    const chart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: [
                @foreach ($category as $i )
                 "{{$i}}",
               @endforeach
            ],
            datasets: [
                // Blue bars
                {
                    label: "Books",
                    data: [
                        @foreach ($countrepeateBook as $i )
                 {{$i}},
               @endforeach



                    ],
                    backgroundColor: "#FF6000",
                    hoverBackgroundColor: "#EA6227",
                    barPercentage: 0.66,
                    categoryPercentage: 0.66,
                },
            ],
        },
        options: {
            layout: {
                padding: {
                    top: 12,
                    bottom: 16,
                    left: 20,
                    right: 20,
                },
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                    },
                    // ticks: {
                    //      maxTicksLimit: 7,
                    //      callback: (value) => formatValue(value),
                    // },
                },
                x: {
                    // type: "time",
                    // time: {
                    //     parser: "MM-DD-YYYY",
                    //     unit: "month",
                    //     displayFormats: {
                    //         month: "MMM YY",
                    //     },
                    // },
                    grid: {
                        display: false,
                        drawBorder: false,
                    },
                },
            },
            plugins: {
                legend: {
                    display: false,
                },
                htmlLegend: {
                    // ID of the container to put the legend in
                    containerID: "dashboard-card-04-legend",
                },
                tooltip: {
                    callbacks: {
                        title: () => false, // Disable tooltip title
                        label: (context) => context.parsed.y,
                    },
                },
            },
            interaction: {
                intersect: false,
                mode: "nearest",
            },
            animation: {
                duration: 200,
            },
            maintainAspectRatio: false,
        },
        plugins: [
            {
                id: "htmlLegend",
                afterUpdate(c, args, options) {
                    const legendContainer = document.getElementById(
                        options.containerID
                    );
                    const ul = legendContainer.querySelector("ul");
                    if (!ul) return;
                    // Remove old legend items
                    while (ul.firstChild) {
                        ul.firstChild.remove();
                    }
                    // Reuse the built-in legendItems generator
                    const items =
                        c.options.plugins.legend.labels.generateLabels(c);
                    items.forEach((item) => {
                        const li = document.createElement("li");
                        li.style.marginRight = "16px";
                        // Button element
                        const button = document.createElement("button");
                        button.style.display = "inline-flex";
                        button.style.alignItems = "center";
                        button.style.opacity = item.hidden ? ".3" : "";
                        button.onclick = () => {
                            c.setDatasetVisibility(
                                item.datasetIndex,
                                !c.isDatasetVisible(item.datasetIndex)
                            );
                            c.update();
                        };
                        // Color box
                        const box = document.createElement("span");
                        box.style.display = "block";
                        box.style.width = "12px";
                        box.style.height = "12px";
                        box.style.borderRadius = "9999px";
                        box.style.marginRight = "8px";
                        box.style.borderWidth = "3px";
                        box.style.borderColor = item.fillStyle;
                        box.style.pointerEvents = "none";
                        // Label
                        const labelContainer = document.createElement("span");
                        labelContainer.style.display = "flex";
                        labelContainer.style.alignItems = "center";
                        const value = document.createElement("span");
                        value.style.color = "#1e293b";
                        value.style.fontSize = "1.88rem";
                        value.style.lineHeight = "1.33";
                        value.style.fontWeight = "700";
                        value.style.marginRight = "8px";
                        value.style.pointerEvents = "none";
                        const label = document.createElement("span");
                        label.style.color = "#64748b";
                        label.style.fontSize = "0.875rem";
                        label.style.lineHeight = "1.5715";
                        const theValue = c.data.datasets[
                            item.datasetIndex
                        ].data.reduce((a, b) => a + b, 0);
                        const valueText = document.createTextNode(
                            formatValue(theValue)
                        );
                        const labelText = document.createTextNode(item.text);
                        value.appendChild(valueText);
                        label.appendChild(labelText);
                        // li.appendChild(button);
                        // button.appendChild(box);
                        // button.appendChild(labelContainer);
                        labelContainer.appendChild(value);
                        labelContainer.appendChild(label);
                        ul.appendChild(li);
                    });
                },
            },
        ],
    });
};
dashboardCard04();
    </script>
@endsection
