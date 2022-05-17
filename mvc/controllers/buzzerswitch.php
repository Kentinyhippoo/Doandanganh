<?php
    class buzzerswitch extends Controller {
        public function __construct() {
            $data = array();
            parent::__construct();
        }

        public function getdata()
        {
            $json = file_get_contents('https://io.adafruit.com/api/v2/nhungcoder_codon/feeds/do-an-da-nganh.co3109-buzzer/data');
            $data = json_decode($json);
            return $data;
        }

        public function switch()
        {
            $databuzzer = 3;
            if (isset($_POST)) {
                if (!empty($_POST)) {
                    $databuzzer = $_POST['buzzer_switch1'];
                }
            }

            //echo $databuzzer;
            
            $ch = curl_init();

            $url = "https://io.adafruit.com/api/v2/nhungcoder_codon/feeds/do-an-da-nganh.co3109-buzzer/data";
            

            $data_array = array(
                
                "value"=>$databuzzer,
                
            );

            $data = http_build_query($data_array);

            // curl_setopt($ch, CURLOPT_URL, $url);
            // curl_setopt($ch, CURLOPT_POST, true);
            // curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            // curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-AIO-Key1: aio_DTiY04021PVfww6LzPtVDlterYMy'));


            $resp = curl_exec($ch);

            if($e = curl_error($ch)) {
                echo $e;
            }
            else {

                $decode = json_decode($resp);
                // print_r($decode);
                // foreach ($decode as $key => $value) {
                //     echo $key . ": ". $value . "<br>";
                // }
            }

            curl_close($ch);

            // $tbl_records = 'records';
            // $homemodel = $this->load->model('homemodel');
            // $arrContextOptions=array(
            //     "ssl"=>array(
            //         "verify_peer"=>false,
            //         "verify_peer_name"=>false,
            //     ),
            // );  
            // $response = file_get_contents($url, false, stream_context_create($arrContextOptions));
    
            // $result = json_decode($response); 
            // $buzzer = array(
            //     "DATAS" => $result[0]->value,
            //     "TIMES" => $result[0]->created_at,
            //     "DevID" => 3
            // );
            // $res = $homemodel->insertdata($tbl_records, $buzzer);
        }
    }
?>