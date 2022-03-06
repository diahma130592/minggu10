<?php 
$kelompok[ 
    ["kelompok" =>"matahari",
    "guru" => "faradilla ruhayah", 
    "kegiatan" =>"manasik haji",
    "pembimbing" =>"fathul muin",
    "gambar" => "b.jpg"
    ]

    ["kelompok" =>"bintang", 
    "guru" => "syifa nur hayati",
    "kegiatan" => "menanam padi",
    "pembimbing" =>"ridha khumaira",
    "gambar" => "a.jpg"
    
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan Get</title>
</head>
<body>
    <h1> daftar kelompok</h1>
<ul>

    <?php foreach ($kelompok as $klp ):?>
   
       <li> 
           <a href= "latihan2.php ? kelompok= <?= $klp ["kelompok"] ; ?> <?&guru= $klp ["guru"]; ?>
           <?&kegiatan = $klp ["kegiatan"]; ?> <?&pembimbing= $klp ["pembimbing"];?> <?=gambar = $klp["gambar"];?> ">  <?= $klp ["kelompok"] ?></a>
        
        </li>


 

    <?php endforeach   ?> 
    </ul>
    
</body>
</html>




