<?php 



    function crud_exist ($table, $var, $id)
    
    {
        
        $datas_in_tab = get_tableau ($table);
        $to_return = false;
        
        foreach($datas_in_tab as $datas)

        {$control = true;



            foreach($datas as $key => $data)
            { if ($key != $id) 

                {

                    if ($data != $var[$key]) {
                        $control = false;}
                    }

            };
            
            if ($control) {
                $to_return = true;
            }

        } return $to_return;

    }

  
?> 