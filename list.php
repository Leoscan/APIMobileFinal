<?php
header('Content-Type: application/json');

    $datas = [];
    $datas[0]['id']    = 1;
    $datas[0]['model'] = "Data 1";
    $datas[0]['data']  = "2023-12-01";
    

    $arquivo = "arquivo.txt";
    if (file_exists($arquivo)) {
        $linhas = file($arquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($linhas as $linha) {
            $campos = explode(',', $linha);
            if (count($campos) == 3) {
                $novaData['id']    = intval($campos[0]);
                $novaData['model'] = trim($campos[1]);
                $novaData['data']  = trim($campos[2]);
                $datas[] = $novaData;
            }
        }
    }


    $id = 0;
    $view = "";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $view = "single";
    } else {
        $view = "all";
    }
  
    switch($view){
        case "all":
            getAll($datas);
            break;
            
        case "single":
            getNameById($_GET['id'], $datas);
            break;

        case "" :
            //404 - not found;
            break;
    }
   function getNameById($id, $datas){
        foreach ($datas as $data){
            if($data['id'] == $id){
                echo json_encode([$data]);
                break;
            }
        }
    }

    function getAll($datas){
        echo json_encode($datas);
    }




?>