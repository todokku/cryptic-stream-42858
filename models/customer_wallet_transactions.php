<?php 
require_once('initialization.php');

class Customer_Wallet_Transactions{
    //Decalare table name 
    private $conn;
    private $table_name = 'customer_wallet_transactions';
    
    //Declare class properties 
    public $id;
    public $user_id;
    public $customer_id;
    public $transaction_id;
    public $transaction_time;
    public $product;
    public $transaction_amount;
    public $transaction_currency;
    public $transaction_method;
    public $transaction_status;
    
    //connect to db 
    public function __construct()
    {
        global $database;
        $this->conn = $database->connect();
    }

    public function create()
    {
       $query = 'INSERT INTO '.$this->table_name.'(user_id, customer_id, transaction_type, transaction_id, transaction_time, transaction_amount, business_shortcode, bill_refnumber, invoice_number, original_balance, third_party_transaction_id, msisdn, first_name, middle_name, last_name)VALUES(:user_id, :customer_id, :transaction_type, :transaction_id, :transaction_time, :transaction_amount, :business_shortcode, :bill_refnumber, :invoice_number, :original_balance, :third_party_transaction_id, :msisdn, :first_name, :middle_name, :last_name)';  

       //Prepare statement
       $stmt = $this->conn->prepare($query);

       //clean data 
       $this->user_id = htmlentities($this->user_id);
       $this->customer_id = htmlentities($this->customer_id);
       $this->transaction_type = htmlentities($this->transaction_type);
       $this->transaction_id = htmlentities($this->transaction_id);
       $this->transaction_time = htmlentities($this->transaction_time);
       $this->product = htmlentities($this->product);
       $this->transaction_amount = htmlentities($this->transaction_amount);
       $this->transaction_method = htmlentities($this->transaction_method);
       $this->transaction_currency = htmlentities($this->transaction_currency);
       $this->transaction_status = htmlentities($this->transaction_status);
       
       //Bind Data
       $stmt->bindParam(':user_id', $this->user_id);
       $stmt->bindParam(':customer_id', $this->customer_id);
       $stmt->bindParam(':transaction_type', $this->transaction_type);
       $stmt->bindParam(':transaction_id', $this->transaction_id);
       $stmt->bindParam(':transaction_time', $this->transaction_time);
       $stmt->bindParam(':product', $this->product);
       $stmt->bindParam(':transaction_amount', $this->transaction_amount);
       $stmt->bindParam(':transaction_method', $this->transaction_method);
       $stmt->bindParam(':transaction_currency', $this->transaction_currency);
       $stmt->bindParam(':transaction_status', $this->transaction_status);

       //Execute query 
       if($stmt->execute()){
           return true;
       }
       
       //print error 
       $error = new ErrorLogs();
       $error->errors = 'Error';
       $error->description = $stmt->error;
       if($error->create()){
            return false;
       }
    }
    
}