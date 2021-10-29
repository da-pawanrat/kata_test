CREATE TABLE user (
    id INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    userlevel VARCHAR(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE employee_data (
    emp_id INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    emp_name VARCHAR(50) NOT NULL,
    emp_lastname VARCHAR(50) NOT NULL,
    emp_date_of_birth VARCHAR(50) NOT NULL,
    position VARCHAR(50) NOT NULL,
    type_of_emp VARCHAR(50) NOT NULL,
    emp_email VARCHAR(50) NOT NULL,
    emp_tel VARCHAR(20) NOT NULL,
    emp_address VARCHAR(50) NOT NULL,
    emp_bank_name VARCHAR(20) NOT NULL,
    emp_bank_number VARCHAR(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE customer_data (
    cust_id INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    type_of_hotel VARCHAR(50) NOT NULL,
    type_of_stay VARCHAR(50) NOT NULL,
    room_number VARCHAR(50) NOT NULL,
    cust_fname VARCHAR(50) NOT NULL,
    cust_lname VARCHAR(50) NOT NULL,
    cust_date VARCHAR(50) NOT NULL,
    cust_tel VARCHAR(20) NOT NULL,
    cust_email VARCHAR(50) NOT NULL,
    cust_address VARCHAR(20) NOT NULL,
    checkin_date DATE NOT NULL,
    checkout_date DATA NOT NULL,
    total_guest VARCHAR(20) NOT NULL,
    price INT(5) NOT NULL,
    reser_date DATE NOT NULL,
    count_pay_time VARCHAR(20) NOT NULL,
    payment_status VARCHAR(20) NOT NULL,
    booking_agent VARCHAR(20) NOT NULL,
    status VARCHAR(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE checkin_leave_work (
    numid INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    date DATE NOT NULL,
    emp_id INT(5) NOT NULL,
    emp_fname VARCHAR(20) NOT NULL,
    emp_lname VARCHAR(20) NOT NULL,
    time_to_work DATETIME NOT NULL,
    time_off_work DATETIME NOT NULL,
    leave_workingday INT(5) NOT NULL,
    remark VARCHAR(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE leaveworking (
    leave_numb INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    emp_id INT(5) NOT NULL,
    empid_num INT(5) NOT NULL,
    emp_fname VARCHAR(20) NOT NULL,
    emp_lname VARCHAR(20) NOT NULL,
    begin_date DATE NOT NULL,
    due_date DATE NOT NULL,
    summarry INT(5) NOT NULL,
    type_leave VARCHAR(20) NOT NULL,
    remark VARCHAR(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE salary (
    sal_id INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    empid_num INT(5) NOT NULL,
    emp_fname VARCHAR(20) NOT NULL,
    emp_lname VARCHAR(20) NOT NULL,
    position VARCHAR(20) NOT NULL,
    workday_mont INT(5) NOT NULL,
    leaveday_mont INT(5) NOT NULL,
    type_of_emp VARCHAR(20) NOT NULL,
    salary INT NOT NULL,
    socialpay INT,
    borrow_money INT,
    facility_cost INT,
    cash_advance INT,
    labor_payment INT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

