<?php
    namespace App\View\Components;

    use Illuminate\View\Component;

    class MyLayoutComponent extends Component{
        function __construct()
        {
            
        }

        
        function render(){
            return view("layout.mylayout");
        }
    }
?>