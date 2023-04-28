<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>


    <div>
        <canvas id="myChart" style="width:100%;max-width:600px;max-height:400px"></canvas>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');

        const url = "http://localhost/smart-tray/chartdata.php";
        async function getchartdata(){
               const sensor1 =[];
               const sensor2 =[];
               const sensor3 =[];
               const time = [];
                const response = await fetch(url);
                const data = await response.json();
                for (let index = 0; index < data.length; index++) {
                    sensor1[index] = data[index].sensor1;
                    sensor2[index] = data[index].sensor2;
                    sensor3[index] = data[index].sensor3;
                    time [index] = data[index].timestamp;
                }
                console.log(time);

                if (mychart) {
                    mychart.data.labels = time;
                     mychart.data.datasets[0].data = sensor1;
                     mychart.data.datasets[1].data = sensor2;
                     mychart.data.datasets[2].data = sensor3;
                     mychart.update(); 
                }else{
                        mychart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: time,
                            datasets: [
                                {
                                label: 'sensor1',
                                data: sensor1,
                                borderWidth: 1
                            },
                        {
                            label: 'sensor2',
                            data: sensor2,
                            borderWidth: 1
                        },{
                            label: 'sensor3',
                            data: sensor3,
                            borderWidth: 1
                        }
                    ]
                        },
                        options: { }
                    });
                }
    }
    let mychart;
    setInterval(getchartdata,1000);
    </script>

</body>

</html>