<?php
	
	include('../controller/section_j.php');
?>
<html>
    <head>
        <title>Internship Project</title>
        <style type="text/css">
            *{
                margin: 0;
                padding: 0;
                font-family: 'Times New Roman', Times, serif;

            }
            body{
                background-image: url(../asset/banner.jpg);
                /*background-position: center;*/
                background-repeat: no-repeat;
                /*background-size: cover;*/
                background-size: 100% 100vh;
            }
            html{
                scroll-behavior: smooth;
            }

            .navbar{
                width: 100%;
                margin: auto;
                padding: 35px 0;
                display: flex;
                align-items: center;
                justify-content: space-between;
                position: fixed;
            }
            .logo{
                width: 120px;
                cursor: pointer;
            }
            .navbar ul li{
                list-style: none;
                display: inline-block;
                margin: 0 20px;
                position: relative;
            }
            .navbar ul li a{
                text-decoration: none;
                color: white;
                text-transform: uppercase;
            }
            .navbar ul li::after{
                content: '';
                height: 3px;
                width: 0;
                background: #00817b;
                position: absolute;
                left: 0;
                bottom: -10px;
                transition: 0.5s;
            }
            .navbar ul li:hover::after{
                width: 100%; 
            }
            .content section{
                height: 100vh;
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                text-transform: uppercase;
            }
            #section1{
                background: linear-gradient(-40deg, rgba(0, 255, 255, 0.7)  30%,rgba(0, 38, 255, 0.2) 0%);
            }
            
            #section2{
                background-image: linear-gradient(rgba(0, 0, 0, 0.8) 80%, rgba(255, 255, 0, 0.1)), url(../asset/banner-4.jpg);
                /*background-position: center;*/
                background-repeat: no-repeat;
                /*background-size: cover;*/
                background-size: 100% 100vh;
            }

            #section3{
                background-image: linear-gradient(-30deg, rgba(0, 0, 0, 0.8) 50%,rgba(0, 38, 255, 0.3)), url(../asset/banner-10.jpg);
                /*background-position: center;*/
                background-repeat: no-repeat;
                /*background-size: cover;*/
                background-size: 100% 100vh;
            }
            #section4{
                background: linear-gradient(-50deg, rgba(32, 32, 32, 1)  80%,rgba(128, 128, 128, 1) 0%);
            }
            #section5{
                background: linear-gradient(-45deg, black  30%,rgba(255, 204, 255, 1) 0%);
            }
            .pie1{
                height: 25%;
                width: 25%;
                margin: 70px;
                /*margin-right: 700px;*/
            }
            .pie2{
                height: 25%;
                width: 25%;
                margin: 70px;
                /*margin-right: 700px;*/
            }
            .pie3{
                height: 25%;
                width: 25%;
                margin: 70px;
                /*margin-right: 700px;*/
            }
            .doughnut{
                height: 30%;
                width: 30%;
                margin: 70px;
                /*margin-right: 700px;*/
            }
            .bar{
                height: 50%;
                width: 50%;
                margin: 70px;
                /*margin-right: 700px;*/
            }
            .doc{
                margin-right: 75%;
                margin-bottom: 25%;
            }
        </style>
    </head>
    <body>
        <div class="banner">
            <div class="navbar">
                <h1 class="logo"></h1>
                <ul>
                    <li><a href="#section1">Home</a></li>
                    <li><a href="#section2">Language</a></li>
                    <li><a href="#section3">Students Opinion</a></li>
                    <li><a href="#section4">Compiler</a></li>
                    <li><a href="#section5">Documentation</a></li>
                </ul>
            </div>
        </div>
        <div class="content">
            <section id="section1">
                
            </section>
            <section id="section2">
                <div class="pie1">
                <canvas id="myChart"></canvas>
                </div>
                
                <script src="../js/chart.js"></script>
                <script>
                    var x = "<?php echo"$cj"?>";
                    var y = "<?php echo"$cpj"?>";
                    const ctx = document.getElementById('myChart').getContext('2d');
                    const myChart = new Chart(ctx, {
                        type: 'pie',
                        data: {
                            labels: ['C', 'C++'],
                            datasets: [{
                                label: "Programming Languages",
                                data: [ x, y],
                                backgroundColor: [
                                    'rgba(153, 0, 0)',
                                    'rgba(102, 178, 255)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)'
                                ],
                                borderWidth: 2
                            }]
                        },
                        
                    });
                </script>

                <div class="pie2">
                <canvas id="mChart"></canvas>
                </div>
                
                <script src="../js/chart.js"></script>
                <script>
                    var a = "<?php echo"$ck"?>";
                    var b = "<?php echo"$cpk"?>";
                    const ct = document.getElementById('mChart').getContext('2d');
                    const mChart = new Chart(ct, {
                        type: 'pie',
                        data: {
                            labels: ['C', 'C++'],
                            datasets: [{
                                label: '# of Votes',
                                data: [ a, b],
                                backgroundColor: [
                                    'rgba(0, 204, 204)',
                                    'rgba(204, 102, 0)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)'
                                ],
                                borderWidth: 2
                            }]
                        },
                       
                    });
                </script>

                <div class="pie3">
                <canvas id="yChart"></canvas>
                </div>
                
                <script src="../js/chart.js"></script>
                <script>
                    var c = "<?php echo"$cg"?>";
                    var d = "<?php echo"$cpg"?>";
                    const cty = document.getElementById('yChart').getContext('2d');
                    const yChart = new Chart(cty, {
                        type: 'pie',
                        data: {
                            labels: ['C', 'C++'],
                            datasets: [{
                                label: '# of Votes',
                                data: [ c, d],
                                backgroundColor: [
                                    'rgba(51, 0, 102)',
                                    'rgba(153, 255, 255)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)'
                                ],
                                borderWidth: 2
                            }]
                        },
                        
                    });
                </script>
                
            </section>
            <section id="section3">
                <div class="doughnut">
                <canvas id="dChart"></canvas>
                </div>
                
                <script src="../js/chart.js"></script>
                <script>
                    var e = "<?php echo"$se"?>";
                    var f = "<?php echo"$sy"?>";
                    const ctd = document.getElementById('dChart').getContext('2d');
                    const dChart = new Chart(ctd, {
                        type: 'doughnut',
                        data: {
                            labels: ['Semantic Analyzer', 'Syntax Analysis'],
                            datasets: [{
                                label: "Students Opinions",
                                data: [ e, f],
                                backgroundColor: [
                                    'rgba(153, 0, 0, 1)',
                                    'rgba(0, 153, 0, 1)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)'
                                ],
                                borderWidth: 2
                            }]
                        },
                        
                    });
                </script>
            </section>
            <section id="section4">
                <div class="bar">
                <canvas id="bChart"></canvas>
                </div>
                
                <script src="../js/chart.js"></script>
                <script>
                    var g = "<?php echo"$cdj"?>";
                    var h = "<?php echo"$onj"?>";
                    var i = "<?php echo"$cdk"?>";
                    var j = "<?php echo"$onk"?>";
                    var k = "<?php echo"$cdg"?>";
                    var l = "<?php echo"$ong"?>";
                    const ctb = document.getElementById('bChart').getContext('2d');
                    const bChart = new Chart(ctb, {
                        type: 'bar',
                        data: {
                            labels: ['Codeblocks', 'Online Compiler'],
                            datasets: [{
                                label: "Section J",
                                data: [ g, h],
                                backgroundColor: [
                                    'rgba(255, 0, 0, 0.5)',
                                    'rgba(255, 0, 0, 0.5)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)'
                                ],
                                borderWidth: 2
                            }, 
                            {
                                label: "Section K",
                                data: [ i, j],
                                backgroundColor: [
                                    'rgba(102, 178, 255, 0.5)',
                                    'rgba(102, 178, 255, 0.5)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)'
                                ],
                                borderWidth: 2
                            },
                            {
                                label: "Section G",
                                data: [ k, l],
                                backgroundColor: [
                                    'rgba(102, 0, 204, 0.5)',
                                    'rgba(102, 0, 204, 0.5)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)'
                                ],
                                borderWidth: 2
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                </script>
            </section>
            <section id="section5">
                <div class="doc">
                    <h1>Documentation</h1>
                    <ul>
                        <label><h3>Mid Task-1</h3></label>
                        <li><p>Write a code </p></li><br>
                        <label><h3>Mid Task-2</h3></label>
                        <li><p>Write a code </p></li><br>
                        <label><h3>Mid Task-3</h3></label>
                        <li><p>Write a code </p></li><br>
                        <label><h3>Final Task-1</h3></label>
                        <li><p>Write a code </p></li><br>
                        <label><h3>Final Task-2</h3></label>
                        <li><p>Write a code </p></li>
                    </ul>
                </div>
                
            </section>
        </div>
    </body>
</html>