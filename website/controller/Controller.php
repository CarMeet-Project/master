<?php

class Controller {
    private $model;

    public function __construct() {
        $this->model = new Model;
    }

    public function parser() {

        $action = "welcome";
        if(isset($_GET['action'])){
            $action = $_GET['action'];
        }

        switch ($action) {
            case "welcome":
                require("View/welcome.php");
                break;
            case "info":
                require("View/information.php");
                break;
            case "contact":
                $data = $this->model->getPhoneNumber();
                require("View/contact.php");
                break;
            case "aboutUs":
                require("View/aboutUs.php");
                break;
            case "login":
                require("View/login-form.php");
                break;
            case "logout":
                require("View/logout.php");
                break;
            case "agenda":
                require("View/agenda.php");
                break;
            default:
                require("View/error.php");
                break;
          }
    }
}

class Calendar {
    private $month;
    private $year;
    private $days_of_week;
    private $num_days;
    private $date_info;
    private $day_of_week;

    public function __construct($month,$year,$days_of_week = array('Zo','Ma','Di','Wo','Do','Vr','Za')) {
        $this->month = $month;
        $this->year = $year;
        $this->days_of_week = $days_of_week;
        $this->num_days = cal_days_in_month(CAL_GREGORIAN, $this->month, $this->year);
        $this->date_info = getdate(strtotime('first day of', mktime(0,0,0,$this->month,1,$this->year)));
        $this->day_of_week = $this->date_info['wday'];
    }

    public function show() {
        $output = '<table class ="calendar">';
        $output .= '<caption>' . $this->date_info['month'] . ' ' . $this->year . '</caption>';
        $output .= '<tr>';

        foreach ($this->days_of_week as $day) {
            $output .= '<th class="header">' . $day . '</th>';
        }

        $output .= '</tr><tr>';

        if ($this->day_of_week > 0) {
            $output .= '<td colspan="' . $this->day_of_week . '"></td>';
        }

        $current_day = 1;

        while ( $current_day <= $this->num_days ) {
            if ( $this->day_of_week == 7) {
                $this->day_of_week = 0;
                $output .= '</tr><tr>';
            }

            $output .= '<td class="day">' . $current_day . '</td>';

            $current_day++;
            $this->day_of_week++;
            }

            if ( $this->day_of_week != 7) {
                $remaining_days = 7 - $this->day_of_week;
                $output .= '<td colspan="' . $remaining_days . '"></td>';
            }

        $output .= '</tr>';
        $output .= '</table>';

        echo $output;
    }
}
