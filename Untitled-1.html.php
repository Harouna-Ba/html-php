<?php

$niveau =["L1","L2","L3"];
$filiere=["MAE","GRLS","IAGE"];
$classe=[
    0=>["niveau"=>$niveau[0],
    "filiere"=>$filiere[0],
    "etudiants"=>[
        ["nom"=>"ba","prenom"=>"abou"],
        ["nom"=>"diouf","prenom"=>"samba"]
                ]
    ],
    1=>["niveau"=>$niveau[1],
    "filiere"=>$filiere[0],
    "etudiants"=>[
        "nom"=>"ba","prenom"=>"bassirou",
        "nom"=>"dieng","prenom"=>"omar"
                 ]

    ],
    2=>["niveau"=>$niveau[2],
    "filiere"=>$filiere[0],
    "etudiants"=>[
        "nom"=>"diarra","prenom"=>"astou",
        "nom"=>"dieng","prenom"=>"bamba"
                 ]

    ],
    3=>[
        "niveau"=>$niveau[0],
        "filiere"=>$filiere[1],
        "etudiants"=>[
            "nom"=>"sylla","prenom"=>"ousmane",
        "nom"=>"diatta","prenom"=>"awa"


        ]
    ]
    
];
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=">
    <link rel="stylesheet" type="text/css" href="test.css">
    <title>Tableau dynamique</title>
</head>
<body>
    <div class="maincontainer">
        <div class="forme">
            <div class="forme-groupe">
                <form action="recup.php"  method="post">
                <div >
                    <label for="niveau">Niveau : </label>
                    <select>
                        <option value="" id=""></option>
                        <?php foreach($niveau as $niveaux) :?>
                        <option value="<?=$niveaux?>"><?=$niveaux?></option>
                        <?php endforeach?>
                        

                    </select>
                </div>
                <div>
                    <label>Filieres</label>
                    <select>
                        <option value="" id=""></option>
                        <?php foreach($filiere as $filiers) :?>
                        <option value="<?=$filieres?>"><?=$filieres?></option>
                        <?php endforeach?>
                        
                    </select>
                    <button type="submit">OK</button>
                    
                </div>
                </form>
            </div>
            <div class="table">
                <table >
                    <thead>
                        
                        <th>Niveau</th>
                        <th>Filieres</th>
                        <th>Action</th>
                        
                    </thead>
                    <tbody>
                        <?php foreach($classe as $classes) : ?>
                        <tr>
                            <td>L1</td>
                            <td>MAE</td>
                            <td><a href="#">Etudiants</a></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>  

        </div>



    </div>
</body>
</html>