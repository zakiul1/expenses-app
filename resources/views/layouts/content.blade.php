@extends('layouts.app')
@section('content')
    <div class="px-4 pt-6">

        <!-- Modal toggle -->
        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button">
            Toggle modal
        </button>

        <!-- Main modal -->
        <div id="authentication-modal" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button"
                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="px-6 py-6 lg:px-8">
                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform</h3>
                        <form class="space-y-6" action="#">
                            <div>
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="name@company.com" required>
                            </div>
                            <div>
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                    password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    required>
                            </div>
                            <div class="flex justify-between">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="remember" type="checkbox" value=""
                                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                                            required>
                                    </div>
                                    <label for="remember"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember
                                        me</label>
                                </div>
                                <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost
                                    Password?</a>
                            </div>
                            <button type="submit"
                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login
                                to your account</button>
                            <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                                Not registered? <a href="#"
                                    class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid gap-4 xl:grid-cols-2 2xl:grid-cols-3">
            <!-- Main widget -->
            <div
                class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex-shrink-0">
                        <span
                            class="text-xl font-bold leading-none text-gray-900 sm:text-2xl dark:text-white">$45,385</span>
                        <h3 class="text-base font-light text-gray-500 dark:text-gray-400">Sales this week</h3>
                    </div>
                    <div
                        class="flex items-center justify-end flex-1 text-base font-medium text-green-500 dark:text-green-400">
                        12.5%
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
                <div id="main-chart" style="min-height: 435px;">
                    <div id="apexchartscuyjp0qk" class="apexcharts-canvas apexchartscuyjp0qk apexcharts-theme-light"
                        style="width: 449px; height: 420px;"><svg id="SvgjsSvg2653" width="449" height="420"
                            xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable"
                            xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                            <foreignObject x="0" y="0" width="449" height="420">
                                <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom"
                                    xmlns="http://www.w3.org/1999/xhtml"
                                    style="inset: auto 0px 1px; position: absolute; max-height: 210px;">
                                    <div class="apexcharts-legend-series" style="margin: 2px 10px;" rel="1"
                                        seriesname="Revenue" data:collapsed="false"><span class="apexcharts-legend-marker"
                                            style="background: rgb(26, 86, 219); color: rgb(26, 86, 219); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"
                                            rel="1" data:collapsed="false"></span><span
                                            class="apexcharts-legend-text"
                                            style="color: rgb(107, 114, 128); font-size: 14px; font-weight: 500; font-family: Inter, sans-serif;"
                                            rel="1" i="0" data:default-text="Revenue"
                                            data:collapsed="false">Revenue</span></div>
                                    <div class="apexcharts-legend-series" style="margin: 2px 10px;" rel="2"
                                        seriesname="Revenuexxpreviousxperiodx" data:collapsed="false"><span
                                            class="apexcharts-legend-marker"
                                            style="background: rgb(253, 186, 140); color: rgb(253, 186, 140); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"
                                            rel="2" data:collapsed="false"></span><span
                                            class="apexcharts-legend-text"
                                            style="color: rgb(107, 114, 128); font-size: 14px; font-weight: 500; font-family: Inter, sans-serif;"
                                            rel="2" i="1" data:default-text="Revenue%20(previous%20period)"
                                            data:collapsed="false">Revenue (previous period)</span></div>
                                </div>
                                <style type="text/css">
                                    .apexcharts-legend {
                                        display: flex;
                                        overflow: auto;
                                        padding: 0 10px;
                                    }

                                    .apexcharts-legend.apx-legend-position-bottom,
                                    .apexcharts-legend.apx-legend-position-top {
                                        flex-wrap: wrap
                                    }

                                    .apexcharts-legend.apx-legend-position-right,
                                    .apexcharts-legend.apx-legend-position-left {
                                        flex-direction: column;
                                        bottom: 0;
                                    }

                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                    .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                    .apexcharts-legend.apx-legend-position-right,
                                    .apexcharts-legend.apx-legend-position-left {
                                        justify-content: flex-start;
                                    }

                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                    .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                        justify-content: center;
                                    }

                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                    .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                        justify-content: flex-end;
                                    }

                                    .apexcharts-legend-series {
                                        cursor: pointer;
                                        line-height: normal;
                                    }

                                    .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                    .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                        display: flex;
                                        align-items: center;
                                    }

                                    .apexcharts-legend-text {
                                        position: relative;
                                        font-size: 14px;
                                    }

                                    .apexcharts-legend-text *,
                                    .apexcharts-legend-marker * {
                                        pointer-events: none;
                                    }

                                    .apexcharts-legend-marker {
                                        position: relative;
                                        display: inline-block;
                                        cursor: pointer;
                                        margin-right: 3px;
                                        border-style: solid;
                                    }

                                    .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                    .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                        display: inline-block;
                                    }

                                    .apexcharts-legend-series.apexcharts-no-click {
                                        cursor: auto;
                                    }

                                    .apexcharts-legend .apexcharts-hidden-zero-series,
                                    .apexcharts-legend .apexcharts-hidden-null-series {
                                        display: none !important;
                                    }

                                    .apexcharts-inactive-legend {
                                        opacity: 0.45;
                                    }
                                </style>
                            </foreignObject>
                            <g id="SvgjsG2655" class="apexcharts-inner apexcharts-graphical"
                                transform="translate(95.81666564941406, 30)">
                                <defs id="SvgjsDefs2654">
                                    <clipPath id="gridRectMaskcuyjp0qk">
                                        <rect id="SvgjsRect2661" width="327.74166679382324" height="315.494" x="-4"
                                            y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="forecastMaskcuyjp0qk"></clipPath>
                                    <clipPath id="nonForecastMaskcuyjp0qk"></clipPath>
                                    <clipPath id="gridRectMarkerMaskcuyjp0qk">
                                        <rect id="SvgjsRect2662" width="343.74166679382324" height="335.494" x="-12"
                                            y="-12" rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <linearGradient id="SvgjsLinearGradient2680" x1="0" y1="0"
                                        x2="0" y2="1">
                                        <stop id="SvgjsStop2681" stop-opacity="0.45" stop-color="rgba(26,86,219,0.45)"
                                            offset="0"></stop>
                                        <stop id="SvgjsStop2682" stop-opacity="0" stop-color="rgba(141,171,237,0)"
                                            offset="1"></stop>
                                        <stop id="SvgjsStop2683" stop-opacity="0" stop-color="rgba(141,171,237,0)"
                                            offset="1"></stop>
                                    </linearGradient>
                                    <linearGradient id="SvgjsLinearGradient2702" x1="0" y1="0"
                                        x2="0" y2="1">
                                        <stop id="SvgjsStop2703" stop-opacity="0.45" stop-color="rgba(253,186,140,0.45)"
                                            offset="0"></stop>
                                        <stop id="SvgjsStop2704" stop-opacity="0" stop-color="rgba(254,221,198,0)"
                                            offset="1"></stop>
                                        <stop id="SvgjsStop2705" stop-opacity="0" stop-color="rgba(254,221,198,0)"
                                            offset="1"></stop>
                                    </linearGradient>
                                </defs>
                                <line id="SvgjsLine2660" x1="0" y1="0" x2="0" y2="311.494"
                                    stroke="#f3f4f6" stroke-dasharray="10" stroke-linecap="butt"
                                    class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="311.494"
                                    fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                <g id="SvgjsG2708" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG2709" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                        <text id="SvgjsText2711" font-family="Inter, sans-serif" x="0" y="340.494"
                                            text-anchor="middle" dominant-baseline="auto" font-size="14px"
                                            font-weight="500" fill="#6b7280"
                                            class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Inter, sans-serif;">
                                            <tspan id="SvgjsTspan2712">01 Feb</tspan>
                                            <title>01 Feb</title>
                                        </text><text id="SvgjsText2714" font-family="Inter, sans-serif"
                                            x="53.290277798970536" y="340.494" text-anchor="middle"
                                            dominant-baseline="auto" font-size="14px" font-weight="500" fill="#6b7280"
                                            class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Inter, sans-serif;">
                                            <tspan id="SvgjsTspan2715">02 Feb</tspan>
                                            <title>02 Feb</title>
                                        </text><text id="SvgjsText2717" font-family="Inter, sans-serif"
                                            x="106.58055559794109" y="340.494" text-anchor="middle"
                                            dominant-baseline="auto" font-size="14px" font-weight="500" fill="#6b7280"
                                            class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Inter, sans-serif;">
                                            <tspan id="SvgjsTspan2718">03 Feb</tspan>
                                            <title>03 Feb</title>
                                        </text><text id="SvgjsText2720" font-family="Inter, sans-serif"
                                            x="159.87083339691165" y="340.494" text-anchor="middle"
                                            dominant-baseline="auto" font-size="14px" font-weight="500" fill="#6b7280"
                                            class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Inter, sans-serif;">
                                            <tspan id="SvgjsTspan2721">04 Feb</tspan>
                                            <title>04 Feb</title>
                                        </text><text id="SvgjsText2723" font-family="Inter, sans-serif"
                                            x="213.1611111958822" y="340.494" text-anchor="middle"
                                            dominant-baseline="auto" font-size="14px" font-weight="500" fill="#6b7280"
                                            class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Inter, sans-serif;">
                                            <tspan id="SvgjsTspan2724">05 Feb</tspan>
                                            <title>05 Feb</title>
                                        </text><text id="SvgjsText2726" font-family="Inter, sans-serif"
                                            x="266.4513889948527" y="340.494" text-anchor="middle"
                                            dominant-baseline="auto" font-size="14px" font-weight="500" fill="#6b7280"
                                            class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Inter, sans-serif;">
                                            <tspan id="SvgjsTspan2727">06 Feb</tspan>
                                            <title>06 Feb</title>
                                        </text><text id="SvgjsText2729" font-family="Inter, sans-serif"
                                            x="319.74166679382324" y="340.494" text-anchor="middle"
                                            dominant-baseline="auto" font-size="14px" font-weight="500" fill="#6b7280"
                                            class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Inter, sans-serif;">
                                            <tspan id="SvgjsTspan2730">07 Feb</tspan>
                                            <title>07 Feb</title>
                                        </text>
                                    </g>
                                    <line id="SvgjsLine2731" x1="0" y1="312.494" x2="319.74166679382324"
                                        y2="312.494" stroke="#f3f4f6" stroke-dasharray="0" stroke-width="1"
                                        stroke-linecap="butt"></line>
                                </g>
                                <g id="SvgjsG2744" class="apexcharts-grid">
                                    <g id="SvgjsG2745" class="apexcharts-gridlines-horizontal">
                                        <line id="SvgjsLine2754" x1="0" y1="0" x2="319.74166679382324"
                                            y2="0" stroke="#f3f4f6" stroke-dasharray="1" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine2755" x1="0" y1="77.8735" x2="319.74166679382324"
                                            y2="77.8735" stroke="#f3f4f6" stroke-dasharray="1" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine2756" x1="0" y1="155.747" x2="319.74166679382324"
                                            y2="155.747" stroke="#f3f4f6" stroke-dasharray="1" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine2757" x1="0" y1="233.62050000000002"
                                            x2="319.74166679382324" y2="233.62050000000002" stroke="#f3f4f6"
                                            stroke-dasharray="1" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine2758" x1="0" y1="311.494" x2="319.74166679382324"
                                            y2="311.494" stroke="#f3f4f6" stroke-dasharray="1" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG2746" class="apexcharts-gridlines-vertical"></g>
                                    <line id="SvgjsLine2747" x1="0" y1="312.494" x2="0"
                                        y2="318.494" stroke="#f3f4f6" stroke-dasharray="0" stroke-linecap="butt"
                                        class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2748" x1="53.29027779897054" y1="312.494"
                                        x2="53.29027779897054" y2="318.494" stroke="#f3f4f6" stroke-dasharray="0"
                                        stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2749" x1="106.58055559794109" y1="312.494"
                                        x2="106.58055559794109" y2="318.494" stroke="#f3f4f6" stroke-dasharray="0"
                                        stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2750" x1="159.87083339691162" y1="312.494"
                                        x2="159.87083339691162" y2="318.494" stroke="#f3f4f6" stroke-dasharray="0"
                                        stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2751" x1="213.16111119588217" y1="312.494"
                                        x2="213.16111119588217" y2="318.494" stroke="#f3f4f6" stroke-dasharray="0"
                                        stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2752" x1="266.4513889948527" y1="312.494"
                                        x2="266.4513889948527" y2="318.494" stroke="#f3f4f6" stroke-dasharray="0"
                                        stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2753" x1="319.74166679382324" y1="312.494"
                                        x2="319.74166679382324" y2="318.494" stroke="#f3f4f6" stroke-dasharray="0"
                                        stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2760" x1="0" y1="311.494" x2="319.74166679382324"
                                        y2="311.494" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                    </line>
                                    <line id="SvgjsLine2759" x1="0" y1="1" x2="0"
                                        y2="311.494" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                    </line>
                                </g>
                                <g id="SvgjsG2663" class="apexcharts-area-series apexcharts-plot-series">
                                    <g id="SvgjsG2664" class="apexcharts-series" seriesName="Revenue"
                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                        <path id="SvgjsPath2684"
                                            d="M0 311.494L0 172.87917000000016C18.651597229639687 172.87917000000016 34.63868056933086 226.61188500000026 53.29027779897054 226.61188500000026C71.94187502861023 226.61188500000026 87.9289583683014 250.75266999999985 106.58055559794109 250.75266999999985C125.23215282758078 250.75266999999985 141.21923616727193 106.68669499999987 159.87083339691162 106.68669499999987C178.5224306265513 106.68669499999987 194.50951396624248 172.87917000000016 213.16111119588217 172.87917000000016C231.81270842552186 172.87917000000016 247.79979176521303 211.81592 266.4513889948527 211.81592C285.1029862244924 211.81592 301.0900695641836 289.68942000000015 319.74166679382324 289.68942000000015C319.74166679382324 289.68942000000015 319.74166679382324 289.68942000000015 319.74166679382324 311.494M319.74166679382324 289.68942000000015L319.74166679382324 289.68942000000015 "
                                            fill="url(#SvgjsLinearGradient2680)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-area" index="0" clip-path="url(#gridRectMaskcuyjp0qk)"
                                            pathTo="M 0 311.494L 0 172.87917000000016C 18.651597229639687 172.87917000000016 34.63868056933086 226.61188500000026 53.29027779897054 226.61188500000026C 71.94187502861023 226.61188500000026 87.9289583683014 250.75266999999985 106.58055559794109 250.75266999999985C 125.23215282758078 250.75266999999985 141.21923616727193 106.68669499999987 159.87083339691162 106.68669499999987C 178.5224306265513 106.68669499999987 194.50951396624248 172.87917000000016 213.16111119588217 172.87917000000016C 231.81270842552186 172.87917000000016 247.79979176521303 211.81592 266.4513889948527 211.81592C 285.1029862244924 211.81592 301.0900695641836 289.68942000000015 319.74166679382324 289.68942000000015C 319.74166679382324 289.68942000000015 319.74166679382324 289.68942000000015 319.74166679382324 311.494M 319.74166679382324 289.68942000000015z"
                                            pathFrom="M 0 311.494L 0 172.87917000000016C 18.651597229639687 172.87917000000016 34.63868056933086 226.61188500000026 53.29027779897054 226.61188500000026C 71.94187502861023 226.61188500000026 87.9289583683014 250.75266999999985 106.58055559794109 250.75266999999985C 125.23215282758078 250.75266999999985 141.21923616727193 106.68669499999987 159.87083339691162 106.68669499999987C 178.5224306265513 106.68669499999987 194.50951396624248 172.87917000000016 213.16111119588217 172.87917000000016C 231.81270842552186 172.87917000000016 247.79979176521303 211.81592 266.4513889948527 211.81592C 285.1029862244924 211.81592 301.0900695641836 289.68942000000015 319.74166679382324 289.68942000000015C 319.74166679382324 289.68942000000015 319.74166679382324 289.68942000000015 319.74166679382324 311.494M 319.74166679382324 289.68942000000015z">
                                        </path>
                                        <path id="SvgjsPath2685"
                                            d="M0 172.87917000000016C18.651597229639687 172.87917000000016 34.63868056933086 226.61188500000026 53.29027779897054 226.61188500000026C71.94187502861023 226.61188500000026 87.9289583683014 250.75266999999985 106.58055559794109 250.75266999999985C125.23215282758078 250.75266999999985 141.21923616727193 106.68669499999987 159.87083339691162 106.68669499999987C178.5224306265513 106.68669499999987 194.50951396624248 172.87917000000016 213.16111119588217 172.87917000000016C231.81270842552186 172.87917000000016 247.79979176521303 211.81592 266.4513889948527 211.81592C285.1029862244924 211.81592 301.0900695641836 289.68942000000015 319.74166679382324 289.68942000000015 "
                                            fill="none" fill-opacity="1" stroke="#1a56db" stroke-opacity="1"
                                            stroke-linecap="butt" stroke-width="4" stroke-dasharray="0"
                                            class="apexcharts-area" index="0" clip-path="url(#gridRectMaskcuyjp0qk)"
                                            pathTo="M 0 172.87917000000016C 18.651597229639687 172.87917000000016 34.63868056933086 226.61188500000026 53.29027779897054 226.61188500000026C 71.94187502861023 226.61188500000026 87.9289583683014 250.75266999999985 106.58055559794109 250.75266999999985C 125.23215282758078 250.75266999999985 141.21923616727193 106.68669499999987 159.87083339691162 106.68669499999987C 178.5224306265513 106.68669499999987 194.50951396624248 172.87917000000016 213.16111119588217 172.87917000000016C 231.81270842552186 172.87917000000016 247.79979176521303 211.81592 266.4513889948527 211.81592C 285.1029862244924 211.81592 301.0900695641836 289.68942000000015 319.74166679382324 289.68942000000015"
                                            pathFrom="M 0 172.87917000000016C 18.651597229639687 172.87917000000016 34.63868056933086 226.61188500000026 53.29027779897054 226.61188500000026C 71.94187502861023 226.61188500000026 87.9289583683014 250.75266999999985 106.58055559794109 250.75266999999985C 125.23215282758078 250.75266999999985 141.21923616727193 106.68669499999987 159.87083339691162 106.68669499999987C 178.5224306265513 106.68669499999987 194.50951396624248 172.87917000000016 213.16111119588217 172.87917000000016C 231.81270842552186 172.87917000000016 247.79979176521303 211.81592 266.4513889948527 211.81592C 285.1029862244924 211.81592 301.0900695641836 289.68942000000015 319.74166679382324 289.68942000000015">
                                        </path>
                                        <g id="SvgjsG2665" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                            <g id="SvgjsG2667" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMaskcuyjp0qk)">
                                                <circle id="SvgjsCircle2668" r="5" cx="0" cy="172.87917000000016"
                                                    class="apexcharts-marker no-pointer-events wekwrug3gj"
                                                    stroke="#ffffff" fill="#1a56db" fill-opacity="1" stroke-width="2"
                                                    stroke-opacity="0.9" rel="0" j="0" index="0"
                                                    default-marker-size="5"></circle>
                                                <circle id="SvgjsCircle2669" r="5" cx="53.29027779897054"
                                                    cy="226.61188500000026"
                                                    class="apexcharts-marker no-pointer-events wbpctsxlz" stroke="#ffffff"
                                                    fill="#1a56db" fill-opacity="1" stroke-width="2"
                                                    stroke-opacity="0.9" rel="1" j="1" index="0"
                                                    default-marker-size="5"></circle>
                                            </g>
                                            <g id="SvgjsG2670" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMaskcuyjp0qk)">
                                                <circle id="SvgjsCircle2671" r="5" cx="106.58055559794109"
                                                    cy="250.75266999999985"
                                                    class="apexcharts-marker no-pointer-events wimc5f9v7" stroke="#ffffff"
                                                    fill="#1a56db" fill-opacity="1" stroke-width="2"
                                                    stroke-opacity="0.9" rel="2" j="2" index="0"
                                                    default-marker-size="5"></circle>
                                            </g>
                                            <g id="SvgjsG2672" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMaskcuyjp0qk)">
                                                <circle id="SvgjsCircle2673" r="5" cx="159.87083339691162"
                                                    cy="106.68669499999987"
                                                    class="apexcharts-marker no-pointer-events wzy0yasvj" stroke="#ffffff"
                                                    fill="#1a56db" fill-opacity="1" stroke-width="2"
                                                    stroke-opacity="0.9" rel="3" j="3" index="0"
                                                    default-marker-size="5"></circle>
                                            </g>
                                            <g id="SvgjsG2674" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMaskcuyjp0qk)">
                                                <circle id="SvgjsCircle2675" r="5" cx="213.16111119588217"
                                                    cy="172.87917000000016"
                                                    class="apexcharts-marker no-pointer-events w4oefw3za" stroke="#ffffff"
                                                    fill="#1a56db" fill-opacity="1" stroke-width="2"
                                                    stroke-opacity="0.9" rel="4" j="4" index="0"
                                                    default-marker-size="5"></circle>
                                            </g>
                                            <g id="SvgjsG2676" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMaskcuyjp0qk)">
                                                <circle id="SvgjsCircle2677" r="5" cx="266.4513889948527" cy="211.81592"
                                                    class="apexcharts-marker no-pointer-events w9x3numgi" stroke="#ffffff"
                                                    fill="#1a56db" fill-opacity="1" stroke-width="2"
                                                    stroke-opacity="0.9" rel="5" j="5" index="0"
                                                    default-marker-size="5"></circle>
                                            </g>
                                            <g id="SvgjsG2678" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMaskcuyjp0qk)">
                                                <circle id="SvgjsCircle2679" r="5" cx="319.74166679382324"
                                                    cy="289.68942000000015"
                                                    class="apexcharts-marker no-pointer-events wsm89ej89" stroke="#ffffff"
                                                    fill="#1a56db" fill-opacity="1" stroke-width="2"
                                                    stroke-opacity="0.9" rel="6" j="6" index="0"
                                                    default-marker-size="5"></circle>
                                            </g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG2686" class="apexcharts-series" seriesName="Revenuexxpreviousxperiodx"
                                        data:longestSeries="true" rel="2" data:realIndex="1">
                                        <path id="SvgjsPath2706"
                                            d="M0 311.494L0 95.00567000000001C18.651597229639687 95.00567000000001 34.63868056933086 29.202562500000113 53.29027779897054 29.202562500000113C71.94187502861023 29.202562500000113 87.9289583683014 146.40218000000004 106.58055559794109 146.40218000000004C125.23215282758078 146.40218000000004 141.21923616727193 172.87917000000016 159.87083339691162 172.87917000000016C178.5224306265513 172.87917000000016 194.50951396624248 83.32464500000015 213.16111119588217 83.32464500000015C231.81270842552186 83.32464500000015 247.79979176521303 17.13216999999986 266.4513889948527 17.13216999999986C285.1029862244924 17.13216999999986 301.0900695641836 71.64361999999983 319.74166679382324 71.64361999999983C319.74166679382324 71.64361999999983 319.74166679382324 71.64361999999983 319.74166679382324 311.494M319.74166679382324 71.64361999999983L319.74166679382324 71.64361999999983 "
                                            fill="url(#SvgjsLinearGradient2702)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-area" index="1" clip-path="url(#gridRectMaskcuyjp0qk)"
                                            pathTo="M 0 311.494L 0 95.00567000000001C 18.651597229639687 95.00567000000001 34.63868056933086 29.202562500000113 53.29027779897054 29.202562500000113C 71.94187502861023 29.202562500000113 87.9289583683014 146.40218000000004 106.58055559794109 146.40218000000004C 125.23215282758078 146.40218000000004 141.21923616727193 172.87917000000016 159.87083339691162 172.87917000000016C 178.5224306265513 172.87917000000016 194.50951396624248 83.32464500000015 213.16111119588217 83.32464500000015C 231.81270842552186 83.32464500000015 247.79979176521303 17.13216999999986 266.4513889948527 17.13216999999986C 285.1029862244924 17.13216999999986 301.0900695641836 71.64361999999983 319.74166679382324 71.64361999999983C 319.74166679382324 71.64361999999983 319.74166679382324 71.64361999999983 319.74166679382324 311.494M 319.74166679382324 71.64361999999983z"
                                            pathFrom="M 0 311.494L 0 95.00567000000001C 18.651597229639687 95.00567000000001 34.63868056933086 29.202562500000113 53.29027779897054 29.202562500000113C 71.94187502861023 29.202562500000113 87.9289583683014 146.40218000000004 106.58055559794109 146.40218000000004C 125.23215282758078 146.40218000000004 141.21923616727193 172.87917000000016 159.87083339691162 172.87917000000016C 178.5224306265513 172.87917000000016 194.50951396624248 83.32464500000015 213.16111119588217 83.32464500000015C 231.81270842552186 83.32464500000015 247.79979176521303 17.13216999999986 266.4513889948527 17.13216999999986C 285.1029862244924 17.13216999999986 301.0900695641836 71.64361999999983 319.74166679382324 71.64361999999983C 319.74166679382324 71.64361999999983 319.74166679382324 71.64361999999983 319.74166679382324 311.494M 319.74166679382324 71.64361999999983z">
                                        </path>
                                        <path id="SvgjsPath2707"
                                            d="M0 95.00567000000001C18.651597229639687 95.00567000000001 34.63868056933086 29.202562500000113 53.29027779897054 29.202562500000113C71.94187502861023 29.202562500000113 87.9289583683014 146.40218000000004 106.58055559794109 146.40218000000004C125.23215282758078 146.40218000000004 141.21923616727193 172.87917000000016 159.87083339691162 172.87917000000016C178.5224306265513 172.87917000000016 194.50951396624248 83.32464500000015 213.16111119588217 83.32464500000015C231.81270842552186 83.32464500000015 247.79979176521303 17.13216999999986 266.4513889948527 17.13216999999986C285.1029862244924 17.13216999999986 301.0900695641836 71.64361999999983 319.74166679382324 71.64361999999983 "
                                            fill="none" fill-opacity="1" stroke="#fdba8c" stroke-opacity="1"
                                            stroke-linecap="butt" stroke-width="4" stroke-dasharray="0"
                                            class="apexcharts-area" index="1" clip-path="url(#gridRectMaskcuyjp0qk)"
                                            pathTo="M 0 95.00567000000001C 18.651597229639687 95.00567000000001 34.63868056933086 29.202562500000113 53.29027779897054 29.202562500000113C 71.94187502861023 29.202562500000113 87.9289583683014 146.40218000000004 106.58055559794109 146.40218000000004C 125.23215282758078 146.40218000000004 141.21923616727193 172.87917000000016 159.87083339691162 172.87917000000016C 178.5224306265513 172.87917000000016 194.50951396624248 83.32464500000015 213.16111119588217 83.32464500000015C 231.81270842552186 83.32464500000015 247.79979176521303 17.13216999999986 266.4513889948527 17.13216999999986C 285.1029862244924 17.13216999999986 301.0900695641836 71.64361999999983 319.74166679382324 71.64361999999983"
                                            pathFrom="M 0 95.00567000000001C 18.651597229639687 95.00567000000001 34.63868056933086 29.202562500000113 53.29027779897054 29.202562500000113C 71.94187502861023 29.202562500000113 87.9289583683014 146.40218000000004 106.58055559794109 146.40218000000004C 125.23215282758078 146.40218000000004 141.21923616727193 172.87917000000016 159.87083339691162 172.87917000000016C 178.5224306265513 172.87917000000016 194.50951396624248 83.32464500000015 213.16111119588217 83.32464500000015C 231.81270842552186 83.32464500000015 247.79979176521303 17.13216999999986 266.4513889948527 17.13216999999986C 285.1029862244924 17.13216999999986 301.0900695641836 71.64361999999983 319.74166679382324 71.64361999999983">
                                        </path>
                                        <g id="SvgjsG2687" class="apexcharts-series-markers-wrap" data:realIndex="1">
                                            <g id="SvgjsG2689" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMaskcuyjp0qk)">
                                                <circle id="SvgjsCircle2690" r="5" cx="0" cy="95.00567000000001"
                                                    class="apexcharts-marker no-pointer-events w66a1434w" stroke="#ffffff"
                                                    fill="#fdba8c" fill-opacity="1" stroke-width="2"
                                                    stroke-opacity="0.9" rel="0" j="0" index="1"
                                                    default-marker-size="5"></circle>
                                                <circle id="SvgjsCircle2691" r="5" cx="53.29027779897054"
                                                    cy="29.202562500000113"
                                                    class="apexcharts-marker no-pointer-events wiveu8pdg" stroke="#ffffff"
                                                    fill="#fdba8c" fill-opacity="1" stroke-width="2"
                                                    stroke-opacity="0.9" rel="1" j="1" index="1"
                                                    default-marker-size="5"></circle>
                                            </g>
                                            <g id="SvgjsG2692" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMaskcuyjp0qk)">
                                                <circle id="SvgjsCircle2693" r="5" cx="106.58055559794109"
                                                    cy="146.40218000000004"
                                                    class="apexcharts-marker no-pointer-events wzwmwbiiy" stroke="#ffffff"
                                                    fill="#fdba8c" fill-opacity="1" stroke-width="2"
                                                    stroke-opacity="0.9" rel="2" j="2" index="1"
                                                    default-marker-size="5"></circle>
                                            </g>
                                            <g id="SvgjsG2694" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMaskcuyjp0qk)">
                                                <circle id="SvgjsCircle2695" r="5" cx="159.87083339691162"
                                                    cy="172.87917000000016"
                                                    class="apexcharts-marker no-pointer-events wqwcvfxxbf"
                                                    stroke="#ffffff" fill="#fdba8c" fill-opacity="1" stroke-width="2"
                                                    stroke-opacity="0.9" rel="3" j="3" index="1"
                                                    default-marker-size="5"></circle>
                                            </g>
                                            <g id="SvgjsG2696" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMaskcuyjp0qk)">
                                                <circle id="SvgjsCircle2697" r="5" cx="213.16111119588217"
                                                    cy="83.32464500000015"
                                                    class="apexcharts-marker no-pointer-events wrnpfa3do" stroke="#ffffff"
                                                    fill="#fdba8c" fill-opacity="1" stroke-width="2"
                                                    stroke-opacity="0.9" rel="4" j="4" index="1"
                                                    default-marker-size="5"></circle>
                                            </g>
                                            <g id="SvgjsG2698" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMaskcuyjp0qk)">
                                                <circle id="SvgjsCircle2699" r="5" cx="266.4513889948527"
                                                    cy="17.13216999999986"
                                                    class="apexcharts-marker no-pointer-events wsbwa9b3z" stroke="#ffffff"
                                                    fill="#fdba8c" fill-opacity="1" stroke-width="2"
                                                    stroke-opacity="0.9" rel="5" j="5" index="1"
                                                    default-marker-size="5"></circle>
                                            </g>
                                            <g id="SvgjsG2700" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMaskcuyjp0qk)">
                                                <circle id="SvgjsCircle2701" r="5" cx="319.74166679382324"
                                                    cy="71.64361999999983"
                                                    class="apexcharts-marker no-pointer-events wzqg1gmtw" stroke="#ffffff"
                                                    fill="#fdba8c" fill-opacity="1" stroke-width="2"
                                                    stroke-opacity="0.9" rel="6" j="6" index="1"
                                                    default-marker-size="5"></circle>
                                            </g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG2666" class="apexcharts-datalabels" data:realIndex="0"></g>
                                    <g id="SvgjsG2688" class="apexcharts-datalabels" data:realIndex="1"></g>
                                </g>
                                <line id="SvgjsLine2761" x1="0" y1="0" x2="319.74166679382324"
                                    y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                    stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine2762" x1="0" y1="0" x2="319.74166679382324"
                                    y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                    class="apexcharts-ycrosshairs-hidden"></line>
                                <g id="SvgjsG2763" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG2764" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG2765" class="apexcharts-point-annotations"></g>
                                <rect id="SvgjsRect2766" width="0" height="0" x="0" y="0" rx="0"
                                    ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                    fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                <rect id="SvgjsRect2767" width="0" height="0" x="0" y="0" rx="0"
                                    ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                    fill="#fefefe" class="apexcharts-selection-rect"></rect>
                            </g>
                            <rect id="SvgjsRect2659" width="0" height="0" x="0" y="0" rx="0"
                                ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                fill="#fefefe"></rect>
                            <g id="SvgjsG2732" class="apexcharts-yaxis" rel="0"
                                transform="translate(42.81666564941406, 0)">
                                <g id="SvgjsG2733" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2734"
                                        font-family="Inter, sans-serif" x="20" y="31.4" text-anchor="end"
                                        dominant-baseline="auto" font-size="14px" font-weight="500" fill="#6b7280"
                                        class="apexcharts-text apexcharts-yaxis-label "
                                        style="font-family: Inter, sans-serif;">
                                        <tspan id="SvgjsTspan2735">$6800</tspan>
                                        <title>$6800</title>
                                    </text><text id="SvgjsText2736" font-family="Inter, sans-serif" x="20"
                                        y="109.27350000000001" text-anchor="end" dominant-baseline="auto"
                                        font-size="14px" font-weight="500" fill="#6b7280"
                                        class="apexcharts-text apexcharts-yaxis-label "
                                        style="font-family: Inter, sans-serif;">
                                        <tspan id="SvgjsTspan2737">$6600</tspan>
                                        <title>$6600</title>
                                    </text><text id="SvgjsText2738" font-family="Inter, sans-serif" x="20"
                                        y="187.14700000000002" text-anchor="end" dominant-baseline="auto"
                                        font-size="14px" font-weight="500" fill="#6b7280"
                                        class="apexcharts-text apexcharts-yaxis-label "
                                        style="font-family: Inter, sans-serif;">
                                        <tspan id="SvgjsTspan2739">$6400</tspan>
                                        <title>$6400</title>
                                    </text><text id="SvgjsText2740" font-family="Inter, sans-serif" x="20"
                                        y="265.02049999999997" text-anchor="end" dominant-baseline="auto"
                                        font-size="14px" font-weight="500" fill="#6b7280"
                                        class="apexcharts-text apexcharts-yaxis-label "
                                        style="font-family: Inter, sans-serif;">
                                        <tspan id="SvgjsTspan2741">$6200</tspan>
                                        <title>$6200</title>
                                    </text><text id="SvgjsText2742" font-family="Inter, sans-serif" x="20" y="342.894"
                                        text-anchor="end" dominant-baseline="auto" font-size="14px" font-weight="500"
                                        fill="#6b7280" class="apexcharts-text apexcharts-yaxis-label "
                                        style="font-family: Inter, sans-serif;">
                                        <tspan id="SvgjsTspan2743">$6000</tspan>
                                        <title>$6000</title>
                                    </text></g>
                            </g>
                            <g id="SvgjsG2656" class="apexcharts-annotations"></g>
                        </svg>
                        <div class="apexcharts-tooltip apexcharts-theme-light">
                            <div class="apexcharts-tooltip-title"
                                style="font-family: Inter, sans-serif; font-size: 14px;"></div>
                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                    class="apexcharts-tooltip-marker" style="background-color: rgb(26, 86, 219);"></span>
                                <div class="apexcharts-tooltip-text"
                                    style="font-family: Inter, sans-serif; font-size: 14px;">
                                    <div class="apexcharts-tooltip-y-group"><span
                                            class="apexcharts-tooltip-text-y-label"></span><span
                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span
                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span
                                            class="apexcharts-tooltip-text-z-label"></span><span
                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                            <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                    class="apexcharts-tooltip-marker"
                                    style="background-color: rgb(253, 186, 140);"></span>
                                <div class="apexcharts-tooltip-text"
                                    style="font-family: Inter, sans-serif; font-size: 14px;">
                                    <div class="apexcharts-tooltip-y-group"><span
                                            class="apexcharts-tooltip-text-y-label"></span><span
                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span
                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span
                                            class="apexcharts-tooltip-text-z-label"></span><span
                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                            <div class="apexcharts-xaxistooltip-text"
                                style="font-family: Inter, sans-serif; font-size: 12px;"></div>
                        </div>
                        <div
                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                            <div class="apexcharts-yaxistooltip-text"></div>
                        </div>
                    </div>
                </div>
                <!-- Card Footer -->
                <div
                    class="flex items-center justify-between pt-3 mt-4 border-t border-gray-200 sm:pt-6 dark:border-gray-700">
                    <div>
                        <button
                            class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 rounded-lg hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
                            type="button" data-dropdown-toggle="weekly-sales-dropdown">Last 7 days <svg
                                class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                            id="weekly-sales-dropdown"
                            style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(355px, 707px);"
                            data-popper-placement="bottom" data-popper-reference-hidden="" data-popper-escaped="">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white" role="none">
                                    Sep 16, 2021 - Sep 22, 2021
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Yesterday</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Today</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Last 7 days</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Last 30 days</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Last 90 days</a>
                                </li>
                            </ul>
                            <div class="py-1" role="none">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Custom...</a>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <a href="#"
                            class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                            Sales Report
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <!--Tabs widget -->
            <div
                class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <h3 class="flex items-center mb-4 text-lg font-semibold text-gray-900 dark:text-white">Statistics this
                    month
                    <button data-popover-target="popover-description" data-popover-placement="bottom-end"
                        type="button"><svg class="w-4 h-4 ml-2 text-gray-400 hover:text-gray-500" aria-hidden="true"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                clip-rule="evenodd"></path>
                        </svg><span class="sr-only">Show information</span></button>
                </h3>
                <div data-popover="" id="popover-description" role="tooltip"
                    class="absolute z-10 inline-block text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400 opacity-0 invisible"
                    style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(-286px, 81px);"
                    data-popper-escaped="" data-popper-placement="bottom-end">
                    <div class="p-3 space-y-2">
                        <h3 class="font-semibold text-gray-900 dark:text-white">Statistics</h3>
                        <p>Statistics is a branch of applied mathematics that involves the collection, description,
                            analysis, and inference of conclusions from quantitative data.</p>
                        <a href="#"
                            class="flex items-center font-medium text-primary-600 dark:text-primary-500 dark:hover:text-primary-600 hover:text-primary-700">Read
                            more <svg class="w-4 h-4 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg></a>
                    </div>
                    <div data-popper-arrow="" style="position: absolute; left: 0px; transform: translate(271px);"></div>
                </div>
                <div class="sm:hidden">
                    <label for="tabs" class="sr-only">Select tab</label>
                    <select id="tabs"
                        class="bg-gray-50 border-0 border-b border-gray-200 text-gray-900 text-sm rounded-t-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option>Statistics</option>
                        <option>Services</option>
                        <option>FAQ</option>
                    </select>
                </div>
                <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400"
                    id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
                    <li class="w-full">
                        <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab"
                            aria-controls="faq" aria-selected="true"
                            class="inline-block w-full p-4 rounded-tl-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 dark:border-blue-500">Top
                            products</button>
                    </li>
                    <li class="w-full">
                        <button id="about-tab" data-tabs-target="#about" type="button" role="tab"
                            aria-controls="about" aria-selected="false"
                            class="inline-block w-full p-4 rounded-tr-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300">Top
                            Customers</button>
                    </li>
                </ul>
                <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
                    <div class="pt-4" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center min-w-0">
                                        <img class="flex-shrink-0 w-10 h-10"
                                            src="https://flowbite-admin-dashboard.vercel.app/images/products/iphone.png"
                                            alt="imac image">
                                        <div class="ml-3">
                                            <p class="font-medium text-gray-900 truncate dark:text-white">
                                                iPhone 14 Pro
                                            </p>
                                            <div
                                                class="flex items-center justify-end flex-1 text-sm text-green-500 dark:text-green-400">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                                        d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                                    </path>
                                                </svg>
                                                2.5%
                                                <span class="ml-2 text-gray-500">vs last month</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        $445,467
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center min-w-0">
                                        <img class="flex-shrink-0 w-10 h-10"
                                            src="https://flowbite-admin-dashboard.vercel.app/images/products/imac.png"
                                            alt="imac image">
                                        <div class="ml-3">
                                            <p class="font-medium text-gray-900 truncate dark:text-white">
                                                Apple iMac 27"
                                            </p>
                                            <div
                                                class="flex items-center justify-end flex-1 text-sm text-green-500 dark:text-green-400">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                                        d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                                    </path>
                                                </svg>
                                                12.5%
                                                <span class="ml-2 text-gray-500">vs last month</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        $256,982
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center min-w-0">
                                        <img class="flex-shrink-0 w-10 h-10"
                                            src="https://flowbite-admin-dashboard.vercel.app/images/products/watch.png"
                                            alt="watch image">
                                        <div class="ml-3">
                                            <p class="font-medium text-gray-900 truncate dark:text-white">
                                                Apple Watch SE
                                            </p>
                                            <div
                                                class="flex items-center justify-end flex-1 text-sm text-red-600 dark:text-red-500">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                                        d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z">
                                                    </path>
                                                </svg>
                                                1.35%
                                                <span class="ml-2 text-gray-500">vs last month</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        $201,869
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center min-w-0">
                                        <img class="flex-shrink-0 w-10 h-10"
                                            src="https://flowbite-admin-dashboard.vercel.app/images/products/ipad.png"
                                            alt="ipad image">
                                        <div class="ml-3">
                                            <p class="font-medium text-gray-900 truncate dark:text-white">
                                                Apple iPad Air
                                            </p>
                                            <div
                                                class="flex items-center justify-end flex-1 text-sm text-green-500 dark:text-green-400">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                                        d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                                    </path>
                                                </svg>
                                                12.5%
                                                <span class="ml-2 text-gray-500">vs last month</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        $103,967
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center min-w-0">
                                        <img class="flex-shrink-0 w-10 h-10"
                                            src="https://flowbite-admin-dashboard.vercel.app/images/products/imac.png"
                                            alt="imac image">
                                        <div class="ml-3">
                                            <p class="font-medium text-gray-900 truncate dark:text-white">
                                                Apple iMac 24"
                                            </p>
                                            <div
                                                class="flex items-center justify-end flex-1 text-sm text-red-600 dark:text-red-500">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                                        d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z">
                                                    </path>
                                                </svg>
                                                2%
                                                <span class="ml-2 text-gray-500">vs last month</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        $98,543
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="hidden pt-4" id="about" role="tabpanel" aria-labelledby="about-tab">
                        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full"
                                            src="https://flowbite-admin-dashboard.vercel.app/images/users/neil-sims.png"
                                            alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="font-medium text-gray-900 truncate dark:text-white">
                                            Neil Sims
                                        </p>
                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                            email@flowbite.com
                                        </p>
                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        $3320
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full"
                                            src="https://flowbite-admin-dashboard.vercel.app/images/users/bonnie-green.png"
                                            alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="font-medium text-gray-900 truncate dark:text-white">
                                            Bonnie Green
                                        </p>
                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                            email@flowbite.com
                                        </p>
                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        $2467
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full"
                                            src="https://flowbite-admin-dashboard.vercel.app/images/users/michael-gough.png"
                                            alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="font-medium text-gray-900 truncate dark:text-white">
                                            Michael Gough
                                        </p>
                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                            email@flowbite.com
                                        </p>
                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        $2235
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full"
                                            src="https://flowbite-admin-dashboard.vercel.app/images/users/thomas-lean.png"
                                            alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="font-medium text-gray-900 truncate dark:text-white">
                                            Thomes Lean
                                        </p>
                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                            email@flowbite.com
                                        </p>
                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        $1842
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full"
                                            src="https://flowbite-admin-dashboard.vercel.app/images/users/lana-byrd.png"
                                            alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="font-medium text-gray-900 truncate dark:text-white">
                                            Lana Byrd
                                        </p>
                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                            email@flowbite.com
                                        </p>
                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        $1044
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Card Footer -->
                <div
                    class="flex items-center justify-between pt-3 mt-5 border-t border-gray-200 sm:pt-6 dark:border-gray-700">
                    <div>
                        <button
                            class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 rounded-lg hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
                            type="button" data-dropdown-toggle="stats-dropdown">Last 7 days <svg class="w-4 h-4 ml-2"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                            id="stats-dropdown"
                            style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(870px, 701px);"
                            data-popper-placement="bottom" data-popper-reference-hidden="" data-popper-escaped="">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white" role="none">
                                    Sep 16, 2021 - Sep 22, 2021
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Yesterday</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Today</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Last 7 days</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Last 30 days</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Last 90 days</a>
                                </li>
                            </ul>
                            <div class="py-1" role="none">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Custom...</a>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <a href="#"
                            class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                            Full Report
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid w-full grid-cols-1 gap-4 mt-4 xl:grid-cols-2 2xl:grid-cols-3">
            <div
                class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="w-full">
                    <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">New products</h3>
                    <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">2,340</span>
                    <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
                        <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                </path>
                            </svg>
                            12.5%
                        </span>
                        Since last month
                    </p>
                </div>
                <div class="w-full" id="new-products-chart" style="min-height: 155px;">
                    <div id="apexchartsk9wlwxk6" class="apexcharts-canvas apexchartsk9wlwxk6 apexcharts-theme-light"
                        style="width: 225px; height: 140px;"><svg id="SvgjsSvg2158" width="225" height="140"
                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                            class="apexcharts-svg hovering-zoom" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                            style="background: transparent;">
                            <g id="SvgjsG2160" class="apexcharts-inner apexcharts-graphical"
                                transform="translate(12, 30)">
                                <defs id="SvgjsDefs2159">
                                    <linearGradient id="SvgjsLinearGradient2164" x1="0" y1="0"
                                        x2="0" y2="1">
                                        <stop id="SvgjsStop2165" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)"
                                            offset="0"></stop>
                                        <stop id="SvgjsStop2166" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)"
                                            offset="1"></stop>
                                        <stop id="SvgjsStop2167" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)"
                                            offset="1"></stop>
                                    </linearGradient>
                                    <clipPath id="gridRectMaskk9wlwxk6">
                                        <rect id="SvgjsRect2169" width="212" height="83" x="-4.5" y="-2.5"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="forecastMaskk9wlwxk6"></clipPath>
                                    <clipPath id="nonForecastMaskk9wlwxk6"></clipPath>
                                    <clipPath id="gridRectMarkerMaskk9wlwxk6">
                                        <rect id="SvgjsRect2170" width="207" height="82" x="-2" y="-2"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                </defs>
                                <rect id="SvgjsRect2168" width="26.1" height="78" x="1.4499999999999993" y="0"
                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                    stroke-dasharray="3" fill="url(#SvgjsLinearGradient2164)"
                                    class="apexcharts-xcrosshairs" y2="78" filter="none" fill-opacity="0.9"
                                    x1="1.4499999999999993" x2="1.4499999999999993"></rect>
                                <g id="SvgjsG2189" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG2190" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)">
                                    </g>
                                </g>
                                <g id="SvgjsG2199" class="apexcharts-grid">
                                    <g id="SvgjsG2200" class="apexcharts-gridlines-horizontal" style="display: none;">
                                        <line id="SvgjsLine2202" x1="0" y1="0" x2="203"
                                            y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine2203" x1="0" y1="19.5" x2="203"
                                            y2="19.5" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine2204" x1="0" y1="39" x2="203"
                                            y2="39" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine2205" x1="0" y1="58.5" x2="203"
                                            y2="58.5" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine2206" x1="0" y1="78" x2="203"
                                            y2="78" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG2201" class="apexcharts-gridlines-vertical" style="display: none;">
                                    </g>
                                    <line id="SvgjsLine2208" x1="0" y1="78" x2="203"
                                        y2="78" stroke="transparent" stroke-dasharray="0"
                                        stroke-linecap="butt"></line>
                                    <line id="SvgjsLine2207" x1="0" y1="1" x2="0"
                                        y2="78" stroke="transparent" stroke-dasharray="0"
                                        stroke-linecap="butt"></line>
                                </g>
                                <g id="SvgjsG2171" class="apexcharts-bar-series apexcharts-plot-series">
                                    <g id="SvgjsG2172" class="apexcharts-series" rel="1"
                                        seriesName="Quantity" data:realIndex="0">
                                        <path id="SvgjsPath2176"
                                            d="M 1.4499999999999993 78L 1.4499999999999993 14.700000000000003Q 1.4499999999999993 11.700000000000003 4.449999999999999 11.700000000000003L 19.55 11.700000000000003Q 22.55 11.700000000000003 22.55 14.700000000000003L 22.55 14.700000000000003L 22.55 78L 22.55 78z"
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMaskk9wlwxk6)"
                                            pathTo="M 1.4499999999999993 78L 1.4499999999999993 14.700000000000003Q 1.4499999999999993 11.700000000000003 4.449999999999999 11.700000000000003L 19.55 11.700000000000003Q 22.55 11.700000000000003 22.55 14.700000000000003L 22.55 14.700000000000003L 22.55 78L 22.55 78z"
                                            pathFrom="M 1.4499999999999993 78L 1.4499999999999993 78L 22.55 78L 22.55 78L 22.55 78L 22.55 78L 22.55 78L 1.4499999999999993 78"
                                            cy="11.700000000000003" cx="27.95" j="0" val="170"
                                            barHeight="66.3" barWidth="26.1"></path>
                                        <path id="SvgjsPath2178"
                                            d="M 30.45 78L 30.45 10.800000000000011Q 30.45 7.800000000000011 33.45 7.800000000000011L 48.55 7.800000000000011Q 51.55 7.800000000000011 51.55 10.800000000000011L 51.55 10.800000000000011L 51.55 78L 51.55 78z"
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMaskk9wlwxk6)"
                                            pathTo="M 30.45 78L 30.45 10.800000000000011Q 30.45 7.800000000000011 33.45 7.800000000000011L 48.55 7.800000000000011Q 51.55 7.800000000000011 51.55 10.800000000000011L 51.55 10.800000000000011L 51.55 78L 51.55 78z"
                                            pathFrom="M 30.45 78L 30.45 78L 51.55 78L 51.55 78L 51.55 78L 51.55 78L 51.55 78L 30.45 78"
                                            cy="7.800000000000011" cx="56.95" j="1" val="180"
                                            barHeight="70.19999999999999" barWidth="26.1"></path>
                                        <path id="SvgjsPath2180"
                                            d="M 59.45 78L 59.45 17.040000000000006Q 59.45 14.040000000000006 62.45 14.040000000000006L 77.55000000000001 14.040000000000006Q 80.55000000000001 14.040000000000006 80.55000000000001 17.040000000000006L 80.55000000000001 17.040000000000006L 80.55000000000001 78L 80.55000000000001 78z"
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMaskk9wlwxk6)"
                                            pathTo="M 59.45 78L 59.45 17.040000000000006Q 59.45 14.040000000000006 62.45 14.040000000000006L 77.55000000000001 14.040000000000006Q 80.55000000000001 14.040000000000006 80.55000000000001 17.040000000000006L 80.55000000000001 17.040000000000006L 80.55000000000001 78L 80.55000000000001 78z"
                                            pathFrom="M 59.45 78L 59.45 78L 80.55000000000001 78L 80.55000000000001 78L 80.55000000000001 78L 80.55000000000001 78L 80.55000000000001 78L 59.45 78"
                                            cy="14.040000000000006" cx="85.95" j="2" val="164"
                                            barHeight="63.959999999999994" barWidth="26.1"></path>
                                        <path id="SvgjsPath2182"
                                            d="M 88.45 78L 88.45 24.450000000000003Q 88.45 21.450000000000003 91.45 21.450000000000003L 106.55000000000001 21.450000000000003Q 109.55000000000001 21.450000000000003 109.55000000000001 24.450000000000003L 109.55000000000001 24.450000000000003L 109.55000000000001 78L 109.55000000000001 78z"
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMaskk9wlwxk6)"
                                            pathTo="M 88.45 78L 88.45 24.450000000000003Q 88.45 21.450000000000003 91.45 21.450000000000003L 106.55000000000001 21.450000000000003Q 109.55000000000001 21.450000000000003 109.55000000000001 24.450000000000003L 109.55000000000001 24.450000000000003L 109.55000000000001 78L 109.55000000000001 78z"
                                            pathFrom="M 88.45 78L 88.45 78L 109.55000000000001 78L 109.55000000000001 78L 109.55000000000001 78L 109.55000000000001 78L 109.55000000000001 78L 88.45 78"
                                            cy="21.450000000000003" cx="114.95" j="3" val="145"
                                            barHeight="56.55" barWidth="26.1"></path>
                                        <path id="SvgjsPath2184"
                                            d="M 117.45 78L 117.45 5.340000000000003Q 117.45 2.3400000000000034 120.45 2.3400000000000034L 135.55 2.3400000000000034Q 138.55 2.3400000000000034 138.55 5.340000000000003L 138.55 5.340000000000003L 138.55 78L 138.55 78z"
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMaskk9wlwxk6)"
                                            pathTo="M 117.45 78L 117.45 5.340000000000003Q 117.45 2.3400000000000034 120.45 2.3400000000000034L 135.55 2.3400000000000034Q 138.55 2.3400000000000034 138.55 5.340000000000003L 138.55 5.340000000000003L 138.55 78L 138.55 78z"
                                            pathFrom="M 117.45 78L 117.45 78L 138.55 78L 138.55 78L 138.55 78L 138.55 78L 138.55 78L 117.45 78"
                                            cy="2.3400000000000034" cx="143.95" j="4" val="194"
                                            barHeight="75.66" barWidth="26.1"></path>
                                        <path id="SvgjsPath2186"
                                            d="M 146.45 78L 146.45 14.700000000000003Q 146.45 11.700000000000003 149.45 11.700000000000003L 164.54999999999998 11.700000000000003Q 167.54999999999998 11.700000000000003 167.54999999999998 14.700000000000003L 167.54999999999998 14.700000000000003L 167.54999999999998 78L 167.54999999999998 78z"
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMaskk9wlwxk6)"
                                            pathTo="M 146.45 78L 146.45 14.700000000000003Q 146.45 11.700000000000003 149.45 11.700000000000003L 164.54999999999998 11.700000000000003Q 167.54999999999998 11.700000000000003 167.54999999999998 14.700000000000003L 167.54999999999998 14.700000000000003L 167.54999999999998 78L 167.54999999999998 78z"
                                            pathFrom="M 146.45 78L 146.45 78L 167.54999999999998 78L 167.54999999999998 78L 167.54999999999998 78L 167.54999999999998 78L 167.54999999999998 78L 146.45 78"
                                            cy="11.700000000000003" cx="172.95" j="5" val="170"
                                            barHeight="66.3" barWidth="26.1"></path>
                                        <path id="SvgjsPath2188"
                                            d="M 175.45 78L 175.45 20.550000000000004Q 175.45 17.550000000000004 178.45 17.550000000000004L 193.54999999999998 17.550000000000004Q 196.54999999999998 17.550000000000004 196.54999999999998 20.550000000000004L 196.54999999999998 20.550000000000004L 196.54999999999998 78L 196.54999999999998 78z"
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMaskk9wlwxk6)"
                                            pathTo="M 175.45 78L 175.45 20.550000000000004Q 175.45 17.550000000000004 178.45 17.550000000000004L 193.54999999999998 17.550000000000004Q 196.54999999999998 17.550000000000004 196.54999999999998 20.550000000000004L 196.54999999999998 20.550000000000004L 196.54999999999998 78L 196.54999999999998 78z"
                                            pathFrom="M 175.45 78L 175.45 78L 196.54999999999998 78L 196.54999999999998 78L 196.54999999999998 78L 196.54999999999998 78L 196.54999999999998 78L 175.45 78"
                                            cy="17.550000000000004" cx="201.95" j="6" val="155"
                                            barHeight="60.449999999999996" barWidth="26.1"></path>
                                        <g id="SvgjsG2174" class="apexcharts-bar-goals-markers"
                                            style="pointer-events: none">
                                            <g id="SvgjsG2175" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG2177" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG2179" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG2181" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG2183" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG2185" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG2187" className="apexcharts-bar-goals-groups"></g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG2173" class="apexcharts-datalabels" data:realIndex="0"></g>
                                </g>
                                <line id="SvgjsLine2209" x1="0" y1="0" x2="203"
                                    y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                    stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine2210" x1="0" y1="0" x2="203"
                                    y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                    class="apexcharts-ycrosshairs-hidden"></line>
                                <g id="SvgjsG2211" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG2212" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG2213" class="apexcharts-point-annotations"></g>
                            </g>
                            <g id="SvgjsG2198" class="apexcharts-yaxis" rel="0"
                                transform="translate(-18, 0)"></g>
                            <g id="SvgjsG2161" class="apexcharts-annotations"></g>
                        </svg>
                        <div class="apexcharts-legend" style="max-height: 70px;"></div>
                        <div class="apexcharts-tooltip apexcharts-theme-light" style="left: 32.5px; top: 0px;">
                            <div class="apexcharts-tooltip-title"
                                style="font-family: Inter, sans-serif; font-size: 14px;">01 Feb</div>
                            <div class="apexcharts-tooltip-series-group apexcharts-active"
                                style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker"
                                    style="background-color: rgb(26, 86, 219);"></span>
                                <div class="apexcharts-tooltip-text"
                                    style="font-family: Inter, sans-serif; font-size: 14px;">
                                    <div class="apexcharts-tooltip-y-group"><span
                                            class="apexcharts-tooltip-text-y-label">Quantity: </span><span
                                            class="apexcharts-tooltip-text-y-value">170</span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span
                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span
                                            class="apexcharts-tooltip-text-z-label"></span><span
                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                            <div class="apexcharts-yaxistooltip-text"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="w-full">
                    <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Users</h3>
                    <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">2,340</span>
                    <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
                        <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                </path>
                            </svg>
                            3,4%
                        </span>
                        Since last month
                    </p>
                </div>
                <div class="w-full" id="week-signups-chart" style="min-height: 155px;">
                    <div id="apexcharts9zp93ku1" class="apexcharts-canvas apexcharts9zp93ku1 apexcharts-theme-light"
                        style="width: 225px; height: 140px;"><svg id="SvgjsSvg2768" width="225" height="140"
                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                            style="background: transparent;">
                            <g id="SvgjsG2770" class="apexcharts-inner apexcharts-graphical"
                                transform="translate(12, 30)">
                                <defs id="SvgjsDefs2769">
                                    <linearGradient id="SvgjsLinearGradient2774" x1="0" y1="0"
                                        x2="0" y2="1">
                                        <stop id="SvgjsStop2775" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)"
                                            offset="0"></stop>
                                        <stop id="SvgjsStop2776" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)"
                                            offset="1"></stop>
                                        <stop id="SvgjsStop2777" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)"
                                            offset="1"></stop>
                                    </linearGradient>
                                    <clipPath id="gridRectMask9zp93ku1">
                                        <rect id="SvgjsRect2779" width="207" height="78" x="-2" y="0"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="forecastMask9zp93ku1"></clipPath>
                                    <clipPath id="nonForecastMask9zp93ku1"></clipPath>
                                    <clipPath id="gridRectMarkerMask9zp93ku1">
                                        <rect id="SvgjsRect2780" width="207" height="82" x="-2" y="-2"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                </defs>
                                <rect id="SvgjsRect2778" width="7.25" height="78" x="0" y="0" rx="0"
                                    ry="0" opacity="1" stroke-width="0" stroke-dasharray="3"
                                    fill="url(#SvgjsLinearGradient2774)" class="apexcharts-xcrosshairs" y2="78"
                                    filter="none" fill-opacity="0.9"></rect>
                                <g id="SvgjsG2806" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG2807" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)">
                                    </g>
                                </g>
                                <g id="SvgjsG2816" class="apexcharts-grid">
                                    <g id="SvgjsG2817" class="apexcharts-gridlines-horizontal" style="display: none;">
                                        <line id="SvgjsLine2819" x1="0" y1="0" x2="203"
                                            y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine2820" x1="0" y1="15.6" x2="203"
                                            y2="15.6" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine2821" x1="0" y1="31.2" x2="203"
                                            y2="31.2" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine2822" x1="0" y1="46.8" x2="203"
                                            y2="46.8" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine2823" x1="0" y1="62.4" x2="203"
                                            y2="62.4" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine2824" x1="0" y1="78" x2="203"
                                            y2="78" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG2818" class="apexcharts-gridlines-vertical" style="display: none;">
                                    </g>
                                    <line id="SvgjsLine2826" x1="0" y1="78" x2="203"
                                        y2="78" stroke="transparent" stroke-dasharray="0"
                                        stroke-linecap="butt"></line>
                                    <line id="SvgjsLine2825" x1="0" y1="1" x2="0"
                                        y2="78" stroke="transparent" stroke-dasharray="0"
                                        stroke-linecap="butt"></line>
                                </g>
                                <g id="SvgjsG2781" class="apexcharts-bar-series apexcharts-plot-series">
                                    <g id="SvgjsG2782" class="apexcharts-series" rel="1" seriesName="Users"
                                        data:realIndex="0">
                                        <rect id="SvgjsRect2785" width="7.25" height="78" x="10.875" y="0"
                                            rx="3" ry="3" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#E5E7EB"
                                            class="apexcharts-backgroundBar"></rect>
                                        <path id="SvgjsPath2787"
                                            d="M10.875 78L10.875 46.315999999999995Q10.875 43.315999999999995 13.875 43.315999999999995L15.125 43.315999999999995Q18.125 43.315999999999995 18.125 46.315999999999995L18.125 46.315999999999995L18.125 78L18.125 78L10.875 78C10.875 78 10.875 78 10.875 78C10.875 78 10.875 78 10.875 78C10.875 78 10.875 78 10.875 78C10.875 78 10.875 78 10.875 78C10.875 78 10.875 78 10.875 78C10.875 78 10.875 78 10.875 78C10.875 78 10.875 78 10.875 78 "
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMask9zp93ku1)"
                                            pathTo="M 10.875 78L 10.875 46.315999999999995Q 10.875 43.315999999999995 13.875 43.315999999999995L 15.125 43.315999999999995Q 18.125 43.315999999999995 18.125 46.315999999999995L 18.125 46.315999999999995L 18.125 78L 18.125 78z"
                                            pathFrom="M 10.875 78L 10.875 46.315999999999995Q 10.875 43.315999999999995 13.875 43.315999999999995L 15.125 43.315999999999995Q 18.125 43.315999999999995 18.125 46.315999999999995L 18.125 46.315999999999995L 18.125 78L 18.125 78zL 10.875 78L 18.125 78L 18.125 78L 18.125 78L 18.125 78L 18.125 78L 10.875 78"
                                            cy="43.315999999999995" cx="39.875" j="0" val="1334"
                                            barHeight="34.684000000000005" barWidth="7.25"></path>
                                        <rect id="SvgjsRect2788" width="7.25" height="78" x="39.875" y="0"
                                            rx="3" ry="3" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#E5E7EB"
                                            class="apexcharts-backgroundBar"></rect>
                                        <path id="SvgjsPath2790"
                                            d="M39.875 78L39.875 17.689999999999998Q39.875 14.689999999999998 42.875 14.689999999999998L44.125 14.689999999999998Q47.125 14.689999999999998 47.125 17.689999999999998L47.125 17.689999999999998L47.125 78L47.125 78L39.875 78C39.875 78 39.875 78 39.875 78C39.875 78 39.875 78 39.875 78C39.875 78 39.875 78 39.875 78C39.875 78 39.875 78 39.875 78C39.875 78 39.875 78 39.875 78C39.875 78 39.875 78 39.875 78C39.875 78 39.875 78 39.875 78 "
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMask9zp93ku1)"
                                            pathTo="M 39.875 78L 39.875 17.689999999999998Q 39.875 14.689999999999998 42.875 14.689999999999998L 44.125 14.689999999999998Q 47.125 14.689999999999998 47.125 17.689999999999998L 47.125 17.689999999999998L 47.125 78L 47.125 78z"
                                            pathFrom="M 39.875 78L 39.875 17.689999999999998Q 39.875 14.689999999999998 42.875 14.689999999999998L 44.125 14.689999999999998Q 47.125 14.689999999999998 47.125 17.689999999999998L 47.125 17.689999999999998L 47.125 78L 47.125 78zL 39.875 78L 47.125 78L 47.125 78L 47.125 78L 47.125 78L 47.125 78L 39.875 78"
                                            cy="14.689999999999998" cx="68.875" j="1" val="2435"
                                            barHeight="63.31" barWidth="7.25"></path>
                                        <rect id="SvgjsRect2791" width="7.25" height="78" x="68.875" y="0"
                                            rx="3" ry="3" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#E5E7EB"
                                            class="apexcharts-backgroundBar"></rect>
                                        <path id="SvgjsPath2793"
                                            d="M68.875 78L68.875 35.422Q68.875 32.422 71.875 32.422L73.125 32.422Q76.125 32.422 76.125 35.422L76.125 35.422L76.125 78L76.125 78L68.875 78C68.875 78 68.875 78 68.875 78C68.875 78 68.875 78 68.875 78C68.875 78 68.875 78 68.875 78C68.875 78 68.875 78 68.875 78C68.875 78 68.875 78 68.875 78C68.875 78 68.875 78 68.875 78C68.875 78 68.875 78 68.875 78 "
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMask9zp93ku1)"
                                            pathTo="M 68.875 78L 68.875 35.422Q 68.875 32.422 71.875 32.422L 73.125 32.422Q 76.125 32.422 76.125 35.422L 76.125 35.422L 76.125 78L 76.125 78z"
                                            pathFrom="M 68.875 78L 68.875 35.422Q 68.875 32.422 71.875 32.422L 73.125 32.422Q 76.125 32.422 76.125 35.422L 76.125 35.422L 76.125 78L 76.125 78zL 68.875 78L 76.125 78L 76.125 78L 76.125 78L 76.125 78L 76.125 78L 68.875 78"
                                            cy="32.422" cx="97.875" j="2" val="1753" barHeight="45.578"
                                            barWidth="7.25"></path>
                                        <rect id="SvgjsRect2794" width="7.25" height="78" x="97.875" y="0"
                                            rx="3" ry="3" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#E5E7EB"
                                            class="apexcharts-backgroundBar"></rect>
                                        <path id="SvgjsPath2796"
                                            d="M97.875 78L97.875 46.472Q97.875 43.472 100.875 43.472L102.125 43.472Q105.125 43.472 105.125 46.472L105.125 46.472L105.125 78L105.125 78L97.875 78C97.875 78 97.875 78 97.875 78C97.875 78 97.875 78 97.875 78C97.875 78 97.875 78 97.875 78C97.875 78 97.875 78 97.875 78C97.875 78 97.875 78 97.875 78C97.875 78 97.875 78 97.875 78C97.875 78 97.875 78 97.875 78 "
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMask9zp93ku1)"
                                            pathTo="M 97.875 78L 97.875 46.472Q 97.875 43.472 100.875 43.472L 102.125 43.472Q 105.125 43.472 105.125 46.472L 105.125 46.472L 105.125 78L 105.125 78z"
                                            pathFrom="M 97.875 78L 97.875 46.472Q 97.875 43.472 100.875 43.472L 102.125 43.472Q 105.125 43.472 105.125 46.472L 105.125 46.472L 105.125 78L 105.125 78zL 97.875 78L 105.125 78L 105.125 78L 105.125 78L 105.125 78L 105.125 78L 97.875 78"
                                            cy="43.472" cx="126.875" j="3" val="1328" barHeight="34.528"
                                            barWidth="7.25"></path>
                                        <rect id="SvgjsRect2797" width="7.25" height="78" x="126.875" y="0"
                                            rx="3" ry="3" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#E5E7EB"
                                            class="apexcharts-backgroundBar"></rect>
                                        <path id="SvgjsPath2799"
                                            d="M126.875 78L126.875 50.97Q126.875 47.97 129.875 47.97L131.125 47.97Q134.125 47.97 134.125 50.97L134.125 50.97L134.125 78L134.125 78L126.875 78C126.875 78 126.875 78 126.875 78C126.875 78 126.875 78 126.875 78C126.875 78 126.875 78 126.875 78C126.875 78 126.875 78 126.875 78C126.875 78 126.875 78 126.875 78C126.875 78 126.875 78 126.875 78C126.875 78 126.875 78 126.875 78 "
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMask9zp93ku1)"
                                            pathTo="M 126.875 78L 126.875 50.97Q 126.875 47.97 129.875 47.97L 131.125 47.97Q 134.125 47.97 134.125 50.97L 134.125 50.97L 134.125 78L 134.125 78z"
                                            pathFrom="M 126.875 78L 126.875 50.97Q 126.875 47.97 129.875 47.97L 131.125 47.97Q 134.125 47.97 134.125 50.97L 134.125 50.97L 134.125 78L 134.125 78zL 126.875 78L 134.125 78L 134.125 78L 134.125 78L 134.125 78L 134.125 78L 126.875 78"
                                            cy="47.97" cx="155.875" j="4" val="1155" barHeight="30.03"
                                            barWidth="7.25"></path>
                                        <rect id="SvgjsRect2800" width="7.25" height="78" x="155.875" y="0"
                                            rx="3" ry="3" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#E5E7EB"
                                            class="apexcharts-backgroundBar"></rect>
                                        <path id="SvgjsPath2802"
                                            d="M155.875 78L155.875 38.568Q155.875 35.568 158.875 35.568L160.125 35.568Q163.125 35.568 163.125 38.568L163.125 38.568L163.125 78L163.125 78L155.875 78C155.875 78 155.875 78 155.875 78C155.875 78 155.875 78 155.875 78C155.875 78 155.875 78 155.875 78C155.875 78 155.875 78 155.875 78C155.875 78 155.875 78 155.875 78C155.875 78 155.875 78 155.875 78C155.875 78 155.875 78 155.875 78 "
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMask9zp93ku1)"
                                            pathTo="M 155.875 78L 155.875 38.568Q 155.875 35.568 158.875 35.568L 160.125 35.568Q 163.125 35.568 163.125 38.568L 163.125 38.568L 163.125 78L 163.125 78z"
                                            pathFrom="M 155.875 78L 155.875 38.568Q 155.875 35.568 158.875 35.568L 160.125 35.568Q 163.125 35.568 163.125 38.568L 163.125 38.568L 163.125 78L 163.125 78zL 155.875 78L 163.125 78L 163.125 78L 163.125 78L 163.125 78L 163.125 78L 155.875 78"
                                            cy="35.568" cx="184.875" j="5" val="1632" barHeight="42.432"
                                            barWidth="7.25"></path>
                                        <rect id="SvgjsRect2803" width="7.25" height="78" x="184.875" y="0"
                                            rx="3" ry="3" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#E5E7EB"
                                            class="apexcharts-backgroundBar"></rect>
                                        <path id="SvgjsPath2805"
                                            d="M184.875 78L184.875 46.263999999999996Q184.875 43.263999999999996 187.875 43.263999999999996L189.125 43.263999999999996Q192.125 43.263999999999996 192.125 46.263999999999996L192.125 46.263999999999996L192.125 78L192.125 78L184.875 78C184.875 78 184.875 78 184.875 78C184.875 78 184.875 78 184.875 78C184.875 78 184.875 78 184.875 78C184.875 78 184.875 78 184.875 78C184.875 78 184.875 78 184.875 78C184.875 78 184.875 78 184.875 78C184.875 78 184.875 78 184.875 78 "
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMask9zp93ku1)"
                                            pathTo="M 184.875 78L 184.875 46.263999999999996Q 184.875 43.263999999999996 187.875 43.263999999999996L 189.125 43.263999999999996Q 192.125 43.263999999999996 192.125 46.263999999999996L 192.125 46.263999999999996L 192.125 78L 192.125 78z"
                                            pathFrom="M 184.875 78L 184.875 46.263999999999996Q 184.875 43.263999999999996 187.875 43.263999999999996L 189.125 43.263999999999996Q 192.125 43.263999999999996 192.125 46.263999999999996L 192.125 46.263999999999996L 192.125 78L 192.125 78zL 184.875 78L 192.125 78L 192.125 78L 192.125 78L 192.125 78L 192.125 78L 184.875 78"
                                            cy="43.263999999999996" cx="213.875" j="6" val="1336"
                                            barHeight="34.736000000000004" barWidth="7.25"></path>
                                        <g id="SvgjsG2784" class="apexcharts-bar-goals-markers"
                                            style="pointer-events: none">
                                            <g id="SvgjsG2786" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG2789" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG2792" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG2795" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG2798" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG2801" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG2804" className="apexcharts-bar-goals-groups"></g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG2783" class="apexcharts-datalabels" data:realIndex="0"></g>
                                </g>
                                <line id="SvgjsLine2827" x1="0" y1="0" x2="203"
                                    y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                    stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine2828" x1="0" y1="0" x2="203"
                                    y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                    class="apexcharts-ycrosshairs-hidden"></line>
                                <g id="SvgjsG2829" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG2830" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG2831" class="apexcharts-point-annotations"></g>
                            </g>
                            <g id="SvgjsG2815" class="apexcharts-yaxis" rel="0"
                                transform="translate(-18, 0)"></g>
                            <g id="SvgjsG2771" class="apexcharts-annotations"></g>
                        </svg>
                        <div class="apexcharts-legend" style="max-height: 70px;"></div>
                        <div class="apexcharts-tooltip apexcharts-theme-light">
                            <div class="apexcharts-tooltip-title"
                                style="font-family: Inter, sans-serif; font-size: 14px;"></div>
                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                    class="apexcharts-tooltip-marker"
                                    style="background-color: rgb(26, 86, 219);"></span>
                                <div class="apexcharts-tooltip-text"
                                    style="font-family: Inter, sans-serif; font-size: 14px;">
                                    <div class="apexcharts-tooltip-y-group"><span
                                            class="apexcharts-tooltip-text-y-label"></span><span
                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span
                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span
                                            class="apexcharts-tooltip-text-z-label"></span><span
                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                            <div class="apexcharts-yaxistooltip-text"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="w-full">
                    <h3 class="mb-2 text-base font-normal text-gray-500 dark:text-gray-400">Audience by age</h3>
                    <div class="flex items-center mb-2">
                        <div class="w-16 text-sm font-medium dark:text-white">50+</div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                            <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500" style="width: 18%"></div>
                        </div>
                    </div>
                    <div class="flex items-center mb-2">
                        <div class="w-16 text-sm font-medium dark:text-white">40+</div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                            <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500" style="width: 15%"></div>
                        </div>
                    </div>
                    <div class="flex items-center mb-2">
                        <div class="w-16 text-sm font-medium dark:text-white">30+</div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                            <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500" style="width: 60%"></div>
                        </div>
                    </div>
                    <div class="flex items-center mb-2">
                        <div class="w-16 text-sm font-medium dark:text-white">20+</div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                            <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500" style="width: 30%"></div>
                        </div>
                    </div>
                </div>
                <div id="traffic-channels-chart" class="w-full"></div>
            </div>
        </div>
        <div class="grid grid-cols-1 my-4 xl:grid-cols-2 xl:gap-4">
            <div
                class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:p-6 dark:border-gray-700 dark:bg-gray-800 xl:mb-0">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Smart chat</h3>
                    <a href="#"
                        class="inline-flex items-center p-2 text-sm font-medium rounded-lg text-primary-700 hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                        View all
                    </a>
                </div>
                <!-- Chat -->
                <form class="overflow-y-auto lg:max-h-[60rem] 2xl:max-h-fit">
                    <article class="mb-5">
                        <footer class="flex items-center justify-between mb-2">
                            <div class="flex items-center">
                                <p
                                    class="inline-flex items-center mr-3 text-sm font-semibold text-gray-900 dark:text-white">
                                    <img class="w-6 h-6 mr-2 rounded-full"
                                        src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                        alt="Michael Gough">Michael Gough
                                </p>
                                <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate=""
                                        datetime="2022-02-08" title="February 8th, 2022"> 01/03/2023 4:15 PM</time></p>
                            </div>
                            <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:ring-gray-600"
                                type="button">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                    </path>
                                </svg>
                                <span class="sr-only">Comment settings</span>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownComment1"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-36 dark:bg-gray-700 dark:divide-gray-600"
                                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(728px, 992px);"
                                data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownMenuIconHorizontalButton">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                    </li>
                                </ul>
                            </div>
                        </footer>
                        <p class="mb-2 text-gray-900 dark:text-white">
                            Hello <a href="#"
                                class="font-medium hover:underline text-primary-600 dark:text-primary-500">@designteam</a>
                            Let's schedule a kick-off meeting and workshop this week. It would be great to gather everyone
                            involved in the design project. Let me know about your availability in the thread.
                        </p>
                        <p class="mb-3 text-gray-900 dark:text-white">Looking forward to it! Thanks.</p>
                        <a href="#"
                            class="inline-flex items-center text-xs font-medium text-primary-700 sm:text-sm dark:text-primary-500">
                            4 replies
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z">
                                </path>
                            </svg>
                        </a>
                    </article>
                    <article class="mb-5">
                        <footer class="flex items-center justify-between mb-2">
                            <div class="flex items-center">
                                <p
                                    class="inline-flex items-center mr-3 text-sm font-semibold text-gray-900 dark:text-white">
                                    <img class="w-6 h-6 mr-2 rounded-full"
                                        src="https://flowbite.com/docs/images/people/profile-picture-3.jpg"
                                        alt="Bonnie avatar">Bonnie Green
                                </p>
                                <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate=""
                                        datetime="2022-02-08" title="February 8th, 2022"> 01/03/2023 4:15 PM</time></p>
                            </div>
                            <button id="dropdownComment2Button" data-dropdown-toggle="dropdownComment2"
                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:ring-gray-600"
                                type="button">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                    </path>
                                </svg>
                                <span class="sr-only">Comment settings</span>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownComment2"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-36 dark:bg-gray-700 dark:divide-gray-600"
                                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(728px, 1220px);"
                                data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownMenuIconHorizontalButton">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                    </li>
                                </ul>
                            </div>
                        </footer>
                        <p class="mb-3 text-gray-900 dark:text-white">Hello everyone,</p>
                        <p class="mb-2 text-gray-900 dark:text-white">
                            Thank you for the workshop, it was very productive meeting. I can't wait to start working on
                            this new project with you guys. But first things first, I'am waiting for the offer and pitch
                            deck from you. It would be great to get it by the end o the month.
                        </p>
                        <p class="mb-3 text-gray-900 dark:text-white">Cheers!</p>
                        <div class="flex items-center mb-2 space-x-2">
                            <button type="button"
                                class="py-1.5 px-3 inline-flex items-center rounded-lg bg-gray-100 hover:bg-gray-200 dark:hover:bg-gray-600 dark:bg-gray-700">
                                <svg aria-hidden="true" class="h-5 mr-2" viewBox="0 0 24 27" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M24 14.1907C24 12.7352 23.7409 11.3397 23.2659 10.0486C22.9412 13.8526 20.9132 15.8065 18.7941 14.8966C16.8092 14.0439 18.1468 10.7199 18.2456 9.13377C18.4122 6.44506 18.2372 3.36742 13.3532 0.808594C15.3826 4.69095 13.5882 7.10295 11.7064 7.24977C9.61835 7.41283 7.70612 5.45542 8.412 2.27895C6.12635 3.96318 6.06 6.79801 6.76518 8.63189C7.50071 10.5434 6.73553 12.1317 4.94188 12.3081C2.93718 12.5058 1.82329 10.1615 2.85035 6.42601C1.07294 8.51895 0 11.2295 0 14.1907C0 20.8182 5.37247 26.1907 12 26.1907C18.6275 26.1907 24 20.8182 24 14.1907Z"
                                        fill="#F4900C"></path>
                                    <path
                                        d="M19.3349 17.7211C19.4393 19.8981 17.5271 20.7515 16.4979 20.3393C15.0113 19.7442 15.4102 18.7221 15.0276 16.6044C14.645 14.4868 13.1746 13.0164 10.9984 12.3691C12.5866 16.8395 10.1182 18.487 8.82428 18.7814C7.50287 19.0821 6.17511 18.7807 6.02334 15.9529C4.4817 17.4875 3.52734 19.6108 3.52734 21.9571C3.52734 22.2169 3.54358 22.4724 3.56617 22.7266C5.73323 24.8682 8.70993 26.1924 11.9979 26.1924C15.2859 26.1924 18.2626 24.8682 20.4297 22.7266C20.4523 22.4724 20.4685 22.2169 20.4685 21.9571C20.4685 20.4134 20.0563 18.967 19.3349 17.7211Z"
                                        fill="#FFCC4D"></path>
                                </svg>
                                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">14</span>
                            </button>
                            <button type="button"
                                class="py-1.5 px-3 inline-flex items-center rounded-lg bg-gray-100 hover:bg-gray-200 dark:hover:bg-gray-600 dark:bg-gray-700">
                                <svg aria-hidden="true" class="h-5 mr-2" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.24467 6.07733C3.87207 5.63882 4.81784 5.72291 5.38116 6.18812L4.73508 5.24903C4.21514 4.5075 4.40135 3.70523 5.14355 3.18462C5.88575 2.66601 7.98887 4.06031 7.98887 4.06031C7.46426 3.31143 7.56238 2.36233 8.31125 1.83705C9.06012 1.31377 10.0933 1.49465 10.6179 2.24486L17.5727 12.0697L16.6864 20.663L9.28906 17.9652L2.83686 8.3987C2.30758 7.64516 2.49046 6.60594 3.24467 6.07733Z"
                                        fill="#EF9645"></path>
                                    <path
                                        d="M1.79857 11.5433C1.79857 11.5433 1.04302 10.442 2.14497 9.68715C3.24559 8.93226 4.00047 10.0329 4.00047 10.0329L7.50523 15.1442C7.62603 14.9426 7.75819 14.7437 7.90569 14.5475L3.04135 7.45454C3.04135 7.45454 2.28647 6.35392 3.38775 5.59904C4.48837 4.84416 5.24325 5.94478 5.24325 5.94478L9.81859 12.6172C9.98879 12.4784 10.163 12.3389 10.3425 12.2021L5.03835 4.46572C5.03835 4.46572 4.28347 3.3651 5.38475 2.61022C6.48537 1.85534 7.24025 2.95596 7.24025 2.95596L12.5444 10.691C12.7393 10.5715 12.9322 10.4681 13.1258 10.3586L8.168 3.12883C8.168 3.12883 7.41312 2.02821 8.51373 1.27333C9.61435 0.518448 10.3692 1.61907 10.3692 1.61907L15.6113 9.26398L16.4083 10.4267C13.1058 12.692 12.7914 16.9536 14.6783 19.7055C15.0554 20.2561 15.606 19.879 15.606 19.879C13.3414 16.5758 14.0328 12.8642 17.336 10.5995L16.3622 5.72586C16.3622 5.72586 15.9985 4.44169 17.282 4.07727C18.5661 3.71351 18.9306 4.99767 18.9306 4.99767L20.0552 8.33757C20.5011 9.66178 20.9756 10.9813 21.6037 12.2294C23.3771 15.7536 22.3178 20.1333 18.9739 22.4273C15.3263 24.9283 10.3399 23.9985 7.83828 20.3516L1.79857 11.5433Z"
                                        fill="#FFDC5D"></path>
                                    <path
                                        d="M8.00913 21.3583C5.33934 21.3583 2.64153 18.6605 2.64153 15.9907C2.64153 15.6216 2.37122 15.3232 2.00212 15.3232C1.63302 15.3232 1.30664 15.6216 1.30664 15.9907C1.30664 19.9954 4.00445 22.6932 8.00913 22.6932C8.37822 22.6932 8.67657 22.3668 8.67657 21.9977C8.67657 21.6286 8.37822 21.3583 8.00913 21.3583Z"
                                        fill="#5DADEC"></path>
                                    <path
                                        d="M4.67212 22.6649C2.66978 22.6649 1.33489 21.33 1.33489 19.3277C1.33489 18.9586 1.03654 18.6602 0.667445 18.6602C0.298348 18.6602 0 18.9586 0 19.3277C0 21.9974 2.00234 23.9998 4.67212 23.9998C5.04121 23.9998 5.33956 23.7014 5.33956 23.3323C5.33956 22.9632 5.04121 22.6649 4.67212 22.6649ZM16.0187 1.30664C15.6503 1.30664 15.3512 1.60566 15.3512 1.97409C15.3512 2.34252 15.6503 2.64153 16.0187 2.64153C18.6885 2.64153 21.3583 5.03699 21.3583 7.98109C21.3583 8.34952 21.6573 8.64854 22.0257 8.64854C22.3941 8.64854 22.6931 8.34952 22.6931 7.98109C22.6931 4.3008 20.0234 1.30664 16.0187 1.30664Z"
                                        fill="#5DADEC"></path>
                                    <path
                                        d="M19.3559 0C18.9875 0 18.6885 0.270983 18.6885 0.639413C18.6885 1.00784 18.9875 1.33489 19.3559 1.33489C21.3583 1.33489 22.6651 2.81996 22.6651 4.64408C22.6651 5.01251 22.9915 5.31153 23.3606 5.31153C23.7297 5.31153 24 5.01251 24 4.64408C24 2.0831 22.0257 0 19.3559 0Z"
                                        fill="#5DADEC"></path>
                                </svg>
                                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8</span>
                            </button>
                            <button type="button"
                                class="py-1.5 px-3 inline-flex items-center rounded-lg bg-gray-100 hover:bg-gray-200 dark:hover:bg-gray-600 dark:bg-gray-700">
                                <svg aria-hidden="true" class="h-5 mr-2" viewBox="0 0 24 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.75255 5.29787C7.67789 5.37254 7.62122 5.46254 7.57388 5.56121L7.56855 5.55587L0.0910439 22.4003L0.0983774 22.4076C-0.0402924 22.6763 0.191713 23.223 0.667057 23.699C1.1424 24.1743 1.68908 24.4063 1.95775 24.2676L1.96442 24.2743L18.8088 16.7961L18.8035 16.7901C18.9015 16.7435 18.9915 16.6868 19.0668 16.6108C20.1082 15.5694 18.4195 12.1927 15.2961 9.06862C12.1713 5.94455 8.79458 4.25651 7.75255 5.29787Z"
                                        fill="#DD2E44"></path>
                                    <path
                                        d="M8.66858 8.30273L0.279048 21.9737L0.0910439 22.3971L0.0983774 22.4044C-0.0402924 22.6731 0.191713 23.2197 0.667057 23.6958C0.821728 23.8504 0.982398 23.9678 1.13973 24.0671L11.3353 11.6361L8.66858 8.30273Z"
                                        fill="#EA596E"></path>
                                    <path
                                        d="M15.3439 9.01304C18.4573 12.1278 20.186 15.4479 19.2033 16.4292C18.2213 17.4119 14.9012 15.6839 11.7858 12.5705C8.67174 9.45572 6.9437 6.13431 7.92573 5.15228C8.90841 4.17026 12.2285 5.8983 15.3439 9.01304Z"
                                        fill="#A0041E"></path>
                                    <path
                                        d="M12.3913 9.37694C12.2587 9.48427 12.0853 9.54028 11.902 9.52028C11.3233 9.45761 10.8366 9.25627 10.496 8.93826C10.1353 8.60159 9.95727 8.14958 10.0059 7.6969C10.0913 6.90221 10.8886 6.17286 12.248 6.31953C12.7767 6.3762 13.0127 6.2062 13.0207 6.12486C13.03 6.04419 12.836 5.82752 12.3073 5.77019C11.7286 5.70752 11.242 5.50618 10.9006 5.18817C10.54 4.8515 10.3613 4.39949 10.4106 3.94681C10.4973 3.15213 11.294 2.42278 12.652 2.57011C13.0373 2.61145 13.2407 2.53211 13.3267 2.48078C13.3954 2.43878 13.4227 2.39878 13.4254 2.37544C13.4334 2.29477 13.242 2.0781 12.712 2.02077C12.346 1.98077 12.0807 1.65276 12.1213 1.28608C12.1607 0.920076 12.488 0.655404 12.8553 0.695405C14.2134 0.841408 14.8374 1.72343 14.7514 2.51878C14.6647 3.3148 13.868 4.04281 12.5087 3.89681C12.1233 3.85481 11.922 3.93481 11.8353 3.98615C11.7666 4.02748 11.7386 4.06815 11.736 4.09082C11.7273 4.17215 11.92 4.38816 12.45 4.44549C13.808 4.59216 14.432 5.47351 14.346 6.26887C14.26 7.06355 13.4634 7.7929 12.1047 7.64557C11.7193 7.60423 11.5166 7.68423 11.43 7.7349C11.3606 7.77757 11.334 7.81757 11.3313 7.84024C11.3226 7.9209 11.5153 8.13758 12.0447 8.19491C12.41 8.23491 12.676 8.56359 12.6353 8.92959C12.6167 9.11226 12.524 9.27027 12.3913 9.37694Z"
                                        fill="#AA8DD8"></path>
                                    <path
                                        d="M20.4411 15.5411C21.7565 15.1698 22.6638 15.7565 22.8798 16.5265C23.0958 17.2958 22.6278 18.2699 21.3131 18.6399C20.7998 18.7839 20.6458 19.0292 20.6665 19.1072C20.6891 19.1859 20.9498 19.3152 21.4618 19.1706C22.7765 18.8005 23.6839 19.3872 23.8999 20.1566C24.1172 20.9266 23.6479 21.8993 22.3325 22.27C21.8198 22.414 21.6651 22.66 21.6878 22.738C21.7098 22.816 21.9698 22.9453 22.4825 22.8013C22.8358 22.702 23.2052 22.908 23.3045 23.262C23.4032 23.6167 23.1972 23.9847 22.8425 24.0847C21.5285 24.4547 20.6205 23.8693 20.4031 23.0986C20.1871 22.3293 20.6558 21.3566 21.9718 20.9859C22.4852 20.8413 22.6392 20.5966 22.6165 20.5179C22.5952 20.4399 22.3352 20.3099 21.8232 20.4539C20.5071 20.8246 19.6004 20.2392 19.3838 19.4679C19.1671 18.6985 19.6358 17.7259 20.9511 17.3545C21.4631 17.2112 21.6171 16.9645 21.5958 16.8872C21.5731 16.8085 21.3138 16.6792 20.8011 16.8232C20.4465 16.9232 20.0791 16.7165 19.9791 16.3625C19.8798 16.0092 20.0864 15.6411 20.4411 15.5411Z"
                                        fill="#77B255"></path>
                                    <path
                                        d="M15.3333 13.7449C15.1373 13.7449 14.9439 13.6589 14.8119 13.4949C14.5819 13.2069 14.6292 12.7875 14.9159 12.5575C15.0612 12.4409 18.528 9.71812 23.4274 10.4188C23.7921 10.4708 24.0455 10.8081 23.9935 11.1728C23.9415 11.5368 23.6068 11.7928 23.2388 11.7382C18.91 11.1235 15.7806 13.5742 15.7499 13.5989C15.6259 13.6975 15.4793 13.7449 15.3333 13.7449Z"
                                        fill="#AA8DD8"></path>
                                    <path
                                        d="M3.83539 10.9697C3.77205 10.9697 3.70739 10.9604 3.64338 10.9417C3.29071 10.8357 3.0907 10.4643 3.19671 10.1117C3.95206 7.59628 4.63674 3.58219 3.79539 2.5355C3.70138 2.41683 3.55938 2.30016 3.23404 2.32483C2.60869 2.37283 2.66803 3.69219 2.66869 3.70552C2.69669 4.07287 2.42069 4.39287 2.05401 4.42021C1.68134 4.44287 1.36666 4.1722 1.33933 3.80486C1.27066 2.8855 1.55667 1.1148 3.13404 0.995461C3.83805 0.942127 4.42273 1.1868 4.83541 1.70014C6.41611 3.66752 4.81141 9.37099 4.47407 10.495C4.3874 10.7837 4.12206 10.9697 3.83539 10.9697Z"
                                        fill="#77B255"></path>
                                    <path
                                        d="M16.999 7.63774C17.5513 7.63774 17.9991 7.19002 17.9991 6.63772C17.9991 6.08542 17.5513 5.6377 16.999 5.6377C16.4467 5.6377 15.999 6.08542 15.999 6.63772C15.999 7.19002 16.4467 7.63774 16.999 7.63774Z"
                                        fill="#5C913B"></path>
                                    <path
                                        d="M1.33336 13.6355C2.06976 13.6355 2.66673 13.0385 2.66673 12.3021C2.66673 11.5657 2.06976 10.9688 1.33336 10.9688C0.596967 10.9688 0 11.5657 0 12.3021C0 13.0385 0.596967 13.6355 1.33336 13.6355Z"
                                        fill="#9266CC"></path>
                                    <path
                                        d="M21.666 14.3047C22.2183 14.3047 22.6661 13.857 22.6661 13.3047C22.6661 12.7524 22.2183 12.3047 21.666 12.3047C21.1137 12.3047 20.666 12.7524 20.666 13.3047C20.666 13.857 21.1137 14.3047 21.666 14.3047Z"
                                        fill="#5C913B"></path>
                                    <path
                                        d="M15.666 22.3038C16.2183 22.3038 16.6661 21.856 16.6661 21.3037C16.6661 20.7514 16.2183 20.3037 15.666 20.3037C15.1137 20.3037 14.666 20.7514 14.666 21.3037C14.666 21.856 15.1137 22.3038 15.666 22.3038Z"
                                        fill="#5C913B"></path>
                                    <path
                                        d="M18.6683 4.30052C19.4047 4.30052 20.0017 3.70355 20.0017 2.96715C20.0017 2.23076 19.4047 1.63379 18.6683 1.63379C17.9319 1.63379 17.335 2.23076 17.335 2.96715C17.335 3.70355 17.9319 4.30052 18.6683 4.30052Z"
                                        fill="#FFCC4D"></path>
                                    <path
                                        d="M21.6699 6.9688C22.2222 6.9688 22.67 6.52107 22.67 5.96877C22.67 5.41648 22.2222 4.96875 21.6699 4.96875C21.1176 4.96875 20.6699 5.41648 20.6699 5.96877C20.6699 6.52107 21.1176 6.9688 21.6699 6.9688Z"
                                        fill="#FFCC4D"></path>
                                    <path
                                        d="M19.668 9.63384C20.2203 9.63384 20.668 9.18611 20.668 8.63381C20.668 8.08151 20.2203 7.63379 19.668 7.63379C19.1157 7.63379 18.668 8.08151 18.668 8.63381C18.668 9.18611 19.1157 9.63384 19.668 9.63384Z"
                                        fill="#FFCC4D"></path>
                                    <path
                                        d="M5.00198 16.9668C5.55427 16.9668 6.002 16.5191 6.002 15.9668C6.002 15.4145 5.55427 14.9668 5.00198 14.9668C4.44968 14.9668 4.00195 15.4145 4.00195 15.9668C4.00195 16.5191 4.44968 16.9668 5.00198 16.9668Z"
                                        fill="#FFCC4D"></path>
                                </svg>
                                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">3</span>
                            </button>
                        </div>
                    </article>
                    <article class="mb-5">
                        <footer class="flex items-center justify-between mb-2">
                            <div class="flex items-center">
                                <p
                                    class="inline-flex items-center mr-3 text-sm font-semibold text-gray-900 dark:text-white">
                                    <img class="w-6 h-6 mr-2 rounded-full"
                                        src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                        alt="Jese avatar">Jese Leos
                                </p>
                                <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate=""
                                        datetime="2022-02-08" title="February 8th, 2022"> 01/03/2023 4:15 PM</time></p>
                            </div>
                            <button id="dropdownComment3Button" data-dropdown-toggle="dropdownComment3"
                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:ring-gray-600"
                                type="button">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                    </path>
                                </svg>
                                <span class="sr-only">Comment settings</span>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownComment3"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-36 dark:bg-gray-700 dark:divide-gray-600"
                                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(728px, 1516px);"
                                data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownMenuIconHorizontalButton">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                    </li>
                                </ul>
                            </div>
                        </footer>
                        <p class="mb-2 text-gray-900 dark:text-white">
                            Ok <a href="#"
                                class="font-medium hover:underline text-primary-600 dark:text-primary-500">@team</a> I'am
                            attaching our offer and pitch deck. Take your time to review everything. I'am looking forward to
                            the next steps! Thank you.
                        </p>
                        <p class="mb-3 text-gray-900 dark:text-white">Looking forward to it! Thanks.</p>
                        <div class="items-center 2xl:space-x-4 2xl:flex">
                            <!-- Item -->
                            <div
                                class="flex items-center p-3 mb-3.5 border border-gray-200 dark:border-gray-700 rounded-lg">
                                <div
                                    class="flex items-center justify-center w-10 h-10 mr-3 rounded-lg bg-primary-100 dark:bg-primary-900">
                                    <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300"
                                        fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5H5.625zM7.5 15a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 017.5 15zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H8.25z">
                                        </path>
                                        <path
                                            d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="mr-4">
                                    <p class="text-sm font-semibold text-gray-900 dark:text-white">flowbite_offer_345"</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">PDF, 2.3 MB</p>
                                </div>
                                <div class="flex items-center ml-auto">
                                    <button type="button" class="p-2 rounded hover:bg-gray-100">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd"
                                                d="M12 2.25a.75.75 0 01.75.75v11.69l3.22-3.22a.75.75 0 111.06 1.06l-4.5 4.5a.75.75 0 01-1.06 0l-4.5-4.5a.75.75 0 111.06-1.06l3.22 3.22V3a.75.75 0 01.75-.75zm-9 13.5a.75.75 0 01.75.75v2.25a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5V16.5a.75.75 0 011.5 0v2.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V16.5a.75.75 0 01.75-.75z">
                                            </path>
                                        </svg>
                                        <span class="sr-only">Download</span>
                                    </button>
                                    <button type="button" class="p-2 rounded hover:bg-gray-100">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path
                                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                                            </path>
                                        </svg>
                                        <span class="sr-only">Actions</span>
                                    </button>
                                </div>
                            </div>
                            <!-- Item -->
                            <div
                                class="flex items-center p-3 mb-3.5 border border-gray-200 dark:border-gray-700 rounded-lg">
                                <div
                                    class="flex items-center justify-center w-10 h-10 mr-3 bg-teal-100 rounded-lg dark:bg-teal-900">
                                    <svg class="w-5 h-5 text-teal-600 lg:w-6 lg:h-6 dark:text-teal-300"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">
                                        <path
                                            d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="mr-4">
                                    <p class="text-sm font-semibold text-gray-900 dark:text-white">bergside_pitch"</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">PPTX, 10.1 MB</p>
                                </div>
                                <div class="flex items-center ml-auto">
                                    <button type="button" class="p-2 rounded hover:bg-gray-100">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd"
                                                d="M12 2.25a.75.75 0 01.75.75v11.69l3.22-3.22a.75.75 0 111.06 1.06l-4.5 4.5a.75.75 0 01-1.06 0l-4.5-4.5a.75.75 0 111.06-1.06l3.22 3.22V3a.75.75 0 01.75-.75zm-9 13.5a.75.75 0 01.75.75v2.25a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5V16.5a.75.75 0 011.5 0v2.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V16.5a.75.75 0 01.75-.75z">
                                            </path>
                                        </svg>
                                        <span class="sr-only">Download</span>
                                    </button>
                                    <button type="button" class="p-2 rounded hover:bg-gray-100">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path
                                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                                            </path>
                                        </svg>
                                        <span class="sr-only">Actions</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="pl-12 mb-5">
                        <footer class="flex items-center justify-between mb-2">
                            <div class="flex items-center">
                                <p
                                    class="inline-flex items-center mr-3 text-sm font-semibold text-gray-900 dark:text-white">
                                    <img class="w-6 h-6 mr-2 rounded-full"
                                        src="https://flowbite.com/docs/images/people/profile-picture-1.jpg"
                                        alt="Joseph avatar">Joseph McFallen
                                </p>
                                <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate=""
                                        datetime="2022-02-08" title="February 8th, 2022"> 01/03/2023 4:15 PM</time></p>
                            </div>
                            <button id="dropdownComment4Button" data-dropdown-toggle="dropdownComment4"
                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:ring-gray-600"
                                type="button">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                    </path>
                                </svg>
                                <span class="sr-only">Comment settings</span>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownComment4"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-36 dark:bg-gray-700 dark:divide-gray-600"
                                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(728px, 1842px);"
                                data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownMenuIconHorizontalButton">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                    </li>
                                </ul>
                            </div>
                        </footer>
                        <p class="mb-2 text-gray-900 dark:text-white">
                            Hello <a href="#"
                                class="font-medium hover:underline text-primary-600 dark:text-primary-500">@jeseleos</a> I
                            need some informations about flowbite react version.
                        </p>
                    </article>
                    <article class="pl-12 mb-5">
                        <footer class="flex items-center justify-between mb-2">
                            <div class="flex items-center">
                                <p
                                    class="inline-flex items-center mr-3 text-sm font-semibold text-gray-900 dark:text-white">
                                    <img class="w-6 h-6 mr-2 rounded-full"
                                        src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                        alt="Jese avatar">Jese Leos
                                </p>
                                <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate=""
                                        datetime="2022-02-08" title="February 8th, 2022"> 01/03/2023 4:15 PM</time></p>
                            </div>
                            <button id="dropdownComment5Button" data-dropdown-toggle="dropdownComment5"
                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:ring-gray-600"
                                type="button">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                    </path>
                                </svg>
                                <span class="sr-only">Comment settings</span>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownComment5"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-36 dark:bg-gray-700 dark:divide-gray-600"
                                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(728px, 1954px);"
                                data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownMenuIconHorizontalButton">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                    </li>
                                </ul>
                            </div>
                        </footer>
                        <p class="mb-4 text-gray-900 dark:text-white">
                            Hi <a href="#"
                                class="font-medium hover:underline text-primary-600 dark:text-primary-500">@josephh</a>
                            Sure, just let me know whean you are available and we can speak.
                        </p>

                        <label for="chat" class="sr-only">Your message</label>
                        <div class="flex items-center mb-5">
                            <textarea id="chat" rows="1"
                                class="block mr-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Reply in thread..."></textarea>
                            <button type="submit"
                                class="inline-flex justify-center p-2 rounded-lg cursor-pointer text-primary-600 hover:bg-primary-100 dark:text-primary-500 dark:hover:bg-gray-600">
                                <svg aria-hidden="true" class="w-6 h-6 rotate-90" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z">
                                    </path>
                                </svg>
                                <span class="sr-only">Send message</span>
                            </button>
                        </div>

                        <span
                            class="inline-flex items-center text-xs font-medium cursor-pointer hover:underline text-primary-700 sm:text-sm dark:text-primary-500">
                            Hide thread
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z">
                                </path>
                            </svg>
                        </span>
                    </article>
                </form>
                <div class="w-full border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                    <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                        <label for="comment" class="sr-only">Write your message</label>
                        <textarea id="comment" rows="8"
                            class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                            placeholder="Write your message" required=""></textarea>
                    </div>
                    <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                        <button type="submit"
                            class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                            Send message
                        </button>
                        <div class="flex pl-0 space-x-1 sm:pl-2">
                            <button type="button"
                                class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Attach file</span>
                            </button>
                            <button type="button"
                                class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Set location</span>
                            </button>
                            <button type="button"
                                class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Upload image</span>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Right Content -->
            <div class="grid gap-4">
                <div
                    class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div class="items-center justify-between pb-4 border-b border-gray-200 sm:flex dark:border-gray-700">
                        <div class="w-full mb-4 sm:mb-0">
                            <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Sales by category</h3>
                            <span
                                class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">Desktop
                                PC</span>
                            <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
                                <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                        </path>
                                    </svg>
                                    2.5%
                                </span>
                                Since last month
                            </p>
                        </div>
                        <div class="w-full max-w-lg">
                            <div date-rangepicker="" class="grid items-center grid-cols-2 gap-4">
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path
                                                d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z">
                                            </path>
                                            <path clip-rule="evenodd" fill-rule="evenodd"
                                                d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z">
                                            </path>
                                        </svg>
                                    </div>
                                    <input name="start" type="text"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 datepicker-input"
                                        placeholder="From">
                                </div>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path
                                                d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z">
                                            </path>
                                            <path clip-rule="evenodd" fill-rule="evenodd"
                                                d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z">
                                            </path>
                                        </svg>
                                    </div>
                                    <input name="end" type="text"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 datepicker-input"
                                        placeholder="To">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full" id="sales-by-category" style="min-height: 435px;">
                        <div id="apexchartswlpxxil1" class="apexcharts-canvas apexchartswlpxxil1 apexcharts-theme-light"
                            style="width: 449px; height: 420px;"><svg id="SvgjsSvg2214" width="449"
                                height="420" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                style="background: transparent;">
                                <g id="SvgjsG2216" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(12, 30)">
                                    <defs id="SvgjsDefs2215">
                                        <linearGradient id="SvgjsLinearGradient2219" x1="0" y1="0"
                                            x2="0" y2="1">
                                            <stop id="SvgjsStop2220" stop-opacity="0.4"
                                                stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                            <stop id="SvgjsStop2221" stop-opacity="0.5"
                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            <stop id="SvgjsStop2222" stop-opacity="0.5"
                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                        </linearGradient>
                                        <clipPath id="gridRectMaskwlpxxil1">
                                            <rect id="SvgjsRect2224" width="436" height="380" x="-4.5" y="-2.5"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMaskwlpxxil1"></clipPath>
                                        <clipPath id="nonForecastMaskwlpxxil1"></clipPath>
                                        <clipPath id="gridRectMarkerMaskwlpxxil1">
                                            <rect id="SvgjsRect2225" width="431" height="379" x="-2" y="-2"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <rect id="SvgjsRect2223" width="61" height="375" x="0" y="0"
                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                        stroke-dasharray="3" fill="url(#SvgjsLinearGradient2219)"
                                        class="apexcharts-xcrosshairs" y2="375" filter="none"
                                        fill-opacity="0.9"></rect>
                                    <g id="SvgjsG2278" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG2279" class="apexcharts-xaxis-texts-g"
                                            transform="translate(0, -4)"></g>
                                    </g>
                                    <g id="SvgjsG2288" class="apexcharts-grid">
                                        <g id="SvgjsG2289" class="apexcharts-gridlines-horizontal"
                                            style="display: none;">
                                            <line id="SvgjsLine2291" x1="0" y1="0" x2="427"
                                                y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2292" x1="0" y1="75" x2="427"
                                                y2="75" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2293" x1="0" y1="150" x2="427"
                                                y2="150" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2294" x1="0" y1="225" x2="427"
                                                y2="225" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2295" x1="0" y1="300" x2="427"
                                                y2="300" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2296" x1="0" y1="375" x2="427"
                                                y2="375" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG2290" class="apexcharts-gridlines-vertical"
                                            style="display: none;"></g>
                                        <line id="SvgjsLine2298" x1="0" y1="375" x2="427"
                                            y2="375" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                        <line id="SvgjsLine2297" x1="0" y1="1" x2="0"
                                            y2="375" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG2226" class="apexcharts-bar-series apexcharts-plot-series">
                                        <g id="SvgjsG2227" class="apexcharts-series" rel="1"
                                            seriesName="DesktopxPC" data:realIndex="0">
                                            <path id="SvgjsPath2231"
                                                d="M 3.049999999999997 375L 3.049999999999997 195.85714285714286Q 3.049999999999997 192.85714285714286 6.049999999999997 192.85714285714286L 13.349999999999998 192.85714285714286Q 16.349999999999998 192.85714285714286 16.349999999999998 195.85714285714286L 16.349999999999998 195.85714285714286L 16.349999999999998 375L 16.349999999999998 375z"
                                                fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwlpxxil1)"
                                                pathTo="M 3.049999999999997 375L 3.049999999999997 195.85714285714286Q 3.049999999999997 192.85714285714286 6.049999999999997 192.85714285714286L 13.349999999999998 192.85714285714286Q 16.349999999999998 192.85714285714286 16.349999999999998 195.85714285714286L 16.349999999999998 195.85714285714286L 16.349999999999998 375L 16.349999999999998 375z"
                                                pathFrom="M 3.049999999999997 375L 3.049999999999997 375L 16.349999999999998 375L 16.349999999999998 375L 16.349999999999998 375L 16.349999999999998 375L 16.349999999999998 375L 3.049999999999997 375"
                                                cy="192.85714285714286" cx="61.55" j="0" val="170"
                                                barHeight="182.14285714285714" barWidth="18.3"></path>
                                            <path id="SvgjsPath2233"
                                                d="M 64.05 375L 64.05 185.14285714285714Q 64.05 182.14285714285714 67.05 182.14285714285714L 74.35 182.14285714285714Q 77.35 182.14285714285714 77.35 185.14285714285714L 77.35 185.14285714285714L 77.35 375L 77.35 375z"
                                                fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwlpxxil1)"
                                                pathTo="M 64.05 375L 64.05 185.14285714285714Q 64.05 182.14285714285714 67.05 182.14285714285714L 74.35 182.14285714285714Q 77.35 182.14285714285714 77.35 185.14285714285714L 77.35 185.14285714285714L 77.35 375L 77.35 375z"
                                                pathFrom="M 64.05 375L 64.05 375L 77.35 375L 77.35 375L 77.35 375L 77.35 375L 77.35 375L 64.05 375"
                                                cy="182.14285714285714" cx="122.55" j="1" val="180"
                                                barHeight="192.85714285714286" barWidth="18.3"></path>
                                            <path id="SvgjsPath2235"
                                                d="M 125.05 375L 125.05 202.28571428571428Q 125.05 199.28571428571428 128.05 199.28571428571428L 135.35 199.28571428571428Q 138.35 199.28571428571428 138.35 202.28571428571428L 138.35 202.28571428571428L 138.35 375L 138.35 375z"
                                                fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwlpxxil1)"
                                                pathTo="M 125.05 375L 125.05 202.28571428571428Q 125.05 199.28571428571428 128.05 199.28571428571428L 135.35 199.28571428571428Q 138.35 199.28571428571428 138.35 202.28571428571428L 138.35 202.28571428571428L 138.35 375L 138.35 375z"
                                                pathFrom="M 125.05 375L 125.05 375L 138.35 375L 138.35 375L 138.35 375L 138.35 375L 138.35 375L 125.05 375"
                                                cy="199.28571428571428" cx="183.55" j="2" val="164"
                                                barHeight="175.71428571428572" barWidth="18.3"></path>
                                            <path id="SvgjsPath2237"
                                                d="M 186.05 375L 186.05 222.64285714285714Q 186.05 219.64285714285714 189.05 219.64285714285714L 196.35000000000002 219.64285714285714Q 199.35000000000002 219.64285714285714 199.35000000000002 222.64285714285714L 199.35000000000002 222.64285714285714L 199.35000000000002 375L 199.35000000000002 375z"
                                                fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwlpxxil1)"
                                                pathTo="M 186.05 375L 186.05 222.64285714285714Q 186.05 219.64285714285714 189.05 219.64285714285714L 196.35000000000002 219.64285714285714Q 199.35000000000002 219.64285714285714 199.35000000000002 222.64285714285714L 199.35000000000002 222.64285714285714L 199.35000000000002 375L 199.35000000000002 375z"
                                                pathFrom="M 186.05 375L 186.05 375L 199.35000000000002 375L 199.35000000000002 375L 199.35000000000002 375L 199.35000000000002 375L 199.35000000000002 375L 186.05 375"
                                                cy="219.64285714285714" cx="244.55" j="3" val="145"
                                                barHeight="155.35714285714286" barWidth="18.3"></path>
                                            <path id="SvgjsPath2239"
                                                d="M 247.05 375L 247.05 170.14285714285714Q 247.05 167.14285714285714 250.05 167.14285714285714L 257.35 167.14285714285714Q 260.35 167.14285714285714 260.35 170.14285714285714L 260.35 170.14285714285714L 260.35 375L 260.35 375z"
                                                fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwlpxxil1)"
                                                pathTo="M 247.05 375L 247.05 170.14285714285714Q 247.05 167.14285714285714 250.05 167.14285714285714L 257.35 167.14285714285714Q 260.35 167.14285714285714 260.35 170.14285714285714L 260.35 170.14285714285714L 260.35 375L 260.35 375z"
                                                pathFrom="M 247.05 375L 247.05 375L 260.35 375L 260.35 375L 260.35 375L 260.35 375L 260.35 375L 247.05 375"
                                                cy="167.14285714285714" cx="305.55" j="4" val="194"
                                                barHeight="207.85714285714286" barWidth="18.3"></path>
                                            <path id="SvgjsPath2241"
                                                d="M 308.05 375L 308.05 195.85714285714286Q 308.05 192.85714285714286 311.05 192.85714285714286L 318.35 192.85714285714286Q 321.35 192.85714285714286 321.35 195.85714285714286L 321.35 195.85714285714286L 321.35 375L 321.35 375z"
                                                fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwlpxxil1)"
                                                pathTo="M 308.05 375L 308.05 195.85714285714286Q 308.05 192.85714285714286 311.05 192.85714285714286L 318.35 192.85714285714286Q 321.35 192.85714285714286 321.35 195.85714285714286L 321.35 195.85714285714286L 321.35 375L 321.35 375z"
                                                pathFrom="M 308.05 375L 308.05 375L 321.35 375L 321.35 375L 321.35 375L 321.35 375L 321.35 375L 308.05 375"
                                                cy="192.85714285714286" cx="366.55" j="5" val="170"
                                                barHeight="182.14285714285714" barWidth="18.3"></path>
                                            <path id="SvgjsPath2243"
                                                d="M 369.05 375L 369.05 211.92857142857144Q 369.05 208.92857142857144 372.05 208.92857142857144L 379.35 208.92857142857144Q 382.35 208.92857142857144 382.35 211.92857142857144L 382.35 211.92857142857144L 382.35 375L 382.35 375z"
                                                fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwlpxxil1)"
                                                pathTo="M 369.05 375L 369.05 211.92857142857144Q 369.05 208.92857142857144 372.05 208.92857142857144L 379.35 208.92857142857144Q 382.35 208.92857142857144 382.35 211.92857142857144L 382.35 211.92857142857144L 382.35 375L 382.35 375z"
                                                pathFrom="M 369.05 375L 369.05 375L 382.35 375L 382.35 375L 382.35 375L 382.35 375L 382.35 375L 369.05 375"
                                                cy="208.92857142857144" cx="427.55" j="6" val="155"
                                                barHeight="166.07142857142856" barWidth="18.3"></path>
                                            <g id="SvgjsG2229" class="apexcharts-bar-goals-markers"
                                                style="pointer-events: none">
                                                <g id="SvgjsG2230" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG2232" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG2234" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG2236" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG2238" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG2240" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG2242" className="apexcharts-bar-goals-groups"></g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG2244" class="apexcharts-series" rel="2"
                                            seriesName="Phones" data:realIndex="1">
                                            <path id="SvgjsPath2248"
                                                d="M 21.349999999999998 375L 21.349999999999998 249.42857142857144Q 21.349999999999998 246.42857142857144 24.349999999999998 246.42857142857144L 31.65 246.42857142857144Q 34.65 246.42857142857144 34.65 249.42857142857144L 34.65 249.42857142857144L 34.65 375L 34.65 375z"
                                                fill="rgba(253,186,140,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskwlpxxil1)"
                                                pathTo="M 21.349999999999998 375L 21.349999999999998 249.42857142857144Q 21.349999999999998 246.42857142857144 24.349999999999998 246.42857142857144L 31.65 246.42857142857144Q 34.65 246.42857142857144 34.65 249.42857142857144L 34.65 249.42857142857144L 34.65 375L 34.65 375z"
                                                pathFrom="M 21.349999999999998 375L 21.349999999999998 375L 34.65 375L 34.65 375L 34.65 375L 34.65 375L 34.65 375L 21.349999999999998 375"
                                                cy="246.42857142857144" cx="79.85" j="0" val="120"
                                                barHeight="128.57142857142856" barWidth="18.3"></path>
                                            <path id="SvgjsPath2250"
                                                d="M 82.35 375L 82.35 63Q 82.35 60 85.35 60L 92.64999999999999 60Q 95.64999999999999 60 95.64999999999999 63L 95.64999999999999 63L 95.64999999999999 375L 95.64999999999999 375z"
                                                fill="rgba(253,186,140,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskwlpxxil1)"
                                                pathTo="M 82.35 375L 82.35 63Q 82.35 60 85.35 60L 92.64999999999999 60Q 95.64999999999999 60 95.64999999999999 63L 95.64999999999999 63L 95.64999999999999 375L 95.64999999999999 375z"
                                                pathFrom="M 82.35 375L 82.35 375L 95.64999999999999 375L 95.64999999999999 375L 95.64999999999999 375L 95.64999999999999 375L 95.64999999999999 375L 82.35 375"
                                                cy="60" cx="140.85" j="1" val="294" barHeight="315"
                                                barWidth="18.3"></path>
                                            <path id="SvgjsPath2252"
                                                d="M 143.35 375L 143.35 199.07142857142858Q 143.35 196.07142857142858 146.35 196.07142857142858L 153.65 196.07142857142858Q 156.65 196.07142857142858 156.65 199.07142857142858L 156.65 199.07142857142858L 156.65 375L 156.65 375z"
                                                fill="rgba(253,186,140,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskwlpxxil1)"
                                                pathTo="M 143.35 375L 143.35 199.07142857142858Q 143.35 196.07142857142858 146.35 196.07142857142858L 153.65 196.07142857142858Q 156.65 196.07142857142858 156.65 199.07142857142858L 156.65 199.07142857142858L 156.65 375L 156.65 375z"
                                                pathFrom="M 143.35 375L 143.35 375L 156.65 375L 156.65 375L 156.65 375L 156.65 375L 156.65 375L 143.35 375"
                                                cy="196.07142857142858" cx="201.85000000000002" j="2" val="167"
                                                barHeight="178.92857142857142" barWidth="18.3"></path>
                                            <path id="SvgjsPath2254"
                                                d="M 204.35000000000002 375L 204.35000000000002 186.21428571428572Q 204.35000000000002 183.21428571428572 207.35000000000002 183.21428571428572L 214.65000000000003 183.21428571428572Q 217.65000000000003 183.21428571428572 217.65000000000003 186.21428571428572L 217.65000000000003 186.21428571428572L 217.65000000000003 375L 217.65000000000003 375z"
                                                fill="rgba(253,186,140,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskwlpxxil1)"
                                                pathTo="M 204.35000000000002 375L 204.35000000000002 186.21428571428572Q 204.35000000000002 183.21428571428572 207.35000000000002 183.21428571428572L 214.65000000000003 183.21428571428572Q 217.65000000000003 183.21428571428572 217.65000000000003 186.21428571428572L 217.65000000000003 186.21428571428572L 217.65000000000003 375L 217.65000000000003 375z"
                                                pathFrom="M 204.35000000000002 375L 204.35000000000002 375L 217.65000000000003 375L 217.65000000000003 375L 217.65000000000003 375L 217.65000000000003 375L 217.65000000000003 375L 204.35000000000002 375"
                                                cy="183.21428571428572" cx="262.85" j="3" val="179"
                                                barHeight="191.78571428571428" barWidth="18.3"></path>
                                            <path id="SvgjsPath2256"
                                                d="M 265.35 375L 265.35 115.5Q 265.35 112.5 268.35 112.5L 275.65000000000003 112.5Q 278.65000000000003 112.5 278.65000000000003 115.5L 278.65000000000003 115.5L 278.65000000000003 375L 278.65000000000003 375z"
                                                fill="rgba(253,186,140,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskwlpxxil1)"
                                                pathTo="M 265.35 375L 265.35 115.5Q 265.35 112.5 268.35 112.5L 275.65000000000003 112.5Q 278.65000000000003 112.5 278.65000000000003 115.5L 278.65000000000003 115.5L 278.65000000000003 375L 278.65000000000003 375z"
                                                pathFrom="M 265.35 375L 265.35 375L 278.65000000000003 375L 278.65000000000003 375L 278.65000000000003 375L 278.65000000000003 375L 278.65000000000003 375L 265.35 375"
                                                cy="112.5" cx="323.85" j="4" val="245" barHeight="262.5"
                                                barWidth="18.3"></path>
                                            <path id="SvgjsPath2258"
                                                d="M 326.35 375L 326.35 183Q 326.35 180 329.35 180L 336.65000000000003 180Q 339.65000000000003 180 339.65000000000003 183L 339.65000000000003 183L 339.65000000000003 375L 339.65000000000003 375z"
                                                fill="rgba(253,186,140,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskwlpxxil1)"
                                                pathTo="M 326.35 375L 326.35 183Q 326.35 180 329.35 180L 336.65000000000003 180Q 339.65000000000003 180 339.65000000000003 183L 339.65000000000003 183L 339.65000000000003 375L 339.65000000000003 375z"
                                                pathFrom="M 326.35 375L 326.35 375L 339.65000000000003 375L 339.65000000000003 375L 339.65000000000003 375L 339.65000000000003 375L 339.65000000000003 375L 326.35 375"
                                                cy="180" cx="384.85" j="5" val="182" barHeight="195"
                                                barWidth="18.3"></path>
                                            <path id="SvgjsPath2260"
                                                d="M 387.35 375L 387.35 224.78571428571428Q 387.35 221.78571428571428 390.35 221.78571428571428L 397.65000000000003 221.78571428571428Q 400.65000000000003 221.78571428571428 400.65000000000003 224.78571428571428L 400.65000000000003 224.78571428571428L 400.65000000000003 375L 400.65000000000003 375z"
                                                fill="rgba(253,186,140,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskwlpxxil1)"
                                                pathTo="M 387.35 375L 387.35 224.78571428571428Q 387.35 221.78571428571428 390.35 221.78571428571428L 397.65000000000003 221.78571428571428Q 400.65000000000003 221.78571428571428 400.65000000000003 224.78571428571428L 400.65000000000003 224.78571428571428L 400.65000000000003 375L 400.65000000000003 375z"
                                                pathFrom="M 387.35 375L 387.35 375L 400.65000000000003 375L 400.65000000000003 375L 400.65000000000003 375L 400.65000000000003 375L 400.65000000000003 375L 387.35 375"
                                                cy="221.78571428571428" cx="445.85" j="6" val="143"
                                                barHeight="153.21428571428572" barWidth="18.3"></path>
                                            <g id="SvgjsG2246" class="apexcharts-bar-goals-markers"
                                                style="pointer-events: none">
                                                <g id="SvgjsG2247" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG2249" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG2251" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG2253" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG2255" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG2257" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG2259" className="apexcharts-bar-goals-groups"></g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG2261" class="apexcharts-series" rel="3"
                                            seriesName="GamingxConsole" data:realIndex="2">
                                            <path id="SvgjsPath2265"
                                                d="M 39.65 375L 39.65 142.28571428571428Q 39.65 139.28571428571428 42.65 139.28571428571428L 49.95 139.28571428571428Q 52.95 139.28571428571428 52.95 142.28571428571428L 52.95 142.28571428571428L 52.95 375L 52.95 375z"
                                                fill="rgba(23,176,189,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="2"
                                                clip-path="url(#gridRectMaskwlpxxil1)"
                                                pathTo="M 39.65 375L 39.65 142.28571428571428Q 39.65 139.28571428571428 42.65 139.28571428571428L 49.95 139.28571428571428Q 52.95 139.28571428571428 52.95 142.28571428571428L 52.95 142.28571428571428L 52.95 375L 52.95 375z"
                                                pathFrom="M 39.65 375L 39.65 375L 52.95 375L 52.95 375L 52.95 375L 52.95 375L 52.95 375L 39.65 375"
                                                cy="139.28571428571428" cx="98.15" j="0" val="220"
                                                barHeight="235.71428571428572" barWidth="18.3"></path>
                                            <path id="SvgjsPath2267"
                                                d="M 100.65 375L 100.65 170.14285714285714Q 100.65 167.14285714285714 103.65 167.14285714285714L 110.95 167.14285714285714Q 113.95 167.14285714285714 113.95 170.14285714285714L 113.95 170.14285714285714L 113.95 375L 113.95 375z"
                                                fill="rgba(23,176,189,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="2"
                                                clip-path="url(#gridRectMaskwlpxxil1)"
                                                pathTo="M 100.65 375L 100.65 170.14285714285714Q 100.65 167.14285714285714 103.65 167.14285714285714L 110.95 167.14285714285714Q 113.95 167.14285714285714 113.95 170.14285714285714L 113.95 170.14285714285714L 113.95 375L 113.95 375z"
                                                pathFrom="M 100.65 375L 100.65 375L 113.95 375L 113.95 375L 113.95 375L 113.95 375L 113.95 375L 100.65 375"
                                                cy="167.14285714285714" cx="159.15" j="1" val="194"
                                                barHeight="207.85714285714286" barWidth="18.3"></path>
                                            <path id="SvgjsPath2269"
                                                d="M 161.65 375L 161.65 145.5Q 161.65 142.5 164.65 142.5L 171.95000000000002 142.5Q 174.95000000000002 142.5 174.95000000000002 145.5L 174.95000000000002 145.5L 174.95000000000002 375L 174.95000000000002 375z"
                                                fill="rgba(23,176,189,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="2"
                                                clip-path="url(#gridRectMaskwlpxxil1)"
                                                pathTo="M 161.65 375L 161.65 145.5Q 161.65 142.5 164.65 142.5L 171.95000000000002 142.5Q 174.95000000000002 142.5 174.95000000000002 145.5L 174.95000000000002 145.5L 174.95000000000002 375L 174.95000000000002 375z"
                                                pathFrom="M 161.65 375L 161.65 375L 174.95000000000002 375L 174.95000000000002 375L 174.95000000000002 375L 174.95000000000002 375L 174.95000000000002 375L 161.65 375"
                                                cy="142.5" cx="220.15" j="2" val="217" barHeight="232.5"
                                                barWidth="18.3"></path>
                                            <path id="SvgjsPath2271"
                                                d="M 222.65 375L 222.65 79.07142857142856Q 222.65 76.07142857142856 225.65 76.07142857142856L 232.95000000000002 76.07142857142856Q 235.95000000000002 76.07142857142856 235.95000000000002 79.07142857142856L 235.95000000000002 79.07142857142856L 235.95000000000002 375L 235.95000000000002 375z"
                                                fill="rgba(23,176,189,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="2"
                                                clip-path="url(#gridRectMaskwlpxxil1)"
                                                pathTo="M 222.65 375L 222.65 79.07142857142856Q 222.65 76.07142857142856 225.65 76.07142857142856L 232.95000000000002 76.07142857142856Q 235.95000000000002 76.07142857142856 235.95000000000002 79.07142857142856L 235.95000000000002 79.07142857142856L 235.95000000000002 375L 235.95000000000002 375z"
                                                pathFrom="M 222.65 375L 222.65 375L 235.95000000000002 375L 235.95000000000002 375L 235.95000000000002 375L 235.95000000000002 375L 235.95000000000002 375L 222.65 375"
                                                cy="76.07142857142856" cx="281.15000000000003" j="3" val="279"
                                                barHeight="298.92857142857144" barWidth="18.3"></path>
                                            <path id="SvgjsPath2273"
                                                d="M 283.65000000000003 375L 283.65000000000003 147.64285714285714Q 283.65000000000003 144.64285714285714 286.65000000000003 144.64285714285714L 293.95000000000005 144.64285714285714Q 296.95000000000005 144.64285714285714 296.95000000000005 147.64285714285714L 296.95000000000005 147.64285714285714L 296.95000000000005 375L 296.95000000000005 375z"
                                                fill="rgba(23,176,189,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="2"
                                                clip-path="url(#gridRectMaskwlpxxil1)"
                                                pathTo="M 283.65000000000003 375L 283.65000000000003 147.64285714285714Q 283.65000000000003 144.64285714285714 286.65000000000003 144.64285714285714L 293.95000000000005 144.64285714285714Q 296.95000000000005 144.64285714285714 296.95000000000005 147.64285714285714L 296.95000000000005 147.64285714285714L 296.95000000000005 375L 296.95000000000005 375z"
                                                pathFrom="M 283.65000000000003 375L 283.65000000000003 375L 296.95000000000005 375L 296.95000000000005 375L 296.95000000000005 375L 296.95000000000005 375L 296.95000000000005 375L 283.65000000000003 375"
                                                cy="144.64285714285714" cx="342.15000000000003" j="4" val="215"
                                                barHeight="230.35714285714286" barWidth="18.3"></path>
                                            <path id="SvgjsPath2275"
                                                d="M 344.65000000000003 375L 344.65000000000003 96.21428571428572Q 344.65000000000003 93.21428571428572 347.65000000000003 93.21428571428572L 354.95000000000005 93.21428571428572Q 357.95000000000005 93.21428571428572 357.95000000000005 96.21428571428572L 357.95000000000005 96.21428571428572L 357.95000000000005 375L 357.95000000000005 375z"
                                                fill="rgba(23,176,189,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="2"
                                                clip-path="url(#gridRectMaskwlpxxil1)"
                                                pathTo="M 344.65000000000003 375L 344.65000000000003 96.21428571428572Q 344.65000000000003 93.21428571428572 347.65000000000003 93.21428571428572L 354.95000000000005 93.21428571428572Q 357.95000000000005 93.21428571428572 357.95000000000005 96.21428571428572L 357.95000000000005 96.21428571428572L 357.95000000000005 375L 357.95000000000005 375z"
                                                pathFrom="M 344.65000000000003 375L 344.65000000000003 375L 357.95000000000005 375L 357.95000000000005 375L 357.95000000000005 375L 357.95000000000005 375L 357.95000000000005 375L 344.65000000000003 375"
                                                cy="93.21428571428572" cx="403.15000000000003" j="5" val="263"
                                                barHeight="281.7857142857143" barWidth="18.3"></path>
                                            <path id="SvgjsPath2277"
                                                d="M 405.65000000000003 375L 405.65000000000003 181.92857142857144Q 405.65000000000003 178.92857142857144 408.65000000000003 178.92857142857144L 415.95000000000005 178.92857142857144Q 418.95000000000005 178.92857142857144 418.95000000000005 181.92857142857144L 418.95000000000005 181.92857142857144L 418.95000000000005 375L 418.95000000000005 375z"
                                                fill="rgba(23,176,189,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="2"
                                                clip-path="url(#gridRectMaskwlpxxil1)"
                                                pathTo="M 405.65000000000003 375L 405.65000000000003 181.92857142857144Q 405.65000000000003 178.92857142857144 408.65000000000003 178.92857142857144L 415.95000000000005 178.92857142857144Q 418.95000000000005 178.92857142857144 418.95000000000005 181.92857142857144L 418.95000000000005 181.92857142857144L 418.95000000000005 375L 418.95000000000005 375z"
                                                pathFrom="M 405.65000000000003 375L 405.65000000000003 375L 418.95000000000005 375L 418.95000000000005 375L 418.95000000000005 375L 418.95000000000005 375L 418.95000000000005 375L 405.65000000000003 375"
                                                cy="178.92857142857144" cx="464.15000000000003" j="6" val="183"
                                                barHeight="196.07142857142856" barWidth="18.3"></path>
                                            <g id="SvgjsG2263" class="apexcharts-bar-goals-markers"
                                                style="pointer-events: none">
                                                <g id="SvgjsG2264" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG2266" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG2268" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG2270" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG2272" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG2274" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG2276" className="apexcharts-bar-goals-groups"></g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG2228" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        <g id="SvgjsG2245" class="apexcharts-datalabels" data:realIndex="1"></g>
                                        <g id="SvgjsG2262" class="apexcharts-datalabels" data:realIndex="2"></g>
                                    </g>
                                    <line id="SvgjsLine2299" x1="0" y1="0" x2="427"
                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine2300" x1="0" y1="0" x2="427"
                                        y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG2301" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG2302" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG2303" class="apexcharts-point-annotations"></g>
                                </g>
                                <g id="SvgjsG2287" class="apexcharts-yaxis" rel="0"
                                    transform="translate(-18, 0)"></g>
                                <g id="SvgjsG2217" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend" style="max-height: 210px;"></div>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                <div class="apexcharts-tooltip-title"
                                    style="font-family: Inter, sans-serif; font-size: 14px;"></div>
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(26, 86, 219);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Inter, sans-serif; font-size: 14px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(253, 186, 140);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Inter, sans-serif; font-size: 14px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(23, 176, 189);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Inter, sans-serif; font-size: 14px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Card Footer -->
                    <div
                        class="flex items-center justify-between pt-3 mt-4 border-t border-gray-200 sm:pt-6 dark:border-gray-700">
                        <div>
                            <button
                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 rounded-lg hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
                                type="button" data-dropdown-toggle="sales-by-category-dropdown">Last 7 days <svg
                                    class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                                id="sales-by-category-dropdown"
                                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(870px, 1517px);"
                                data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top">
                                <div class="px-4 py-3" role="none">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white"
                                        role="none">
                                        Sep 16, 2021 - Sep 22, 2021
                                    </p>
                                </div>
                                <ul class="py-1" role="none">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Yesterday</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Today</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Last 7 days</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Last 30 days</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Last 90 days</a>
                                    </li>
                                </ul>
                                <div class="py-1" role="none">
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Custom...</a>
                                </div>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <a href="#"
                                class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                                Sales Report
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div
                        class="flex items-center justify-between pb-4 mb-4 border-b border-gray-200 dark:border-gray-700">
                        <div>
                            <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Traffic by device</h3>
                            <span
                                class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">Desktop</span>
                        </div>
                        <a href="#"
                            class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                            Full report
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                    <div id="traffic-by-device" style="min-height: 378.7px;">
                        <div id="apexchartselss6b82" class="apexcharts-canvas apexchartselss6b82 apexcharts-theme-light"
                            style="width: 449px; height: 378.7px;"><svg id="SvgjsSvg2832" width="449"
                                height="378.7" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                style="background: transparent;">
                                <g id="SvgjsG2834" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(37.5, 0)">
                                    <defs id="SvgjsDefs2833">
                                        <clipPath id="gridRectMaskelss6b82">
                                            <rect id="SvgjsRect2836" width="382" height="400" x="-3" y="-1"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMaskelss6b82"></clipPath>
                                        <clipPath id="nonForecastMaskelss6b82"></clipPath>
                                        <clipPath id="gridRectMarkerMaskelss6b82">
                                            <rect id="SvgjsRect2837" width="380" height="402" x="-2" y="-2"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <g id="SvgjsG2838" class="apexcharts-pie">
                                        <g id="SvgjsG2839" transform="translate(0, 0) scale(1)">
                                            <circle id="SvgjsCircle2840" r="115.31951219512197" cx="188"
                                                cy="188" fill="transparent"></circle>
                                            <g id="SvgjsG2841" class="apexcharts-slices">
                                                <g id="SvgjsG2842" class="apexcharts-series apexcharts-pie-series"
                                                    seriesName="Desktop" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath2843"
                                                        d="M 188 10.585365853658516 A 177.41463414634148 177.41463414634148 0 1 1 19.268656109001284 242.82413700203338 L 78.32462647085082 223.6356890513217 A 115.31951219512197 115.31951219512197 0 1 0 188 72.68048780487803 L 188 10.585365853658516 z"
                                                        fill="rgba(22,189,202,1)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                                        class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                        index="0" j="0" data:angle="252" data:startAngle="0"
                                                        data:strokeWidth="2" data:value="70"
                                                        data:pathOrig="M 188 10.585365853658516 A 177.41463414634148 177.41463414634148 0 1 1 19.268656109001284 242.82413700203338 L 78.32462647085082 223.6356890513217 A 115.31951219512197 115.31951219512197 0 1 0 188 72.68048780487803 L 188 10.585365853658516 z"
                                                        stroke="#ffffff"></path>
                                                </g>
                                                <g id="SvgjsG2844" class="apexcharts-series apexcharts-pie-series"
                                                    seriesName="Tablet" rel="2" data:realIndex="1">
                                                    <path id="SvgjsPath2845"
                                                        d="M 19.268656109001284 242.82413700203338 A 177.41463414634148 177.41463414634148 0 0 1 10.585365853658516 188.00000000000003 L 72.68048780487803 188 A 115.31951219512197 115.31951219512197 0 0 0 78.32462647085082 223.6356890513217 L 19.268656109001284 242.82413700203338 z"
                                                        fill="rgba(253,186,140,1)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                                        class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                        index="0" j="1" data:angle="18" data:startAngle="252"
                                                        data:strokeWidth="2" data:value="5"
                                                        data:pathOrig="M 19.268656109001284 242.82413700203338 A 177.41463414634148 177.41463414634148 0 0 1 10.585365853658516 188.00000000000003 L 72.68048780487803 188 A 115.31951219512197 115.31951219512197 0 0 0 78.32462647085082 223.6356890513217 L 19.268656109001284 242.82413700203338 z"
                                                        stroke="#ffffff"></path>
                                                </g>
                                                <g id="SvgjsG2846" class="apexcharts-series apexcharts-pie-series"
                                                    seriesName="Phone" rel="3" data:realIndex="2">
                                                    <path id="SvgjsPath2847"
                                                        d="M 10.585365853658516 188.00000000000003 A 177.41463414634148 177.41463414634148 0 0 1 187.96903530508644 10.585368555837903 L 187.97987294830617 72.68048956129464 A 115.31951219512197 115.31951219512197 0 0 0 72.68048780487803 188 L 10.585365853658516 188.00000000000003 z"
                                                        fill="rgba(26,86,219,1)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                                        class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                        index="0" j="2" data:angle="90" data:startAngle="270"
                                                        data:strokeWidth="2" data:value="25"
                                                        data:pathOrig="M 10.585365853658516 188.00000000000003 A 177.41463414634148 177.41463414634148 0 0 1 187.96903530508644 10.585368555837903 L 187.97987294830617 72.68048956129464 A 115.31951219512197 115.31951219512197 0 0 0 72.68048780487803 188 L 10.585365853658516 188.00000000000003 z"
                                                        stroke="#ffffff"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                    <line id="SvgjsLine2848" x1="0" y1="0" x2="376"
                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine2849" x1="0" y1="0" x2="376"
                                        y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs-hidden"></line>
                                </g>
                                <g id="SvgjsG2835" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend"></div>
                            <div class="apexcharts-tooltip apexcharts-theme-dark">
                                <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(22, 189, 202);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Inter, sans-serif; font-size: 14px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(253, 186, 140);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Inter, sans-serif; font-size: 14px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(26, 86, 219);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Inter, sans-serif; font-size: 14px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card Footer -->
                    <div class="flex items-center justify-between pt-4 lg:justify-evenly sm:pt-6">
                        <div>
                            <svg class="w-8 h-8 mb-1 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M2 4.25A2.25 2.25 0 014.25 2h11.5A2.25 2.25 0 0118 4.25v8.5A2.25 2.25 0 0115.75 15h-3.105a3.501 3.501 0 001.1 1.677A.75.75 0 0113.26 18H6.74a.75.75 0 01-.484-1.323A3.501 3.501 0 007.355 15H4.25A2.25 2.25 0 012 12.75v-8.5zm1.5 0a.75.75 0 01.75-.75h11.5a.75.75 0 01.75.75v7.5a.75.75 0 01-.75.75H4.25a.75.75 0 01-.75-.75v-7.5z">
                                </path>
                            </svg>
                            <h3 class="text-gray-500 dark:text-gray-400">Desktop</h3>
                            <h4 class="text-xl font-bold dark:text-white">
                                234k
                            </h4>
                            <p class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                        </path>
                                    </svg>
                                    4%
                                </span>
                                vs last month
                            </p>
                        </div>
                        <div>
                            <svg class="w-8 h-8 mb-1 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M8 16.25a.75.75 0 01.75-.75h2.5a.75.75 0 010 1.5h-2.5a.75.75 0 01-.75-.75z"></path>
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M4 4a3 3 0 013-3h6a3 3 0 013 3v12a3 3 0 01-3 3H7a3 3 0 01-3-3V4zm4-1.5v.75c0 .414.336.75.75.75h2.5a.75.75 0 00.75-.75V2.5h1A1.5 1.5 0 0114.5 4v12a1.5 1.5 0 01-1.5 1.5H7A1.5 1.5 0 015.5 16V4A1.5 1.5 0 017 2.5h1z">
                                </path>
                            </svg>
                            <h3 class="text-gray-500 dark:text-gray-400">Phone</h3>
                            <h4 class="text-xl font-bold dark:text-white">
                                94k
                            </h4>
                            <p class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                <span class="flex items-center mr-1.5 text-sm text-red-600 dark:text-red-500">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z">
                                        </path>
                                    </svg>
                                    1%
                                </span>
                                vs last month
                            </p>
                        </div>
                        <div>
                            <svg class="w-8 h-8 mb-1 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M5 1a3 3 0 00-3 3v12a3 3 0 003 3h10a3 3 0 003-3V4a3 3 0 00-3-3H5zM3.5 4A1.5 1.5 0 015 2.5h10A1.5 1.5 0 0116.5 4v12a1.5 1.5 0 01-1.5 1.5H5A1.5 1.5 0 013.5 16V4zm5.25 11.5a.75.75 0 000 1.5h2.5a.75.75 0 000-1.5h-2.5z">
                                </path>
                            </svg>
                            <h3 class="text-gray-500 dark:text-gray-400">Tablet</h3>
                            <h4 class="text-xl font-bold dark:text-white">
                                16k
                            </h4>
                            <p class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                <span class="flex items-center mr-1.5 text-sm text-red-600 dark:text-red-500">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z">
                                        </path>
                                    </svg>
                                    0,6%
                                </span>
                                vs last month
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 2 columns -->
        <div class="grid grid-cols-1 my-4 xl:grid-cols-2 xl:gap-4">
            <!-- Activity Card -->
            <div
                class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800 xl:mb-0">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Latest Activity</h3>
                    <a href="#"
                        class="inline-flex items-center p-2 text-sm font-medium rounded-lg text-primary-700 hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                        View all
                    </a>
                </div>
                <ol class="relative border-l border-gray-200 dark:border-gray-700">
                    <li class="mb-10 ml-4">
                        <div
                            class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-800 dark:bg-gray-700">
                        </div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">April
                            2023</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Application UI design in Figma
                        </h3>
                        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Get access to over 20+
                            pages including a dashboard layout, charts, kanban board, calendar, and pre-order E-commerce
                            &amp; Marketing pages.</p>
                        <a href="#"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-primary-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">Learn
                            more <svg class="w-3 h-3 ml-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg></a>
                    </li>
                    <li class="mb-10 ml-4">
                        <div
                            class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-800 dark:bg-gray-700">
                        </div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">March
                            2023</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Marketing UI code in Flowbite</h3>
                        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of
                            web components and interactive elements built on top of Tailwind CSS.</p>
                        <a href="https://flowbite.com/blocks/"
                            class="inline-flex items-center text-xs font-medium hover:underline text-primary-700 sm:text-sm dark:text-primary-500">
                            Go to Flowbite Blocks
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li class="mb-10 ml-4">
                        <div
                            class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-800 dark:bg-gray-700">
                        </div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">February
                            2023</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Marketing UI design in Figma</h3>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web
                            components and interactive elements built on top of Tailwind CSS.</p>
                    </li>
                </ol>
            </div>
            <!--Carousel widget -->
            <div
                class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div id="carousel" class="relative" data-carousel="">
                    <div class="relative mx-auto overflow-hidden h-[36rem] lg:h-[24rem]">
                        <div class="duration-700 ease-in-out bg-white dark:bg-gray-800 absolute inset-0 transition-transform transform translate-x-0 z-20"
                            data-carousel-item="">
                            <div class="flex items-center mb-4 text-lg font-medium text-primary-600">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M9.664 1.319a.75.75 0 01.672 0 41.059 41.059 0 018.198 5.424.75.75 0 01-.254 1.285 31.372 31.372 0 00-7.86 3.83.75.75 0 01-.84 0 31.508 31.508 0 00-2.08-1.287V9.394c0-.244.116-.463.302-.592a35.504 35.504 0 013.305-2.033.75.75 0 00-.714-1.319 37 37 0 00-3.446 2.12A2.216 2.216 0 006 9.393v.38a31.293 31.293 0 00-4.28-1.746.75.75 0 01-.254-1.285 41.059 41.059 0 018.198-5.424zM6 11.459a29.848 29.848 0 00-2.455-1.158 41.029 41.029 0 00-.39 3.114.75.75 0 00.419.74c.528.256 1.046.53 1.554.82-.21.324-.455.63-.739.914a.75.75 0 101.06 1.06c.37-.369.69-.77.96-1.193a26.61 26.61 0 013.095 2.348.75.75 0 00.992 0 26.547 26.547 0 015.93-3.95.75.75 0 00.42-.739 41.053 41.053 0 00-.39-3.114 29.925 29.925 0 00-5.199 2.801 2.25 2.25 0 01-2.514 0c-.41-.275-.826-.541-1.25-.797a6.985 6.985 0 01-1.084 3.45 26.503 26.503 0 00-1.281-.78A5.487 5.487 0 006 12v-.54z">
                                    </path>
                                </svg>
                                Insights
                            </div>
                            <h3 class="mb-4 text-2xl font-medium text-gray-900 dark:text-white">You are going to grow by
                                44% next year</h3>
                            <p class="mb-4 text-gray-500 dark:text-gray-400">Get started with a free and open-source admin
                                dashboard layout built with Tailwind CSS and Flowbite featuring charts, widgets, CRUD
                                layouts, authentication pages, and more</p>
                            <p class="mb-2 text-lg font-medium text-gray-900 dark:text-white">Key Takeaways:</p>
                            <ul class="pl-4 mb-4 space-y-3 text-gray-500 list-disc dark:text-gray-400">
                                <li>What are the new challenges in the delivery industry due to new consumer expectations.
                                </li>
                                <li>How the online delivery business model is diversifying to meet new demands.</li>
                                <li>Which new technology requirements must be met to ensure true retail experiences.</li>
                                <li>How a headless commerce architecture solves challenges in the industry.</li>
                            </ul>
                            <a href="#"
                                class="inline-flex items-center p-2 font-medium rounded-lg text-primary-700 hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                                Get me there
                                <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                        <div class="duration-700 ease-in-out bg-white dark:bg-gray-800 absolute inset-0 transition-transform transform translate-x-full z-10"
                            data-carousel-item="">
                            <div class="flex items-center mb-4 text-lg font-medium text-teal-500">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M4.606 12.97a.75.75 0 01-.134 1.051 2.494 2.494 0 00-.93 2.437 2.494 2.494 0 002.437-.93.75.75 0 111.186.918 3.995 3.995 0 01-4.482 1.332.75.75 0 01-.461-.461 3.994 3.994 0 011.332-4.482.75.75 0 011.052.134z">
                                    </path>
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M5.752 12A13.07 13.07 0 008 14.248v4.002c0 .414.336.75.75.75a5 5 0 004.797-6.414 12.984 12.984 0 005.45-10.848.75.75 0 00-.735-.735 12.984 12.984 0 00-10.849 5.45A5 5 0 001 11.25c.001.414.337.75.751.75h4.002zM13 9a2 2 0 100-4 2 2 0 000 4z">
                                    </path>
                                </svg>
                                Tips to grow
                            </div>
                            <p class="mb-4 text-gray-500 dark:text-gray-400">Marketing, sales &amp; business growth for
                                small business. Improve your marketing &amp; promotion results - and grow your sales!</p>
                            <p class="mb-4 text-lg font-medium text-gray-900 dark:text-white">What you'll learn:</p>
                            <ul role="list" class="pl-2 mb-4 space-y-3 text-gray-500 list-disc dark:text-gray-400">
                                <li class="flex space-x-2">
                                    <!-- Icon -->
                                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z">
                                        </path>
                                    </svg>
                                    <span class="leading-tight">Dynamic reports and dashboards</span>
                                </li>
                                <li class="flex space-x-2">
                                    <!-- Icon -->
                                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z">
                                        </path>
                                    </svg>
                                    <span class="leading-tight">Learn from competitors about what to do, and not to
                                        do</span>
                                </li>
                                <li class="flex space-x-2">
                                    <!-- Icon -->
                                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z">
                                        </path>
                                    </svg>
                                    <span class="leading-tight">Take their business to the next level</span>
                                </li>
                                <li class="flex space-x-2">
                                    <!-- Icon -->
                                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z">
                                        </path>
                                    </svg>
                                    <span class="leading-tight">Limitless business automation</span>
                                </li>
                                <li class="flex space-x-2">
                                    <!-- Icon -->
                                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z">
                                        </path>
                                    </svg>
                                    <span class="leading-tight">Build relationships with other businesses to
                                        co-promote</span>
                                </li>
                                <li class="flex space-x-2">
                                    <!-- Icon -->
                                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z">
                                        </path>
                                    </svg>
                                    <span class="leading-tight">Make their customers feel loved and apprecaited</span>
                                </li>
                            </ul>
                            <a href="#"
                                class="inline-flex items-center p-2 font-medium rounded-lg text-primary-700 hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                                Let's start
                                <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                        <div class="duration-700 ease-in-out bg-white dark:bg-gray-800 absolute inset-0 transition-transform transform -translate-x-full z-10"
                            data-carousel-item="">
                            <div class="flex items-center mb-4 text-lg font-medium text-purple-600">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M13.5 4.938a7 7 0 11-9.006 1.737c.202-.257.59-.218.793.039.278.352.594.672.943.954.332.269.786-.049.773-.476a5.977 5.977 0 01.572-2.759 6.026 6.026 0 012.486-2.665c.247-.14.55-.016.677.238A6.967 6.967 0 0013.5 4.938zM14 12a4 4 0 01-4 4c-1.913 0-3.52-1.398-3.91-3.182-.093-.429.44-.643.814-.413a4.043 4.043 0 001.601.564c.303.038.531-.24.51-.544a5.975 5.975 0 011.315-4.192.447.447 0 01.431-.16A4.001 4.001 0 0114 12z">
                                    </path>
                                </svg>
                                Features
                            </div>
                            <h3 class="mb-4 text-2xl font-medium text-gray-900 dark:text-white">Go next level with
                                Flowbite</h3>
                            <p class="text-gray-500 dark:text-gray-400">Deliver great service experiences fast - without
                                the complexity of traditional ITSM solutions.Accelerate critical development work, eliminate
                                toil, and deploy changes with ease.</p>
                            <!-- List -->
                            <ul role="list"
                                class="pl-2 my-5 mb-4 space-y-3 text-gray-500 list-disc dark:text-gray-400">
                                <li class="flex space-x-3">
                                    <!-- Icon -->
                                    <svg class="flex-shrink-0 w-5 h-5 text-purple-600 dark:text-purple-500"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="leading-tight">Dynamic reports and dashboards</span>
                                </li>
                                <li class="flex space-x-3">
                                    <!-- Icon -->
                                    <svg class="flex-shrink-0 w-5 h-5 text-purple-600 dark:text-purple-500"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="leading-tight">Templates for everyone</span>
                                </li>
                                <li class="flex space-x-3">
                                    <!-- Icon -->
                                    <svg class="flex-shrink-0 w-5 h-5 text-purple-600 dark:text-purple-500"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="leading-tight">Development workflow</span>
                                </li>
                                <li class="flex space-x-3">
                                    <!-- Icon -->
                                    <svg class="flex-shrink-0 w-5 h-5 text-purple-600 dark:text-purple-500"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="leading-tight">Limitless business automation</span>
                                </li>
                            </ul>
                            <button type="button"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                View more
                                <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center justify-center">
                        <button type="button"
                            class="flex items-center justify-center h-full mr-4 cursor-pointer group focus:outline-none"
                            data-carousel-prev="">
                            <span class="text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="hidden">Previous</span>
                            </span>
                        </button>
                        <button type="button"
                            class="flex items-center justify-center h-full cursor-pointer group focus:outline-none"
                            data-carousel-next="">
                            <span class="text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="hidden">Next</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <!-- Card header -->
            <div class="items-center justify-between lg:flex">
                <div class="mb-4 lg:mb-0">
                    <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Transactions</h3>
                    <span class="text-base font-normal text-gray-500 dark:text-gray-400">This is a list of latest
                        transactions</span>
                </div>
                <div class="items-center sm:flex">
                    <div class="flex items-center">
                        <button id="dropdownDefault" data-dropdown-toggle="dropdown"
                            class="mb-4 sm:mb-0 mr-4 inline-flex items-center text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-4 py-2.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                            type="button">
                            Filter by status
                            <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdown" class="z-10 hidden w-56 p-3 bg-white rounded-lg shadow dark:bg-gray-700"
                            style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(652px, 2954px);"
                            data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top">
                            <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">
                                Category
                            </h6>
                            <ul class="space-y-2 text-sm" aria-labelledby="dropdownDefault">
                                <li class="flex items-center">
                                    <input id="apple" type="checkbox" value=""
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">

                                    <label for="apple"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        Completed (56)
                                    </label>
                                </li>

                                <li class="flex items-center">
                                    <input id="fitbit" type="checkbox" value="" checked=""
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">

                                    <label for="fitbit"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        Cancelled (56)
                                    </label>
                                </li>

                                <li class="flex items-center">
                                    <input id="dell" type="checkbox" value=""
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">

                                    <label for="dell"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        In progress (56)
                                    </label>
                                </li>

                                <li class="flex items-center">
                                    <input id="asus" type="checkbox" value="" checked=""
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">

                                    <label for="asus"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        In review (97)
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div date-rangepicker="" class="flex items-center space-x-4">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path
                                        d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z">
                                    </path>
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z">
                                    </path>
                                </svg>
                            </div>
                            <input name="start" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 datepicker-input"
                                placeholder="From">
                        </div>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path
                                        d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z">
                                    </path>
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z">
                                    </path>
                                </svg>
                            </div>
                            <input name="end" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 datepicker-input"
                                placeholder="To">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table -->
            <div class="flex flex-col mt-6">
                <div class="overflow-x-auto rounded-lg">
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden shadow sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                            Transaction
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                            Date &amp; Time
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                            Amount
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                            Reference number
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                            Payment method
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                            Status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-800">
                                    <tr>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            Payment from <span class="font-semibold">Bonnie Green</span>
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            Apr 23 ,2021
                                        </td>
                                        <td
                                            class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                            $2300
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            0047568936
                                        </td>
                                        <td
                                            class="inline-flex items-center p-4 space-x-2 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            <svg class="w-7 h-7" aria-hidden="true"
                                                enable-background="new 0 0 780 500" viewBox="0 0 780 500"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m449.01 250c0 99.143-80.371 179.5-179.51 179.5s-179.5-80.361-179.5-179.5c0-99.133 80.362-179.5 179.5-179.5 99.137 0 179.51 80.371 179.51 179.5"
                                                    fill="#d9222a"></path>
                                                <path
                                                    d="m510.49 70.496c-46.379 0-88.643 17.596-120.5 46.467-6.49 5.889-12.548 12.237-18.125 18.996h36.267c4.965 6.037 9.536 12.387 13.685 19.012h-63.635c-3.827 6.122-7.281 12.469-10.342 19.008h84.313c2.894 6.185 5.431 12.53 7.601 19.004h-99.513c-2.09 6.234-3.832 12.58-5.217 19.008h109.94c2.689 12.49 4.045 25.231 4.042 38.008 0 19.935-3.254 39.112-9.254 57.021h-99.513c2.164 6.477 4.7 12.824 7.596 19.008h84.316c-3.063 6.541-6.519 12.889-10.347 19.013h-63.625c4.147 6.62 8.719 12.966 13.685 18.996h36.259c-5.57 6.772-11.63 13.127-18.13 19.013 31.857 28.866 74.117 46.454 120.5 46.454 99.139 0 179.51-80.361 179.51-179.5 0-99.129-80.371-179.5-179.51-179.5"
                                                    fill="#ee9f2d"></path>
                                                <path
                                                    d="m666.07 350.06c0-3.199 2.592-5.801 5.796-5.801s5.796 2.602 5.796 5.801-2.592 5.801-5.796 5.801-5.796-2.602-5.796-5.801zm5.796 4.408c2.434-.001 4.407-1.974 4.408-4.408 0-2.432-1.971-4.402-4.402-4.404h-.006c-2.429-.003-4.4 1.963-4.404 4.391v.014c-.002 2.433 1.968 4.406 4.4 4.408.001-.001.003-.001.004-.001zm-.783-1.86h-1.187v-5.096h2.149c.45 0 .908 0 1.305.254.413.279.646.771.646 1.279 0 .571-.338 1.104-.884 1.312l.938 2.25h-1.315l-.779-2.017h-.871zm0-2.89h.658c.246 0 .505.021.726-.1.195-.125.296-.359.296-.584-.005-.209-.112-.402-.288-.518-.207-.129-.536-.101-.758-.101h-.634zm-443.5-80.063c-2.046-.238-2.945-.301-4.35-.301-11.046 0-16.638 3.787-16.638 11.268 0 4.611 2.729 7.545 6.987 7.545 7.939 0 13.659-7.559 14.001-18.512zm14.171 32.996h-16.146l.371-7.676c-4.926 6.065-11.496 8.949-20.426 8.949-10.563 0-17.804-8.25-17.804-20.229 0-18.024 12.596-28.541 34.217-28.541 2.208 0 5.042.199 7.941.57.604-2.441.763-3.488.763-4.801 0-4.908-3.396-6.737-12.5-6.737-9.533-.108-17.396 2.271-20.625 3.333.204-1.229 2.7-16.659 2.7-16.659 9.712-2.846 16.116-3.917 23.325-3.917 16.732 0 25.596 7.513 25.579 21.712.033 3.805-.597 8.5-1.579 14.671-1.691 10.734-5.32 33.721-5.816 39.325zm-62.158 0h-19.487l11.162-69.997-24.925 69.997h-13.279l-1.642-69.597-11.733 69.597h-18.242l15.237-91.056h28.021l1.7 50.968 17.092-50.968h31.167zm354.97-32.996c-2.037-.238-2.941-.301-4.342-.301-11.041 0-16.634 3.787-16.634 11.268 0 4.611 2.726 7.545 6.983 7.545 7.94 0 13.664-7.559 13.993-18.512zm14.184 32.996h-16.146l.366-7.676c-4.926 6.065-11.5 8.949-20.422 8.949-10.565 0-17.8-8.25-17.8-20.229 0-18.024 12.588-28.541 34.213-28.541 2.208 0 5.037.199 7.934.57.604-2.441.763-3.488.763-4.801 0-4.908-3.392-6.737-12.496-6.737-9.533-.108-17.387 2.271-20.629 3.333.204-1.229 2.709-16.659 2.709-16.659 9.712-2.846 16.112-3.917 23.313-3.917 16.74 0 25.604 7.513 25.587 21.712.032 3.805-.597 8.5-1.579 14.671-1.684 10.734-5.321 33.721-5.813 39.325zm-220.39-1.125c-5.333 1.679-9.491 2.398-14 2.398-9.962 0-15.399-5.725-15.399-16.267-.142-3.271 1.433-11.88 2.671-19.737 1.125-6.917 8.449-50.529 8.449-50.529h19.371l-2.263 11.208h11.699l-2.642 17.796h-11.742c-2.25 14.083-5.454 31.625-5.491 33.95 0 3.816 2.037 5.483 6.671 5.483 2.221 0 3.94-.227 5.254-.7zm59.392-.6c-6.654 2.034-13.075 3.017-19.879 3-21.684-.021-32.987-11.346-32.987-33.032 0-25.313 14.38-43.947 33.899-43.947 15.971 0 26.171 10.433 26.171 26.796 0 5.429-.7 10.729-2.388 18.212h-38.574c-1.305 10.741 5.57 15.217 16.837 15.217 6.935 0 13.188-1.429 20.142-4.663zm-10.888-43.9c.107-1.543 2.055-13.217-9.013-13.217-6.171 0-10.583 4.704-12.38 13.217zm-123.42-5.017c0 9.367 4.542 15.826 14.842 20.676 7.892 3.709 9.112 4.81 9.112 8.17 0 4.617-3.479 6.701-11.191 6.701-5.813 0-11.221-.908-17.458-2.922 0 0-2.563 16.321-2.68 17.102 4.43.967 8.38 1.861 20.279 2.19 20.563 0 30.059-7.829 30.059-24.75 0-10.175-3.976-16.146-13.737-20.634-8.171-3.75-9.108-4.587-9.108-8.045 0-4.004 3.237-6.046 9.537-6.046 3.825 0 9.05.408 14 1.112l2.775-17.175c-5.046-.8-12.696-1.442-17.15-1.442-21.801.001-29.347 11.388-29.28 25.063m229.09-23.116c5.412 0 10.458 1.421 17.412 4.921l3.188-19.763c-2.854-1.121-12.904-7.7-21.417-7.7-13.041 0-24.065 6.471-31.82 17.15-11.309-3.746-15.958 3.825-21.657 11.367l-5.063 1.179c.383-2.483.729-4.95.612-7.446h-17.896c-2.445 22.917-6.778 46.128-10.171 69.075l-.884 4.976h19.496c3.254-21.143 5.037-34.68 6.121-43.842l7.341-4.084c1.097-4.078 4.529-5.458 11.417-5.291-.926 5.008-1.389 10.091-1.383 15.184 0 24.225 13.07 39.308 34.05 39.308 5.404 0 10.041-.712 17.221-2.658l3.43-20.759c-6.458 3.181-11.759 4.677-16.559 4.677-11.329 0-18.184-8.363-18.184-22.185 0-20.051 10.196-34.109 24.746-34.109">
                                                </path>
                                                <path
                                                    d="m185.21 297.24h-19.491l11.171-69.988-24.926 69.988h-13.283l-1.642-69.588-11.733 69.588h-18.241l15.237-91.042h28.021l.788 56.362 18.904-56.362h30.267z"
                                                    fill="#fff"></path>
                                                <path
                                                    d="m647.52 211.6-4.321 26.309c-5.329-7.013-11.054-12.088-18.612-12.088-9.833 0-18.783 7.455-24.642 18.425-8.158-1.692-16.597-4.563-16.597-4.563l-.004.067c.658-6.134.921-9.875.862-11.146h-17.9c-2.438 22.917-6.771 46.128-10.157 69.075l-.893 4.976h19.492c2.633-17.096 4.648-31.291 6.133-42.551 6.658-6.016 9.992-11.266 16.721-10.916-2.979 7.205-4.725 15.503-4.725 24.017 0 18.513 9.366 30.725 23.533 30.725 7.142 0 12.621-2.462 17.967-8.171l-.913 6.884h18.435l14.842-91.042zm-24.371 73.941c-6.634 0-9.983-4.908-9.983-14.596 0-14.555 6.271-24.875 15.112-24.875 6.695 0 10.32 5.104 10.32 14.509.001 14.679-6.37 24.962-15.449 24.962z">
                                                </path>
                                                <path
                                                    d="m233.19 264.26c-2.042-.236-2.946-.299-4.346-.299-11.046 0-16.634 3.787-16.634 11.266 0 4.604 2.729 7.547 6.979 7.547 7.947-.001 13.668-7.559 14.001-18.514zm14.178 32.984h-16.146l.367-7.663c-4.921 6.054-11.5 8.95-20.421 8.95-10.567 0-17.805-8.25-17.805-20.229 0-18.032 12.592-28.542 34.217-28.542 2.208 0 5.042.2 7.938.571.604-2.441.763-3.487.763-4.808 0-4.909-3.392-6.729-12.496-6.729-9.537-.108-17.396 2.271-20.629 3.321.204-1.225 2.7-16.637 2.7-16.637 9.708-2.858 16.12-3.929 23.32-3.929 16.737 0 25.604 7.517 25.588 21.704.029 3.821-.604 8.513-1.584 14.675-1.687 10.724-5.319 33.724-5.812 39.316zm261.38-88.592-3.191 19.767c-6.95-3.496-12-4.92-17.407-4.92-14.551 0-24.75 14.058-24.75 34.106 0 13.821 6.857 22.181 18.184 22.181 4.8 0 10.096-1.492 16.554-4.675l-3.421 20.75c-7.184 1.957-11.816 2.67-17.225 2.67-20.977 0-34.051-15.084-34.051-39.309 0-32.55 18.059-55.3 43.888-55.3 8.507.001 18.561 3.609 21.419 4.73m31.443 55.608c-2.041-.236-2.941-.299-4.347-.299-11.041 0-16.633 3.787-16.633 11.266 0 4.604 2.729 7.547 6.983 7.547 7.938-.001 13.663-7.559 13.997-18.514zm14.178 32.984h-16.15l.371-7.663c-4.925 6.054-11.5 8.95-20.421 8.95-10.563 0-17.804-8.25-17.804-20.229 0-18.032 12.596-28.542 34.212-28.542 2.213 0 5.042.2 7.941.571.601-2.441.763-3.487.763-4.808 0-4.909-3.393-6.729-12.495-6.729-9.533-.108-17.396 2.271-20.63 3.321.204-1.225 2.704-16.637 2.704-16.637 9.709-2.858 16.116-3.929 23.316-3.929 16.741 0 25.604 7.517 25.583 21.704.033 3.821-.596 8.513-1.579 14.675-1.682 10.724-5.323 33.724-5.811 39.316zm-220.39-1.121c-5.338 1.679-9.496 2.408-14 2.408-9.962 0-15.399-5.726-15.399-16.268-.138-3.279 1.438-11.88 2.675-19.736 1.12-6.926 8.445-50.534 8.445-50.534h19.368l-2.26 11.212h9.941l-2.646 17.788h-9.975c-2.25 14.092-5.463 31.62-5.496 33.95 0 3.83 2.041 5.482 6.671 5.482 2.221 0 3.938-.216 5.254-.691zm59.391-.592c-6.65 2.033-13.079 3.012-19.879 3-21.685-.021-32.987-11.346-32.987-33.033 0-25.321 14.379-43.95 33.899-43.95 15.971 0 26.171 10.429 26.171 26.8 0 5.434-.7 10.733-2.384 18.212h-38.574c-1.306 10.741 5.569 15.222 16.837 15.222 6.93 0 13.188-1.435 20.138-4.677zm-10.891-43.912c.116-1.538 2.06-13.217-9.013-13.217-6.167 0-10.579 4.717-12.375 13.217zm-123.42-5.005c0 9.367 4.542 15.818 14.842 20.675 7.892 3.709 9.112 4.812 9.112 8.172 0 4.616-3.483 6.699-11.188 6.699-5.816 0-11.225-.908-17.467-2.921 0 0-2.554 16.321-2.671 17.101 4.421.967 8.375 1.85 20.275 2.191 20.566 0 30.059-7.829 30.059-24.746 0-10.18-3.971-16.15-13.737-20.637-8.167-3.759-9.113-4.584-9.113-8.046 0-4 3.246-6.059 9.542-6.059 3.821 0 9.046.421 14.004 1.125l2.771-17.179c-5.042-.8-12.692-1.441-17.146-1.441-21.804 0-29.346 11.379-29.283 25.066m398.45 50.63h-18.438l.917-6.893c-5.347 5.717-10.825 8.18-17.968 8.18-14.166 0-23.528-12.213-23.528-30.726 0-24.63 14.521-45.392 31.708-45.392 7.559 0 13.279 3.087 18.604 10.096l4.325-26.308h19.221zm-28.746-17.109c9.075 0 15.45-10.283 15.45-24.953 0-9.405-3.629-14.509-10.325-14.509-8.837 0-15.115 10.315-15.115 24.875-.001 9.686 3.357 14.587 9.99 14.587zm-56.842-56.929c-2.441 22.917-6.773 46.13-10.162 69.063l-.892 4.976h19.491c6.972-45.275 8.658-54.117 19.588-53.009 1.742-9.267 4.982-17.383 7.399-21.479-8.163-1.7-12.721 2.913-18.688 11.675.471-3.788 1.333-7.467 1.162-11.225zm-160.42 0c-2.446 22.917-6.779 46.13-10.167 69.063l-.888 4.976h19.5c6.963-45.275 8.646-54.117 19.57-53.009 1.75-9.267 4.991-17.383 7.399-21.479-8.154-1.7-12.717 2.913-18.679 11.675.471-3.788 1.324-7.467 1.162-11.225zm254.57 68.241c-.004-3.199 2.586-5.795 5.784-5.799h.012c3.197-.004 5.793 2.586 5.796 5.783v.016c-.001 3.201-2.595 5.795-5.796 5.797-3.201-.002-5.795-2.596-5.796-5.797zm5.796 4.405c2.431.002 4.402-1.969 4.403-4.399v-.004c.003-2.433-1.968-4.406-4.399-4.408h-.004c-2.435.001-4.407 1.974-4.408 4.408.002 2.432 1.975 4.403 4.408 4.403zm-.784-1.871h-1.188v-5.082h2.153c.446 0 .909.009 1.296.254.417.283.654.767.654 1.274 0 .575-.337 1.112-.888 1.317l.941 2.236h-1.32l-.779-2.009h-.87zm0-2.879h.653c.246 0 .513.019.729-.1.196-.125.296-.361.296-.588-.009-.21-.114-.404-.287-.523-.204-.117-.542-.084-.763-.084h-.629z"
                                                    fill="#fff"></path>
                                            </svg>
                                            <span>••• 475</span>
                                        </td>
                                        <td class="p-4 whitespace-nowrap">
                                            <span
                                                class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 border border-green-100 dark:border-green-500">Completed</span>
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-50 dark:bg-gray-700">
                                        <td
                                            class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            Payment refund to <span class="font-semibold">#00910</span>
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            Apr 23 ,2021
                                        </td>
                                        <td
                                            class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                            -$670
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            0078568936
                                        </td>
                                        <td
                                            class="inline-flex items-center p-4 space-x-2 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 256 83">
                                                <defs>
                                                    <linearGradient id="logosVisa0" x1="45.974%" x2="54.877%"
                                                        y1="-2.006%" y2="100%">
                                                        <stop offset="0%" stop-color="#222357"></stop>
                                                        <stop offset="100%" stop-color="#254AA5"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <path fill="url(#logosVisa0)"
                                                    d="M132.397 56.24c-.146-11.516 10.263-17.942 18.104-21.763c8.056-3.92 10.762-6.434 10.73-9.94c-.06-5.365-6.426-7.733-12.383-7.825c-10.393-.161-16.436 2.806-21.24 5.05l-3.744-17.519c4.82-2.221 13.745-4.158 23-4.243c21.725 0 35.938 10.724 36.015 27.351c.085 21.102-29.188 22.27-28.988 31.702c.069 2.86 2.798 5.912 8.778 6.688c2.96.392 11.131.692 20.395-3.574l3.636 16.95c-4.982 1.814-11.385 3.551-19.357 3.551c-20.448 0-34.83-10.87-34.946-26.428m89.241 24.968c-3.967 0-7.31-2.314-8.802-5.865L181.803 1.245h21.709l4.32 11.939h26.528l2.506-11.939H256l-16.697 79.963h-17.665m3.037-21.601l6.265-30.027h-17.158l10.893 30.027m-118.599 21.6L88.964 1.246h20.687l17.104 79.963h-20.679m-30.603 0L53.941 26.782l-8.71 46.277c-1.022 5.166-5.058 8.149-9.54 8.149H.493L0 78.886c7.226-1.568 15.436-4.097 20.41-6.803c3.044-1.653 3.912-3.098 4.912-7.026L41.819 1.245H63.68l33.516 79.963H75.473"
                                                    transform="matrix(1 0 0 -1 0 82.668)"></path>
                                            </svg>
                                            <span>••• 924</span>
                                        </td>
                                        <td class="p-4 whitespace-nowrap">
                                            <span
                                                class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 border border-green-100 dark:border-green-500">Completed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            Payment failed from <span class="font-semibold">#087651</span>
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            Apr 18 ,2021
                                        </td>
                                        <td
                                            class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                            $234
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            0088568934
                                        </td>
                                        <td
                                            class="inline-flex items-center p-4 space-x-2 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 256 83">
                                                <defs>
                                                    <linearGradient id="logosVisa0" x1="45.974%" x2="54.877%"
                                                        y1="-2.006%" y2="100%">
                                                        <stop offset="0%" stop-color="#222357"></stop>
                                                        <stop offset="100%" stop-color="#254AA5"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <path fill="url(#logosVisa0)"
                                                    d="M132.397 56.24c-.146-11.516 10.263-17.942 18.104-21.763c8.056-3.92 10.762-6.434 10.73-9.94c-.06-5.365-6.426-7.733-12.383-7.825c-10.393-.161-16.436 2.806-21.24 5.05l-3.744-17.519c4.82-2.221 13.745-4.158 23-4.243c21.725 0 35.938 10.724 36.015 27.351c.085 21.102-29.188 22.27-28.988 31.702c.069 2.86 2.798 5.912 8.778 6.688c2.96.392 11.131.692 20.395-3.574l3.636 16.95c-4.982 1.814-11.385 3.551-19.357 3.551c-20.448 0-34.83-10.87-34.946-26.428m89.241 24.968c-3.967 0-7.31-2.314-8.802-5.865L181.803 1.245h21.709l4.32 11.939h26.528l2.506-11.939H256l-16.697 79.963h-17.665m3.037-21.601l6.265-30.027h-17.158l10.893 30.027m-118.599 21.6L88.964 1.246h20.687l17.104 79.963h-20.679m-30.603 0L53.941 26.782l-8.71 46.277c-1.022 5.166-5.058 8.149-9.54 8.149H.493L0 78.886c7.226-1.568 15.436-4.097 20.41-6.803c3.044-1.653 3.912-3.098 4.912-7.026L41.819 1.245H63.68l33.516 79.963H75.473"
                                                    transform="matrix(1 0 0 -1 0 82.668)"></path>
                                            </svg>
                                            <span>••• 826</span>
                                        </td>
                                        <td class="p-4 whitespace-nowrap">
                                            <span
                                                class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md border border-red-100 dark:border-red-400 dark:bg-gray-700 dark:text-red-400">Cancelled</span>
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-50 dark:bg-gray-700">
                                        <td
                                            class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            Payment from <span class="font-semibold">Lana Byrd</span>
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            Apr 15 ,2021
                                        </td>
                                        <td
                                            class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                            $5000
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            0018568911
                                        </td>
                                        <td
                                            class="inline-flex items-center p-4 space-x-2 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 256 83">
                                                <defs>
                                                    <linearGradient id="logosVisa0" x1="45.974%" x2="54.877%"
                                                        y1="-2.006%" y2="100%">
                                                        <stop offset="0%" stop-color="#222357"></stop>
                                                        <stop offset="100%" stop-color="#254AA5"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <path fill="url(#logosVisa0)"
                                                    d="M132.397 56.24c-.146-11.516 10.263-17.942 18.104-21.763c8.056-3.92 10.762-6.434 10.73-9.94c-.06-5.365-6.426-7.733-12.383-7.825c-10.393-.161-16.436 2.806-21.24 5.05l-3.744-17.519c4.82-2.221 13.745-4.158 23-4.243c21.725 0 35.938 10.724 36.015 27.351c.085 21.102-29.188 22.27-28.988 31.702c.069 2.86 2.798 5.912 8.778 6.688c2.96.392 11.131.692 20.395-3.574l3.636 16.95c-4.982 1.814-11.385 3.551-19.357 3.551c-20.448 0-34.83-10.87-34.946-26.428m89.241 24.968c-3.967 0-7.31-2.314-8.802-5.865L181.803 1.245h21.709l4.32 11.939h26.528l2.506-11.939H256l-16.697 79.963h-17.665m3.037-21.601l6.265-30.027h-17.158l10.893 30.027m-118.599 21.6L88.964 1.246h20.687l17.104 79.963h-20.679m-30.603 0L53.941 26.782l-8.71 46.277c-1.022 5.166-5.058 8.149-9.54 8.149H.493L0 78.886c7.226-1.568 15.436-4.097 20.41-6.803c3.044-1.653 3.912-3.098 4.912-7.026L41.819 1.245H63.68l33.516 79.963H75.473"
                                                    transform="matrix(1 0 0 -1 0 82.668)"></path>
                                            </svg>
                                            <span>••• 634</span>
                                        </td>
                                        <td class="p-4 whitespace-nowrap">
                                            <span
                                                class="bg-purple-100 text-purple-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md border border-purple-100 dark:bg-gray-700 dark:border-purple-500 dark:text-purple-400">In
                                                progress</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            Payment from <span class="font-semibold">Jese Leos</span>
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            Apr 15 ,2021
                                        </td>
                                        <td
                                            class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                            $2300
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            0045568939
                                        </td>
                                        <td
                                            class="inline-flex items-center p-4 space-x-2 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            <svg class="w-7 h-7" aria-hidden="true"
                                                enable-background="new 0 0 780 500" viewBox="0 0 780 500"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m449.01 250c0 99.143-80.371 179.5-179.51 179.5s-179.5-80.361-179.5-179.5c0-99.133 80.362-179.5 179.5-179.5 99.137 0 179.51 80.371 179.51 179.5"
                                                    fill="#d9222a"></path>
                                                <path
                                                    d="m510.49 70.496c-46.379 0-88.643 17.596-120.5 46.467-6.49 5.889-12.548 12.237-18.125 18.996h36.267c4.965 6.037 9.536 12.387 13.685 19.012h-63.635c-3.827 6.122-7.281 12.469-10.342 19.008h84.313c2.894 6.185 5.431 12.53 7.601 19.004h-99.513c-2.09 6.234-3.832 12.58-5.217 19.008h109.94c2.689 12.49 4.045 25.231 4.042 38.008 0 19.935-3.254 39.112-9.254 57.021h-99.513c2.164 6.477 4.7 12.824 7.596 19.008h84.316c-3.063 6.541-6.519 12.889-10.347 19.013h-63.625c4.147 6.62 8.719 12.966 13.685 18.996h36.259c-5.57 6.772-11.63 13.127-18.13 19.013 31.857 28.866 74.117 46.454 120.5 46.454 99.139 0 179.51-80.361 179.51-179.5 0-99.129-80.371-179.5-179.51-179.5"
                                                    fill="#ee9f2d"></path>
                                                <path
                                                    d="m666.07 350.06c0-3.199 2.592-5.801 5.796-5.801s5.796 2.602 5.796 5.801-2.592 5.801-5.796 5.801-5.796-2.602-5.796-5.801zm5.796 4.408c2.434-.001 4.407-1.974 4.408-4.408 0-2.432-1.971-4.402-4.402-4.404h-.006c-2.429-.003-4.4 1.963-4.404 4.391v.014c-.002 2.433 1.968 4.406 4.4 4.408.001-.001.003-.001.004-.001zm-.783-1.86h-1.187v-5.096h2.149c.45 0 .908 0 1.305.254.413.279.646.771.646 1.279 0 .571-.338 1.104-.884 1.312l.938 2.25h-1.315l-.779-2.017h-.871zm0-2.89h.658c.246 0 .505.021.726-.1.195-.125.296-.359.296-.584-.005-.209-.112-.402-.288-.518-.207-.129-.536-.101-.758-.101h-.634zm-443.5-80.063c-2.046-.238-2.945-.301-4.35-.301-11.046 0-16.638 3.787-16.638 11.268 0 4.611 2.729 7.545 6.987 7.545 7.939 0 13.659-7.559 14.001-18.512zm14.171 32.996h-16.146l.371-7.676c-4.926 6.065-11.496 8.949-20.426 8.949-10.563 0-17.804-8.25-17.804-20.229 0-18.024 12.596-28.541 34.217-28.541 2.208 0 5.042.199 7.941.57.604-2.441.763-3.488.763-4.801 0-4.908-3.396-6.737-12.5-6.737-9.533-.108-17.396 2.271-20.625 3.333.204-1.229 2.7-16.659 2.7-16.659 9.712-2.846 16.116-3.917 23.325-3.917 16.732 0 25.596 7.513 25.579 21.712.033 3.805-.597 8.5-1.579 14.671-1.691 10.734-5.32 33.721-5.816 39.325zm-62.158 0h-19.487l11.162-69.997-24.925 69.997h-13.279l-1.642-69.597-11.733 69.597h-18.242l15.237-91.056h28.021l1.7 50.968 17.092-50.968h31.167zm354.97-32.996c-2.037-.238-2.941-.301-4.342-.301-11.041 0-16.634 3.787-16.634 11.268 0 4.611 2.726 7.545 6.983 7.545 7.94 0 13.664-7.559 13.993-18.512zm14.184 32.996h-16.146l.366-7.676c-4.926 6.065-11.5 8.949-20.422 8.949-10.565 0-17.8-8.25-17.8-20.229 0-18.024 12.588-28.541 34.213-28.541 2.208 0 5.037.199 7.934.57.604-2.441.763-3.488.763-4.801 0-4.908-3.392-6.737-12.496-6.737-9.533-.108-17.387 2.271-20.629 3.333.204-1.229 2.709-16.659 2.709-16.659 9.712-2.846 16.112-3.917 23.313-3.917 16.74 0 25.604 7.513 25.587 21.712.032 3.805-.597 8.5-1.579 14.671-1.684 10.734-5.321 33.721-5.813 39.325zm-220.39-1.125c-5.333 1.679-9.491 2.398-14 2.398-9.962 0-15.399-5.725-15.399-16.267-.142-3.271 1.433-11.88 2.671-19.737 1.125-6.917 8.449-50.529 8.449-50.529h19.371l-2.263 11.208h11.699l-2.642 17.796h-11.742c-2.25 14.083-5.454 31.625-5.491 33.95 0 3.816 2.037 5.483 6.671 5.483 2.221 0 3.94-.227 5.254-.7zm59.392-.6c-6.654 2.034-13.075 3.017-19.879 3-21.684-.021-32.987-11.346-32.987-33.032 0-25.313 14.38-43.947 33.899-43.947 15.971 0 26.171 10.433 26.171 26.796 0 5.429-.7 10.729-2.388 18.212h-38.574c-1.305 10.741 5.57 15.217 16.837 15.217 6.935 0 13.188-1.429 20.142-4.663zm-10.888-43.9c.107-1.543 2.055-13.217-9.013-13.217-6.171 0-10.583 4.704-12.38 13.217zm-123.42-5.017c0 9.367 4.542 15.826 14.842 20.676 7.892 3.709 9.112 4.81 9.112 8.17 0 4.617-3.479 6.701-11.191 6.701-5.813 0-11.221-.908-17.458-2.922 0 0-2.563 16.321-2.68 17.102 4.43.967 8.38 1.861 20.279 2.19 20.563 0 30.059-7.829 30.059-24.75 0-10.175-3.976-16.146-13.737-20.634-8.171-3.75-9.108-4.587-9.108-8.045 0-4.004 3.237-6.046 9.537-6.046 3.825 0 9.05.408 14 1.112l2.775-17.175c-5.046-.8-12.696-1.442-17.15-1.442-21.801.001-29.347 11.388-29.28 25.063m229.09-23.116c5.412 0 10.458 1.421 17.412 4.921l3.188-19.763c-2.854-1.121-12.904-7.7-21.417-7.7-13.041 0-24.065 6.471-31.82 17.15-11.309-3.746-15.958 3.825-21.657 11.367l-5.063 1.179c.383-2.483.729-4.95.612-7.446h-17.896c-2.445 22.917-6.778 46.128-10.171 69.075l-.884 4.976h19.496c3.254-21.143 5.037-34.68 6.121-43.842l7.341-4.084c1.097-4.078 4.529-5.458 11.417-5.291-.926 5.008-1.389 10.091-1.383 15.184 0 24.225 13.07 39.308 34.05 39.308 5.404 0 10.041-.712 17.221-2.658l3.43-20.759c-6.458 3.181-11.759 4.677-16.559 4.677-11.329 0-18.184-8.363-18.184-22.185 0-20.051 10.196-34.109 24.746-34.109">
                                                </path>
                                                <path
                                                    d="m185.21 297.24h-19.491l11.171-69.988-24.926 69.988h-13.283l-1.642-69.588-11.733 69.588h-18.241l15.237-91.042h28.021l.788 56.362 18.904-56.362h30.267z"
                                                    fill="#fff"></path>
                                                <path
                                                    d="m647.52 211.6-4.321 26.309c-5.329-7.013-11.054-12.088-18.612-12.088-9.833 0-18.783 7.455-24.642 18.425-8.158-1.692-16.597-4.563-16.597-4.563l-.004.067c.658-6.134.921-9.875.862-11.146h-17.9c-2.438 22.917-6.771 46.128-10.157 69.075l-.893 4.976h19.492c2.633-17.096 4.648-31.291 6.133-42.551 6.658-6.016 9.992-11.266 16.721-10.916-2.979 7.205-4.725 15.503-4.725 24.017 0 18.513 9.366 30.725 23.533 30.725 7.142 0 12.621-2.462 17.967-8.171l-.913 6.884h18.435l14.842-91.042zm-24.371 73.941c-6.634 0-9.983-4.908-9.983-14.596 0-14.555 6.271-24.875 15.112-24.875 6.695 0 10.32 5.104 10.32 14.509.001 14.679-6.37 24.962-15.449 24.962z">
                                                </path>
                                                <path
                                                    d="m233.19 264.26c-2.042-.236-2.946-.299-4.346-.299-11.046 0-16.634 3.787-16.634 11.266 0 4.604 2.729 7.547 6.979 7.547 7.947-.001 13.668-7.559 14.001-18.514zm14.178 32.984h-16.146l.367-7.663c-4.921 6.054-11.5 8.95-20.421 8.95-10.567 0-17.805-8.25-17.805-20.229 0-18.032 12.592-28.542 34.217-28.542 2.208 0 5.042.2 7.938.571.604-2.441.763-3.487.763-4.808 0-4.909-3.392-6.729-12.496-6.729-9.537-.108-17.396 2.271-20.629 3.321.204-1.225 2.7-16.637 2.7-16.637 9.708-2.858 16.12-3.929 23.32-3.929 16.737 0 25.604 7.517 25.588 21.704.029 3.821-.604 8.513-1.584 14.675-1.687 10.724-5.319 33.724-5.812 39.316zm261.38-88.592-3.191 19.767c-6.95-3.496-12-4.92-17.407-4.92-14.551 0-24.75 14.058-24.75 34.106 0 13.821 6.857 22.181 18.184 22.181 4.8 0 10.096-1.492 16.554-4.675l-3.421 20.75c-7.184 1.957-11.816 2.67-17.225 2.67-20.977 0-34.051-15.084-34.051-39.309 0-32.55 18.059-55.3 43.888-55.3 8.507.001 18.561 3.609 21.419 4.73m31.443 55.608c-2.041-.236-2.941-.299-4.347-.299-11.041 0-16.633 3.787-16.633 11.266 0 4.604 2.729 7.547 6.983 7.547 7.938-.001 13.663-7.559 13.997-18.514zm14.178 32.984h-16.15l.371-7.663c-4.925 6.054-11.5 8.95-20.421 8.95-10.563 0-17.804-8.25-17.804-20.229 0-18.032 12.596-28.542 34.212-28.542 2.213 0 5.042.2 7.941.571.601-2.441.763-3.487.763-4.808 0-4.909-3.393-6.729-12.495-6.729-9.533-.108-17.396 2.271-20.63 3.321.204-1.225 2.704-16.637 2.704-16.637 9.709-2.858 16.116-3.929 23.316-3.929 16.741 0 25.604 7.517 25.583 21.704.033 3.821-.596 8.513-1.579 14.675-1.682 10.724-5.323 33.724-5.811 39.316zm-220.39-1.121c-5.338 1.679-9.496 2.408-14 2.408-9.962 0-15.399-5.726-15.399-16.268-.138-3.279 1.438-11.88 2.675-19.736 1.12-6.926 8.445-50.534 8.445-50.534h19.368l-2.26 11.212h9.941l-2.646 17.788h-9.975c-2.25 14.092-5.463 31.62-5.496 33.95 0 3.83 2.041 5.482 6.671 5.482 2.221 0 3.938-.216 5.254-.691zm59.391-.592c-6.65 2.033-13.079 3.012-19.879 3-21.685-.021-32.987-11.346-32.987-33.033 0-25.321 14.379-43.95 33.899-43.95 15.971 0 26.171 10.429 26.171 26.8 0 5.434-.7 10.733-2.384 18.212h-38.574c-1.306 10.741 5.569 15.222 16.837 15.222 6.93 0 13.188-1.435 20.138-4.677zm-10.891-43.912c.116-1.538 2.06-13.217-9.013-13.217-6.167 0-10.579 4.717-12.375 13.217zm-123.42-5.005c0 9.367 4.542 15.818 14.842 20.675 7.892 3.709 9.112 4.812 9.112 8.172 0 4.616-3.483 6.699-11.188 6.699-5.816 0-11.225-.908-17.467-2.921 0 0-2.554 16.321-2.671 17.101 4.421.967 8.375 1.85 20.275 2.191 20.566 0 30.059-7.829 30.059-24.746 0-10.18-3.971-16.15-13.737-20.637-8.167-3.759-9.113-4.584-9.113-8.046 0-4 3.246-6.059 9.542-6.059 3.821 0 9.046.421 14.004 1.125l2.771-17.179c-5.042-.8-12.692-1.441-17.146-1.441-21.804 0-29.346 11.379-29.283 25.066m398.45 50.63h-18.438l.917-6.893c-5.347 5.717-10.825 8.18-17.968 8.18-14.166 0-23.528-12.213-23.528-30.726 0-24.63 14.521-45.392 31.708-45.392 7.559 0 13.279 3.087 18.604 10.096l4.325-26.308h19.221zm-28.746-17.109c9.075 0 15.45-10.283 15.45-24.953 0-9.405-3.629-14.509-10.325-14.509-8.837 0-15.115 10.315-15.115 24.875-.001 9.686 3.357 14.587 9.99 14.587zm-56.842-56.929c-2.441 22.917-6.773 46.13-10.162 69.063l-.892 4.976h19.491c6.972-45.275 8.658-54.117 19.588-53.009 1.742-9.267 4.982-17.383 7.399-21.479-8.163-1.7-12.721 2.913-18.688 11.675.471-3.788 1.333-7.467 1.162-11.225zm-160.42 0c-2.446 22.917-6.779 46.13-10.167 69.063l-.888 4.976h19.5c6.963-45.275 8.646-54.117 19.57-53.009 1.75-9.267 4.991-17.383 7.399-21.479-8.154-1.7-12.717 2.913-18.679 11.675.471-3.788 1.324-7.467 1.162-11.225zm254.57 68.241c-.004-3.199 2.586-5.795 5.784-5.799h.012c3.197-.004 5.793 2.586 5.796 5.783v.016c-.001 3.201-2.595 5.795-5.796 5.797-3.201-.002-5.795-2.596-5.796-5.797zm5.796 4.405c2.431.002 4.402-1.969 4.403-4.399v-.004c.003-2.433-1.968-4.406-4.399-4.408h-.004c-2.435.001-4.407 1.974-4.408 4.408.002 2.432 1.975 4.403 4.408 4.403zm-.784-1.871h-1.188v-5.082h2.153c.446 0 .909.009 1.296.254.417.283.654.767.654 1.274 0 .575-.337 1.112-.888 1.317l.941 2.236h-1.32l-.779-2.009h-.87zm0-2.879h.653c.246 0 .513.019.729-.1.196-.125.296-.361.296-.588-.009-.21-.114-.404-.287-.523-.204-.117-.542-.084-.763-.084h-.629z"
                                                    fill="#fff"></path>
                                            </svg>
                                            <span>••• 163</span>
                                        </td>
                                        <td class="p-4 whitespace-nowrap">
                                            <span
                                                class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 border border-green-100 dark:border-green-500">Completed</span>
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-50 dark:bg-gray-700">
                                        <td
                                            class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            Refund to <span class="font-semibold">THEMESBERG LLC</span>
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            Apr 11 ,2021
                                        </td>
                                        <td
                                            class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                            -$560
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            0031568935
                                        </td>
                                        <td
                                            class="inline-flex items-center p-4 space-x-2 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            <svg class="w-7 h-7" aria-hidden="true"
                                                enable-background="new 0 0 780 500" viewBox="0 0 780 500"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m449.01 250c0 99.143-80.371 179.5-179.51 179.5s-179.5-80.361-179.5-179.5c0-99.133 80.362-179.5 179.5-179.5 99.137 0 179.51 80.371 179.51 179.5"
                                                    fill="#d9222a"></path>
                                                <path
                                                    d="m510.49 70.496c-46.379 0-88.643 17.596-120.5 46.467-6.49 5.889-12.548 12.237-18.125 18.996h36.267c4.965 6.037 9.536 12.387 13.685 19.012h-63.635c-3.827 6.122-7.281 12.469-10.342 19.008h84.313c2.894 6.185 5.431 12.53 7.601 19.004h-99.513c-2.09 6.234-3.832 12.58-5.217 19.008h109.94c2.689 12.49 4.045 25.231 4.042 38.008 0 19.935-3.254 39.112-9.254 57.021h-99.513c2.164 6.477 4.7 12.824 7.596 19.008h84.316c-3.063 6.541-6.519 12.889-10.347 19.013h-63.625c4.147 6.62 8.719 12.966 13.685 18.996h36.259c-5.57 6.772-11.63 13.127-18.13 19.013 31.857 28.866 74.117 46.454 120.5 46.454 99.139 0 179.51-80.361 179.51-179.5 0-99.129-80.371-179.5-179.51-179.5"
                                                    fill="#ee9f2d"></path>
                                                <path
                                                    d="m666.07 350.06c0-3.199 2.592-5.801 5.796-5.801s5.796 2.602 5.796 5.801-2.592 5.801-5.796 5.801-5.796-2.602-5.796-5.801zm5.796 4.408c2.434-.001 4.407-1.974 4.408-4.408 0-2.432-1.971-4.402-4.402-4.404h-.006c-2.429-.003-4.4 1.963-4.404 4.391v.014c-.002 2.433 1.968 4.406 4.4 4.408.001-.001.003-.001.004-.001zm-.783-1.86h-1.187v-5.096h2.149c.45 0 .908 0 1.305.254.413.279.646.771.646 1.279 0 .571-.338 1.104-.884 1.312l.938 2.25h-1.315l-.779-2.017h-.871zm0-2.89h.658c.246 0 .505.021.726-.1.195-.125.296-.359.296-.584-.005-.209-.112-.402-.288-.518-.207-.129-.536-.101-.758-.101h-.634zm-443.5-80.063c-2.046-.238-2.945-.301-4.35-.301-11.046 0-16.638 3.787-16.638 11.268 0 4.611 2.729 7.545 6.987 7.545 7.939 0 13.659-7.559 14.001-18.512zm14.171 32.996h-16.146l.371-7.676c-4.926 6.065-11.496 8.949-20.426 8.949-10.563 0-17.804-8.25-17.804-20.229 0-18.024 12.596-28.541 34.217-28.541 2.208 0 5.042.199 7.941.57.604-2.441.763-3.488.763-4.801 0-4.908-3.396-6.737-12.5-6.737-9.533-.108-17.396 2.271-20.625 3.333.204-1.229 2.7-16.659 2.7-16.659 9.712-2.846 16.116-3.917 23.325-3.917 16.732 0 25.596 7.513 25.579 21.712.033 3.805-.597 8.5-1.579 14.671-1.691 10.734-5.32 33.721-5.816 39.325zm-62.158 0h-19.487l11.162-69.997-24.925 69.997h-13.279l-1.642-69.597-11.733 69.597h-18.242l15.237-91.056h28.021l1.7 50.968 17.092-50.968h31.167zm354.97-32.996c-2.037-.238-2.941-.301-4.342-.301-11.041 0-16.634 3.787-16.634 11.268 0 4.611 2.726 7.545 6.983 7.545 7.94 0 13.664-7.559 13.993-18.512zm14.184 32.996h-16.146l.366-7.676c-4.926 6.065-11.5 8.949-20.422 8.949-10.565 0-17.8-8.25-17.8-20.229 0-18.024 12.588-28.541 34.213-28.541 2.208 0 5.037.199 7.934.57.604-2.441.763-3.488.763-4.801 0-4.908-3.392-6.737-12.496-6.737-9.533-.108-17.387 2.271-20.629 3.333.204-1.229 2.709-16.659 2.709-16.659 9.712-2.846 16.112-3.917 23.313-3.917 16.74 0 25.604 7.513 25.587 21.712.032 3.805-.597 8.5-1.579 14.671-1.684 10.734-5.321 33.721-5.813 39.325zm-220.39-1.125c-5.333 1.679-9.491 2.398-14 2.398-9.962 0-15.399-5.725-15.399-16.267-.142-3.271 1.433-11.88 2.671-19.737 1.125-6.917 8.449-50.529 8.449-50.529h19.371l-2.263 11.208h11.699l-2.642 17.796h-11.742c-2.25 14.083-5.454 31.625-5.491 33.95 0 3.816 2.037 5.483 6.671 5.483 2.221 0 3.94-.227 5.254-.7zm59.392-.6c-6.654 2.034-13.075 3.017-19.879 3-21.684-.021-32.987-11.346-32.987-33.032 0-25.313 14.38-43.947 33.899-43.947 15.971 0 26.171 10.433 26.171 26.796 0 5.429-.7 10.729-2.388 18.212h-38.574c-1.305 10.741 5.57 15.217 16.837 15.217 6.935 0 13.188-1.429 20.142-4.663zm-10.888-43.9c.107-1.543 2.055-13.217-9.013-13.217-6.171 0-10.583 4.704-12.38 13.217zm-123.42-5.017c0 9.367 4.542 15.826 14.842 20.676 7.892 3.709 9.112 4.81 9.112 8.17 0 4.617-3.479 6.701-11.191 6.701-5.813 0-11.221-.908-17.458-2.922 0 0-2.563 16.321-2.68 17.102 4.43.967 8.38 1.861 20.279 2.19 20.563 0 30.059-7.829 30.059-24.75 0-10.175-3.976-16.146-13.737-20.634-8.171-3.75-9.108-4.587-9.108-8.045 0-4.004 3.237-6.046 9.537-6.046 3.825 0 9.05.408 14 1.112l2.775-17.175c-5.046-.8-12.696-1.442-17.15-1.442-21.801.001-29.347 11.388-29.28 25.063m229.09-23.116c5.412 0 10.458 1.421 17.412 4.921l3.188-19.763c-2.854-1.121-12.904-7.7-21.417-7.7-13.041 0-24.065 6.471-31.82 17.15-11.309-3.746-15.958 3.825-21.657 11.367l-5.063 1.179c.383-2.483.729-4.95.612-7.446h-17.896c-2.445 22.917-6.778 46.128-10.171 69.075l-.884 4.976h19.496c3.254-21.143 5.037-34.68 6.121-43.842l7.341-4.084c1.097-4.078 4.529-5.458 11.417-5.291-.926 5.008-1.389 10.091-1.383 15.184 0 24.225 13.07 39.308 34.05 39.308 5.404 0 10.041-.712 17.221-2.658l3.43-20.759c-6.458 3.181-11.759 4.677-16.559 4.677-11.329 0-18.184-8.363-18.184-22.185 0-20.051 10.196-34.109 24.746-34.109">
                                                </path>
                                                <path
                                                    d="m185.21 297.24h-19.491l11.171-69.988-24.926 69.988h-13.283l-1.642-69.588-11.733 69.588h-18.241l15.237-91.042h28.021l.788 56.362 18.904-56.362h30.267z"
                                                    fill="#fff"></path>
                                                <path
                                                    d="m647.52 211.6-4.321 26.309c-5.329-7.013-11.054-12.088-18.612-12.088-9.833 0-18.783 7.455-24.642 18.425-8.158-1.692-16.597-4.563-16.597-4.563l-.004.067c.658-6.134.921-9.875.862-11.146h-17.9c-2.438 22.917-6.771 46.128-10.157 69.075l-.893 4.976h19.492c2.633-17.096 4.648-31.291 6.133-42.551 6.658-6.016 9.992-11.266 16.721-10.916-2.979 7.205-4.725 15.503-4.725 24.017 0 18.513 9.366 30.725 23.533 30.725 7.142 0 12.621-2.462 17.967-8.171l-.913 6.884h18.435l14.842-91.042zm-24.371 73.941c-6.634 0-9.983-4.908-9.983-14.596 0-14.555 6.271-24.875 15.112-24.875 6.695 0 10.32 5.104 10.32 14.509.001 14.679-6.37 24.962-15.449 24.962z">
                                                </path>
                                                <path
                                                    d="m233.19 264.26c-2.042-.236-2.946-.299-4.346-.299-11.046 0-16.634 3.787-16.634 11.266 0 4.604 2.729 7.547 6.979 7.547 7.947-.001 13.668-7.559 14.001-18.514zm14.178 32.984h-16.146l.367-7.663c-4.921 6.054-11.5 8.95-20.421 8.95-10.567 0-17.805-8.25-17.805-20.229 0-18.032 12.592-28.542 34.217-28.542 2.208 0 5.042.2 7.938.571.604-2.441.763-3.487.763-4.808 0-4.909-3.392-6.729-12.496-6.729-9.537-.108-17.396 2.271-20.629 3.321.204-1.225 2.7-16.637 2.7-16.637 9.708-2.858 16.12-3.929 23.32-3.929 16.737 0 25.604 7.517 25.588 21.704.029 3.821-.604 8.513-1.584 14.675-1.687 10.724-5.319 33.724-5.812 39.316zm261.38-88.592-3.191 19.767c-6.95-3.496-12-4.92-17.407-4.92-14.551 0-24.75 14.058-24.75 34.106 0 13.821 6.857 22.181 18.184 22.181 4.8 0 10.096-1.492 16.554-4.675l-3.421 20.75c-7.184 1.957-11.816 2.67-17.225 2.67-20.977 0-34.051-15.084-34.051-39.309 0-32.55 18.059-55.3 43.888-55.3 8.507.001 18.561 3.609 21.419 4.73m31.443 55.608c-2.041-.236-2.941-.299-4.347-.299-11.041 0-16.633 3.787-16.633 11.266 0 4.604 2.729 7.547 6.983 7.547 7.938-.001 13.663-7.559 13.997-18.514zm14.178 32.984h-16.15l.371-7.663c-4.925 6.054-11.5 8.95-20.421 8.95-10.563 0-17.804-8.25-17.804-20.229 0-18.032 12.596-28.542 34.212-28.542 2.213 0 5.042.2 7.941.571.601-2.441.763-3.487.763-4.808 0-4.909-3.393-6.729-12.495-6.729-9.533-.108-17.396 2.271-20.63 3.321.204-1.225 2.704-16.637 2.704-16.637 9.709-2.858 16.116-3.929 23.316-3.929 16.741 0 25.604 7.517 25.583 21.704.033 3.821-.596 8.513-1.579 14.675-1.682 10.724-5.323 33.724-5.811 39.316zm-220.39-1.121c-5.338 1.679-9.496 2.408-14 2.408-9.962 0-15.399-5.726-15.399-16.268-.138-3.279 1.438-11.88 2.675-19.736 1.12-6.926 8.445-50.534 8.445-50.534h19.368l-2.26 11.212h9.941l-2.646 17.788h-9.975c-2.25 14.092-5.463 31.62-5.496 33.95 0 3.83 2.041 5.482 6.671 5.482 2.221 0 3.938-.216 5.254-.691zm59.391-.592c-6.65 2.033-13.079 3.012-19.879 3-21.685-.021-32.987-11.346-32.987-33.033 0-25.321 14.379-43.95 33.899-43.95 15.971 0 26.171 10.429 26.171 26.8 0 5.434-.7 10.733-2.384 18.212h-38.574c-1.306 10.741 5.569 15.222 16.837 15.222 6.93 0 13.188-1.435 20.138-4.677zm-10.891-43.912c.116-1.538 2.06-13.217-9.013-13.217-6.167 0-10.579 4.717-12.375 13.217zm-123.42-5.005c0 9.367 4.542 15.818 14.842 20.675 7.892 3.709 9.112 4.812 9.112 8.172 0 4.616-3.483 6.699-11.188 6.699-5.816 0-11.225-.908-17.467-2.921 0 0-2.554 16.321-2.671 17.101 4.421.967 8.375 1.85 20.275 2.191 20.566 0 30.059-7.829 30.059-24.746 0-10.18-3.971-16.15-13.737-20.637-8.167-3.759-9.113-4.584-9.113-8.046 0-4 3.246-6.059 9.542-6.059 3.821 0 9.046.421 14.004 1.125l2.771-17.179c-5.042-.8-12.692-1.441-17.146-1.441-21.804 0-29.346 11.379-29.283 25.066m398.45 50.63h-18.438l.917-6.893c-5.347 5.717-10.825 8.18-17.968 8.18-14.166 0-23.528-12.213-23.528-30.726 0-24.63 14.521-45.392 31.708-45.392 7.559 0 13.279 3.087 18.604 10.096l4.325-26.308h19.221zm-28.746-17.109c9.075 0 15.45-10.283 15.45-24.953 0-9.405-3.629-14.509-10.325-14.509-8.837 0-15.115 10.315-15.115 24.875-.001 9.686 3.357 14.587 9.99 14.587zm-56.842-56.929c-2.441 22.917-6.773 46.13-10.162 69.063l-.892 4.976h19.491c6.972-45.275 8.658-54.117 19.588-53.009 1.742-9.267 4.982-17.383 7.399-21.479-8.163-1.7-12.721 2.913-18.688 11.675.471-3.788 1.333-7.467 1.162-11.225zm-160.42 0c-2.446 22.917-6.779 46.13-10.167 69.063l-.888 4.976h19.5c6.963-45.275 8.646-54.117 19.57-53.009 1.75-9.267 4.991-17.383 7.399-21.479-8.154-1.7-12.717 2.913-18.679 11.675.471-3.788 1.324-7.467 1.162-11.225zm254.57 68.241c-.004-3.199 2.586-5.795 5.784-5.799h.012c3.197-.004 5.793 2.586 5.796 5.783v.016c-.001 3.201-2.595 5.795-5.796 5.797-3.201-.002-5.795-2.596-5.796-5.797zm5.796 4.405c2.431.002 4.402-1.969 4.403-4.399v-.004c.003-2.433-1.968-4.406-4.399-4.408h-.004c-2.435.001-4.407 1.974-4.408 4.408.002 2.432 1.975 4.403 4.408 4.403zm-.784-1.871h-1.188v-5.082h2.153c.446 0 .909.009 1.296.254.417.283.654.767.654 1.274 0 .575-.337 1.112-.888 1.317l.941 2.236h-1.32l-.779-2.009h-.87zm0-2.879h.653c.246 0 .513.019.729-.1.196-.125.296-.361.296-.588-.009-.21-.114-.404-.287-.523-.204-.117-.542-.084-.763-.084h-.629z"
                                                    fill="#fff"></path>
                                            </svg>
                                            <span>••• 443</span>
                                        </td>
                                        <td class="p-4 whitespace-nowrap">
                                            <span
                                                class="bg-orange-100 text-orange-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md border border-orange-100 dark:bg-gray-700 dark:border-orange-300 dark:text-orange-300">In
                                                review</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            Payment from <span class="font-semibold">Lana Lysle</span>
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            Apr 6 ,2021
                                        </td>
                                        <td
                                            class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                            $1437
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            0023568934
                                        </td>
                                        <td
                                            class="inline-flex items-center p-4 space-x-2 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            <svg class="w-7 h-7" aria-hidden="true"
                                                enable-background="new 0 0 780 500" viewBox="0 0 780 500"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m449.01 250c0 99.143-80.371 179.5-179.51 179.5s-179.5-80.361-179.5-179.5c0-99.133 80.362-179.5 179.5-179.5 99.137 0 179.51 80.371 179.51 179.5"
                                                    fill="#d9222a"></path>
                                                <path
                                                    d="m510.49 70.496c-46.379 0-88.643 17.596-120.5 46.467-6.49 5.889-12.548 12.237-18.125 18.996h36.267c4.965 6.037 9.536 12.387 13.685 19.012h-63.635c-3.827 6.122-7.281 12.469-10.342 19.008h84.313c2.894 6.185 5.431 12.53 7.601 19.004h-99.513c-2.09 6.234-3.832 12.58-5.217 19.008h109.94c2.689 12.49 4.045 25.231 4.042 38.008 0 19.935-3.254 39.112-9.254 57.021h-99.513c2.164 6.477 4.7 12.824 7.596 19.008h84.316c-3.063 6.541-6.519 12.889-10.347 19.013h-63.625c4.147 6.62 8.719 12.966 13.685 18.996h36.259c-5.57 6.772-11.63 13.127-18.13 19.013 31.857 28.866 74.117 46.454 120.5 46.454 99.139 0 179.51-80.361 179.51-179.5 0-99.129-80.371-179.5-179.51-179.5"
                                                    fill="#ee9f2d"></path>
                                                <path
                                                    d="m666.07 350.06c0-3.199 2.592-5.801 5.796-5.801s5.796 2.602 5.796 5.801-2.592 5.801-5.796 5.801-5.796-2.602-5.796-5.801zm5.796 4.408c2.434-.001 4.407-1.974 4.408-4.408 0-2.432-1.971-4.402-4.402-4.404h-.006c-2.429-.003-4.4 1.963-4.404 4.391v.014c-.002 2.433 1.968 4.406 4.4 4.408.001-.001.003-.001.004-.001zm-.783-1.86h-1.187v-5.096h2.149c.45 0 .908 0 1.305.254.413.279.646.771.646 1.279 0 .571-.338 1.104-.884 1.312l.938 2.25h-1.315l-.779-2.017h-.871zm0-2.89h.658c.246 0 .505.021.726-.1.195-.125.296-.359.296-.584-.005-.209-.112-.402-.288-.518-.207-.129-.536-.101-.758-.101h-.634zm-443.5-80.063c-2.046-.238-2.945-.301-4.35-.301-11.046 0-16.638 3.787-16.638 11.268 0 4.611 2.729 7.545 6.987 7.545 7.939 0 13.659-7.559 14.001-18.512zm14.171 32.996h-16.146l.371-7.676c-4.926 6.065-11.496 8.949-20.426 8.949-10.563 0-17.804-8.25-17.804-20.229 0-18.024 12.596-28.541 34.217-28.541 2.208 0 5.042.199 7.941.57.604-2.441.763-3.488.763-4.801 0-4.908-3.396-6.737-12.5-6.737-9.533-.108-17.396 2.271-20.625 3.333.204-1.229 2.7-16.659 2.7-16.659 9.712-2.846 16.116-3.917 23.325-3.917 16.732 0 25.596 7.513 25.579 21.712.033 3.805-.597 8.5-1.579 14.671-1.691 10.734-5.32 33.721-5.816 39.325zm-62.158 0h-19.487l11.162-69.997-24.925 69.997h-13.279l-1.642-69.597-11.733 69.597h-18.242l15.237-91.056h28.021l1.7 50.968 17.092-50.968h31.167zm354.97-32.996c-2.037-.238-2.941-.301-4.342-.301-11.041 0-16.634 3.787-16.634 11.268 0 4.611 2.726 7.545 6.983 7.545 7.94 0 13.664-7.559 13.993-18.512zm14.184 32.996h-16.146l.366-7.676c-4.926 6.065-11.5 8.949-20.422 8.949-10.565 0-17.8-8.25-17.8-20.229 0-18.024 12.588-28.541 34.213-28.541 2.208 0 5.037.199 7.934.57.604-2.441.763-3.488.763-4.801 0-4.908-3.392-6.737-12.496-6.737-9.533-.108-17.387 2.271-20.629 3.333.204-1.229 2.709-16.659 2.709-16.659 9.712-2.846 16.112-3.917 23.313-3.917 16.74 0 25.604 7.513 25.587 21.712.032 3.805-.597 8.5-1.579 14.671-1.684 10.734-5.321 33.721-5.813 39.325zm-220.39-1.125c-5.333 1.679-9.491 2.398-14 2.398-9.962 0-15.399-5.725-15.399-16.267-.142-3.271 1.433-11.88 2.671-19.737 1.125-6.917 8.449-50.529 8.449-50.529h19.371l-2.263 11.208h11.699l-2.642 17.796h-11.742c-2.25 14.083-5.454 31.625-5.491 33.95 0 3.816 2.037 5.483 6.671 5.483 2.221 0 3.94-.227 5.254-.7zm59.392-.6c-6.654 2.034-13.075 3.017-19.879 3-21.684-.021-32.987-11.346-32.987-33.032 0-25.313 14.38-43.947 33.899-43.947 15.971 0 26.171 10.433 26.171 26.796 0 5.429-.7 10.729-2.388 18.212h-38.574c-1.305 10.741 5.57 15.217 16.837 15.217 6.935 0 13.188-1.429 20.142-4.663zm-10.888-43.9c.107-1.543 2.055-13.217-9.013-13.217-6.171 0-10.583 4.704-12.38 13.217zm-123.42-5.017c0 9.367 4.542 15.826 14.842 20.676 7.892 3.709 9.112 4.81 9.112 8.17 0 4.617-3.479 6.701-11.191 6.701-5.813 0-11.221-.908-17.458-2.922 0 0-2.563 16.321-2.68 17.102 4.43.967 8.38 1.861 20.279 2.19 20.563 0 30.059-7.829 30.059-24.75 0-10.175-3.976-16.146-13.737-20.634-8.171-3.75-9.108-4.587-9.108-8.045 0-4.004 3.237-6.046 9.537-6.046 3.825 0 9.05.408 14 1.112l2.775-17.175c-5.046-.8-12.696-1.442-17.15-1.442-21.801.001-29.347 11.388-29.28 25.063m229.09-23.116c5.412 0 10.458 1.421 17.412 4.921l3.188-19.763c-2.854-1.121-12.904-7.7-21.417-7.7-13.041 0-24.065 6.471-31.82 17.15-11.309-3.746-15.958 3.825-21.657 11.367l-5.063 1.179c.383-2.483.729-4.95.612-7.446h-17.896c-2.445 22.917-6.778 46.128-10.171 69.075l-.884 4.976h19.496c3.254-21.143 5.037-34.68 6.121-43.842l7.341-4.084c1.097-4.078 4.529-5.458 11.417-5.291-.926 5.008-1.389 10.091-1.383 15.184 0 24.225 13.07 39.308 34.05 39.308 5.404 0 10.041-.712 17.221-2.658l3.43-20.759c-6.458 3.181-11.759 4.677-16.559 4.677-11.329 0-18.184-8.363-18.184-22.185 0-20.051 10.196-34.109 24.746-34.109">
                                                </path>
                                                <path
                                                    d="m185.21 297.24h-19.491l11.171-69.988-24.926 69.988h-13.283l-1.642-69.588-11.733 69.588h-18.241l15.237-91.042h28.021l.788 56.362 18.904-56.362h30.267z"
                                                    fill="#fff"></path>
                                                <path
                                                    d="m647.52 211.6-4.321 26.309c-5.329-7.013-11.054-12.088-18.612-12.088-9.833 0-18.783 7.455-24.642 18.425-8.158-1.692-16.597-4.563-16.597-4.563l-.004.067c.658-6.134.921-9.875.862-11.146h-17.9c-2.438 22.917-6.771 46.128-10.157 69.075l-.893 4.976h19.492c2.633-17.096 4.648-31.291 6.133-42.551 6.658-6.016 9.992-11.266 16.721-10.916-2.979 7.205-4.725 15.503-4.725 24.017 0 18.513 9.366 30.725 23.533 30.725 7.142 0 12.621-2.462 17.967-8.171l-.913 6.884h18.435l14.842-91.042zm-24.371 73.941c-6.634 0-9.983-4.908-9.983-14.596 0-14.555 6.271-24.875 15.112-24.875 6.695 0 10.32 5.104 10.32 14.509.001 14.679-6.37 24.962-15.449 24.962z">
                                                </path>
                                                <path
                                                    d="m233.19 264.26c-2.042-.236-2.946-.299-4.346-.299-11.046 0-16.634 3.787-16.634 11.266 0 4.604 2.729 7.547 6.979 7.547 7.947-.001 13.668-7.559 14.001-18.514zm14.178 32.984h-16.146l.367-7.663c-4.921 6.054-11.5 8.95-20.421 8.95-10.567 0-17.805-8.25-17.805-20.229 0-18.032 12.592-28.542 34.217-28.542 2.208 0 5.042.2 7.938.571.604-2.441.763-3.487.763-4.808 0-4.909-3.392-6.729-12.496-6.729-9.537-.108-17.396 2.271-20.629 3.321.204-1.225 2.7-16.637 2.7-16.637 9.708-2.858 16.12-3.929 23.32-3.929 16.737 0 25.604 7.517 25.588 21.704.029 3.821-.604 8.513-1.584 14.675-1.687 10.724-5.319 33.724-5.812 39.316zm261.38-88.592-3.191 19.767c-6.95-3.496-12-4.92-17.407-4.92-14.551 0-24.75 14.058-24.75 34.106 0 13.821 6.857 22.181 18.184 22.181 4.8 0 10.096-1.492 16.554-4.675l-3.421 20.75c-7.184 1.957-11.816 2.67-17.225 2.67-20.977 0-34.051-15.084-34.051-39.309 0-32.55 18.059-55.3 43.888-55.3 8.507.001 18.561 3.609 21.419 4.73m31.443 55.608c-2.041-.236-2.941-.299-4.347-.299-11.041 0-16.633 3.787-16.633 11.266 0 4.604 2.729 7.547 6.983 7.547 7.938-.001 13.663-7.559 13.997-18.514zm14.178 32.984h-16.15l.371-7.663c-4.925 6.054-11.5 8.95-20.421 8.95-10.563 0-17.804-8.25-17.804-20.229 0-18.032 12.596-28.542 34.212-28.542 2.213 0 5.042.2 7.941.571.601-2.441.763-3.487.763-4.808 0-4.909-3.393-6.729-12.495-6.729-9.533-.108-17.396 2.271-20.63 3.321.204-1.225 2.704-16.637 2.704-16.637 9.709-2.858 16.116-3.929 23.316-3.929 16.741 0 25.604 7.517 25.583 21.704.033 3.821-.596 8.513-1.579 14.675-1.682 10.724-5.323 33.724-5.811 39.316zm-220.39-1.121c-5.338 1.679-9.496 2.408-14 2.408-9.962 0-15.399-5.726-15.399-16.268-.138-3.279 1.438-11.88 2.675-19.736 1.12-6.926 8.445-50.534 8.445-50.534h19.368l-2.26 11.212h9.941l-2.646 17.788h-9.975c-2.25 14.092-5.463 31.62-5.496 33.95 0 3.83 2.041 5.482 6.671 5.482 2.221 0 3.938-.216 5.254-.691zm59.391-.592c-6.65 2.033-13.079 3.012-19.879 3-21.685-.021-32.987-11.346-32.987-33.033 0-25.321 14.379-43.95 33.899-43.95 15.971 0 26.171 10.429 26.171 26.8 0 5.434-.7 10.733-2.384 18.212h-38.574c-1.306 10.741 5.569 15.222 16.837 15.222 6.93 0 13.188-1.435 20.138-4.677zm-10.891-43.912c.116-1.538 2.06-13.217-9.013-13.217-6.167 0-10.579 4.717-12.375 13.217zm-123.42-5.005c0 9.367 4.542 15.818 14.842 20.675 7.892 3.709 9.112 4.812 9.112 8.172 0 4.616-3.483 6.699-11.188 6.699-5.816 0-11.225-.908-17.467-2.921 0 0-2.554 16.321-2.671 17.101 4.421.967 8.375 1.85 20.275 2.191 20.566 0 30.059-7.829 30.059-24.746 0-10.18-3.971-16.15-13.737-20.637-8.167-3.759-9.113-4.584-9.113-8.046 0-4 3.246-6.059 9.542-6.059 3.821 0 9.046.421 14.004 1.125l2.771-17.179c-5.042-.8-12.692-1.441-17.146-1.441-21.804 0-29.346 11.379-29.283 25.066m398.45 50.63h-18.438l.917-6.893c-5.347 5.717-10.825 8.18-17.968 8.18-14.166 0-23.528-12.213-23.528-30.726 0-24.63 14.521-45.392 31.708-45.392 7.559 0 13.279 3.087 18.604 10.096l4.325-26.308h19.221zm-28.746-17.109c9.075 0 15.45-10.283 15.45-24.953 0-9.405-3.629-14.509-10.325-14.509-8.837 0-15.115 10.315-15.115 24.875-.001 9.686 3.357 14.587 9.99 14.587zm-56.842-56.929c-2.441 22.917-6.773 46.13-10.162 69.063l-.892 4.976h19.491c6.972-45.275 8.658-54.117 19.588-53.009 1.742-9.267 4.982-17.383 7.399-21.479-8.163-1.7-12.721 2.913-18.688 11.675.471-3.788 1.333-7.467 1.162-11.225zm-160.42 0c-2.446 22.917-6.779 46.13-10.167 69.063l-.888 4.976h19.5c6.963-45.275 8.646-54.117 19.57-53.009 1.75-9.267 4.991-17.383 7.399-21.479-8.154-1.7-12.717 2.913-18.679 11.675.471-3.788 1.324-7.467 1.162-11.225zm254.57 68.241c-.004-3.199 2.586-5.795 5.784-5.799h.012c3.197-.004 5.793 2.586 5.796 5.783v.016c-.001 3.201-2.595 5.795-5.796 5.797-3.201-.002-5.795-2.596-5.796-5.797zm5.796 4.405c2.431.002 4.402-1.969 4.403-4.399v-.004c.003-2.433-1.968-4.406-4.399-4.408h-.004c-2.435.001-4.407 1.974-4.408 4.408.002 2.432 1.975 4.403 4.408 4.403zm-.784-1.871h-1.188v-5.082h2.153c.446 0 .909.009 1.296.254.417.283.654.767.654 1.274 0 .575-.337 1.112-.888 1.317l.941 2.236h-1.32l-.779-2.009h-.87zm0-2.879h.653c.246 0 .513.019.729-.1.196-.125.296-.361.296-.588-.009-.21-.114-.404-.287-.523-.204-.117-.542-.084-.763-.084h-.629z"
                                                    fill="#fff"></path>
                                            </svg>
                                            <span>••• 223</span>
                                        </td>
                                        <td class="p-4 whitespace-nowrap">
                                            <span
                                                class="bg-orange-100 text-orange-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md border border-orange-100 dark:bg-gray-700 dark:border-orange-300 dark:text-orange-300">In
                                                review</span>
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-50 dark:bg-gray-700">
                                        <td
                                            class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            Payment to <span class="font-semibold">Joseph Mcfall</span>
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            Apr 1 ,2021
                                        </td>
                                        <td
                                            class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                            $980
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            0057568935
                                        </td>
                                        <td
                                            class="inline-flex items-center p-4 space-x-2 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 256 83">
                                                <defs>
                                                    <linearGradient id="logosVisa0" x1="45.974%" x2="54.877%"
                                                        y1="-2.006%" y2="100%">
                                                        <stop offset="0%" stop-color="#222357"></stop>
                                                        <stop offset="100%" stop-color="#254AA5"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <path fill="url(#logosVisa0)"
                                                    d="M132.397 56.24c-.146-11.516 10.263-17.942 18.104-21.763c8.056-3.92 10.762-6.434 10.73-9.94c-.06-5.365-6.426-7.733-12.383-7.825c-10.393-.161-16.436 2.806-21.24 5.05l-3.744-17.519c4.82-2.221 13.745-4.158 23-4.243c21.725 0 35.938 10.724 36.015 27.351c.085 21.102-29.188 22.27-28.988 31.702c.069 2.86 2.798 5.912 8.778 6.688c2.96.392 11.131.692 20.395-3.574l3.636 16.95c-4.982 1.814-11.385 3.551-19.357 3.551c-20.448 0-34.83-10.87-34.946-26.428m89.241 24.968c-3.967 0-7.31-2.314-8.802-5.865L181.803 1.245h21.709l4.32 11.939h26.528l2.506-11.939H256l-16.697 79.963h-17.665m3.037-21.601l6.265-30.027h-17.158l10.893 30.027m-118.599 21.6L88.964 1.246h20.687l17.104 79.963h-20.679m-30.603 0L53.941 26.782l-8.71 46.277c-1.022 5.166-5.058 8.149-9.54 8.149H.493L0 78.886c7.226-1.568 15.436-4.097 20.41-6.803c3.044-1.653 3.912-3.098 4.912-7.026L41.819 1.245H63.68l33.516 79.963H75.473"
                                                    transform="matrix(1 0 0 -1 0 82.668)"></path>
                                            </svg>
                                            <span>••• 363</span>
                                        </td>
                                        <td class="p-4 whitespace-nowrap">
                                            <span
                                                class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 border border-green-100 dark:border-green-500">Completed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            Payment from <span class="font-semibold">Alphabet LLC</span>
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            Mar 23 ,2021
                                        </td>
                                        <td
                                            class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                            $11,436
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            00836143841
                                        </td>
                                        <td
                                            class="inline-flex items-center p-4 space-x-2 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            <svg class="w-7 h-7" aria-hidden="true"
                                                enable-background="new 0 0 780 500" viewBox="0 0 780 500"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m449.01 250c0 99.143-80.371 179.5-179.51 179.5s-179.5-80.361-179.5-179.5c0-99.133 80.362-179.5 179.5-179.5 99.137 0 179.51 80.371 179.51 179.5"
                                                    fill="#d9222a"></path>
                                                <path
                                                    d="m510.49 70.496c-46.379 0-88.643 17.596-120.5 46.467-6.49 5.889-12.548 12.237-18.125 18.996h36.267c4.965 6.037 9.536 12.387 13.685 19.012h-63.635c-3.827 6.122-7.281 12.469-10.342 19.008h84.313c2.894 6.185 5.431 12.53 7.601 19.004h-99.513c-2.09 6.234-3.832 12.58-5.217 19.008h109.94c2.689 12.49 4.045 25.231 4.042 38.008 0 19.935-3.254 39.112-9.254 57.021h-99.513c2.164 6.477 4.7 12.824 7.596 19.008h84.316c-3.063 6.541-6.519 12.889-10.347 19.013h-63.625c4.147 6.62 8.719 12.966 13.685 18.996h36.259c-5.57 6.772-11.63 13.127-18.13 19.013 31.857 28.866 74.117 46.454 120.5 46.454 99.139 0 179.51-80.361 179.51-179.5 0-99.129-80.371-179.5-179.51-179.5"
                                                    fill="#ee9f2d"></path>
                                                <path
                                                    d="m666.07 350.06c0-3.199 2.592-5.801 5.796-5.801s5.796 2.602 5.796 5.801-2.592 5.801-5.796 5.801-5.796-2.602-5.796-5.801zm5.796 4.408c2.434-.001 4.407-1.974 4.408-4.408 0-2.432-1.971-4.402-4.402-4.404h-.006c-2.429-.003-4.4 1.963-4.404 4.391v.014c-.002 2.433 1.968 4.406 4.4 4.408.001-.001.003-.001.004-.001zm-.783-1.86h-1.187v-5.096h2.149c.45 0 .908 0 1.305.254.413.279.646.771.646 1.279 0 .571-.338 1.104-.884 1.312l.938 2.25h-1.315l-.779-2.017h-.871zm0-2.89h.658c.246 0 .505.021.726-.1.195-.125.296-.359.296-.584-.005-.209-.112-.402-.288-.518-.207-.129-.536-.101-.758-.101h-.634zm-443.5-80.063c-2.046-.238-2.945-.301-4.35-.301-11.046 0-16.638 3.787-16.638 11.268 0 4.611 2.729 7.545 6.987 7.545 7.939 0 13.659-7.559 14.001-18.512zm14.171 32.996h-16.146l.371-7.676c-4.926 6.065-11.496 8.949-20.426 8.949-10.563 0-17.804-8.25-17.804-20.229 0-18.024 12.596-28.541 34.217-28.541 2.208 0 5.042.199 7.941.57.604-2.441.763-3.488.763-4.801 0-4.908-3.396-6.737-12.5-6.737-9.533-.108-17.396 2.271-20.625 3.333.204-1.229 2.7-16.659 2.7-16.659 9.712-2.846 16.116-3.917 23.325-3.917 16.732 0 25.596 7.513 25.579 21.712.033 3.805-.597 8.5-1.579 14.671-1.691 10.734-5.32 33.721-5.816 39.325zm-62.158 0h-19.487l11.162-69.997-24.925 69.997h-13.279l-1.642-69.597-11.733 69.597h-18.242l15.237-91.056h28.021l1.7 50.968 17.092-50.968h31.167zm354.97-32.996c-2.037-.238-2.941-.301-4.342-.301-11.041 0-16.634 3.787-16.634 11.268 0 4.611 2.726 7.545 6.983 7.545 7.94 0 13.664-7.559 13.993-18.512zm14.184 32.996h-16.146l.366-7.676c-4.926 6.065-11.5 8.949-20.422 8.949-10.565 0-17.8-8.25-17.8-20.229 0-18.024 12.588-28.541 34.213-28.541 2.208 0 5.037.199 7.934.57.604-2.441.763-3.488.763-4.801 0-4.908-3.392-6.737-12.496-6.737-9.533-.108-17.387 2.271-20.629 3.333.204-1.229 2.709-16.659 2.709-16.659 9.712-2.846 16.112-3.917 23.313-3.917 16.74 0 25.604 7.513 25.587 21.712.032 3.805-.597 8.5-1.579 14.671-1.684 10.734-5.321 33.721-5.813 39.325zm-220.39-1.125c-5.333 1.679-9.491 2.398-14 2.398-9.962 0-15.399-5.725-15.399-16.267-.142-3.271 1.433-11.88 2.671-19.737 1.125-6.917 8.449-50.529 8.449-50.529h19.371l-2.263 11.208h11.699l-2.642 17.796h-11.742c-2.25 14.083-5.454 31.625-5.491 33.95 0 3.816 2.037 5.483 6.671 5.483 2.221 0 3.94-.227 5.254-.7zm59.392-.6c-6.654 2.034-13.075 3.017-19.879 3-21.684-.021-32.987-11.346-32.987-33.032 0-25.313 14.38-43.947 33.899-43.947 15.971 0 26.171 10.433 26.171 26.796 0 5.429-.7 10.729-2.388 18.212h-38.574c-1.305 10.741 5.57 15.217 16.837 15.217 6.935 0 13.188-1.429 20.142-4.663zm-10.888-43.9c.107-1.543 2.055-13.217-9.013-13.217-6.171 0-10.583 4.704-12.38 13.217zm-123.42-5.017c0 9.367 4.542 15.826 14.842 20.676 7.892 3.709 9.112 4.81 9.112 8.17 0 4.617-3.479 6.701-11.191 6.701-5.813 0-11.221-.908-17.458-2.922 0 0-2.563 16.321-2.68 17.102 4.43.967 8.38 1.861 20.279 2.19 20.563 0 30.059-7.829 30.059-24.75 0-10.175-3.976-16.146-13.737-20.634-8.171-3.75-9.108-4.587-9.108-8.045 0-4.004 3.237-6.046 9.537-6.046 3.825 0 9.05.408 14 1.112l2.775-17.175c-5.046-.8-12.696-1.442-17.15-1.442-21.801.001-29.347 11.388-29.28 25.063m229.09-23.116c5.412 0 10.458 1.421 17.412 4.921l3.188-19.763c-2.854-1.121-12.904-7.7-21.417-7.7-13.041 0-24.065 6.471-31.82 17.15-11.309-3.746-15.958 3.825-21.657 11.367l-5.063 1.179c.383-2.483.729-4.95.612-7.446h-17.896c-2.445 22.917-6.778 46.128-10.171 69.075l-.884 4.976h19.496c3.254-21.143 5.037-34.68 6.121-43.842l7.341-4.084c1.097-4.078 4.529-5.458 11.417-5.291-.926 5.008-1.389 10.091-1.383 15.184 0 24.225 13.07 39.308 34.05 39.308 5.404 0 10.041-.712 17.221-2.658l3.43-20.759c-6.458 3.181-11.759 4.677-16.559 4.677-11.329 0-18.184-8.363-18.184-22.185 0-20.051 10.196-34.109 24.746-34.109">
                                                </path>
                                                <path
                                                    d="m185.21 297.24h-19.491l11.171-69.988-24.926 69.988h-13.283l-1.642-69.588-11.733 69.588h-18.241l15.237-91.042h28.021l.788 56.362 18.904-56.362h30.267z"
                                                    fill="#fff"></path>
                                                <path
                                                    d="m647.52 211.6-4.321 26.309c-5.329-7.013-11.054-12.088-18.612-12.088-9.833 0-18.783 7.455-24.642 18.425-8.158-1.692-16.597-4.563-16.597-4.563l-.004.067c.658-6.134.921-9.875.862-11.146h-17.9c-2.438 22.917-6.771 46.128-10.157 69.075l-.893 4.976h19.492c2.633-17.096 4.648-31.291 6.133-42.551 6.658-6.016 9.992-11.266 16.721-10.916-2.979 7.205-4.725 15.503-4.725 24.017 0 18.513 9.366 30.725 23.533 30.725 7.142 0 12.621-2.462 17.967-8.171l-.913 6.884h18.435l14.842-91.042zm-24.371 73.941c-6.634 0-9.983-4.908-9.983-14.596 0-14.555 6.271-24.875 15.112-24.875 6.695 0 10.32 5.104 10.32 14.509.001 14.679-6.37 24.962-15.449 24.962z">
                                                </path>
                                                <path
                                                    d="m233.19 264.26c-2.042-.236-2.946-.299-4.346-.299-11.046 0-16.634 3.787-16.634 11.266 0 4.604 2.729 7.547 6.979 7.547 7.947-.001 13.668-7.559 14.001-18.514zm14.178 32.984h-16.146l.367-7.663c-4.921 6.054-11.5 8.95-20.421 8.95-10.567 0-17.805-8.25-17.805-20.229 0-18.032 12.592-28.542 34.217-28.542 2.208 0 5.042.2 7.938.571.604-2.441.763-3.487.763-4.808 0-4.909-3.392-6.729-12.496-6.729-9.537-.108-17.396 2.271-20.629 3.321.204-1.225 2.7-16.637 2.7-16.637 9.708-2.858 16.12-3.929 23.32-3.929 16.737 0 25.604 7.517 25.588 21.704.029 3.821-.604 8.513-1.584 14.675-1.687 10.724-5.319 33.724-5.812 39.316zm261.38-88.592-3.191 19.767c-6.95-3.496-12-4.92-17.407-4.92-14.551 0-24.75 14.058-24.75 34.106 0 13.821 6.857 22.181 18.184 22.181 4.8 0 10.096-1.492 16.554-4.675l-3.421 20.75c-7.184 1.957-11.816 2.67-17.225 2.67-20.977 0-34.051-15.084-34.051-39.309 0-32.55 18.059-55.3 43.888-55.3 8.507.001 18.561 3.609 21.419 4.73m31.443 55.608c-2.041-.236-2.941-.299-4.347-.299-11.041 0-16.633 3.787-16.633 11.266 0 4.604 2.729 7.547 6.983 7.547 7.938-.001 13.663-7.559 13.997-18.514zm14.178 32.984h-16.15l.371-7.663c-4.925 6.054-11.5 8.95-20.421 8.95-10.563 0-17.804-8.25-17.804-20.229 0-18.032 12.596-28.542 34.212-28.542 2.213 0 5.042.2 7.941.571.601-2.441.763-3.487.763-4.808 0-4.909-3.393-6.729-12.495-6.729-9.533-.108-17.396 2.271-20.63 3.321.204-1.225 2.704-16.637 2.704-16.637 9.709-2.858 16.116-3.929 23.316-3.929 16.741 0 25.604 7.517 25.583 21.704.033 3.821-.596 8.513-1.579 14.675-1.682 10.724-5.323 33.724-5.811 39.316zm-220.39-1.121c-5.338 1.679-9.496 2.408-14 2.408-9.962 0-15.399-5.726-15.399-16.268-.138-3.279 1.438-11.88 2.675-19.736 1.12-6.926 8.445-50.534 8.445-50.534h19.368l-2.26 11.212h9.941l-2.646 17.788h-9.975c-2.25 14.092-5.463 31.62-5.496 33.95 0 3.83 2.041 5.482 6.671 5.482 2.221 0 3.938-.216 5.254-.691zm59.391-.592c-6.65 2.033-13.079 3.012-19.879 3-21.685-.021-32.987-11.346-32.987-33.033 0-25.321 14.379-43.95 33.899-43.95 15.971 0 26.171 10.429 26.171 26.8 0 5.434-.7 10.733-2.384 18.212h-38.574c-1.306 10.741 5.569 15.222 16.837 15.222 6.93 0 13.188-1.435 20.138-4.677zm-10.891-43.912c.116-1.538 2.06-13.217-9.013-13.217-6.167 0-10.579 4.717-12.375 13.217zm-123.42-5.005c0 9.367 4.542 15.818 14.842 20.675 7.892 3.709 9.112 4.812 9.112 8.172 0 4.616-3.483 6.699-11.188 6.699-5.816 0-11.225-.908-17.467-2.921 0 0-2.554 16.321-2.671 17.101 4.421.967 8.375 1.85 20.275 2.191 20.566 0 30.059-7.829 30.059-24.746 0-10.18-3.971-16.15-13.737-20.637-8.167-3.759-9.113-4.584-9.113-8.046 0-4 3.246-6.059 9.542-6.059 3.821 0 9.046.421 14.004 1.125l2.771-17.179c-5.042-.8-12.692-1.441-17.146-1.441-21.804 0-29.346 11.379-29.283 25.066m398.45 50.63h-18.438l.917-6.893c-5.347 5.717-10.825 8.18-17.968 8.18-14.166 0-23.528-12.213-23.528-30.726 0-24.63 14.521-45.392 31.708-45.392 7.559 0 13.279 3.087 18.604 10.096l4.325-26.308h19.221zm-28.746-17.109c9.075 0 15.45-10.283 15.45-24.953 0-9.405-3.629-14.509-10.325-14.509-8.837 0-15.115 10.315-15.115 24.875-.001 9.686 3.357 14.587 9.99 14.587zm-56.842-56.929c-2.441 22.917-6.773 46.13-10.162 69.063l-.892 4.976h19.491c6.972-45.275 8.658-54.117 19.588-53.009 1.742-9.267 4.982-17.383 7.399-21.479-8.163-1.7-12.721 2.913-18.688 11.675.471-3.788 1.333-7.467 1.162-11.225zm-160.42 0c-2.446 22.917-6.779 46.13-10.167 69.063l-.888 4.976h19.5c6.963-45.275 8.646-54.117 19.57-53.009 1.75-9.267 4.991-17.383 7.399-21.479-8.154-1.7-12.717 2.913-18.679 11.675.471-3.788 1.324-7.467 1.162-11.225zm254.57 68.241c-.004-3.199 2.586-5.795 5.784-5.799h.012c3.197-.004 5.793 2.586 5.796 5.783v.016c-.001 3.201-2.595 5.795-5.796 5.797-3.201-.002-5.795-2.596-5.796-5.797zm5.796 4.405c2.431.002 4.402-1.969 4.403-4.399v-.004c.003-2.433-1.968-4.406-4.399-4.408h-.004c-2.435.001-4.407 1.974-4.408 4.408.002 2.432 1.975 4.403 4.408 4.403zm-.784-1.871h-1.188v-5.082h2.153c.446 0 .909.009 1.296.254.417.283.654.767.654 1.274 0 .575-.337 1.112-.888 1.317l.941 2.236h-1.32l-.779-2.009h-.87zm0-2.879h.653c.246 0 .513.019.729-.1.196-.125.296-.361.296-.588-.009-.21-.114-.404-.287-.523-.204-.117-.542-.084-.763-.084h-.629z"
                                                    fill="#fff"></path>
                                            </svg>
                                            <span>••• 771</span>
                                        </td>
                                        <td class="p-4 whitespace-nowrap">
                                            <span
                                                class="bg-purple-100 text-purple-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md border border-purple-100 dark:bg-gray-700 dark:border-purple-500 dark:text-purple-400">In
                                                progress</span>
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-50 dark:bg-gray-700">
                                        <td
                                            class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            Payment from <span class="font-semibold">Bonnie Green</span>
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            Mar 23 ,2021
                                        </td>
                                        <td
                                            class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                            $560
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            0031568935
                                        </td>
                                        <td
                                            class="inline-flex items-center p-4 space-x-2 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            <svg class="w-7 h-7" aria-hidden="true"
                                                enable-background="new 0 0 780 500" viewBox="0 0 780 500"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m449.01 250c0 99.143-80.371 179.5-179.51 179.5s-179.5-80.361-179.5-179.5c0-99.133 80.362-179.5 179.5-179.5 99.137 0 179.51 80.371 179.51 179.5"
                                                    fill="#d9222a"></path>
                                                <path
                                                    d="m510.49 70.496c-46.379 0-88.643 17.596-120.5 46.467-6.49 5.889-12.548 12.237-18.125 18.996h36.267c4.965 6.037 9.536 12.387 13.685 19.012h-63.635c-3.827 6.122-7.281 12.469-10.342 19.008h84.313c2.894 6.185 5.431 12.53 7.601 19.004h-99.513c-2.09 6.234-3.832 12.58-5.217 19.008h109.94c2.689 12.49 4.045 25.231 4.042 38.008 0 19.935-3.254 39.112-9.254 57.021h-99.513c2.164 6.477 4.7 12.824 7.596 19.008h84.316c-3.063 6.541-6.519 12.889-10.347 19.013h-63.625c4.147 6.62 8.719 12.966 13.685 18.996h36.259c-5.57 6.772-11.63 13.127-18.13 19.013 31.857 28.866 74.117 46.454 120.5 46.454 99.139 0 179.51-80.361 179.51-179.5 0-99.129-80.371-179.5-179.51-179.5"
                                                    fill="#ee9f2d"></path>
                                                <path
                                                    d="m666.07 350.06c0-3.199 2.592-5.801 5.796-5.801s5.796 2.602 5.796 5.801-2.592 5.801-5.796 5.801-5.796-2.602-5.796-5.801zm5.796 4.408c2.434-.001 4.407-1.974 4.408-4.408 0-2.432-1.971-4.402-4.402-4.404h-.006c-2.429-.003-4.4 1.963-4.404 4.391v.014c-.002 2.433 1.968 4.406 4.4 4.408.001-.001.003-.001.004-.001zm-.783-1.86h-1.187v-5.096h2.149c.45 0 .908 0 1.305.254.413.279.646.771.646 1.279 0 .571-.338 1.104-.884 1.312l.938 2.25h-1.315l-.779-2.017h-.871zm0-2.89h.658c.246 0 .505.021.726-.1.195-.125.296-.359.296-.584-.005-.209-.112-.402-.288-.518-.207-.129-.536-.101-.758-.101h-.634zm-443.5-80.063c-2.046-.238-2.945-.301-4.35-.301-11.046 0-16.638 3.787-16.638 11.268 0 4.611 2.729 7.545 6.987 7.545 7.939 0 13.659-7.559 14.001-18.512zm14.171 32.996h-16.146l.371-7.676c-4.926 6.065-11.496 8.949-20.426 8.949-10.563 0-17.804-8.25-17.804-20.229 0-18.024 12.596-28.541 34.217-28.541 2.208 0 5.042.199 7.941.57.604-2.441.763-3.488.763-4.801 0-4.908-3.396-6.737-12.5-6.737-9.533-.108-17.396 2.271-20.625 3.333.204-1.229 2.7-16.659 2.7-16.659 9.712-2.846 16.116-3.917 23.325-3.917 16.732 0 25.596 7.513 25.579 21.712.033 3.805-.597 8.5-1.579 14.671-1.691 10.734-5.32 33.721-5.816 39.325zm-62.158 0h-19.487l11.162-69.997-24.925 69.997h-13.279l-1.642-69.597-11.733 69.597h-18.242l15.237-91.056h28.021l1.7 50.968 17.092-50.968h31.167zm354.97-32.996c-2.037-.238-2.941-.301-4.342-.301-11.041 0-16.634 3.787-16.634 11.268 0 4.611 2.726 7.545 6.983 7.545 7.94 0 13.664-7.559 13.993-18.512zm14.184 32.996h-16.146l.366-7.676c-4.926 6.065-11.5 8.949-20.422 8.949-10.565 0-17.8-8.25-17.8-20.229 0-18.024 12.588-28.541 34.213-28.541 2.208 0 5.037.199 7.934.57.604-2.441.763-3.488.763-4.801 0-4.908-3.392-6.737-12.496-6.737-9.533-.108-17.387 2.271-20.629 3.333.204-1.229 2.709-16.659 2.709-16.659 9.712-2.846 16.112-3.917 23.313-3.917 16.74 0 25.604 7.513 25.587 21.712.032 3.805-.597 8.5-1.579 14.671-1.684 10.734-5.321 33.721-5.813 39.325zm-220.39-1.125c-5.333 1.679-9.491 2.398-14 2.398-9.962 0-15.399-5.725-15.399-16.267-.142-3.271 1.433-11.88 2.671-19.737 1.125-6.917 8.449-50.529 8.449-50.529h19.371l-2.263 11.208h11.699l-2.642 17.796h-11.742c-2.25 14.083-5.454 31.625-5.491 33.95 0 3.816 2.037 5.483 6.671 5.483 2.221 0 3.94-.227 5.254-.7zm59.392-.6c-6.654 2.034-13.075 3.017-19.879 3-21.684-.021-32.987-11.346-32.987-33.032 0-25.313 14.38-43.947 33.899-43.947 15.971 0 26.171 10.433 26.171 26.796 0 5.429-.7 10.729-2.388 18.212h-38.574c-1.305 10.741 5.57 15.217 16.837 15.217 6.935 0 13.188-1.429 20.142-4.663zm-10.888-43.9c.107-1.543 2.055-13.217-9.013-13.217-6.171 0-10.583 4.704-12.38 13.217zm-123.42-5.017c0 9.367 4.542 15.826 14.842 20.676 7.892 3.709 9.112 4.81 9.112 8.17 0 4.617-3.479 6.701-11.191 6.701-5.813 0-11.221-.908-17.458-2.922 0 0-2.563 16.321-2.68 17.102 4.43.967 8.38 1.861 20.279 2.19 20.563 0 30.059-7.829 30.059-24.75 0-10.175-3.976-16.146-13.737-20.634-8.171-3.75-9.108-4.587-9.108-8.045 0-4.004 3.237-6.046 9.537-6.046 3.825 0 9.05.408 14 1.112l2.775-17.175c-5.046-.8-12.696-1.442-17.15-1.442-21.801.001-29.347 11.388-29.28 25.063m229.09-23.116c5.412 0 10.458 1.421 17.412 4.921l3.188-19.763c-2.854-1.121-12.904-7.7-21.417-7.7-13.041 0-24.065 6.471-31.82 17.15-11.309-3.746-15.958 3.825-21.657 11.367l-5.063 1.179c.383-2.483.729-4.95.612-7.446h-17.896c-2.445 22.917-6.778 46.128-10.171 69.075l-.884 4.976h19.496c3.254-21.143 5.037-34.68 6.121-43.842l7.341-4.084c1.097-4.078 4.529-5.458 11.417-5.291-.926 5.008-1.389 10.091-1.383 15.184 0 24.225 13.07 39.308 34.05 39.308 5.404 0 10.041-.712 17.221-2.658l3.43-20.759c-6.458 3.181-11.759 4.677-16.559 4.677-11.329 0-18.184-8.363-18.184-22.185 0-20.051 10.196-34.109 24.746-34.109">
                                                </path>
                                                <path
                                                    d="m185.21 297.24h-19.491l11.171-69.988-24.926 69.988h-13.283l-1.642-69.588-11.733 69.588h-18.241l15.237-91.042h28.021l.788 56.362 18.904-56.362h30.267z"
                                                    fill="#fff"></path>
                                                <path
                                                    d="m647.52 211.6-4.321 26.309c-5.329-7.013-11.054-12.088-18.612-12.088-9.833 0-18.783 7.455-24.642 18.425-8.158-1.692-16.597-4.563-16.597-4.563l-.004.067c.658-6.134.921-9.875.862-11.146h-17.9c-2.438 22.917-6.771 46.128-10.157 69.075l-.893 4.976h19.492c2.633-17.096 4.648-31.291 6.133-42.551 6.658-6.016 9.992-11.266 16.721-10.916-2.979 7.205-4.725 15.503-4.725 24.017 0 18.513 9.366 30.725 23.533 30.725 7.142 0 12.621-2.462 17.967-8.171l-.913 6.884h18.435l14.842-91.042zm-24.371 73.941c-6.634 0-9.983-4.908-9.983-14.596 0-14.555 6.271-24.875 15.112-24.875 6.695 0 10.32 5.104 10.32 14.509.001 14.679-6.37 24.962-15.449 24.962z">
                                                </path>
                                                <path
                                                    d="m233.19 264.26c-2.042-.236-2.946-.299-4.346-.299-11.046 0-16.634 3.787-16.634 11.266 0 4.604 2.729 7.547 6.979 7.547 7.947-.001 13.668-7.559 14.001-18.514zm14.178 32.984h-16.146l.367-7.663c-4.921 6.054-11.5 8.95-20.421 8.95-10.567 0-17.805-8.25-17.805-20.229 0-18.032 12.592-28.542 34.217-28.542 2.208 0 5.042.2 7.938.571.604-2.441.763-3.487.763-4.808 0-4.909-3.392-6.729-12.496-6.729-9.537-.108-17.396 2.271-20.629 3.321.204-1.225 2.7-16.637 2.7-16.637 9.708-2.858 16.12-3.929 23.32-3.929 16.737 0 25.604 7.517 25.588 21.704.029 3.821-.604 8.513-1.584 14.675-1.687 10.724-5.319 33.724-5.812 39.316zm261.38-88.592-3.191 19.767c-6.95-3.496-12-4.92-17.407-4.92-14.551 0-24.75 14.058-24.75 34.106 0 13.821 6.857 22.181 18.184 22.181 4.8 0 10.096-1.492 16.554-4.675l-3.421 20.75c-7.184 1.957-11.816 2.67-17.225 2.67-20.977 0-34.051-15.084-34.051-39.309 0-32.55 18.059-55.3 43.888-55.3 8.507.001 18.561 3.609 21.419 4.73m31.443 55.608c-2.041-.236-2.941-.299-4.347-.299-11.041 0-16.633 3.787-16.633 11.266 0 4.604 2.729 7.547 6.983 7.547 7.938-.001 13.663-7.559 13.997-18.514zm14.178 32.984h-16.15l.371-7.663c-4.925 6.054-11.5 8.95-20.421 8.95-10.563 0-17.804-8.25-17.804-20.229 0-18.032 12.596-28.542 34.212-28.542 2.213 0 5.042.2 7.941.571.601-2.441.763-3.487.763-4.808 0-4.909-3.393-6.729-12.495-6.729-9.533-.108-17.396 2.271-20.63 3.321.204-1.225 2.704-16.637 2.704-16.637 9.709-2.858 16.116-3.929 23.316-3.929 16.741 0 25.604 7.517 25.583 21.704.033 3.821-.596 8.513-1.579 14.675-1.682 10.724-5.323 33.724-5.811 39.316zm-220.39-1.121c-5.338 1.679-9.496 2.408-14 2.408-9.962 0-15.399-5.726-15.399-16.268-.138-3.279 1.438-11.88 2.675-19.736 1.12-6.926 8.445-50.534 8.445-50.534h19.368l-2.26 11.212h9.941l-2.646 17.788h-9.975c-2.25 14.092-5.463 31.62-5.496 33.95 0 3.83 2.041 5.482 6.671 5.482 2.221 0 3.938-.216 5.254-.691zm59.391-.592c-6.65 2.033-13.079 3.012-19.879 3-21.685-.021-32.987-11.346-32.987-33.033 0-25.321 14.379-43.95 33.899-43.95 15.971 0 26.171 10.429 26.171 26.8 0 5.434-.7 10.733-2.384 18.212h-38.574c-1.306 10.741 5.569 15.222 16.837 15.222 6.93 0 13.188-1.435 20.138-4.677zm-10.891-43.912c.116-1.538 2.06-13.217-9.013-13.217-6.167 0-10.579 4.717-12.375 13.217zm-123.42-5.005c0 9.367 4.542 15.818 14.842 20.675 7.892 3.709 9.112 4.812 9.112 8.172 0 4.616-3.483 6.699-11.188 6.699-5.816 0-11.225-.908-17.467-2.921 0 0-2.554 16.321-2.671 17.101 4.421.967 8.375 1.85 20.275 2.191 20.566 0 30.059-7.829 30.059-24.746 0-10.18-3.971-16.15-13.737-20.637-8.167-3.759-9.113-4.584-9.113-8.046 0-4 3.246-6.059 9.542-6.059 3.821 0 9.046.421 14.004 1.125l2.771-17.179c-5.042-.8-12.692-1.441-17.146-1.441-21.804 0-29.346 11.379-29.283 25.066m398.45 50.63h-18.438l.917-6.893c-5.347 5.717-10.825 8.18-17.968 8.18-14.166 0-23.528-12.213-23.528-30.726 0-24.63 14.521-45.392 31.708-45.392 7.559 0 13.279 3.087 18.604 10.096l4.325-26.308h19.221zm-28.746-17.109c9.075 0 15.45-10.283 15.45-24.953 0-9.405-3.629-14.509-10.325-14.509-8.837 0-15.115 10.315-15.115 24.875-.001 9.686 3.357 14.587 9.99 14.587zm-56.842-56.929c-2.441 22.917-6.773 46.13-10.162 69.063l-.892 4.976h19.491c6.972-45.275 8.658-54.117 19.588-53.009 1.742-9.267 4.982-17.383 7.399-21.479-8.163-1.7-12.721 2.913-18.688 11.675.471-3.788 1.333-7.467 1.162-11.225zm-160.42 0c-2.446 22.917-6.779 46.13-10.167 69.063l-.888 4.976h19.5c6.963-45.275 8.646-54.117 19.57-53.009 1.75-9.267 4.991-17.383 7.399-21.479-8.154-1.7-12.717 2.913-18.679 11.675.471-3.788 1.324-7.467 1.162-11.225zm254.57 68.241c-.004-3.199 2.586-5.795 5.784-5.799h.012c3.197-.004 5.793 2.586 5.796 5.783v.016c-.001 3.201-2.595 5.795-5.796 5.797-3.201-.002-5.795-2.596-5.796-5.797zm5.796 4.405c2.431.002 4.402-1.969 4.403-4.399v-.004c.003-2.433-1.968-4.406-4.399-4.408h-.004c-2.435.001-4.407 1.974-4.408 4.408.002 2.432 1.975 4.403 4.408 4.403zm-.784-1.871h-1.188v-5.082h2.153c.446 0 .909.009 1.296.254.417.283.654.767.654 1.274 0 .575-.337 1.112-.888 1.317l.941 2.236h-1.32l-.779-2.009h-.87zm0-2.879h.653c.246 0 .513.019.729-.1.196-.125.296-.361.296-.588-.009-.21-.114-.404-.287-.523-.204-.117-.542-.084-.763-.084h-.629z"
                                                    fill="#fff"></path>
                                            </svg>
                                            <span>••• 023</span>
                                        </td>
                                        <td class="p-4 whitespace-nowrap">
                                            <span
                                                class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 border border-green-100 dark:border-green-500">Completed</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card Footer -->
            <div class="flex items-center justify-between pt-3 sm:pt-6">
                <div>
                    <button
                        class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 rounded-lg hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
                        type="button" data-dropdown-toggle="transactions-dropdown">Last 7 days <svg
                            class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                        id="transactions-dropdown"
                        style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(355px, 3686px);"
                        data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top">
                        <div class="px-4 py-3" role="none">
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white" role="none">
                                Sep 16, 2021 - Sep 22, 2021
                            </p>
                        </div>
                        <ul class="py-1" role="none">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Yesterday</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Today</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Last 7 days</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Last 30 days</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Last 90 days</a>
                            </li>
                        </ul>
                        <div class="py-1" role="none">
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                role="menuitem">Custom...</a>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink-0">
                    <a href="#"
                        class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                        Transactions Report
                        <svg class="w-4 h-4 ml-1 sm:w-5 sm:h-5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
