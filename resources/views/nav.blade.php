<nav class="navbar">
    <div class="nav_icon" onclick="toggleSidebar()">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </div>
    <div class="navbar__left">
        <a class="link" href="{{ url('/') }}">Dashboard</a>
        <a class="link" href="{{ url('fabrication_pf') }}">Fabrication PF</a>
        <a class="link" href="{{ url('prevision') }}">Vente Prevision</a>
        <a class="link" href="{{ url('stock_pf') }}">Stock PF</a>
        <a class="link" href="{{ url('stock_pfsf') }}">Stock PFSF</a>
        <a class="link" href="{{ url('stock_pfvr') }}">Stock PFVR</a>
        <a class="link" href="{{ url('stock_composant') }}">Stock Composant</a>
        <a class="link" href="{{ url('bc_composant') }}">BC Composant</a>
    </div>
    <div class="navbar__right">
        <a href="#">

        </a>
        <a href="#">

        </a>
        <a href="#">

            <!-- <i class="fa fa-user-circle-o" aria-hidden="true"></i> -->
        </a>
    </div>
</nav>
<script>
    // This is for able to see chart. We are using Apex Chart. U can check the documentation of Apex Charts too..
    var options = {
        series: [
            {
                name: "Net Profit",
                data: [44, 55, 57, 56, 61, 58, 63, 60, 66],
            },
            {
                name: "Revenue",
                data: [76, 85, 101, 98, 87, 105, 91, 114, 94],
            },
            {
                name: "Free Cash Flow",
                data: [35, 41, 36, 26, 45, 48, 52, 53, 41],
            },
        ],
        chart: {
            type: "bar",
            height: 250, // make this 250
            sparkline: {
                enabled: true, // make this true
            },
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: "55%",
                endingShape: "rounded",
            },
        },
        dataLabels: {
            enabled: false,
        },
        stroke: {
            show: true,
            width: 2,
            colors: ["transparent"],
        },
        xaxis: {
            categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct"],
        },
        yaxis: {
            title: {
                text: "$ (thousands)",
            },
        },
        fill: {
            opacity: 1,
        },
        tooltip: {
            y: {
                formatter: function (val) {
                    return "$ " + val + " thousands";
                },
            },
        },
    };

    var chart = new ApexCharts(document.querySelector("#apex1"), options);
    chart.render();

    // Sidebar Toggle Codes;

    var sidebarOpen = false;
    var sidebar = document.getElementById("sidebar");
    var sidebarCloseIcon = document.getElementById("sidebarIcon");

    function toggleSidebar() {
        if (!sidebarOpen) {
            sidebar.classList.add("sidebar_responsive");
            sidebarOpen = true;
        }
    }

    function closeSidebar() {
        if (sidebarOpen) {
            sidebar.classList.remove("sidebar_responsive");
            sidebarOpen = false;
        }
    }

</script>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap");

    .navbar {
        background: #ffffff;
        grid-area: nav;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 30px 0 30px;
        border-bottom: 1px solid lightgray;
    }

    .nav_icon {
        display: none;
    }

    .nav_icon > i {
        font-size: 26px;
        color: #a5aaad;
    }

    .navbar__left > a {
        margin-right: 30px;
        text-decoration: none;
        color: #a5aaad;
        font-size: 15px;
        font-weight: 700;
    }

    .navbar__left .active_link {
        color: #265acc;
        border-bottom: 3px solid #265acc;
        padding-bottom: 12px;
    }

    .navbar__right {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .navbar__right > a {
        margin-left: 20px;
        text-decoration: none;
    }

    .navbar__right > a > i {
        color: #a5aaad;
        font-size: 16px;
        border-radius: 50px;
        background: #ffffff;
        box-shadow: 2px 2px 5px #d9d9d9, -2px -2px 5px #ffffff;
        padding: 7px;
    }



        .nav_icon {
            display: inline;
        }


</style>
