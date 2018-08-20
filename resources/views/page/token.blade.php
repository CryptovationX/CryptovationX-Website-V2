<div id="works">
    <div class="container-fluid container">
        <style>
            .highcharts-exporting-group {
                display: none;
            }

            .highcharts-background {
                fill: transparent;
                ;
            }
        </style>
        <div class="row" style="margin-top:60px;">
            <div class="col-xs-12 col-sm-6">
                <h1 class="text-center img-responsive">Token Allocation</h1>
                <div id="highcharts-20e9353b-ac0b-4af3-bbd7-d668f69c316e"></div>
                <script>
                    Highcharts.setOptions({
                        chart: {
                            style: {
                                fontFamily: 'Open Sans'
                            }
                        }
                    });


                    (function () {
                        var files = ["https://code.highcharts.com/stock/highstock.js",
                                "https://code.highcharts.com/highcharts-more.js",
                                "https://code.highcharts.com/highcharts-3d.js",
                                "https://code.highcharts.com/modules/data.js",
                                "https://code.highcharts.com/modules/exporting.js",
                                "https://code.highcharts.com/modules/funnel.js",
                                "https://code.highcharts.com/modules/annotations.js",
                                "https://code.highcharts.com/modules/solid-gauge.js"
                            ],
                            loaded = 0;
                        if (typeof window["HighchartsEditor"] === "undefined") {
                            window.HighchartsEditor = {
                                ondone: [cl],
                                hasWrapped: false,
                                hasLoaded: false
                            };
                            include(files[0]);
                        } else {
                            if (window.HighchartsEditor.hasLoaded) {
                                cl();
                            } else {
                                window.HighchartsEditor.ondone.push(cl);
                            }
                        }

                        function isScriptAlreadyIncluded(src) {
                            var scripts = document.getElementsByTagName("script");
                            for (var i = 0; i < scripts.length; i++) {
                                if (scripts[i].hasAttribute("src")) {
                                    if ((scripts[i].getAttribute("src") || "").indexOf(src) >= 0 || (
                                            scripts[i].getAttribute(
                                                "src") === "http://code.highcharts.com/highcharts.js" &&
                                            src ===
                                            "https://code.highcharts.com/stock/highstock.js")) {
                                        return true;
                                    }
                                }
                            }
                            return false;
                        }

                        function check() {
                            if (loaded === files.length) {
                                for (var i = 0; i < window.HighchartsEditor.ondone.length; i++) {
                                    try {
                                        window.HighchartsEditor.ondone[i]();
                                    } catch (e) {
                                        console.error(e);
                                    }
                                }
                                window.HighchartsEditor.hasLoaded = true;
                            }
                        }

                        function include(script) {
                            function next() {
                                ++loaded;
                                if (loaded < files.length) {
                                    include(files[loaded]);
                                }
                                check();
                            }
                            if (isScriptAlreadyIncluded(script)) {
                                return next();
                            }
                            var sc = document.createElement("script");
                            sc.src = script;
                            sc.type = "text/javascript";
                            sc.onload = function () {
                                next();
                            };
                            document.head.appendChild(sc);
                        }

                        function each(a, fn) {
                            if (typeof a.forEach !== "undefined") {
                                a.forEach(fn);
                            } else {
                                for (var i = 0; i < a.length; i++) {
                                    if (fn) {
                                        fn(a[i]);
                                    }
                                }
                            }
                        }
                        var inc = {},
                            incl = [];
                        each(document.querySelectorAll("script"), function (t) {
                            inc[t.src.substr(0, t.src.indexOf("?"))] = 1;
                        });

                        function cl() {
                            if (typeof window["Highcharts"] !== "undefined") {
                                var options = {
                                    "chart": {
                                        "type": "pie",
                                        "options3d": {
                                            "enabled": true,
                                            "alpha": 30,
                                            "beta": 0
                                        }

                                    },
                                    "title": {
                                        "text": ""
                                    },
                                    "tooltip": {
                                        "pointFormat": "<b>{point.percentage:.1f}%</b>"
                                    },
                                    "plotOptions": {
                                        "pie": {
                                            "allowPointSelect": true,
                                            "cursor": "pointer",
                                            "depth": 40,
                                            "dataLabels": {
                                                "distance": 1,
                                                "enabled": true,
                                                "format": "{point.name}"

                                            }
                                        },
                                        "series": {
                                            "animation": false
                                        }
                                    },
                                    "series": [{
                                        "name": "Browser share",
                                        "turboThreshold": 0,
                                        "type": "pie"
                                    }],
                                    "data": {
                                        "csv": "\"Category\";\"Browser share\"\n\"Early Investors\";4.5\n\"Partner & Marketing\";6\n\"Team & Advisor\";9.5\n\"Reserve \";10\n\"‘Wealth for all’ <br> Initiative\";10\n\"Token Sale <br> Contributors\";60",
                                        "googleSpreadsheetKey": false,
                                        "googleSpreadsheetWorksheet": false
                                    },
                                    "subtitle": {},
                                    "yAxis": [{
                                        "title": {}
                                    }],
                                    "colors": ["#0f3a61", "#d2e2f2", "#a4c6e6", "#77a9da",
                                        "#4887c3", "#195792",
                                        "#e4d354", "#2b908f", "#f45b5b", "#91e8e1"
                                    ],
                                    "credits": {
                                        "enabled": false
                                    },
                                    // "responsive": {
                                    //     "rules": [{
                                    //         "condition": {
                                    //             "maxWidth": 375
                                    //         },
                                    //         "chartOptions": {
                                    //             "plotOptions": {
                                    //                 "pie": {
                                    //                     "allowPointSelect": true,
                                    //                     "cursor": "pointer",
                                    //                     "depth": 40,
                                    //                     "dataLabels": {
                                    //                         "distance": -15,
                                    //                         "enabled": true,
                                    //                         "format": "{point.name}"
                                    //                     }
                                    //                 },
                                    //                 "series": {
                                    //                     "animation": false
                                    //                 }
                                    //             },
                                    //         },
                                    //     }],
                                    // }

                                };
                                /*
                                // Sample of extending options:
                                Highcharts.merge(true, options, {
                                    chart: {
                                        backgroundColor: "#bada55"
                                    },
                                    plotOptions: {
                                        series: {
                                            cursor: "pointer",
                                            events: {
                                                click: function(event) {
                                                    alert(this.name + " clicked\n" +
                                                          "Alt: " + event.altKey + "\n" +
                                                          "Control: " + event.ctrlKey + "\n" +
                                                          "Shift: " + event.shiftKey + "\n");
                                                }
                                            }
                                        }
                                    }
                                });
                                */
                                new Highcharts.Chart("highcharts-20e9353b-ac0b-4af3-bbd7-d668f69c316e",
                                    options);
                            }
                        }
                    })();
                </script>
            </div>

            <div class="col-xs-12 col-sm-6">
                <h1 class="text-center img-responsive">Use of Funds</h1>
                <div id="highcharts-a2685a1c-a7f5-4ce1-a13a-50ddd51d2d15"></div>
                <script>
                    (function () {
                        var files = ["https://code.highcharts.com/stock/highstock.js",
                                "https://code.highcharts.com/highcharts-more.js",
                                "https://code.highcharts.com/highcharts-3d.js",
                                "https://code.highcharts.com/modules/data.js",
                                "https://code.highcharts.com/modules/exporting.js",
                                "https://code.highcharts.com/modules/funnel.js",
                                "https://code.highcharts.com/modules/annotations.js",
                                "https://code.highcharts.com/modules/solid-gauge.js"
                            ],
                            loaded = 0;
                        if (typeof window["HighchartsEditor"] === "undefined") {
                            window.HighchartsEditor = {
                                ondone: [cl],
                                hasWrapped: false,
                                hasLoaded: false
                            };
                            include(files[0]);
                        } else {
                            if (window.HighchartsEditor.hasLoaded) {
                                cl();
                            } else {
                                window.HighchartsEditor.ondone.push(cl);
                            }
                        }

                        function isScriptAlreadyIncluded(src) {
                            var scripts = document.getElementsByTagName("script");
                            for (var i = 0; i < scripts.length; i++) {
                                if (scripts[i].hasAttribute("src")) {
                                    if ((scripts[i].getAttribute("src") || "").indexOf(src) >= 0 || (scripts[i].getAttribute(
                                                "src") === "http://code.highcharts.com/highcharts.js" && src ===
                                            "https://code.highcharts.com/stock/highstock.js")) {
                                        return true;
                                    }
                                }
                            }
                            return false;
                        }

                        function check() {
                            if (loaded === files.length) {
                                for (var i = 0; i < window.HighchartsEditor.ondone.length; i++) {
                                    try {
                                        window.HighchartsEditor.ondone[i]();
                                    } catch (e) {
                                        console.error(e);
                                    }
                                }
                                window.HighchartsEditor.hasLoaded = true;
                            }
                        }

                        function include(script) {
                            function next() {
                                ++loaded;
                                if (loaded < files.length) {
                                    include(files[loaded]);
                                }
                                check();
                            }
                            if (isScriptAlreadyIncluded(script)) {
                                return next();
                            }
                            var sc = document.createElement("script");
                            sc.src = script;
                            sc.type = "text/javascript";
                            sc.onload = function () {
                                next();
                            };
                            document.head.appendChild(sc);
                        }

                        function each(a, fn) {
                            if (typeof a.forEach !== "undefined") {
                                a.forEach(fn);
                            } else {
                                for (var i = 0; i < a.length; i++) {
                                    if (fn) {
                                        fn(a[i]);
                                    }
                                }
                            }
                        }
                        var inc = {},
                            incl = [];
                        each(document.querySelectorAll("script"), function (t) {
                            inc[t.src.substr(0, t.src.indexOf("?"))] = 1;
                        });

                        function cl() {
                            if (typeof window["Highcharts"] !== "undefined") {
                                var options = {
                                    "chart": {
                                        "type": "pie",
                                        "options3d": {
                                            "enabled": true,
                                            "alpha": 30,
                                            "beta": 0
                                        }
                                    },
                                    "title": {
                                        "text": ""
                                    },
                                    "tooltip": {
                                        "pointFormat": "<b>{point.percentage:.1f}%</b>"
                                    },
                                    "plotOptions": {
                                        "pie": {
                                            "allowPointSelect": true,
                                            "cursor": "pointer",
                                            "depth": 40,
                                            "dataLabels": {
                                                "distance": 1,
                                                "enabled": true,
                                                "format": "{point.name}"
                                            }
                                        },
                                        "series": {
                                            "animation": false
                                        }
                                    },
                                    "series": [{
                                        "name": "Browser share",
                                        "turboThreshold": 0,
                                        "type": "pie"
                                    }],
                                    "data": {
                                        "csv": "\"Category\";\"Browser share\"\n\"Legal, Compliance <br> and Reserve\";10\n\"‘Wealth for All’ <br> Initiative​\";30\n\"Blockchain x AI Ecosystem\";20\n\"Robo-advisory <br> Platform\";40",
                                        "googleSpreadsheetKey": false,
                                        "googleSpreadsheetWorksheet": false
                                    },
                                    "subtitle": {},
                                    "yAxis": [{
                                        "title": {}
                                    }],
                                    "colors": ["#195792", "#4887c3", "#77a9da", "#a4c6e6", "#8085e9", "#f15c80",
                                        "#e4d354", "#2b908f", "#f45b5b", "#91e8e1"
                                    ],
                                    "credits": {
                                        "enabled": false
                                    },
                                    // "responsive": {
                                    //     "rules": [{
                                    //         "condition": {
                                    //             "maxWidth": 375
                                    //         },
                                    //         "chartOptions": {
                                    //             "plotOptions": {
                                    //                 "pie": {
                                    //                     "allowPointSelect": true,
                                    //                     "cursor": "pointer",
                                    //                     "depth": 40,
                                    //                     "dataLabels": {
                                    //                         "distance": -15,
                                    //                         "enabled": true,
                                    //                         "format": "{point.name}"
                                    //                     }
                                    //                 },
                                    //                 "series": {
                                    //                     "animation": false
                                    //                 }
                                    //             },
                                    //         },
                                    //     }],
                                    // }
                                };
                                /*
                                // Sample of extending options:
                                Highcharts.merge(true, options, {
                                    chart: {
                                        backgroundColor: "#bada55"
                                    },
                                    plotOptions: {
                                        series: {
                                            cursor: "pointer",
                                            events: {
                                                click: function(event) {
                                                    alert(this.name + " clicked\n" +
                                                          "Alt: " + event.altKey + "\n" +
                                                          "Control: " + event.ctrlKey + "\n" +
                                                          "Shift: " + event.shiftKey + "\n");
                                                }
                                            }
                                        }
                                    }
                                });
                                */
                                new Highcharts.Chart("highcharts-a2685a1c-a7f5-4ce1-a13a-50ddd51d2d15", options);
                            }
                        }
                    })();
                </script>
            </div>
            <!-- <div id="theworks" style="margin: auto;">
            <div class="row">
                <div class="col-xs-12 col-sm-6 portfolio-box mt10 mb10 leftReveal">
                    <h1 class="text-center img-responsive">Token Allocation</h1>
                    <img src="/images/TokenAllocation.png" class="img-responsive portfolio-image existing-project">
                </div>
                <div class="col-xs-12 col-sm-6 portfolio-box mt10 mb10 rightReveal">
                    <h1 class="text-center img-responsive">Use of Funds</h1>
                    <img src="/images/UseofFunds.png" class="img-responsive portfolio-image existing-project">
                </div>
            </div>
        </div> -->
        </div>
    </div>