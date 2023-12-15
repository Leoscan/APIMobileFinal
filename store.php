<?php
    // Get the posted data.
    $postdata = file_get_contents("php://input");
    
    if(isset($postdata) && !empty($postdata))
    {
   
    // Extract the data.
        $request = json_decode($postdata);
        $fp = fopen("arquivot.txt", "w");
            $escreve = fwrite($fp, $postdata);
        fclose($fp);

        // Validate.
        if(trim($request->model) === '' || (int)$request->data < 1)
        {
            return http_response_code(400);
        }
        $id = $request->id;
        $model = $request->model;
        $data = $request->data;

        try{
            $fp = fopen("arquivo.txt", "a");
            $escreve = fwrite($fp, "$id, $model, $data\n");
            fclose($fp);
            $datas = [
                'model' => $model, 'data' => $data, 'id'=> $id
            ];
            echo json_encode([$datas]);
        } catch (Exception $e){
            http_response_code(422);
        }
    }
?>