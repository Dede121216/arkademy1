<?php
header('Content-type: application/json; charset=utf-8');
$name = 'Dede Mukti';
$Age = '22';
$address = 'Cisarua Bogor';
$hobies =  array('Futsal','Adventure');
class list_school {
    function SMK(){
        return 'SMKN 1 Cibinong (2014-2017)';
    }
        function SMP(){
        return 'MTS BAETURRAHMAN (2011-2014)';
    }
        function SD(){
        return 'MI ATFALIYYAH (2005-2011)';
    }
}
$school = new list_school;
$skills  = array('0'=>'HTML,CSS, PHP, JS');
$skill = new ArrayObject($skills);
function Biodata($strName, $strAge, $strAddress, $strHobies, $strMarried, $strSchool, $strSkill){
    $json = array(
        'Name' => $strName,
        'Age' => $strAge,
        'Address' => $strAddress,
        'Hobies' => $strHobies,
        'is_married' => ($strMarried =FALSE)? 'Menikah': 'Belum menikah',
        'School' => $strSchool,
        'Skills' => $strSkill
    );
    return json_encode($json);
}

echo Biodata($name, $Age, $address, $hobies, TRUE, $school->SMK(), $skill[0]);
?>