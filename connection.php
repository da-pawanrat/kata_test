<?php

    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'katatopvilla_tb');

    class DB_con{
        function __construct()
        {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;

            if (mysqli_connect_errno()){
                echo "Failed to connect to MySQL : ".mysqli_connect_error();
            }
        }

        public function insertclient($typehotel,$typestay,$room,$firstname,$lastname,$birthday,
        $tel,$email,$address,$checkin,$checkout,$total,$price,
        $reserve,$payment,$paystatus,$booking,$status,$idcard){
            $result = mysqli_query($this->dbcon, "INSERT INTO `customer_data`(`type_of_hotel`, `type_of_stay`, `room_number`, 
            `cust_fname`, `cust_lname`, `cust_date`, `cust_tel`, `cust_email`, `cust_address`, 
            `checkin_date`, `checkout_date`, `total_guest`, `price`, `reser_date`, `count_pay_time`,
            `payment_status`, `booking_agent`, `status`, `idcard`) 
            VALUES ('$typehotel','$typestay','$room','$firstname','$lastname','$birthday',
            '$tel','$email','$address','$checkin','$checkout','$total','$price',
            '$reserve','$payment','$paystatus','$booking','$status','$idcard')" );
            return $result;
        }

        public function insertemployee($firstname,$lastname,$idcard,$birthday,$email,$address,
        $tel,$position,$type,$bank,$account,$salary,$borrow,$deposit,
        $ssp,$fcost,$advance,$status){
            $result = mysqli_query($this->dbcon, "INSERT INTO `employee_data`
            (`emp_name`, `emp_lastname`, `emp_date_of_birth`, 
            `position`, `type_of_emp`, `emp_email`, `emp_tel`, `emp_address`, 
            `emp_bank_name`, `emp_bank_number`, `emp_idcard`, `salary`, `borrow`, 
            `deposit`, `ssp`, `fcost`, `advance`, `status`) 
            VALUES ('$firstname','$lastname','$birthday',
            '$position','$type','$email','$tel','$address',
            '$bank','$account','$idcard','$salary','$borrow',
            '$deposit','$ssp','$fcost','$advance','$status')" );
            return $result;
        }

        public function insertleave($firstname,$lastname,$begin,$due,$summary,$type,$remark){
            $result = mysqli_query($this->dbcon, "INSERT INTO `leaveworking`
            (`emp_fname`, `emp_lname`, `begin_date`, `due_date`,
             `summarry`, `type_leave`, `remark`) 
            VALUES ('$firstname','$lastname','$begin',
            '$due','$summary','$type','$remark')" );
            return $result;
        }

        public function fetchclientdata(){
            $result = mysqli_query($this->dbcon, "SELECT * FROM customer_data");
            return $result; 
        }

        public function fetchemployeedata(){
            $result = mysqli_query($this->dbcon, "SELECT * FROM employee_data");
            return $result; 
        }

        public function fetchleavedata(){
            $result = mysqli_query($this->dbcon, "SELECT * FROM `leaveworking`");
            return $result; 
        }

        public function fetchsalarydata(){
            $result = mysqli_query($this->dbcon, "SELECT * FROM employee_data");
            return $result; 
        }

        public function fetchonerecord($userid){
            $result = mysqli_query($this->dbcon, "SELECT * FROM `customer_data` WHERE cust_id = '$userid'");
            return $result;
        }

        public function fetchemponerecord($userid){
            $result = mysqli_query($this->dbcon, "SELECT * FROM `employee_data` WHERE emp_id = '$userid'");
            return $result;
        }

        public function fetchleaveonerecord($userid){
            $result = mysqli_query($this->dbcon, "SELECT * FROM `leaveworking` WHERE leave_numb = '$userid'");
            return $result;
        }

        public function updateclient($typehotel,$typestay,$room,$firstname,$lastname,$birthday,
        $tel,$email,$address,$checkin,$checkout,$total,$price,
        $reserve,$payment,$paystatus,$booking,$status,$idcard,$userid){
            $result = mysqli_query($this->dbcon, 
                "UPDATE `customer_data` SET 
                `type_of_hotel`='$typehotel',
                `type_of_stay`='$typestay',
                `room_number`='$room',
                `cust_fname`='$firstname',
                `cust_lname`='$lastname',
                `cust_date`='$birthday',
                `cust_tel`='$tel',
                `cust_email`='$email',
                `cust_address`='$address',
                `checkin_date`='$checkin',
                `checkout_date`='$checkout',
                `total_guest`='$total',
                `price`='$price',
                `reser_date`='$reserve',
                `count_pay_time`='$payment',
                `payment_status`='$paystatus',
                `booking_agent`='$booking',
                `status`='$status',
                `idcard`='$idcard' 
                WHERE `cust_id`='$userid'" );
            return $result; 
        }
        public function updateemployee($firstname,$lastname,$idcard,$birthday,$email,$address,$tel,$position,
                                        $type,$bank,$account,$salary,$borrow,$deposit,$ssp,$fcost,
                                        $advance,$status,$userid){
            $result = mysqli_query($this->dbcon, 
                "UPDATE `employee_data` SET 
                `emp_name`='$firstname',
                `emp_lastname`='$lastname',
                `emp_date_of_birth`='$birthday',
                `position`='$position',
                `type_of_emp`='$type',
                `emp_email`='$email',
                `emp_tel`='$tel',
                `emp_address`='$address',
                `emp_bank_name`='$bank',
                `emp_bank_number`='$account',
                `emp_idcard`='$idcard',
                `salary`='$salary',
                `borrow`='$borrow',
                `deposit`='$deposit',
                `ssp`='$ssp',
                `fcost`='$fcost',
                `advance`='$advance',
                `status`='$status' 
                WHERE `emp_id`='$userid'" );
            return $result; 
        }
        public function updateleave($firstname,$lastname,$begin,$due,$summary,$type,$remark,$userid){
            $result = mysqli_query($this->dbcon, 
                "UPDATE `leaveworking` SET 
                `emp_fname`='$firstname',
                `emp_lname`='$lastname',
                `begin_date`='$begin',
                `due_date`='$due',
                `summarry`='$summary',
                `type_leave`='$type',
                `remark`='$remark' 
                WHERE `leave_numb`='$userid'" );
            return $result; 
        }

        public function insertcheckin($no,$date,$id,$fname,$lname,$timeto,$timeoff,$leaveday,$remark){
            $result = mysqli_query($this->dbcon, "INSERT INTO `checkin_leave_work`(`numid`, `date`, `emp_id`, `emp_fname`, `emp_lname`, `time_to_work`, `time_off_work`, `leave_workingday`, `remark`) 
            VALUES ('$no','$date','$id','$fname','$lname','$timeto','$timeoff','$leaveday','$remark')" );
            return $result;
        }

        public function fetchcheckindata(){
            $result = mysqli_query($this->dbcon, "SELECT checkin_leave_work.date, checkin_leave_work.emp_id, checkin_leave_work.emp_fname, checkin_leave_work.emp_lname,checkin_leave_work.time_to_work,checkin_leave_work.leave_workingday,checkin_leave_work.remark,checkout_leave_work.time_off_work
            FROM checkin_leave_work
            INNER JOIN checkout_leave_work ON checkin_leave_work.emp_id=checkout_leave_work.emp_id");
            return $result; 
        }

        public function insertcheckout($no,$date,$id,$fname,$lname,$timeoff){
            $result = mysqli_query($this->dbcon, "INSERT INTO `checkout_leave_work`(`numid`, `date`, `emp_id`, `emp_fname`, `emp_lname`, `time_off_work`) 
            VALUES ('$no','$date','$id','$fname','$lname','$timeoff')" );
            return $result;
        }

        
    }



?>  