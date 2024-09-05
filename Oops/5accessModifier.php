<?php
// access modifiers decides where we can access the methods and properties
// access zone -
// - access inside the current class only (private)
// - access everywhere (public)
// - access in inherited class (protected)

// by default public zone use hota hai
// we can make any method private for creating a condition also

class Teachers
{
    private function qsnPaper()
    {
        return "questions";
    }

    public function exam()
    {
        // $this->qsnPaper();
        if ($this->qsnPaper() == "questions") {
            echo "lets learn php";
        } else {
            echo "do else";
        }
    }

    protected function marks()
    {
        echo "all students marks";
    }
}

class Management extends Teachers
{
    function reviewmarks()
    {
        $this->marks();
    }
}

$t1 = new Teachers();
// $t1->qsnPaper();
// $t1->exam();
// $t1->marks(); // it won't work

$s1 = new Management();
// $s1->reviewmarks();

?>