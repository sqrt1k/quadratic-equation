<?php
error_reporting(0);
include_once "Model.php";

class Controller
{
    var $a;
    var $b;
    var $c;
    var $result;

    function eq_roots($a, $b, $c) {
        if ($a==0) return false;

        if ($b==0) {
            if ($c<0) {
                $x1 = sqrt(abs($c/$a));
                $x2 = sqrt(abs($c/$a));
            } elseif ($c==0) {
                $x1 = $x2 = 0;
            } else {
                $x1 = sqrt($c/$a).'i';
                $x2 = -sqrt($c/$a).'i';
            }
        } else {
            $d = $b*$b-4*$a*$c;
            if ($d>0) {
                $x1 = (-$b+sqrt($d))/2*$a;
                $x2 = (-$b-sqrt($d))/2*$a;
            } elseif ($d==0) {
                $x1 = $x2 = (-$b)/2*$a;
            } else {
                $x1 = -$b . '+' . sqrt(abs($d)) . 'i';
                $x2 = -$b . '-' . sqrt(abs($d)) . 'i';
            }
        }
        return array($x1, $x2);
    }
}
    $data = new Model();
    $data->a = $_GET["a"];
    $data->b = $_GET["b"];
    $data->c = $_GET["c"];
    $cntrl = new Controller();
    $result = $cntrl->eq_roots($data->a, $data->b, $data->c);
    $data->result = $result;
    $data->Show($result);
?>