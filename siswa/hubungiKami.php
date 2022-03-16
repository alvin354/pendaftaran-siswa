<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <link href="../css/style.css" rel="stylesheet" />
    <style>
        .box-container{
            margin-top: 50px
        }
        .box-content{
            margin: auto;
            display:flex;
            flex-direction: row;
        }
        .box-content .box-info{
            width: 20%;
            background-color: #86ABDC;
            margin: 10px;
            border-top: 9px solid #b1cdee;
            border-left: 10px solid #b1cdee;
            border-radius: 30px;
            padding: 10px
        }
        .box-content .box-img{
            width: 80%;
            background-color: #86ABDC;
            border-top: 9px solid #b1cdee;
            border-left: 10px solid #b1cdee;
            border-radius: 30px;
            padding: 10px
        }
        .box-content .box-img img{
            width: 100%;
            height: 500px;
            border-radius: 30px;
        }
        .tombolkembali {
            background:#2C97DF;
            color:white;
            border-top:0;
            border-left:0;
            border-right:0;
            border-bottom:5px solid #2A80B9;
            padding:10px 20px;
            text-decoration:none;
            font-family:sans-serif;
            font-size:11pt;
        }
        .tombolkembali:hover {
            cursor: pointer;
            color: black;
        }
        .footer {
            left: 0;
            bottom: 0;
            width: 100%;
            color: black;
            text-align: center;
            margin-top: 30px;
        }

    </style>
</head>

<body>

<a href="./index.php" class="tombolkembali">Kembali</a>

    <div class="container">
        <?php include '../parts/navbar.php' ?>
    
          <div class="box-container">
          <div class="box-content">
           <div class="box-info">
                        <img src="../assets/qrcode.png" alt="" style="width: 75%; margin-top:40px; margin-left:35px ">
                        <h2 style="text-align: center;">HUBUNGI KAMI</h2>
                        <div class="call" style="display:flex; flex-direction:row; height:40px">
                            <img src="../assets/call.png" width="15%" alt="">
                            <p style="margin-left:10px;">085641468999</p>
                        </div>
                        <div class="ig" style="display:flex; flex-direction:row; margin-top:15px; height:35px">
                            <img src="../assets/ig.png" width="15%" alt="" >
                            <p style="margin-left:10px">@siswa</p>
                        </div>

            </div>
                        
                    <div class="box-img">
                            
                    <img src="../assets/sekolah.jpg">
                    
                </div>
                
           </div>
          </div>

    </div>
    <img src="../assets/g.png" alt="" style="width:100px; position:relative; transform: translateY(-60px) translateX(30px); opacity:0.8">
</body>

<?php include '../footer.php' ?>

</html>


