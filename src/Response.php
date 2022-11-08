<?php 

namespace src ; 

class Response 
{
    /**
     * function return success json 
     * @param string $message 
     * 
     */
    use Lang , File ;

     public function returnSuccess($message){
        return response()->json([
            'status' => true,
            'errNum' => null,
            'message'=>$message
        ]);
     }

       /**
     * function return Error json 
     * @param string $message 
     * @param int $errNum
     * 
     */

     public function returnError($message = "", $errNum)
     {
         return response()->json([
             'status' => false,
             'errNum' => $errNum,
             'message'=>$message
 
         ]);
     }

        /**
         * function return Error Validator to  json 
         * @param string $message 
         * @param int $errNum
         * 
        */
 
    
     public function returnErrorValidator($message = "", $errNum)
     {
         return response()->json([
             'status' => false,
             'errNum' => $errNum,
             'msg'=> 'The given data was invalid.' ,
             'message'=>$message
         ]);
     }
 
         /**
         * function return Error Validator to  json 
         * @param string $message 
         * @param int $errNum
         * 
        */

     public function returnData($message = "", $key, $value )
     {
         return response()->json([
             'status' => true,
             'statusNum' => 200,
             'message'=>$message ,
              $key => $value ,
         ]);
     }

}