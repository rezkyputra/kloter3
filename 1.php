<?php
    $nama = "Rezky Putra Akkif";
    $umur = 23;
    
    $arr = 
    array(
        "name" => $nama,
        "age" => $umur,
        "Hobbies" => array(
            "Main Game","Tidur","Makan"),
        "is_married" => false,
        "list_of_school" => array(
            "name" => ["SD Negeri 4 Pinrang",
                    "SMP Negeri 4 Pinrang",
                    "SMK Negari 1 Pinrang",
                    "STMIK Dipanegara Makassar"],
            "year_in" => 
                    [2001,2007,2010,2013],
            "year_out" => [2007,2010,2013,2017],
            "major" => [null,null,"Multimedia","Teknik Informatika"]
            ),
        "skill" => array(
            "skill_name" => ["PHP", "HTML", "CSS", "Bootstrap", "Laravel", "Mysql"],
            "level" => ["advanced", "advanced", "advanced", "advanced", "advanced", "advanced"]
            ),
        "interest_in_coding" => true
        );
        
    echo json_encode($arr);
?>
